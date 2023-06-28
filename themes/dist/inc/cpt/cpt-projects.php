<?php



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

