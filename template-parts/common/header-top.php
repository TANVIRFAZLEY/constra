<?php

$constraOptions = get_option('constra_options');
$social_link    = $constraOptions['header-top-right-social'];
?>


<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li>
                        <i class="<?php echo $constraOptions['header-top-left-icon']; ?>"></i>
                        <p class="info-text"><?php echo $constraOptions['header-top-left-text']; ?></p>
                    </li>
                </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                        <?php if ($social_link): ?>
                        <?php foreach ($social_link as $link): ?>
                        <a target="_blank" title="<?php echo $link['header-social-link']['text']; ?>"
                            href="<?php echo $link['header-social-link']['url']; ?>">
                            <span class="social-icon"><i class="<?php echo $link['header-social-icon']; ?>"></i></span>
                        </a>
                        <?php endforeach;?>
                        <?php endif;?>
                    </li>
                </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>
<!--/ Topbar end -->