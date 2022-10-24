<?php

CSF::createSection($prefix, array(
    'id'    => 'footer_settings',
    'title' => 'Footer',
    'icon'  => 'fas fa-home',
));

require_once get_theme_file_path("/inc/codestar-framework/footer/widgets-options.php");

require_once get_theme_file_path("/inc/codestar-framework/footer/copyright-options.php");