<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'constra_options';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title'      => 'Constra Options',
        'menu_slug'       => 'constra-options',
        // framework title
        'framework_title' => 'Constra Theme Options <small>by Codestar</small>',
        'framework_class' => '',
    ));
    // header section
    require_once get_theme_file_path("/inc/codestar-framework/header/header-main.php");

    //Homepage options
    require_once get_theme_file_path("/inc/codestar-framework/home/home-main.php");

    //page options
    require_once get_theme_file_path("/inc/codestar-framework/page/page-main.php");

    //footer
    require_once get_theme_file_path("/inc/codestar-framework/footer/footer-main.php");

    CSF::createSection($prefix, array(
        'title'  => 'Backup',
        'fields' => array(

            array(
                'type' => 'backup',
            ),

        ),
    ));

}