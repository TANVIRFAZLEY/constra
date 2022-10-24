<?php

$constraOptions        = get_option('constra_options');
$features_display_hide = $constraOptions['features_display_hide'];
//about
$about_section           = $constraOptions['features_about_section'];
$about_section_title     = $about_section['features_about_section_title'];
$about_section_sub_title = $about_section['features_about_sub_title'];
$about_section_desc      = $about_section['features_about_section_content'];

//features item
$features_items = $constraOptions['features_items'];

//our values
$features_section_values = $constraOptions['features_value_section'];

$values_title = $features_section_values['features_value_section_title'];

$values_desc = $features_section_values['features_value_desc'];

//tabs
$features_tabs = $constraOptions['features_tabs'];

?>

<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title"><?php echo esc_html($about_section_title); ?></h2>
                    <h3 class="into-sub-title"><?php echo esc_html($about_section_sub_title); ?></h3>
                    <p><?php echo esc_html($about_section_desc); ?></p>
                </div><!-- Intro box end -->

                <div class="gap-20"></div>

                <div class="row">
                    <?php foreach ($features_items as $fitem): ?>
                    <?php

$ficon  = $fitem['features_item_icon'];
$ftitle = $fitem['features_item_title'];
?>
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="<?php echo esc_attr($ficon); ?>"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title"><?php echo esc_html($ftitle); ?></h3>
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->
                    <?php endforeach;?>
                </div><!-- Content row 1 end -->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title"><?php echo esc_html($values_title); ?></h3>
                <p><?php echo esc_html($values_desc); ?></p>
                <?php if (!empty($features_tabs)): ?>
                <div class="accordion accordion-group" id="our-values-accordion">
                    <?php foreach ($features_tabs as $ftab): ?>
                    <?php

$tab_id    = rand(78676, 967698);
$tab_title = $ftab['features_tab_item_title'];
$tab_desc  = $ftab['features_tab_item_desc'];
$tab_show  = ($ftab['features_tab_show'] == true) ? 'show' : '';
?>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#ftab-<?php echo esc_attr($tab_id); ?>" aria-expanded="true"
                                    aria-controls="ftab-<?php echo esc_attr($tab_id); ?>">
                                    <?php echo esc_html($tab_title); ?>
                                </button>
                            </h2>
                        </div>

                        <div id="ftab-<?php echo esc_attr($tab_id); ?>"
                            class="collapse <?php echo esc_attr($tab_show); ?>" aria-labelledby="headingOne"
                            data-parent="#our-values-accordion">
                            <div class="card-body">
                                <?php echo esc_html($tab_desc); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <?php endif;?>
                <!--/ Accordion end -->

            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->