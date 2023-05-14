<?php

add_action('after_setup_theme',function(){

    add_theme_support('title_tag');

    add_theme_support('html5',array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script')
    );

    //zusätzliche Bildgröße in WP Hinzufügen
    add_image_size('projekt', 730, 487, array('center', center));



    //Logo Größe 
    add_theme_Support('custom-logo', array(
        'height' => 60,
        'width' => 100,

        //SVG Datei wenn Sie im einsatz ist müssen beide Werte auf true sein
        'flex-height' => true,
        'flex-width' => true

    ));

    //Hauptmenü registrieren 
    register_nav_menus(array(
        'primary' =>__('Hauptmenü', 'wifi'),
     
    ));

    register_nav_menus(array(
        'footer' => __('Footer', 'wifi')
    ));

});




//svg & svgzip erlauben zum upload
add_filter ('upload_mimes', function($mimes = array()){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg-xml';
    return $mimes;
});

//CSS Datei im Head einfügen
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style( 'webdev-css', get_template_directory_uri(  ) . '/style.css');
    wp_enqueue_Style( 'webdev-icons', get_template_directory_uri(  ) . '/icons/style.css');



    // CSS Datei wird nur registriert aber nicht in den Head geladen
    wp_register_style('splide.css', get_template_directory_uri() . 'assets/splide-4.1.3/dist/css/splide.min.css');
});


//Register Custom Post Type












//Eigene Funktion für die Pagination(Projekte)
function pagination($paged = '', $max_page = '')
    {
        $big = 999999999; // need an unlikely integer
        if (!$paged) {
        $paged = get_query_var('paged');
        }

        if (!$max_page) {
        global $wp_query;
        //Isset - Prüft, ob eine Variable deklariert ist und sich von null unterscheidet
        $max_page = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
        }

        $html = '<nav class="pagination">';
        $html .= paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $max_page,
        'mid_size' => 1,
        'prev_text' => '<span class="icon-arrow-left" aria-label="' . __('Vorherige Seite', 'wifi') . '"></span>',
        'next_text' => '<span class="icon-arrow-right" aria-label="' . __('Nächste Seite', 'wifi') . '"></span>'
        ));
        $html .= '</nav>';
        echo $html;
}










// ACF Plugin Installieren bzw. ACF Einstellungen hinzufügen im Menü
if(function_exists('acf_add_options_page')){


 //ACF Felder aus den Wordpress ausgeben
 add_filter('acf/settings/save_json', function($path){
    $path = get_template_directory() . '/acf-fields';
    return $path;
});


//ACF Felder/Pfade laden
add_filter('acf/settings/load_json', function($paths){
    unset($paths[0]);
    $paths[] = get_template_directory() . 'acf-fields';
    return $paths;
});



    acf_add_options_page(array(
        'page_title' => 'Theme Einstellungen',
        'menu_title' => 'ACF Theme Einstellungen',
        'menu_slug' => 'webdev-theme-einstellungen',
        'position' => 50,
        'icon_url' => 'dashicons-art',
        'update_button' => __('Einstellungen speichern', 'wifi'),
        'update_message' => __('Einstellungen wurden gespeichert', 'wifi'),
        'capibility' => 'edit_posts'

    ));



    add_filter('block_categories_all', function($categories){
        return array_merge(
            array(
                array(
                    'slug' => 'wifi',
                    'title' => 'wifi'
                )
            ),
                $categories
        );

    }, 10, 2);



    //ACF Blöcke Initialisieren
    add_action('acf/init', function(){

        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                    'name' => 'webdev-header',
                    'title' => __('Header'),
                    'description' => __('Das ist der Headerbereich', 'wifi'),
                    'supports' => array('anchor' => false),
                    'category' => 'wifi',
                    'keywords' => array('header', 'wifi', 'kopfbereich'),
                    'post_type' => array('page'),
                    'align' => false,
                    'mode' => false,
                    'icon' => 'welcome-widgets-menus',
                    'render_template' => 'template-parts/blocks/block-header.php'
            ));
        }
    }); 









} else{
    add_action('admin_notice', function(){
        ?>
        <div class="error notice">
            <p><?php
            _e('Achtung: Das Plugin ACF Pro muss Installiert werden', 'wifi');
            ?></p>
        </div>
    <?php });
}






?>