<?php

$constraOptions = get_option('constra_options');

//header top display or hide
$header_top_display    = $constraOptions['header-top-display'];
$header_middle_display = $constraOptions['header-middle-display'];

?>


<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="<?php bloginfo('charset');?>">

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">


    <?php wp_head();?>

</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div class="body-inner">

        <!-- Header top start -->
        <?php if ($header_top_display == true): ?>
        <?php get_template_part('template-parts/common/header-top');?>
        <?php endif;?>
        <!-- Header top end -->
        <!-- Header start -->
        <header id="header" class="header-one">
            <?php if ($header_middle_display == true): ?>
            <!-- header middle -->
            <?php get_template_part('template-parts/common/header-middle');?>
            <?php endif;?>
            <!-- navigation -->
            <?php get_template_part('template-parts/common/site-navigation');?>

        </header>
        <!--/ Header end -->