<?php

if (class_exists('CSF')) {

//
    // Set a unique slug-like ID
    $prefix = 'constra_metabox';

//
    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title'              => 'Projects MetaBox',
        'post_type'          => 'projects',
        'data_type'          => 'serialize',
        'context'            => 'advanced',
        'priority'           => 'default',
        'exclude_post_types' => array(),
        'page_templates'     => '',
        'post_formats'       => '',
        'show_restore'       => false,
        'enqueue_webfont'    => true,
        'async_webfont'      => false,
        'output_css'         => true,
        'nav'                => 'normal',
        'theme'              => 'dark',
        'class'              => '',
    ));

//
    // Create a section
    CSF::createSection($prefix, array(
        'title'  => 'Project Gallery',
        'fields' => array(
            array(
                'id'          => 'project_gallery',
                'type'        => 'gallery',
                'title'       => 'Gallery',
                'add_title'   => 'Add Images',
                'edit_title'  => 'Edit Images',
                'clear_title' => 'Remove Images',
            ),

        ),
    ));

    CSF::createSection($prefix, array(
        'title'  => 'Project Meta Data',
        'fields' => array(

            array(
                'id'    => 'project_client',
                'type'  => 'text',
                'title' => 'Client Name',
            ),
            array(
                'id'    => 'project_architect',
                'type'  => 'text',
                'title' => 'Architect Name',
            ),
            array(
                'id'    => 'project_location',
                'type'  => 'text',
                'title' => 'Location',
            ),
            array(
                'id'    => 'project_size',
                'type'  => 'text',
                'title' => 'Size',
            ),
            array(
                'id'    => 'project_year',
                'type'  => 'text',
                'title' => 'Year Completed',
            ),

        ),
    ));

}