<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function constra_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Blog Sidebar', 'constra'),
            'id'            => 'blog_sidebar',
            'description'   => esc_html__('Add widgets here.', 'constra'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'constra_widgets_init');