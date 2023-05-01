<?php

    add_action( 'after_setup_theme',function(){

        add_theme_support('title_tag');

        add_theme_support('html5', array(
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption', 
            'style', 
            'script')
        );


        add_theme_support( 'custom-logo', array(
            'height' => 60,
            'width' => 100,

            //Wenn SVG im Einsatz, müssen beide Werte auf True gesetzt werden
            'flex-height' => true,
            'flex-width' => true
        ));

    });


    register_nav_menus(array(
        'primary' => __('Hauptmenü', 'wifi')

    ));


    register_nav_menus (array(
        'footer' => __('Footer', 'wifi')

    ));

    register_nav_menus (array(
        'two-menu' => __('two-menu', 'wifi')
    ));





    add_filter('upload_mimes', function($mimes = array()){
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        return $mimes;
    });





    //CSS Datei im HEAD einfügen
    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_style('webdev-css',get_template_directory_uri() . '/style.css');
        wp_enqueue_style('webdev-icons',get_template_directory_uri() . '/icons/style.css');
        wp_enqueue_style('404',get_template_directory_uri() . '/uebung-style.css');

        //CSS Datei wird nur registriert aber nicht in den HEAD geladen
    wp_register_style('splide.css', get_template_directory_uri() . 'assets/splide-4.1.3/splide.css');
    });








?>