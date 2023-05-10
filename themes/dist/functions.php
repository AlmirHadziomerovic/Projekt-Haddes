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


// ACF Plugin Installieren bzw. ACF Einstellungen hinzufügen im Menü
if(function_exists('acf_add_options_page')){

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