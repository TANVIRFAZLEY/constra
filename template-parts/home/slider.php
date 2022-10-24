<?php

$constraOptions  = get_option('constra_options');
$homepage_slider = $constraOptions['homepage_slider'];

?>


<?php if (!empty($homepage_slider)): ?>
<div class="banner-carousel banner-carousel-1 mb-0">

    <?php foreach ($homepage_slider as $value): ?>
    <?php
$link  = $value['slider_button_one']['slider_button_link_one'];
$link2 = $value['slider_button_two']['slider_button_link_two'];
?>
    <div class="banner-carousel-item" style="background-image:url(<?php echo $value['slider_background']['url']; ?>)">

        <div class="slider-content <?php echo esc_attr($value['slider_text_alignment']); ?>">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInLeft">
                            <?php echo $value['slider_title']; ?>
                        </h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">
                            <?php echo $value['slider_sub_title']; ?></h3>

                        <p data-animation-in="slideInLeft" data-duration-in="1.2">
                            <?php if ($value['slider_button_one']['slider_button_text_one']): ?>
                            <a href="<?php if ($link) {echo $link['url'];}?>"
                                class="slider btn btn-primary"><?php echo $value['slider_button_one']['slider_button_text_one']; ?></a>
                            <?php endif;?>
                            <?php if ($value['slider_button_two_display'] == true): ?>
                            <?php if ($value['slider_button_two']['slider_button_text_two']): ?>
                            <a href="<?php if ($link2) {echo $link2['url'];}?>"
                                class="slider btn btn-primary border"><?php echo $value['slider_button_two']['slider_button_text_two']; ?></a>
                            <?php endif;?>
                            <?php endif;?>
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php endforeach;?>

</div>
<?php endif;?>