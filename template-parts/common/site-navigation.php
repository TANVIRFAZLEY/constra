<div class="site-navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'mainmenu',
                                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'navbar-collapse',
                                'menu_class'      => 'nav navbar-nav mr-auto',
                                'walker'          => new Constra_Bootstrap_Navwalker(),
                            )
                        );
                    ?>

                </nav>
            </div>
            <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
            <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">

            <?php get_search_form();?>
            <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

</div>
<!--/ Navigation end -->