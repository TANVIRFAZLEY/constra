<?php

CSF::createSection($prefix, array(
    'parent' => 'header_settings',
    'title'  => 'Header Middle',
    'icon'   => 'fas fa-laptop-house',
    'fields' => array(
        array(
            'id'      => 'header-middle-display',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Header Middle Display or Hide',
        ),
        array(
            'id'             => 'site_logo',
            'type'           => 'media',
            'default'        => ['url' => get_theme_file_uri('assets/images/logo.png')],
            'title'          => 'Website Logo',
            'library'        => 'image',
            'preview_size'   => 'full',
            'preview_width'  => 200,
            'preview_height' => 200,
            'dependency'     => array('header-middle-display', '==', 'true'),

        ),

        array(
            'id'         => 'header-middle-infobox',
            'type'       => 'repeater',
            'max'        => 3,
            'title'      => 'Header Info Box',
            'dependency' => array('header-middle-display', '==', 'true'),
            'fields'     => array(

                array(
                    'id'      => 'header-middle-info-title',
                    'type'    => 'text',
                    'title'   => 'Header Info Title',
                    'default' => 'Call Us',
                ),

                array(
                    'id'      => 'header-middle-info-subtitle',
                    'type'    => 'text',
                    'title'   => 'Header Info Sub-Title',
                    'default' => '(+9) 847-291-4353',
                ),

            ),
        ),
        array(
            'id'      => 'header-button-display',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Header Button Display or Hide',
        ),
        array(
            'id'         => 'header_middle_btn',
            'type'       => 'fieldset',
            'title'      => 'Header Button',
            'dependency' => array('header-button-display', '==', 'true'),

            'fields'     => array(
                array(
                    'id'      => 'header-btn-text',
                    'type'    => 'text',
                    'title'   => 'Button Text',
                    'default' => 'Get A Quote',
                ),
                array(
                    'id'      => 'header-btn-link',
                    'type'    => 'link',
                    'title'   => 'Button Link',
                    'default' => array(
                        'url' => '#',
                    ),
                ),
            ),
        ),

    ),
));