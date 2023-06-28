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

    //Bildgröße für Wordpress hinzufügen
    add_image_size('projekt', 730, 487, array('center', 'center'));
    add_image_size('projekt', 1200, 700, array('center', 'center'));



    add_theme_support( 'custom-logo', array(
        'height' => 60,
        'width' => 100,

        //Wenn SVG im Einsatz, müssen beide Werte auf True gesetzt werden
        'flex-height' => true,
        'flex-width' => true
    ));

});


register_nav_menus(array(
    'primary' => __('Hauptmenü', 'wifi'),
    'footer' => __('Footer', 'wifi'),
    'two-menu' => __('two-menu', 'wifi')


));



//Backend in Wordpress einfügen und die CSS Datei ergänzen damit es gleich ausschaut wie in Fronted
add_theme_support('editor-styles');
add_editor_Style('assets/css/style-editor.css');
add_editor_Style('assets/icons/style.css');


