<?php

// header top
CSF::createSection($prefix, array(
    'parent' => 'header_settings',
    'title'  => 'Header Top',
    'icon'   => 'fas fa-laptop-house',
    'fields' => array(
        array(
            'id'      => 'header-top-display',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Header top Display or Hide',
        ),

        array(
            'id'         => 'header-top-left-icon',
            'type'       => 'icon',
            'title'      => 'Icon',
            'default'    => 'fas fa-map-marker-alt',
            'dependency' => array('header-top-display', '==', 'true'),
        ),
        array(
            'id'         => 'header-top-left-text',
            'type'       => 'text',
            'default'    => '9051 Constra Incorporate, USA',
            'title'      => 'Header Left Text',
            'dependency' => array('header-top-display', '==', 'true'),
        ),
        array(
            'id'         => 'header-top-right-social',
            'type'       => 'repeater',
            'title'      => 'Social Profiles Link',
            'dependency' => array('header-top-display', '==', 'true'),
            'fields'     => array(

                array(
                    'id'      => 'header-social-icon',
                    'type'    => 'icon',
                    'title'   => 'Social Icon',
                    'default' => 'fab fa-facebook-f',
                ),
                array(
                    'id'      => 'header-social-link',
                    'type'    => 'link',
                    'default' => array(
                        'url'    => 'https://www.facebook.com/tanvirfazley/',
                        'text'   => 'Facebook',
                        'target' => '_blank',
                    ),
                    'title'   => 'Social Link',
                ),

            ),
        ),

    ),
));