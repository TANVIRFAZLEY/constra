<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Clients',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'client_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable Client area ?',
        ),
        array(
            'id'         => 'client_section_title',
            'type'       => 'text',
            'title'      => 'Section Title',
            'default'    => 'Happy Clients',
            'dependency' => array('client_display_hide', '==', 'true'),
        ),
        array(
            'id'           => 'client_logo_list',
            'type'         => 'repeater',
            'title'        => 'Logo List',
            'button_title' => 'Add Logo',
            'dependency'   => array('client_display_hide', '==', 'true'),
            'fields'       => array(

                array(
                    'id'      => 'client_logo_item_img',
                    'type'    => 'media',
                    'title'   => 'Client Logo',
                    'library' => 'image',
                ),
                array(
                    'id'      => 'client_logo_item_link',
                    'type'    => 'link',
                    'title'   => 'Logo Link',
                    'default' => array(
                        'url' => '#!',
                    ),
                ),

            ),
        ),

    ),
));