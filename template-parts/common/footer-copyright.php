<?php

    $constraOptions             = get_option('constra_options');
    $footer_copyright           = $constraOptions['footer_copyright'];
    $footer_copyright_text      = $footer_copyright['footer_copyright_text'];
    $footer_copyright_link_text = $footer_copyright['footer_copyright_link_text'];
    $footer_copyright_link      = (!empty($footer_copyright['footer_copyright_link']['url'])) ? $footer_copyright['footer_copyright_link']['url'] : '';
?>

<div class="copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="copyright-info">
                    <span>
                        <?php echo esc_html($footer_copyright_text); ?>
                        <a href="<?php echo esc_attr($footer_copyright_link); ?>"><?php echo esc_html($footer_copyright_link_text); ?>
                        </a>
                    </span>
                </div>
            </div>

            <div class="col-md-6">
                <?php
                    if (has_nav_menu('footerMenu')) {
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'footerMenu',
                                'container_class' => 'footer-menu text-center text-md-right',
                                'menu_class'      => 'list-unstyled',

                            )
                        );
                    }
                ?>
            </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-double-up"></i>
            </button>
        </div>

    </div><!-- Container end -->
</div><!-- Copyright end -->