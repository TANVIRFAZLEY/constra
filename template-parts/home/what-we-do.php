<?php

    $constraOptions        = get_option('constra_options');
    $wwd_display_hide      = $constraOptions['wwd_display_hide'];
    $wwd_area              = $constraOptions['wwd_section'];
    $wwd_section_title     = $wwd_area['wwd_section_title'];
    $wwd_section_sub_title = $wwd_area['wwd_section_sub_title'];
    $wwd_section_img       = $wwd_area['wwd_section_image']['url'];

    //1st column
    $first_column  = $constraOptions['wwd_section_frist_clm'];
    $second_column = $constraOptions['wwd_section_second_clm'];

?>
<?php if ($wwd_display_hide == true): ?>
<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title"><?php echo esc_html($wwd_section_title); ?></h2>
                <h3 class="section-sub-title"><?php echo esc_html($wwd_section_sub_title); ?></h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                <?php

                        if ($first_column):
                            foreach ($first_column as $fc):
                        ?>
                <?php

        $fc_img        = $fc['wwd_item_img']['url'];
        $fc_title      = $fc['wwd_item_title'];
        $fc_title_link = ($fc['wwd_item_title_link']['url']) ? $fc['wwd_item_title_link']['url'] : '';
        $fc_desc       = $fc['wwd_item_desc'];
    ?>
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="<?php echo esc_url($fc_img); ?>" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a
                                href="<?php echo esc_url($fc_title_link); ?>"><?php echo esc_html($fc_title); ?></a>
                        </h3>
                        <p><?php echo esc_html($fc_desc); ?></p>
                    </div>
                </div><!-- Service 1 end -->
                <?php endforeach;?>
                <?php endif;?>


            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <?php if ($wwd_section_img): ?>
                <img loading="lazy" class="img-fluid" src="<?php echo esc_url($wwd_section_img); ?>"
                    alt="service-avater-image">
                <?php endif;?>
            </div><!-- Col end -->

            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <?php

                        if ($second_column):
                            foreach ($second_column as $sc):
                        ?>
                <?php

        $sc_img        = $sc['wwd_item_img_2nd']['url'];
        $sc_title      = $sc['wwd_item_title_2nd'];
        $sc_title_link = ($sc['wwd_item_title_link_2nd']['url']) ? $sc['wwd_item_title_link_2nd']['url'] : '';
        $sc_desc       = $sc['wwd_item_desc_2nd'];
    ?>
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="<?php echo esc_url($sc_img); ?>" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a
                                href="<?php echo esc_url($sc_title_link); ?>"><?php echo esc_html($sc_title); ?></a>
                        </h3>
                        <p><?php echo esc_html($sc_desc); ?></p>
                    </div>
                </div><!-- Service 1 end -->
                <?php endforeach;?>
                <?php endif;?>

            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section><!-- Service end -->
<?php endif;?>