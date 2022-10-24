<?php

    $constraOptions     = get_option('constra_options');
    $facts_display_hide = $constraOptions['facts_display_hide'];
    $facts_area         = $constraOptions['facts_area'];

?>
<?php if ($facts_display_hide): ?>
<section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="facts-wrapper">
            <div class="row">

                <?php foreach ($facts_area as $fact): ?>
                <?php
    $fact_img   = $fact['fact_item_img']['url'];
    $fact_num   = $fact['fact_item_number'];
    $fact_title = $fact['fact_item_title'];
?>
                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="<?php echo esc_url($fact_img); ?>" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp"
                                data-count="<?php echo esc_attr($fact_num); ?>">0</span></h2>
                        <h3 class="ts-facts-title"><?php echo esc_html($fact_title); ?></h3>
                    </div>
                </div><!-- Col end -->
                <?php endforeach;?>






            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->
<?php endif;?>