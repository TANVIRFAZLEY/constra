<?php

CSF::createSection($prefix, array(
    'parent' => 'footer_settings',
    'title'  => 'Footer Copyright',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'     => 'footer_copyright',
            'type'   => 'fieldset',
            'title'  => 'Service Widget',
            'fields' => array(
                array(
                    'id'          => 'footer_copyright_text',
                    'type'        => 'text',
                    'title'       => 'Text',
                    'default'     => 'Copyright © 2022, Designed & Developed by',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'footer_copyright_link_text',
                    'type'        => 'text',
                    'title'       => 'Text',
                    'default'     => 'TheWebMake',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'footer_copyright_link',
                    'type'        => 'link',
                    'title'       => 'Link',
                    'default'     => array(
                        'url' => '#',
                    ),
                    'placeholder' => 'Type your text',
                ),
            ),
        ),

    ),
));