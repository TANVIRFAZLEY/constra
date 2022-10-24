<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Features',
    'icon'   => 'fas fa-home',
    'fields' => array(
        array(
            'id'      => 'features_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable Features area ?',
        ),

        array(
            'id'         => 'features_about_section',
            'type'       => 'fieldset',
            'title'      => 'Features Area',
            'dependency' => array('features_display_hide', '==', 'true'),
            'fields'     => array(
                array(
                    'id'          => 'features_about_section_title',
                    'type'        => 'text',
                    'title'       => 'About us section Title',
                    'default'     => 'About Us',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'features_about_sub_title',
                    'type'        => 'text',
                    'title'       => 'About us sub Title',
                    'default'     => 'We deliver landmark projects',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'features_about_section_content',
                    'type'        => 'textarea',
                    'title'       => 'About Us Content',
                    'default'     => 'We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.',
                    'placeholder' => 'Type your content',
                ),
            ),
        ),
        array(
            'id'           => 'features_items',
            'type'         => 'repeater',
            'title'        => 'Features Item',
            //'max'          => 4,
            'button_title' => 'Add Features Item',
            'dependency'   => array('features_display_hide', '==', 'true'),
            'fields'       => array(

                array(
                    'id'      => 'features_item_icon',
                    'type'    => 'icon',
                    'title'   => 'Feature Icon',
                    'default' => 'fas fa-trophy',
                ),

                array(
                    'id'      => 'features_item_title',
                    'type'    => 'text',
                    'title'   => 'Feature Title',
                    'default' => 'We have Repution for Excellence',
                ),

            ),
        ),

        //our values
        array(
            'id'         => 'features_value_section',
            'type'       => 'fieldset',
            'title'      => 'Values Area',
            'dependency' => array('features_display_hide', '==', 'true'),
            'fields'     => array(
                array(
                    'id'          => 'features_value_section_title',
                    'type'        => 'text',
                    'title'       => 'Our Values section Title',
                    'default'     => 'Our Values',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'features_value_desc',
                    'type'        => 'textarea',
                    'title'       => 'Values Description',
                    'default'     => 'Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.',
                    'placeholder' => 'Type your text',
                ),
            ),
        ),
        // tabs
        array(
            'id'           => 'features_tabs',
            'type'         => 'repeater',
            'title'        => 'Values Tab',
            //'max'          => 4,
            'button_title' => 'Add Tab Item',
            'dependency'   => array('features_display_hide', '==', 'true'),
            'fields'       => array(

                array(
                    'id'      => 'features_tab_show',
                    'type'    => 'switcher',
                    'title'   => 'Please only one tab for open',
                    'default' => false,
                ),

                array(
                    'id'      => 'features_tab_item_title',
                    'type'    => 'text',
                    'title'   => 'Tab Title',
                    'default' => 'Safety',
                ),

                array(
                    'id'      => 'features_tab_item_desc',
                    'type'    => 'textarea',
                    'title'   => 'Tab Description',
                    'default' => 'Add your description',
                ),

            ),
        ),

    ),
));