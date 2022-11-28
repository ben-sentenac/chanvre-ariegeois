<?php
namespace CBD;

class CBDTheme
{
    public $version;

    public function __construct(string $version = '1.0') {
        $this->version = $version;
        $this->load_theme_constants();
    }
    public function run() {
        
        add_action('after_setup_theme',[$this,'setup_theme']);
        add_action('wp_enqueue_scripts',[$this,'registerScripts']);
    }

    public function load_theme_constants() {

        define('CBD_THEME_CSS',get_template_directory_uri() . '/build/main.css');

        define('CBD_THEME_JS',get_template_directory_uri() . '/build/main.bundle.js');

        define('CBD_THEME_VERSION',$this->version);
    }

    /**
     * Enqueue css and js
     *
     * @return void
     */
    public function registerScripts():void {

        wp_enqueue_style('cbd-main-theme-style',CBD_THEME_CSS,[]);
        wp_enqueue_script('cbd-theme-scripts',CBD_THEME_JS,[],CBD_THEME_VERSION,true);
    }

    /**
     * get fontawesome link 
     *
     * @return void
     */
    public static function getFontawesome():void {
        ?>
        <script src="https://kit.fontawesome.com/f6fb60eb24.js" crossorigin="anonymous"></script>
        <?php
    }

    /**
     * Get google font
     *
     * @return void
     */
    public static function getGoogleFonts():void {
        ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&family=Proza+Libre&display=swap" rel="stylesheet">
        <?php
    }

    /**
     * Return current page template name
     *
     * @return string
     */
    public static function get_theme_page_template():string {
        global $template;
        return substr(basename($template),0,-4);
    }

    /**
     * Theme configuration
     *
     * @return void
     */
    public function setup_theme():void {
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
                'height'      => 400,
                'width'       => 400,
                'flex-width'  => true,
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
}