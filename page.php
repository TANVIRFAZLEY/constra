<?php get_header();?>
<?php
    $constraOptions = get_option('constra_options');

    $breadcumb_image = isset($constraOptions['all_page_breadcumb_image']['url']) ? $constraOptions['all_page_breadcumb_image']['url'] : '';
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
            <div class="col-md-12">
                <?php the_content();?>
            </div>

        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

<?php get_footer();?>