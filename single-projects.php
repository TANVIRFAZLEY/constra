<?php get_header();?>
<?php
    the_post();
    $cat_list     = get_the_terms(get_the_ID(), 'project_cat');
    $cat_name     = implode(', ', wp_list_pluck($cat_list, 'name'));
    $constra_meta = get_post_meta(get_the_ID(), 'constra_metabox', true);

    $project_gallery   = (!empty($constra_meta['project_gallery'])) ? $constra_meta['project_gallery'] : '';
    $pgallery_ids      = explode(',', $project_gallery);
    $client_name       = isset(($constra_meta['project_client'])) ? $constra_meta['project_client'] : 'No Record';
    $project_architect = isset(($constra_meta['project_architect'])) ? $constra_meta['project_architect'] : 'No Record';
    $project_location  = isset(($constra_meta['project_location'])) ? $constra_meta['project_location'] : 'No Record';
    $project_size      = isset(($constra_meta['project_size'])) ? $constra_meta['project_size'] : 'No Record';
    $project_year      = isset(($constra_meta['project_year'])) ? $constra_meta['project_year'] : 'No Record';

    $constraOptions  = get_option('constra_options');
    $breadcumb_image = isset($constraOptions['single_project_page_breadcumb_image']['url']) ? $constraOptions['single_project_page_breadcumb_image']['url'] : '';

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
            <div class="col-lg-8">
                <?php if (!empty($project_gallery)) {?>
                <div id="page-slider" class="page-slider small-bg">

                    <?php

                            foreach ($pgallery_ids as $pgallery) {
                                $pimage = wp_get_attachment_image_src($pgallery, 'full');
                            ?>
                    <div class="item">
                        <img loading="lazy" class="img-fluid" src="<?php echo esc_url($pimage[0]); ?>"
                            alt="<?php the_title();?>" />
                    </div>
                    <?php }?>

                </div><!-- Page slider end -->
                <?php } else {echo "<h2>" . "Gallery Image Not found !" . "</h2>";}?>
            </div><!-- Slider col end -->

            <div class="col-lg-4 mt-5 mt-lg-0">

                <h3 class="column-title mrt-0"><?php the_title();?></h3>
                <p><?php the_content();?></p>

                <ul class="project-info list-unstyled">
                    <li>
                        <p class="project-info-label">Client</p>
                        <p class="project-info-content"><?php echo esc_html($client_name); ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Architect</p>
                        <p class="project-info-content"> <?php echo esc_html($project_architect); ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Location</p>
                        <p class="project-info-content"><?php echo esc_html($project_location); ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Size</p>
                        <p class="project-info-content"><?php echo esc_html($project_size); ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Year Completed</p>
                        <p class="project-info-content"><?php echo esc_html($project_year); ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Categories</p>
                        <p class="project-info-content"><?php echo esc_html($cat_name); ?></p>
                    </li>
                </ul>

            </div><!-- Content col end -->

        </div><!-- Row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php get_footer();?>