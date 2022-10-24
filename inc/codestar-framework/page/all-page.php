<?php

CSF::createSection($prefix, array(
    'parent' => 'constra_page_settings',
    'title'  => 'All Page',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'    => 'all_page_breadcumb_image',
            'type'  => 'media',
            'title' => 'All Page Breadcumb Image',
        ),

    ),
));