<?php

    $args = array(
        'post_type'      => array('post'),
        'post_status'    => array('publish'),
        'posts_per_page' => $instance['number_of_post'],
    );
    $rpost = new WP_Query($args);

    echo '<ul class="constra-recent-post list-unstyled">';
    while ($rpost->have_posts()) {
        $rpost->the_post();
        $post_image = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');
    ?>
<li class="d-flex align-items-center">
    <?php if (has_post_thumbnail()) {?>
    <div class="posts-thumb">
        <a href="<?php the_permalink();?>"><img loading="lazy" alt="img" src="<?php echo esc_url($post_image); ?>"></a>
    </div>
    <?php }?>
    <div class="post-info">
        <h4 class="entry-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h4>
    </div>
</li>

<?php
    }

wp_reset_query();
echo '</ul>';