<?php get_header();?>
<?php
    $constraOptions  = get_option('constra_options');
    $display_sidebar = ($constraOptions['blog_page_sidebar'] == true) ? 'col-lg-8 mb-5 mb-lg-0' : 'col-lg-12 mb-5 mb-lg-0';
    $breadcumb_image = isset($constraOptions['blog_page_breadcumb_image']['url']) ? $constraOptions['blog_page_breadcumb_image']['url'] : '';
?>
<div id="banner-area" class="banner-area" style="background-image:url(<?php echo esc_url($breadcumb_image); ?>)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title"><?php single_post_title();?></h1>
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

            <div class="<?php echo esc_attr($display_sidebar); ?>">
                <?php if (have_posts()) {?>
                <?php
    while (have_posts()) {
        the_post();

        $categories = get_the_category();
        $cat_name   = $categories[0]->name;
        //$category_list = join(', ', wp_list_pluck($categories, 'name'));

    ?>
                <div class="post">
                    <?php

                            if (has_post_thumbnail()) {
                                $post_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            ?>
                    <div class="post-media post-image">
                        <img loading="lazy" src="<?php echo esc_url($post_image); ?>" class="img-fluid"
                            alt="post-image">
                    </div>
                    <?php }?>
                    <div class="post-body">
                        <div class="entry-header">
                            <div class="post-meta">
                                <span class="post-author">
                                    <i class="far fa-user"></i><a
                                        href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php echo get_the_author_meta("display_name"); ?></a>
                                </span>
                                <span class="post-cat">
                                    <i class="far fa-folder-open"></i><a
                                        href="<?php echo get_category_link(get_cat_ID($cat_name)); ?>">
                                        <?php echo wp_kses_post($cat_name); ?></a>
                                </span>
                                <span class="post-meta-date"><i
                                        class="far fa-calendar"></i><?php echo get_the_date(); ?></span>
                                <span class="post-comment"><i class="far fa-comment"></i>
                                    <?php echo get_comments_number(); ?><a href="<?php echo get_comment_link(); ?>"
                                        class="comments-link"><?php _e('Comments', 'constra');?></a></span>
                            </div>
                            <h2 class="entry-title">
                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p> <?php
                                    echo wp_trim_words(get_the_content(), 50, '...');
                                    ?>
                            </p>
                        </div>

                        <div class="post-footer">
                            <a href="<?php the_permalink();?>"
                                class="btn btn-primary"><?php _e('Continue Reading', 'constra');?></a>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- 1st post end -->
                <?php }}?>


                <nav class="paging" aria-label="Page navigation example">
                    <?php constra_pagination();?>
                </nav>

            </div><!-- Content Col end -->



            <?php get_sidebar();?>


        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

<?php get_footer();?>