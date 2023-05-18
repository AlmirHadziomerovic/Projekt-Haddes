<?php

/*
Template Name: Projekte

*/

get_header();?>



<h1 class="is-style-headline"><?php _e('Blog by Haddes', 'wifi'); ?></h1>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = [
        'post_type' => 'project'
        'order' => 'rand',
        'post_per_page' => 12,
        'pages' => $paged
    ];

    $project_query = new WP_Query($args);

?>
    <?php
    //Posts ausgeben
    include(get_template_directory() . '/template-parts/project-posts.php');


    pagination($paged, $project_query->max_num_pages);

    // Reset Post
    wp_reset_postdata(); ?>


</main>

<?php get_footer();