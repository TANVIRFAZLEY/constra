<?php

CSF::createSection($prefix, array(
    'parent' => 'constra_page_settings',
    'title'  => 'Project Page',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'    => 'project_page_breadcumb_image',
            'type'  => 'media',
            'title' => 'Project Page Breadcumb Image',
        ),
        array(
            'id'    => 'single_project_page_breadcumb_image',
            'type'  => 'media',
            'title' => 'Single Project Page Breadcumb Image',
        ),

    ),
));