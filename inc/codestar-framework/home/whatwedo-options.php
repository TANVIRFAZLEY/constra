<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'What We Do',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'wwd_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable WWD area ?',
        ),

        array(
            'id'         => 'wwd_section',
            'type'       => 'fieldset',
            'title'      => 'What We Do Section',
            'dependency' => array('wwd_display_hide', '==', 'true'),
            'fields'     => array(
                array(
                    'id'          => 'wwd_section_title',
                    'type'        => 'text',
                    'title'       => 'Section Title',
                    'default'     => 'We Are Specialists In',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'wwd_section_sub_title',
                    'type'        => 'text',
                    'title'       => 'Section Sub Title',
                    'default'     => 'What We Do',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'      => 'wwd_section_image',
                    'type'    => 'media',
                    'title'   => 'Section Middle Image',
                    'library' => 'image',

                ),
            ),
        ),
        //What we do Item
        array(
            'id'           => 'wwd_section_frist_clm',
            'type'         => 'repeater',
            'title'        => 'First Column',
            'button_title' => 'Add Item',
            'dependency'   => array('wwd_display_hide', '==', 'true'),
            'fields'       => array(

                array(
                    'id'      => 'wwd_item_img',
                    'type'    => 'media',
                    'title'   => 'What we do Image',
                    'library' => 'image',
                ),
                array(
                    'id'    => 'wwd_item_title',
                    'type'  => 'text',
                    'title' => 'What we do Title',
                ),
                array(
                    'id'    => 'wwd_item_title_link',
                    'type'  => 'link',
                    'title' => 'What we do Link',
                ),

                array(
                    'id'    => 'wwd_item_desc',
                    'type'  => 'textarea',
                    'title' => 'What we do Description',
                ),

            ),
        ),
        array(
            'id'           => 'wwd_section_second_clm',
            'type'         => 'repeater',
            'title'        => 'Second Column',
            'button_title' => 'Add Item',
            'dependency'   => array('wwd_display_hide', '==', 'true'),
            'fields'       => array(

                array(
                    'id'      => 'wwd_item_img_2nd',
                    'type'    => 'media',
                    'title'   => 'What we do Image',
                    'library' => 'image',
                ),
                array(
                    'id'    => 'wwd_item_title_2nd',
                    'type'  => 'text',
                    'title' => 'What we do Title',
                ),
                array(
                    'id'    => 'wwd_item_title_link_2nd',
                    'type'  => 'link',
                    'title' => 'What we do Link',
                ),

                array(
                    'id'    => 'wwd_item_desc_2nd',
                    'type'  => 'textarea',
                    'title' => 'What we do Description',
                ),

            ),
        ),

    ),
));