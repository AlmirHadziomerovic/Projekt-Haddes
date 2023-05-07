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
        'footer' => __('Footermenü', 'wifi')
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
})


?>