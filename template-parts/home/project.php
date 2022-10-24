<?php

    $constraOptions     = get_option('constra_options');
    $project_display_hide = $constraOptions['project_display_hide'];
    $project_section         = $constraOptions['project_section'];
    $project_section_title         = $project_section['project_section_title'];
    $project_section_sub_title         = $project_section['project_section_sub_title'];
    $all_project_button_text         = $constraOptions['all_project_button_text'];
    $all_project_button_link         = (!empty($constraOptions['all_project_button_link']['url'])) ? $constraOptions['all_project_button_link']['url'] : '';

?>

<?php if($project_display_hide == true){ ?>
<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title"><?php echo esc_html($project_section_title); ?></h2>
                <h3 class="section-sub-title"><?php echo esc_html($project_section_sub_title); ?></h3>
            </div>
        </div>
        <!--/ Title row end -->

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

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="<?php echo esc_url($all_project_button_link); ?>"><?php echo esc_html($all_project_button_text); ?></a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->
<?php } ?>