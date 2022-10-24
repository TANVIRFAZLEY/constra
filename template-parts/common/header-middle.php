<?php

$constraOptions = get_option('constra_options');

//logo value
$site_logo     = $constraOptions['site_logo'];
$site_logo_url = $site_logo['url'];

$header_middle_info_box = $constraOptions['header-middle-infobox'];
//Header button
$header_button_display = $constraOptions['header-button-display'];
$header_button         = $constraOptions['header_middle_btn'];
$header_button_text    = $header_button['header-btn-text'];
$header_button_link    = $header_button['header-btn-link']['url'];

?>

<div class="bg-white">
    <div class="container">
        <div class="logo-area">
            <div class="row align-items-center">

                <?php if ($site_logo): ?>
                <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                    <a class="d-block" href="<?php echo esc_url(home_url('/')); ?>">
                        <img loading="lazy" src="<?php echo $site_logo_url; ?>" alt="Constra">
                    </a>
                </div><!-- logo end -->
                <?php endif;?>
                <div class="col-lg-9 header-right">
                    <ul class="top-info-box">
                        <?php if ($header_middle_info_box): ?>
                        <?php foreach ($header_middle_info_box as $box): ?>
                        <li>
                            <div class="info-box">
                                <div class="info-box-content">
                                    <p class="info-box-title">
                                        <?php echo $box['header-middle-info-title']; ?></p>
                                    <p class="info-box-subtitle">
                                        <?php echo $box['header-middle-info-subtitle']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                        <?php endif;?>
                        <?php if ($header_button_display == true): ?>

                        <li class="header-get-a-quote">
                            <a class="btn btn-primary"
                                href="<?php echo $header_button_link; ?>"><?php echo $header_button_text; ?></a>
                        </li>

                        <?php endif;?>
                    </ul><!-- Ul end -->
                </div><!-- header right end -->
            </div><!-- logo area end -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</div>