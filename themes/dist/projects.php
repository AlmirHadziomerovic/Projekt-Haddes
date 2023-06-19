<?php
/*
Template Name: Projekte

*/

get_header(); ?>

<main id="content" class="container">


    <h1 class="is-style-headline"><?php _e('Blog by Johannes Meier', 'wifi'); ?></h1>

    <?php

        $paged = (get_query_var('paged')) ? get_query_var('pages') : 1;

        //Post abfragen
        
        $args = [
            'post_type' => 'project',
            'order' => 'rand',
            'posts_per_page' => 12,      //Wie viel Post sollen pro Seite angezeigt werden
            'paged' => $paged           //Pagination abfrage der weiteren Seite
        ];

        $project_query = new WP_Query($args);


    ?>

        <?php
        //Posts ausgeben
        if( $project_query->have_posts() ):?>


            <?php

                $class_name = 'projects space-top';

                if(wp_is_mobile()){
                    $class_name .= ' is-mobile';            // mit Punkt .= wird zur aktuellen Variable etwas verbunden
                } 
            ?>

            <section class="<?php echo $class_name;?>"> 
                <div class="projects-grid">

                    <?php while($project_query->have_posts()): ?>
                        <?php $project_query->the_post(); ?>
                        <!-- Felder ausgeben auf der Projekt Startseite--> 
                        <div class="grid-item">
                            <figure class="project">
                                <a href="<?php echo esc_url(get_permalink());?>">
                                <?php
                                    $projekt_image = get_field('project_image');
                                    if($projekt_image){
                                        echo wp_get_attachment_image($projekt_image,'projekt');
                                    } else {
                                        echo wp_get_attachment_image(get_field('default_projekt-image', 'options'), 'projekt');
                                    }
                                ?>
                                </a>
                                <figcaption class="project-caption">
                                    <h3 class="project-title">
                                        <a href="<?php echo esc_url(get_permalink());?>"><?php the_title();?></a>
                                    </h3>
                                </figcaption>
                            </figure>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>

            <?php
            else:
                _e('Es wurden keine Projekte gefunden');
            endif;
            



    pagination($paged, $project_query->max_num_pages);
    
 

    // Reset Post

    wp_reset_postdata();?>

    
</main>

<?php Get_footer();

?>