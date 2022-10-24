<?php
    /*
    Template Name: Project Template
     */
get_header();

$constraOptions  = get_option('constra_options');
$breadcumb_image = isset($constraOptions['project_page_breadcumb_image']['url']) ? $constraOptions['project_page_breadcumb_image']['url'] : '';

?>
<div id="banner-area" class="banner-area" style="background-image:url(<?php echo esc_url($breadcumb_image); ?>)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title"><?php the_title();?></h1>
                        <nav class="constra_breadcumb" aria-label="breadcrumb">
                            <?php if (function_exists('bcn_display')) {
                                    bcn_display();
                            }?>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php

                    $project_cats = get_terms(array(
                        'hide_empty' => true,
                        'orderby'    => 'name',
                        'order'      => 'asc',
                        'taxonomy'   => 'project_cat',
                    ));

                    if (count($project_cats) > 0) {
                    ?>
                <div class="shuffle-btn-group">
                    <ul>
                        <li class="active" data-filter="*">Show All</li>
                        <?php

                                foreach ($project_cats as $project_cat) {
                                ?>

                        <li data-filter=".<?php echo esc_attr($project_cat->slug); ?>">
                            <?php echo esc_html($project_cat->name); ?> </li>

                        <?php
                            }

                            ?>
                    </ul><!-- project filter end -->
                </div><!-- project filter end -->
                <?php }

                ?>


                <?php
    // Custom WP query pquery
    $args_pquery = array(
        'post_type'      => array('projects'),
        'post_status'    => array('publish'),
        'posts_per_page' => -1,
        'order'          => 'ASC',
        'orderby'        => 'name',
    );

    $pquery = new WP_Query($args_pquery);

    if ($pquery->have_posts()) {

        while ($pquery->have_posts()) {
            $pquery->the_post();
        }

    }

?>
                <?php

if ($pquery->have_posts()) {?>
                <div class="row shuffle-wrapper">
                    <!-- <div class="col-1 shuffle-sizer"></div> -->

                    <?php

                            while ($pquery->have_posts()) {
                                $pquery->the_post();
                                $cat_list        = get_the_terms($pquery->ID, 'project_cat');
                                $cat_name        = implode(', ', wp_list_pluck($cat_list, 'name'));
                                $cat_slug        = implode(' ', wp_list_pluck($cat_list, 'slug'));
                                $image_url       = get_the_post_thumbnail_url(get_the_ID(), 'constra_project_image_size');
                                $image_url_light = get_the_post_thumbnail_url(get_the_ID(), 'full');

                            ?>
                    <div class='col-lg-4 col-md-6 shuffle-item <?php echo esc_attr($cat_slug); ?>'>
                        <div class="project-img-container">
                            <a class="gallery-popup" href="<?php echo esc_url($image_url_light); ?>"
                                aria-label="project-img">
                                <img class="img-fluid" src="<?php echo esc_url($image_url); ?>" alt="project-img">

                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>

                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    </h3>
                                    <p class="project-cat"><?php echo $cat_name; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }

                        ?>

                </div><!-- shuffle end -->
                <?php }

                    wp_reset_postdata();
                ?>
            </div>

        </div><!-- Content row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php get_footer();?>