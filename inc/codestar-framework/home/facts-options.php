<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Facts',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'facts_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable Facts area ?',
        ),

        // tabs
        array(
            'id'           => 'facts_area',
            'type'         => 'repeater',
            'title'        => 'Facts Item',
            'max'          => 4,
            'min'          => 4,
            'button_title' => 'Add Fact Item',
            'dependency'   => array('facts_display_hide', '==', 'true'),
            'fields'       => array(

                array(
                    'id'      => 'fact_item_img',
                    'type'    => 'media',
                    'title'   => 'Facts Image',
                    'library' => 'image',
                ),
                array(
                    'id'    => 'fact_item_number',
                    'type'  => 'number',
                    'title' => 'Facts Number',
                ),

                array(
                    'id'    => 'fact_item_title',
                    'type'  => 'text',
                    'title' => 'Facts Title',
                ),

            ),
        ),

    ),
));