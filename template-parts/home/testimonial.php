<?php

    $constraOptions            = get_option('constra_options');
    $testimonian_display_hide  = $constraOptions['testimonian_display_hide'];
    $testimonial_section_title = $constraOptions['testimonial_section_title'];
    $testimonial_list          = $constraOptions['testimonial_list'];

    //client
    $client_display_hide  = $constraOptions['client_display_hide'];
    $client_section_title = $constraOptions['client_section_title'];
    $client_logo_list     = $constraOptions['client_logo_list'];

?>



<section class="content">
    <div class="container">
        <div class="row">

            <?php if ($testimonian_display_hide == true): ?>
            <div class="col-lg-6">
                <h3 class="column-title"><?php echo esc_html($testimonial_section_title); ?></h3>

                <div id="testimonial-slide" class="testimonial-slide">

                    <?php foreach ($testimonial_list as $tlist): ?>
                    <?php

    $pimage  = $tlist['testimonial_item_img']['url'];
    $pname   = $tlist['testimonial_person_name'];
    $pdesig  = $tlist['testimonial_person_designation'];
    $preview = $tlist['testimonial_person_content'];
?>
                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                <?php echo esc_html($preview); ?>
                            </span>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="<?php echo esc_attr($pimage); ?>"
                                    alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author"><?php echo esc_html($pname); ?></h3>
                                    <span class="quote-subtext"><?php echo esc_html($pdesig); ?></span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->
                    </div>
                    <!--/ Item 1 end -->
                    <?php endforeach;?>

                </div>
                <!--/ Testimonial carousel end-->
            </div><!-- Col end -->
            <?php endif;?>


            <?php if ($client_display_hide == true): ?>
            <div class="col-lg-6 mt-5 mt-lg-0">

                <h3 class="column-title"><?php echo esc_html($client_section_title); ?></h3>

                <div class="row all-clients">

                    <?php
                        if ($client_logo_list):
                            foreach ($client_logo_list as $llist):
                        ?>
                    <?php

        $logo_src  = (!empty($llist['client_logo_item_img']['url'])) ? $llist['client_logo_item_img']['url'] : '';
        $logo_link = (!empty($llist['client_logo_item_link']['url'])) ? $llist['client_logo_item_link']['url'] : '#!';
    ?>
                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="<?php echo esc_attr($logo_link); ?>"><img loading="lazy" class="img-fluid"
                                    src="<?php echo esc_attr($logo_src); ?>" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 1 end -->
                    <?php endforeach;?>
                    <?php endif;?>
                </div><!-- Clients row end -->

            </div><!-- Col end -->
            <?php endif;?>

        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Content end -->