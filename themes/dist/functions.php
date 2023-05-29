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
        'primary' => __('Hauptmenü', 'wifi')

    ));


    register_nav_menus (array(
        'footer' => __('Footer', 'wifi')

    ));

    register_nav_menus (array(
        'two-menu' => __('two-menu', 'wifi')
    ));

    //Backend in Wordpress einfügen und die CSS Datei ergänzen damit es gleich ausschaut wie in Fronted
    add_theme_support('editor-styles');
    add_editor_Style('assets/CSS/style-editor.css');
    add_editor_Style('assets/icons/style.css');






    add_filter('upload_mimes', function($mimes = array()){
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        return $mimes;
    });





    //CSS Datei im HEAD einfügen




    add_action('wp_enqueue_scripts', function(){


        $version = wp_get_theme()->get('Version');

        wp_enqueue_style('webdev-css',get_template_directory_uri() . '/style.css');
        wp_enqueue_style('webdev-icons',get_template_directory_uri() . '/assets/font/icomoon-v1.0 Kopie/style.css');


    // JS einbinden 
    wp_enqueue_script('webdev-js', get_template_directory_uri(  ) . '/assets/js/scripts.js', [], $version, true);

    });





// Register Custom Post Type in WP
function post_type_project() {

	$labels = array(
		'name'                  => _x( 'Projekte', 'Post Type General Name', 'wifi' ),
		'singular_name'         => _x( 'Projekt', 'Post Type Singular Name', 'wifi' ),
		'menu_name'             => __( 'Projekte', 'wifi' ),
		'name_admin_bar'        => __( 'Projekte', 'wifi' ),
		'archives'              => __( 'Projekt archiv', 'wifi' ),
		'attributes'            => __( 'Item Attributes', 'wifi' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wifi' ),
		'all_items'             => __( 'All Items', 'wifi' ),
		'add_new_item'          => __( 'Neues Projekt hinzufügen', 'wifi' ),
		'add_new'               => __( 'Neues Projekt erstellen', 'wifi' ),
		'new_item'              => __( 'Neues Projekt', 'wifi' ),
		'edit_item'             => __( 'Projekt bearbeiten', 'wifi' ),
		'update_item'           => __( 'Update Item', 'wifi' ),
		'view_item'             => __( 'View Item', 'wifi' ),
		'view_items'            => __( 'View Items', 'wifi' ),
		'search_items'          => __( 'Nach Projekten suchen', 'wifi' ),
		'not_found'             => __( 'Kein Projekt gefunden', 'wifi' ),
		'not_found_in_trash'    => __( 'Nichts im Papierkorb gefunden', 'wifi' ),
		'featured_image'        => __( 'Featured Image', 'wifi' ),
		'set_featured_image'    => __( 'Set featured image', 'wifi' ),
		'remove_featured_image' => __( 'Remove featured image', 'wifi' ),
		'use_featured_image'    => __( 'Use as featured image', 'wifi' ),
		'insert_into_item'      => __( 'Insert into item', 'wifi' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wifi' ),
		'items_list'            => __( 'Items list', 'wifi' ),
		'items_list_navigation' => __( 'Items list navigation', 'wifi' ),
		'filter_items_list'     => __( 'Filter items list', 'wifi' ),
	);
	$args = array(
		'label'                 => __( 'Projekt', 'wifi' ),
		'description'           => __( 'Unsere Projekte', 'wifi' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'show_in_rest'          => true //Muss auf true sein, wenn der Gutenberg Editor angezeigt werden soll
	);
	register_post_type( 'project', $args );




$labels = array(
    'name'                  => _x( 'Projekte', 'Post Type General Name', 'wifi' ),
    'singular_name'         => _x( 'Projekt', 'Post Type Singular Name', 'wifi' ),
    'menu_name'             => __( 'Projekte', 'wifi' ),
    'name_admin_bar'        => __( 'Projekte', 'wifi' ),
    'archives'              => __( 'Projekt archiv', 'wifi' ),
    'attributes'            => __( 'Item Attributes', 'wifi' ),
    'parent_item_colon'     => __( 'Parent Item:', 'wifi' ),
    'all_items'             => __( 'All Items', 'wifi' ),
    'add_new_item'          => __( 'Neues Projekt hinzufügen', 'wifi' ),
    'add_new'               => __( 'Neues Projekt erstellen', 'wifi' ),
    'new_item'              => __( 'Neues Projekt', 'wifi' ),
    'edit_item'             => __( 'Projekt bearbeiten', 'wifi' ),
    'update_item'           => __( 'Update Item', 'wifi' ),
    'view_item'             => __( 'View Item', 'wifi' ),
    'view_items'            => __( 'View Items', 'wifi' ),
    'search_items'          => __( 'Nach Projekten suchen', 'wifi' ),
    'not_found'             => __( 'Kein Projekt gefunden', 'wifi' ),
    'not_found_in_trash'    => __( 'Nichts im Papierkorb gefunden', 'wifi' ),
    'featured_image'        => __( 'Featured Image', 'wifi' ),
    'set_featured_image'    => __( 'Set featured image', 'wifi' ),
    'remove_featured_image' => __( 'Remove featured image', 'wifi' ),
    'use_featured_image'    => __( 'Use as featured image', 'wifi' ),
    'insert_into_item'      => __( 'Insert into item', 'wifi' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'wifi' ),
    'items_list'            => __( 'Items list', 'wifi' ),
    'items_list_navigation' => __( 'Items list navigation', 'wifi' ),
    'filter_items_list'     => __( 'Filter items list', 'wifi' ),
);
$args = array(
    'label'                 => __( 'Haddes', 'wifi' ),
    'description'           => __( 'Unsere Projekte', 'wifi' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-format-gallery',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true //Muss auf true sein, wenn der Gutenberg Editor angezeigt werden soll
);
register_post_type( 'project', $args );

}
add_action( 'init', 'post_type_project', 0 );






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
                wp_enqueue_style('splideCss', get_template_directory_uri(). '/assets/CSS/splide.min.css');
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




?>