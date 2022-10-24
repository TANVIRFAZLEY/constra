<?php

CSF::createSection($prefix, array(
    'id'   => 'header_settings', // Set a unique slug-like ID
    'title' => 'Header',
    'icon' => 'fas fa-border-all',
));
//header top settings
require_once get_theme_file_path("/inc/codestar-framework/header/header-top.php");

// header Middle
require_once get_theme_file_path("/inc/codestar-framework/header/header-middle.php");