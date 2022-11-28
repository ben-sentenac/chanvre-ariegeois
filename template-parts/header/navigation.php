<nav id="MainNav" class="main-menu" aria-label="Fifth navbar example" data-expanded="false">
    <div class="container-flex">
        <div class="cbd-menu-hamburger">
            <input class="menu_hamburger" type="checkbox" id="MenuHamburger">
            <label for="MenuHamburger" id="MenuToggler">
                <span></span>
            </label>
        </div>
        <?php wp_nav_menu(
            [
                'theme_location' => 'menu-1',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="cbd-nav">%3$s</ul>',
                'depth' => 2,
            ]
        );
        ?>
        <form>
            <label class="cbd-search-label">
                <input type="text" required class="cbd-search-input">
                <ul class="cbd-search-list">
                    <li s>s</li>
                    <li e>e</li>
                    <li a>a</li>
                    <li r>r</li>
                    <li c>c</li>
                    <li h>h</li>
                </ul>
            </label>
        </form>
    </div>
</nav>