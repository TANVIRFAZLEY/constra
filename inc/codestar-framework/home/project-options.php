<?php

CSF::createSection($prefix, array(
    'parent' => 'homepage_settings',
    'title'  => 'Project',
    'icon'   => 'fas fa-phone',
    'fields' => array(
        array(
            'id'      => 'project_display_hide',
            'type'    => 'switcher',
            'default' => 'true',
            'title'   => 'Want to enable or disable Project area ?',
        ),
        array(
            'id'         => 'project_section',
            'type'       => 'fieldset',
            'title'      => 'Project Section',
            'dependency' => array('project_display_hide', '==', 'true'),
            'fields'     => array(
                array(
                    'id'          => 'project_section_title',
                    'type'        => 'text',
                    'title'       => 'Section Title',
                    'default'     => 'Work of Excellence',
                    'placeholder' => 'Type your text',
                ),
                array(
                    'id'          => 'project_section_sub_title',
                    'type'        => 'text',
                    'title'       => 'Section Sub Title',
                    'default'     => 'Recent Projects',
                    'placeholder' => 'Type your text',
                ),
            ),
        ),
        array(
            'id'         => 'all_project_button_text',
            'type'       => 'text',
            'title'      => 'Project Button Text',
            'default'    => 'View All Projects',
            'dependency' => array('project_display_hide', '==', 'true'),
        ),
        array(
            'id'         => 'all_project_button_link',
            'type'       => 'link',
            'title'      => 'Project Button Link',
            'dependency' => array('project_display_hide', '==', 'true'),
        ),

    ),
));