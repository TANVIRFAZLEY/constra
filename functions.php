<?php
//after setup theme file
require_once get_theme_file_path("/inc/theme-assets/after-theme-setup.php");
//register widget file
require_once get_theme_file_path("/inc/theme-assets/widget-register.php");
//enqueue files
require_once get_theme_file_path("/inc/theme-assets/enqueue-files.php");

//theme widgets
require_once get_theme_file_path("/inc/widgets/constra-recent-post.php");

//theme options
require get_theme_file_path("/inc/codestar-framework/constra-theme-options.php");
//Theme metabox
require get_theme_file_path("/inc/codestar-framework/constra-theme-metabox.php");

if (!function_exists("constra_pagination")) {
    function constra_pagination() {
        global $wp_query;
        $links = paginate_links(array(
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'list',
            'mid_size'  => 2,
            'end_size'  => 2,
            'prev_text' => '<i class="fas fa-angle-double-left"></i>',
            'next_text' => '<i class="fas fa-angle-double-right"></i>',
        ));
        $links = str_replace("<ul class='page-numbers'>", "<ul class='pagination'>", $links);
        $links = str_replace("page-numbers", "page-link", $links);
        $links = str_replace("<li>", "<li class='page-item'>", $links);

        echo wp_kses_post($links);
    }
}

//

function constra_search_form($form) {
    $homedir     = home_url("/");
    $label       = __("Search for:", "constra");
    $placeholder = __("Type what you want and enter", "constra");

    $newform = <<<FORM
<form role="search" method="get" class="header__search-form" action="{$homedir}">
    <label for="search-field" class="w-100 mb-0">

        <input type="search" class="search-field form-control" placeholder="{$placeholder}" value="" name="s"
               title="{$label}" autocomplete="off">
    </label>

</form>
FORM;

    return $newform;
}
add_filter("get_search_form", "constra_search_form");