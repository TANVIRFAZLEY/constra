<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Testimonial',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'testimonian_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable Testimonial area ?',
        ),
        array(
            'id'         => 'testimonial_section_title',
            'type'       => 'text',
            'title'      => 'Section Title',
            'default'    => 'Testimonial',
            'dependency' => array('testimonian_display_hide', '==', 'true'),
        ),
        array(
            'id'           => 'testimonial_list',
            'type'         => 'repeater',
            'title'        => 'Testimonial List',
            'button_title' => 'Add Testimonial',
            'dependency'   => array('testimonian_display_hide', '==', 'true'),
            'fields'       => array(

                array(
                    'id'      => 'testimonial_item_img',
                    'type'    => 'media',
                    'title'   => 'Person Image',
                    'library' => 'image',
                ),
                array(
                    'id'    => 'testimonial_person_name',
                    'type'  => 'text',
                    'title' => 'Person Name',
                ),
                array(
                    'id'    => 'testimonial_person_designation',
                    'type'  => 'text',
                    'title' => 'Person Designation',
                ),
                array(
                    'id'    => 'testimonial_person_content',
                    'type'  => 'textarea',
                    'title' => 'Person Review',
                ),

            ),
        ),

    ),
));