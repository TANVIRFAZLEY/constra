<?php

    $constraOptions    = get_option('constra_options');
    $blog_display_hide = $constraOptions['blog_display_hide'];
    $blog_section      = $constraOptions['blog_section'];
    $section_title     = $blog_section['blog_section_title'];
    $section_subtitle  = $blog_section['blog_section_sub_title'];

    $blog_section_btn = $constraOptions['all_blog_link']['url'];
    $section_btn_link = (isset($blog_section_btn)) ? $blog_section_btn : '';

?>
<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
                <h3 class="section-sub-title"><?php echo esc_html($section_subtitle); ?></h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <?php

                // WP_Query arguments
                $args = array(
                    'post_type'      => array('post'),
                    'posts_per_page' => '3',
                    'order'          => 'DESC',
                );

                // The Query
                $post_query = new WP_Query($args);

                // The Loop
                if ($post_query->have_posts()) {
                    while ($post_query->have_posts()) {
                        $post_query->the_post();

                    ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <?php if (has_post_thumbnail($post->ID)) {
                                    $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                                ?>
                    <div class="latest-post-media">
                        <a href="<?php the_permalink();?>" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="<?php echo esc_url($post_image[0]); ?>"
                                alt="img">
                        </a>
                    </div>
                    <?php }?>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="<?php the_permalink();?>" class="d-inline-block"><?php the_title();?></a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <?php }
                } else {
                    echo 'Not Found Any Blog Post';
                }

                // Restore original Post Data
                wp_reset_postdata();

            ?>




        </div>
        <!--/ Content row end -->
        <?php if ($blog_section_btn): ?>
        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary"
                href="<?php echo esc_attr($section_btn_link); ?>"><?php echo esc_html('All Blog Post', 'constra'); ?></a>
        </div>
        <?php endif;?>
    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->