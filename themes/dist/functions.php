<?php
    require_once(get_template_directory().'/inc/cpt/cpt-projects.php');
    require_once(get_template_directory().'/inc/acf.php');
    require_once(get_template_directory().'/inc/enqueue.php');
    require_once(get_template_directory().'/inc/media.php');
    require_once(get_template_directory().'/inc/pagination.php');
    require_once(get_template_directory().'/inc/theme.php');
    require_once(get_template_directory().'/login.php');


/*
    add_filter( 'allowed_block_types', 'misha_allowed_block_types' );

    function misha_allowed_block_types( $allowed_blocks ) {

        return array(
            'core/image',
            'core/paragraph',
            'core/heading',
            'acf-fields/webdev-SEO'
        );

    }

*/