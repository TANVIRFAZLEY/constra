<?php

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'mainmenu'   => esc_html__('Primary Menu', 'constra'),
        'footerMenu' => esc_html__('Footer Menu', 'constra'),
    )
);