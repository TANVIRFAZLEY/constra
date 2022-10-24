<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Slider',
    'icon'   => 'fas fa-images',
    'fields' => array(
        array(
            'id'           => 'homepage_slider',
            'type'         => 'repeater',
            'button_title' => 'Add Slider',
            'title'        => 'Homepage Slider',
            'fields'       => array(

                array(
                    'id'      => 'slider_background',
                    'type'    => 'media',
                    'title'   => 'Slider Background',
                    'library' => 'image',
                ),

                array(
                    'id'          => 'slider_text_alignment',
                    'type'        => 'select',
                    'title'       => 'Slider Text Alignment',
                    'placeholder' => 'Select an option',
                    'options'     => array(
                        'text-left'   => 'Left',
                        'text-right'  => 'Right',
                        'text-center' => 'Center',
                    ),
                    'default'     => 'text-left',
                ),
                array(
                    'id'          => 'slider_title',
                    'type'        => 'text',
                    'title'       => 'Slider Title',
                    'placeholder' => 'Type your Slider title',
                ),

                array(
                    'id'          => 'slider_sub_title',
                    'type'        => 'text',
                    'title'       => 'Slider Sub-Title',
                    'placeholder' => 'Type your Slider sub-title',
                ),
                array(
                    'id'     => 'slider_button_one',
                    'type'   => 'fieldset',
                    'title'  => 'Slider Button One',
                    'fields' => array(
                        array(
                            'id'          => 'slider_button_text_one',
                            'type'        => 'text',
                            'title'       => 'Button Text',
                            'placeholder' => 'Type your Slider button text',
                        ),
                        array(
                            'id'    => 'slider_button_link_one',
                            'type'  => 'link',
                            'title' => 'Button Link',
                        ),
                    ),
                ),
                array(
                    'id'      => 'slider_button_two_display',
                    'type'    => 'switcher',
                    'default' => 'true',
                    'title'   => 'You wanna another button ?',
                ),

                array(
                    'id'         => 'slider_button_two',
                    'type'       => 'fieldset',
                    'title'      => 'Slider Button Two',
                    'dependency' => array('slider_button_two_display', '==', 'true'),
                    'fields'     => array(
                        array(
                            'id'          => 'slider_button_text_two',
                            'type'        => 'text',
                            'title'       => 'Button Text',
                            'placeholder' => 'Type your Slider button text',
                        ),
                        array(
                            'id'    => 'slider_button_link_two',
                            'type'  => 'link',
                            'title' => 'Button Link',
                        ),
                    ),
                ),

            ),
        ),

    ),
));