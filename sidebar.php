<?php
    $constraOptions  = get_option('constra_options');
    $display_sidebar = $constraOptions['blog_page_sidebar'];
    if (!is_active_sidebar('blog_sidebar')) {
        return;
    }
?>
<?php if ($display_sidebar == true) {?>
<div class="col-lg-4">
    <div class="sidebar sidebar-right">
        <?php dynamic_sidebar('blog_sidebar');?>

    </div><!-- Sidebar end -->
</div>
<?php }?>