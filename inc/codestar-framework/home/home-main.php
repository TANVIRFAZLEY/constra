<?php

CSF::createSection($prefix, array(
    'id'    => 'homepage_settings',
    'title' => 'Homepage',
    'icon'  => 'fas fa-home',
));

require_once get_theme_file_path("/inc/codestar-framework/home/slider-options.php");
require_once get_theme_file_path("/inc/codestar-framework/home/cta-option.php");
require_once get_theme_file_path("/inc/codestar-framework/home/features-options.php");
require_once get_theme_file_path("/inc/codestar-framework/home/facts-options.php");
require_once get_theme_file_path("/inc/codestar-framework/home/whatwedo-options.php");
require_once get_theme_file_path("/inc/codestar-framework/home/project-options.php");
require_once get_theme_file_path("/inc/codestar-framework/home/testimonial-options.php");
require_once get_theme_file_path("/inc/codestar-framework/home/client-options.php");
require_once get_theme_file_path("/inc/codestar-framework/home/blog-options.php");