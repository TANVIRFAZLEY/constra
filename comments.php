<?php

    if (post_password_required()) {
        return;
    }
?>

<!-- Post comment start -->
<div id="comments" class="comments-area">
    <?php
        // You can start editing here -- including this comment!
        if (have_comments()):
    ?>
    <h3 class="comments-heading">
        <?php
            $constra_comment_count = get_comments_number();
            if ($constra_comment_count <= 1) {
                echo esc_html($constra_comment_count) . __(' Comment', 'constra');
            } else {
                echo esc_html($constra_comment_count) . __(' Comments', 'constra');
            }
        ?>
    </h3>
    <?php the_comments_navigation();?>
    <ul class="comments-list">
        <?php
            wp_list_comments(
                array(
                    'style'       => 'ul',
                    'avatar_size' => 84,
                    'short_ping'  => true,
                )
            );
        ?>
    </ul><!-- Comments-list ul end -->
    <?php endif;?>
</div><!-- Post comment end -->

<div class="comments-form border-box">
    <h3 class="title-normal"><?php _e('Add a comment', 'constra');?></h3>

    <?php

        $constra_comments_fields = array();
        $name_placeholder        = __('Your Name', 'constra');
        $email_placeholder       = __('Your Email', 'constra');
        $website_placeholder     = __('Your Website', 'constra');
        $comment_placeholder     = __('Your Comment', 'constra');
        $btn_label               = __('Post Comment', 'constra');
        $coockis_value           = __('Save my name, email, and website in this browser for the next time I comment.', 'constra');
        //cookise
        $commenter = wp_get_current_commenter();
        $consent   = empty($commenter['comment_author_email']) ? '' : ' checked="checked"';
        if (!is_user_logged_in()) {
            $constra_comment_field = <<<EOD
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="comment">
                        <textarea name="comment" class="form-control required-field" id="comment" placeholder="{$comment_placeholder}" rows="10" required></textarea>
                    </label>
                </div>
            </div>
EOD;
        } else {
            $constra_comment_field = <<<EOD
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="comment">
                        <textarea name="comment" class="form-control required-field" id="comment" placeholder="{$comment_placeholder}" rows="10" required></textarea>
                    </label>
                </div>
            </div>
            </div>
EOD;
        }

        $constra_comments_fields['author'] = <<<EOD
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">
                        <input class="form-control" name="author" id="name" placeholder="{$name_placeholder}"
                            type="text" required>
                    </label>
                </div>
            </div>

EOD;

        $constra_comments_fields['email'] = <<<EOD
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">
                        <input class="form-control" name="email" id="email" placeholder="{$email_placeholder}"
                            type="email" required>
                    </label>
                </div>
            </div>

EOD;

        $constra_comments_fields['url'] = <<<EOD
            <div class="col-md-4">
                <div class="form-group">
                    <label for="url">
                        <input class="form-control" name="url" id="url" placeholder="{$website_placeholder}"
                            type="text" required>
                    </label>
                </div>
            </div>

EOD;
        $constra_comments_fields['cookies'] = <<<EOD
            <div class="col-md-12">
                <div class="form-group">
                    <div class="chek-form">
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent" value="yes" {$consent}>
                            <label class="form-check-label" for="wp-comment-cookies-consent"><span>{$coockis_value}</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

EOD;

        $constra_comment_btn_field = <<<EOD
        <div class="clearfix">
            <button value="Submit" name="submit" id="submit" class="btn btn-primary" type="submit" aria-label="post-comment">{$btn_label}</button>
        </div>

EOD;

        $constra_comment_form_arguments = array(
            'fields'               => $constra_comments_fields,
            'comment_field'        => $constra_comment_field,
            'submit_button'        => $constra_comment_btn_field,
            'comment_notes_before' => '',
            'comment_notes_after'  => '',
            'title_reply'          => '',
        );

        comment_form($constra_comment_form_arguments);

    ?>

</div><!-- Comments form end -->