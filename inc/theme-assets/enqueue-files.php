<?php
/**
 * Enqueue scripts and styles.
 */
function constra_scripts() {
//css file

    wp_enqueue_style('google-fonts',
        '//fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800&display=swap');
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/plugins/bootstrap/bootstrap.min.css'));
    wp_enqueue_style('fontawesome-css', get_theme_file_uri('assets/plugins/fontawesome/css/all.min.css'));
    wp_enqueue_style('animate-css', get_theme_file_uri('assets/plugins/animate-css/animate.css'));
    wp_enqueue_style('slick-slider-css', get_theme_file_uri('assets/plugins/slick/slick.css'));
    wp_enqueue_style('slick-slider-theme-css', get_theme_file_uri('assets/plugins/slick/slick-theme.css'));
    wp_enqueue_style('colorbox-css', get_theme_file_uri('assets/plugins/colorbox/colorbox.css'));
    wp_enqueue_style('naajihun-css', get_theme_file_uri('assets/css/style.css'));
    wp_enqueue_style('naajihun-main-css', get_stylesheet_uri());

//js file

    wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/plugins/bootstrap/bootstrap.min.js'), ['jquery'], '4.5',
        true);
    wp_enqueue_script('slick-js', get_theme_file_uri('assets/plugins/slick/slick.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('slick-animation-js', get_theme_file_uri('assets/plugins/slick/slick-animation.min.js'), ['jquery'],
        '1.0', true);
    wp_enqueue_script('colorbox-js', get_theme_file_uri('assets/plugins/colorbox/jquery.colorbox.js'), ['jquery'], '1.0',
        true);
    // wp_enqueue_script('shuffle-js', get_theme_file_uri('assets/plugins/shuffle/shuffle.min.js'), ['jquery'], '1.0', true);
    wp_enqueue_script('isotope-js', get_theme_file_uri('assets/plugins/isotope/isotope.pkgd.min.js'), ['jquery'], '1.0', true);
//google map
    wp_enqueue_script('google-map-api-js', '//maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU',
        ['jquery'], '1.0', true);
    wp_enqueue_script('googlemap-js', get_theme_file_uri('assets/plugins/google-map/map.js'), ['jquery'], '1.0', true);

    wp_enqueue_script('constra-script-js', get_theme_file_uri('assets/js/script.js'), ['jquery'], '1.0', true);
//comments thread
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'constra_scripts');

if (!function_exists('constra_fontawesome_cf_upgrade_enqueue_fa5')) {
    function constra_fontawesome_cf_upgrade_enqueue_fa5() {
        wp_enqueue_style('fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all');
        wp_enqueue_style('fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'constra_fontawesome_cf_upgrade_enqueue_fa5');
}