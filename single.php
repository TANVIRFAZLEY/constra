<?php get_header();
    the_post();
    $categories      = get_the_category();
    $cat_name        = $categories[0]->name;
    $post_image      = get_the_post_thumbnail_url(get_the_ID(), 'full');
    $constraOptions  = get_option('constra_options');
    $breadcumb_image = isset($constraOptions['single_blog_page_breadcumb_image']['url']) ? $constraOptions['single_blog_page_breadcumb_image']['url'] : '';
    $display_sidebar = ($constraOptions['blog_page_sidebar'] == true) ? 'col-lg-8 mb-5 mb-lg-0' : 'col-lg-12 mb-5 mb-lg-0';
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

            <div class="<?php echo esc_attr($display_sidebar); ?>">

                <div class="post-content post-single">
                    <?php

                        if (has_post_thumbnail()) {
                        ?>
                    <div class="post-media post-image">
                        <img loading="lazy" src="<?php echo esc_url($post_image); ?>" class="img-fluid"
                            alt="<?php the_title();?>">
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
                                <span class="post-meta-date"><i class="far fa-calendar"></i>
                                    <?php echo get_the_date(); ?></span>
                                <span class="post-comment"><i class="far fa-comment"></i>
                                    <?php echo get_comments_number(); ?><a href="#"
                                        class="comments-link"><?php _e('Comments', 'constra');?></a></span>
                            </div>
                            <h2 class="entry-title">
                                <?php the_title();?>
                            </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                            <?php the_content();?>
                        </div>

                        <div class="tags-area d-flex align-items-center justify-content-between">
                            <div class="post-tags">

                                <?php
                                    the_tags("", "", "");
                                ?>
                            </div>
                            <div class="share-items">
                                <?php

                                    // Get current page URL
                                    $sb_url = urlencode(get_permalink());

                                    // Get current page title
                                    $sb_title = str_replace(' ', '%20', get_the_title());
                                    // Construct sharing URL without using any script
                                    $twitterURL  = 'https://twitter.com/intent/tweet?text=' . $sb_title . '&amp;amp;url=' . $sb_url . '&amp;amp;via=wpvkp';
                                    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $sb_url;
                                    //$whatsappURL = 'whatsapp://send?text=' . $sb_title . ' ' . $sb_url;
                                    $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&amp;url=' . $sb_url . '&amp;amp;title=' . $sb_title;
                                ?>
                                <ul class="post-social-icons list-unstyled">
                                    <li class="social-icons-head">Share:</li>
                                    <li><a target="_blank" href="<?php echo esc_url($facebookURL); ?>"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="<?php echo esc_url($twitterURL); ?>"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a target="_blank" href="<?php echo esc_url($linkedInURL); ?>"><i
                                                class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- post content end -->

                <div class="author-box d-nlock d-sm-flex">
                    <div class="author-img mb-4 mb-md-0">
                        <?php echo get_avatar(get_the_author_meta("ID")); ?>
                    </div>
                    <div class="author-info">
                        <h3><?php echo get_the_author_meta("display_name"); ?></h3>
                        <p class="mb-2"><?php the_author_meta("description");?></p>
                        <p class="author-url mb-0">Website: <span><a
                                    href="<?php the_author_meta("user_url");?>"><?php the_author_meta("user_url");?></a></span>
                        </p>

                    </div>
                </div> <!-- Author box end -->

                <?php
                    comments_template();
                ?>


            </div><!-- Content Col end -->

            <?php get_sidebar();?>

        </div><!-- Main row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php get_footer();?>