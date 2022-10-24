<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Blog',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'blog_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable Blog area ?',
        ),
        array(
            'id'         => 'blog_section',
            'type'       => 'fieldset',
            'title'      => 'Blog Section',
            'dependency' => array('blog_display_hide', '==', 'true'),
            'fields'     => array(
                array(
                    'id'          => 'blog_section_title',
                    'type'        => 'text',
                    'title'       => 'Section Title',
                    'default'     => 'Work of Excellence',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'blog_section_sub_title',
                    'type'        => 'text',
                    'title'       => 'Section Sub Title',
                    'default'     => 'Recent News',
                    'placeholder' => 'Type your text',
                ),
            ),
        ),
        array(
            'id'         => 'all_blog_link',
            'type'       => 'link',
            'title'      => 'Blog Archive Link',
            'dependency' => array('blog_display_hide', '==', 'true'),
        ),

    ),
));