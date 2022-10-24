<?php

    $constraOptions      = get_option('constra_options');
    $footer_about_widget = $constraOptions['footer_about_widget'];

    $about_widget_title = $footer_about_widget['about_widget_title'];
    $about_widget_image = $footer_about_widget['about_widget_image']['url'];
    $about_widget_desc  = $footer_about_widget['about_widget_desc'];
    //repeater
    $footer_about_social = $footer_about_widget['footer_about_social'];

    //working
    $footer_working_widget = $constraOptions['footer_working_widget'];
    $working_widget_title  = $footer_working_widget['working_widget_title'];
    $working_widget_desc   = $footer_working_widget['working_widget_desc'];
    // repeater
    $working_hour_list = $footer_working_widget['working_hour_list'];

    //services
    $footer_service_widget = $constraOptions['footer_service_widget'];
    $service_widget_title  = $footer_service_widget['service_widget_title'];
    // repeater
    $services_list = $footer_service_widget['services_list'];

?>

<div class="footer-main">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
                <h3 class="widget-title"><?php echo esc_html($about_widget_title); ?></h3>
                <?php if (!empty($about_widget_image)): ?>
                <img loading="lazy" width="200px" class="footer-logo" src="<?php echo esc_attr($about_widget_image); ?>"
                    alt="Constra">
                <?php endif;?>
                <p><?php echo esc_html($about_widget_desc); ?></p>
                <?php if (!empty($footer_about_social)): ?>
                <div class="footer-social">
                    <ul>
                        <?php

                            foreach ($footer_about_social as $fsocial):
                                $fsicon = (!empty($fsocial['footer_social_icon'])) ? $fsocial['footer_social_icon'] : '';
                                $fslink = (!empty($fsocial['footer_social_link']['url'])) ? $fsocial['footer_social_link']['url'] : '';

                            ?>

                        <li><a target="_blank" href="<?php echo esc_attr($fslink); ?>"><i
                                    class="<?php echo esc_attr($fsicon); ?>"></i></a></li>
                        <?php endforeach;?>
                    </ul>
                </div><!-- Footer social end -->
                <?php endif;?>
            </div><!-- Col end -->


            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                <h3 class="widget-title"><?php echo esc_html($working_widget_title); ?></h3>
                <div class="working-hours">
                    <?php echo esc_html($working_widget_desc); ?>

                    <br>
                    <?php
                        if (!empty($working_hour_list)):
                            foreach ($working_hour_list as $wlist):
                                $wtext = $wlist['working_list_text'];
                                $wtime = $wlist['working_list_time'];
                            ?>
                    <br><?php echo esc_html($wtext); ?> <span class="text-right"><?php echo esc_html($wtime); ?></span>
                    <?php

                                    endforeach;
                                endif;
                            ?>
                </div>
            </div><!-- Col end -->


            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                <h3 class="widget-title"><?php echo esc_html($service_widget_title); ?></h3>
                <?php
                    if (!empty($services_list)):

                ?>
                <ul class="list-arrow">
                    <?php
                        foreach ($services_list as $slist):
                            $stext = (!empty($slist['service_list_text'])) ? $slist['service_list_text'] : '';
                            $slink = (!empty($slist['service_list_link']['url'])) ? $slist['service_list_link']['url'] : '';
                        ?>
                    <li><a href="<?php echo esc_attr($slink); ?>"><?php echo esc_html($stext); ?></a></li>

                    <?php endforeach;?>
                </ul>
                <?php

                    endif;
                ?>
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</div><!-- Footer main end -->