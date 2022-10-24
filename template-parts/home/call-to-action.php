<?php

$constraOptions    = get_option('constra_options');
$cta_display_hide  = $constraOptions['cta_display_hide'];
$slider_bottom_cta = $constraOptions['slider_bottom_cta'];
$cta_text          = $constraOptions['slider_bottom_cta']['slider_bottom_cta_text'];
$cta_btn_text      = $constraOptions['slider_bottom_cta']['slider_bottom_cta_btn'];
$cta_btn_link      = $constraOptions['slider_bottom_cta']['slider_bottom_cta_btn_link']['url'];

?>
<?php if ($cta_display_hide == true): ?>
<section class="call-to-action-box no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title"><?php echo esc_html($cta_text); ?></h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-dark"
                            href="<?php echo esc_url($cta_btn_link); ?>"><?php echo esc_html($cta_btn_text); ?></a>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->
<?php endif;?>