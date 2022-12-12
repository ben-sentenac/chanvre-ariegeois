<?php
namespace CBD;

class CBDTheme
{
    public $version;

    public function __construct(string $version = '1.0.0')
    {
        $this->version = $version;
        $this->load_theme_constants();
    }
    public function run()
    {

        add_action('after_setup_theme', [$this, 'setup_theme']);
        add_action('wp_enqueue_scripts', [$this, 'registerScripts']);
        add_action('customize_register', [$this, 'theme_customizer']);
    }

    public function load_theme_constants()
    {

        define('CBD_THEME_CSS', get_template_directory_uri() . '/build/main.css');

        define('CBD_THEME_JS', get_template_directory_uri() . '/build/main.bundle.js');

        define('CBD_THEME_VERSION', $this->version);
    }

    /**
     * Enqueue css and js
     *
     * @return void
     */
    public function registerScripts(): void
    {

        if (!is_admin()) {
            $jsFilePath = glob(get_template_directory() . '/build/main.min.*.js');
            $jsFileURI = get_template_directory_uri() . '/build/' . basename($jsFilePath[0]);
            wp_enqueue_script('main_js', $jsFileURI, [], null, true);
            $cssFilePath = glob(get_template_directory() . '/build/main.min.*.css');
            $cssFileURI = get_template_directory_uri() . '/build/' . basename($cssFilePath[0]);
            wp_enqueue_style('main_css', $cssFileURI, [], '1.0.0', 'all');
        }

    }

    /**
     * get fontawesome link 
     *
     * @return void
     */
    public static function getFontawesome(): void
    {
?>
<script src="https://kit.fontawesome.com/f6fb60eb24.js" crossorigin="anonymous"></script>
<?php
    }

    /**
     * Get google font
     *
     * @return void
     */
    public static function getGoogleFonts(): void
    {
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&family=Proza+Libre&display=swap"
    rel="stylesheet">
<?php
    }

    /**
     * Return current page template name
     *
     * @return string
     */
    public static function get_theme_page_template(): string
    {
        global $template;
        return substr(basename($template), 0, -4);
    }

    /**
     * Theme configuration
     *
     * @return void
     */
    public function setup_theme(): void
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on labouiche, use a find and replace
         * to change 'labouiche' to the name of your theme in all the template files.
         */
        //load_text_domain

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Menu header', 'cestbiendici'),
                'menu-2' => esc_html__('Menu footer', 'cestbiendici'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 400,
                'width' => 400,
                'flex-width' => true,
                'flex-height' => true,
            )
        );

        /**
         * display full screen images in gutemberg 
         */
        add_theme_support('align-wide');

        //disable custom font-size
        add_theme_support('disable-custom-font-sizes');
        /**
         * The embed blocks automatically apply styles to embedded content to reflect the aspect ratio of content that is embedded in an iFrame
         */
        add_theme_support('responsive-embeds');

        remove_theme_support('widgets-block-editor');
    }

    /**
     * 
     * set theme customizer options 
     * @param mixed $wp_customize
     * @return void
     */
    public function theme_customizer($wp_customize)
    {
        //1-copyright section
        $wp_customize->add_section(
            'sec_infos',
            [
                'title' => __('Général Infos'),
                'description' => __('Général Infos'),
            ]
        );

        $wp_customize->add_setting(
            'set_copyright',
            [
                'type' => 'theme_mod',
                'default' => 'Copyright X - all right reserved',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );
        $wp_customize->add_control(
            'set_copyright',
            [
                'label' => 'copyright infos',
                'description' => 'Type your copyright here',
                'section' => 'sec_infos',
                'type' => 'text'
            ]
        );
        $wp_customize->add_setting(
            'set_email',
            [
                'type' => 'theme_mod',
                'default' => 'add your email here',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );
        $wp_customize->add_control(
            'set_email',
            [
                'label' => 'email',
                'description' => 'Type your email here',
                'section' => 'sec_infos',
                'type' => 'text'
            ]
        );
        $wp_customize->add_setting(
            'set_phone',
            [
                'type' => 'theme_mod',
                'default' => 'add your phone number here',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );
        $wp_customize->add_control(
            'set_phone',
            [
                'label' => 'phone number',
                'description' => 'Type your phone number here',
                'section' => 'sec_infos',
                'type' => 'text'
            ]
        );
        $wp_customize->add_setting(
            'set_opening_time',
            [
                'type' => 'theme_mod',
                'default' => 'tell us your opening time',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );
        $wp_customize->add_control(
            'set_opening_time',
            [
                'label' => 'opening time',
                'description' => 'tell us your opening time',
                'section' => 'sec_infos',
                'type' => 'text'
            ]
        );
        $wp_customize->add_setting(
            'set_facebook_url',
            [
                'type' => 'theme_mod',
                'default' => 'facebook url',
                'sanitize_callback' => 'sanitize_text_field'
            ]
        );
        $wp_customize->add_control(
            'set_facebook_url',
            [
                'label' => 'facebook url',
                'description' => 'facebook url',
                'section' => 'sec_infos',
                'type' => 'text'
            ]
        );


    }
}