<?php

CSF::createSection($prefix, array(
    'parent' => 'constra_page_settings',
    'title'  => 'Blog Page',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'blog_page_sidebar',
            'type'    => 'switcher',
            'title'   => 'Display Sidebar',
            'default' => true,
        ),
        array(
            'id'    => 'blog_page_breadcumb_image',
            'type'  => 'media',
            'title' => 'Blog Page Breadcumb Image',
        ),
        array(
            'id'    => 'single_blog_page_breadcumb_image',
            'type'  => 'media',
            'title' => 'Single Blog Page Breadcumb Image',
        ),

    ),
));