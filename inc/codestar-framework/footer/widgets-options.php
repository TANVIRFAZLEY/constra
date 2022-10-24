<?php

CSF::createSection($prefix, array(
    'parent' => 'footer_settings',
    'title'  => 'Footer Widget',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        //about widget
        array(
            'id'     => 'footer_about_widget',
            'type'   => 'fieldset',
            'title'  => 'About Widget',
            'fields' => array(
                array(
                    'id'          => 'about_widget_title',
                    'type'        => 'text',
                    'title'       => 'Title',
                    'default'     => 'About Us',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'      => 'about_widget_image',
                    'type'    => 'media',
                    'title'   => 'About Logo',
                    'library' => 'image',
                ),
                array(
                    'id'          => 'about_widget_desc',
                    'type'        => 'textarea',
                    'title'       => 'Description',
                    'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua.',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'           => 'footer_about_social',
                    'type'         => 'repeater',
                    'title'        => 'Widget Social Profile',
                    'button_title' => 'Add social',
                    'fields'       => array(
                        array(
                            'id'    => 'footer_social_icon',
                            'type'  => 'icon',
                            'title' => 'Social Icon',
                        ),
                        array(
                            'id'    => 'footer_social_link',
                            'type'  => 'link',
                            'title' => 'Social Link',
                        ),

                    ),
                ),
            ),
        ),
        //Working widget
        array(
            'id'     => 'footer_working_widget',
            'type'   => 'fieldset',
            'title'  => 'Working Widget',
            'fields' => array(
                array(
                    'id'          => 'working_widget_title',
                    'type'        => 'text',
                    'title'       => 'Title',
                    'default'     => 'Working Hours',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'working_widget_desc',
                    'type'        => 'textarea',
                    'title'       => 'Description',
                    'default'     => 'We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our Hotline and Contact form.',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'           => 'working_hour_list',
                    'type'         => 'repeater',
                    'title'        => 'Working Hours List',
                    'button_title' => 'Add List',
                    'fields'       => array(
                        array(
                            'id'    => 'working_list_text',
                            'type'  => 'text',
                            'title' => 'List Text',
                        ),
                        array(
                            'id'    => 'working_list_time',
                            'type'  => 'text',
                            'title' => 'List Time',
                        ),

                    ),
                ),
            ),
        ),
        //service widget
        array(
            'id'     => 'footer_service_widget',
            'type'   => 'fieldset',
            'title'  => 'Service Widget',
            'fields' => array(
                array(
                    'id'          => 'service_widget_title',
                    'type'        => 'text',
                    'title'       => 'Title',
                    'default'     => 'Services',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'           => 'services_list',
                    'type'         => 'repeater',
                    'title'        => 'Services List',
                    'button_title' => 'Add List',
                    'fields'       => array(
                        array(
                            'id'    => 'service_list_text',
                            'type'  => 'text',
                            'title' => 'List Text',
                        ),
                        array(
                            'id'    => 'service_list_link',
                            'type'  => 'link',
                            'title' => 'List Link',
                        ),

                    ),
                ),
            ),
        ),

    ),
));