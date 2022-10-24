<?php

    // Adds widget: Constra Recent Post
    class Constrarecentpost_Widget extends WP_Widget {

        function __construct() {
            parent::__construct(
                'constrarecentpost_widget',
                esc_html__('Constra Recent Post', 'constra')
            );
        }

        private $widget_fields = array(
            array(
                'label'   => 'Number of posts',
                'id'      => 'number_of_post',
                'default' => '3',
                'type'    => 'number',
            ),
        );

        public function widget($args, $instance) {
            echo wp_kses_post($args['before_widget']);

            if (!empty($instance['title'])) {
                echo wp_kses_post($args['before_title']) . apply_filters('widget_title', $instance['title']) . wp_kses_post($args['after_title']);
            }
            $query_args = array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => $instance['number_of_post'],
            );
            $rpost = new WP_Query($query_args);
        ?>
<ul class="constra-recent-post list-unstyled">
    <?php

                while ($rpost->have_posts()) {
                    $rpost->the_post();
                    $post_image = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');
                ?>
    <li class="d-flex align-items-center">
        <?php if (has_post_thumbnail()) {?>
        <div class="posts-thumb">
            <a href="<?php the_permalink();?>"><img loading="lazy" alt="img"
                    src="<?php echo esc_url($post_image); ?>"></a>
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
            ?>
</ul>

<?php

            echo wp_kses_post($args['after_widget']);
        }

        public function field_generator($instance) {
            $output = '';
            foreach ($this->widget_fields as $widget_field) {
                $default = '';
                if (isset($widget_field['default'])) {
                    $default = $widget_field['default'];
                }
                $widget_value = !empty($instance[$widget_field['id']]) ? $instance[$widget_field['id']] : esc_html__($default, 'constra');
                switch ($widget_field['type']) {
                default:
                    $output .= '<p>';
                    $output .= '<label for="' . esc_attr($this->get_field_id($widget_field['id'])) . '">' . esc_attr($widget_field['label'], 'constra') . ':</label> ';
                    $output .= '<input class="widefat" id="' . esc_attr($this->get_field_id($widget_field['id'])) . '" name="' . esc_attr($this->get_field_name($widget_field['id'])) . '" type="' . $widget_field['type'] . '" value="' . esc_attr($widget_value) . '">';
                    $output .= '</p>';
                }
            }
            echo $output;
        }

        public function form($instance) {
            $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'constra');
        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'constra');?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
        value="<?php echo esc_attr($title); ?>">
</p>
<?php
    $this->field_generator($instance);
        }

        public function update($new_instance, $old_instance) {
            $instance          = array();
            $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
            foreach ($this->widget_fields as $widget_field) {
                switch ($widget_field['type']) {
                default:
                    $instance[$widget_field['id']] = (!empty($new_instance[$widget_field['id']])) ? strip_tags($new_instance[$widget_field['id']]) : '';
                }
            }
            return $instance;
        }
    }

    function register_constrarecentpost_widget() {
        register_widget('Constrarecentpost_Widget');
}
add_action('widgets_init', 'register_constrarecentpost_widget');