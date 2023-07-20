<?php


if(function_exists('acf_add_options_page')){


    //ACF Felder aus den Wordpress in VsCode ausgeben
    add_filter('acf/settings/save_json', function($path){
        $path = get_template_directory() . '/acf-fields';
        return $path;
    });


    //ACF Felder/Pfade aus VsCode laden
    add_filter('acf/settings/load_json', function($paths){
        unset($paths[0]);
        $paths[] = get_template_directory() . 'acf-fields';
        return $paths;
    });




    acf_add_options_page(array(
        'page_title' => 'Theme Einstellungen',
        'menu_title' => 'Theme Einstellungen',
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
            //Blöcke neu anlegen in Seiten/Header
            acf_register_block_type(array(
                'name' => 'webdev-header',
                'title' => __('Header', 'wifi'),
                'description' => __('Das ist der Headerbereich', 'wifi'),
                'supports' => array('anchor' => false),
                'category' => 'wifi',
                'keywords' => array('header', 'wifi', 'kopfbereich'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' => 'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-header.php' //Datei erstellen in Blocks
            ));

            //Services Block anlegen
            acf_register_block_type(array(
                'name' => 'webdev-services',
                'title' => __('Services', 'wifi'),
                'description' => __('Das ist der Servicebereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('services', 'services', 'Teaser', 'wifi'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' => 'buddicons-friends',
                'render_template' => 'template-parts/blocks/block-services.php' //Datei erstellen in Blocks

            ));
            //Spalten Block anlegen
            acf_register_block_type(array(
                'name' => 'webdev-spalten',
                'title' => __('Spaltenblock', 'wifi'),
                'description' => __('Das ist der Spaltenblock', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('services', 'services', 'Teaser', 'wifi'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' => 'buddicons-friends',
                'render_template' => 'template-parts/blocks/block-spaltenblock.php' //Datei erstellen in Blocks

            ));
            //Projekte Block anlegen
            acf_register_block_type(array(
                'name' => 'webdev-projects',
                'title' => __('Projekte Carousel', 'wifi'),
                'description' => __('Das ist das Projekt Carousel', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('carousel', 'Projekte','wifi'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' => 'buddicons-friends',
                'render_template' => 'template-parts/blocks/block-projects.php', //Datei erstellen in Blocks
                'enqueue_assets' => function(){
                    wp_enqueue_style('splideCss', get_template_directory_uri(). '/assets/css/splide.min.css');
                    wp_enqueue_script('splideMain', get_template_directory_uri(). '/assets/js/splide.min.js');
                    wp_enqueue_script('splideConfig', get_template_directory_uri(). '/assets/js/splideConfig.js');

                }
            ));
            //Letzten Posts
            acf_register_block_type(array(
                'name' => 'webdev-latestposts',
                'title' => __('Beitragsblock', 'wifi'),
                'description' => __('Das ist der Beitragsblock', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('beiträge', 'beitrag', 'news', 'wifi'),
                'post_type' => array('page', 'posts'),
                'align' => false,
                'mode' => false,
                'icon' => 'format-status',
                'render_template' => 'template-parts/blocks/block-posts.php' //Datei erstellen in Blocks

            ));
            //About
            acf_register_block_type(array(
                'name' => 'webdev-about',
                'title' => __('About', 'wifi'),
                'description' => __('Das ist die About Me Seite', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('About Me', 'Haddes', 'news', 'wifi'),
                'post_type' => array('page', 'posts'),
                'align' => false,
                'mode' => false,
                'icon' => 'admin-users',
                'render_template' => 'template-parts/blocks/block-about.php' //Datei erstellen in Blocks

            ));
            //SEO
            acf_register_block_type(array(
                'name' => 'webdev-SEO',
                'title' => __('SEO', 'wifi'),
                'description' => __('Das ist der Seo Bereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('SEO', 'Reichweite', 'news', 'wifi'),
                'post_type' => array('page', 'posts'),
                'align' => false,
                'mode' => false,
                'icon' => 'paperclip',
                'render_template' => 'template-parts/blocks/block-seo.php' //Datei erstellen in Blocks

            ));
            //Portfolio
            acf_register_block_type(array(
                'name' => 'webdev-Portfolio',
                'title' => __('Portfolio', 'wifi'),
                'description' => __('Das ist der Portfolio Bereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('Portfolio', 'Haddes', 'news', 'wifi'),
                'post_type' => array('page', 'posts'),
                'align' => false,
                'mode' => false,
                'icon' => 'paperclip',
                'render_template' => 'template-parts/blocks/block-portfolio.php' //Datei erstellen in Blocks

            ));
            //Projects
            acf_register_block_type(array(
                'name' => 'webdev-AllProjects',
                'title' => __('All Projects', 'wifi'),
                'description' => __('Das ist der Projekte Bereich', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('Projects', 'Haddes', 'news', 'wifi'),
                'post_type' => array('page', 'posts'),
                'align' => false,
                'mode' => false,
                'icon' => 'paperclip',
                'render_template' => 'template-parts/blocks/block-all-projects.php'
            ));
            //Projects
            acf_register_block_type(array(
                'name' => 'Leistungen',
                'title' => __('Leistungen', 'wifi'),
                'description' => __('Das sind unsere Leistungen', 'wifi'),
                'supports' => array('anchor' => true),
                'category' => 'wifi',
                'keywords' => array('Leistunge', 'Haddes', 'news', 'wifi'),
                'post_type' => array('page', 'posts'),
                'align' => false,
                'mode' => false,
                'icon' => 'format-status',
                'render_template' => 'template-parts/blocks/block-leistungen.php'
            ));
        }

    }   );





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

