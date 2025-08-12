<nav id="main-navigation">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'primary', // Name of your menu location
            'container'      => false,     // Don't wrap the ul in a div
            'menu_class'     => 'main-menu', // Custom class for the ul element
            'menu_id'        => 'primary-menu' // Custom ID for the ul element
        ));
    ?>
</nav>