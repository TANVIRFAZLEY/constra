<?php

CSF::createSection($prefix, array(
    'id'    => 'constra_page_settings',
    'title' => 'Page',
    'icon'  => 'fas fa-home',
));

require_once get_theme_file_path("/inc/codestar-framework/page/all-page.php");
require_once get_theme_file_path("/inc/codestar-framework/page/blog-page.php");
require_once get_theme_file_path("/inc/codestar-framework/page/project-page.php");