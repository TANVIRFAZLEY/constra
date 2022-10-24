<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Call to Action',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'cta_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable CTA area ?',
        ),

        array(
            'id'         => 'slider_bottom_cta',
            'type'       => 'fieldset',
            'title'      => 'Call to Action',
            'dependency' => array('cta_display_hide', '==', 'true'),
            'fields'     => array(
                array(
                    'id'          => 'slider_bottom_cta_text',
                    'type'        => 'text',
                    'title'       => 'CTA Slogan',
                    'default'     => 'We understand your needs on construction',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'slider_bottom_cta_btn',
                    'type'        => 'text',
                    'title'       => 'Button Text',
                    'default'     => 'Request Quote',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'      => 'slider_bottom_cta_btn_link',
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