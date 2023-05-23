<?php
get_header(); ?>

<?php $blogFields = get_field('header','option'); ?>



<main id="content" class="container webseiten alignfull">
        <h1 class="is-style-headline">
            <?php
            $pagePosts = get_option('page_for_posts');

            if(!empty($pagePosts)){
                echo get_the_title($pagePosts);
            }
            else {
                bloginfo('name');
            }
            ?>
        </h1>
        <!--Blog Inhaaaalt einfügen -->
        <?php
        if(is_home()){
                echo '<p>' .get_field('blog_description', 'option') . '</p>';
            } else {
                if(the_archive_description()) {
                    the_archive_description('<p>', '</p>');
                }
            }
        ?>

<?php


// Ausgabe der Kategorie auf der Übersichtsseite des Blogs
    if(have_posts()): 
        while (have_posts()):
            the_post();
            include(get_template_directory() . '/template-parts/post-loop.php'); 
        endwhile;
    else:?>
            <article class="post">
                <h2 class="post-title">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h2>
                <div class="meta">
                    <time class="date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('d.m.Y');?></time>
                    <?php
                        the_category(',');
                        ?>
                </div>
            </article>

        
            <h2><?php _e('Es wurde kein Beitrag gefunden', 'wifi');?></h2>
        <?php endif;
        ?>
        <?php if(paginate_links());?>

        <nav class="pagination">
            <?php
            echo paginate_links(array(
                'prev_text' => '<span class="icon-arrow-left" aria-label="' . __('Vorherige Seite', 'wifi') . '"></span>',
                'next_text' => '<span class="icon-arrow-right" aria-label="'. __('Nächste Seite', 'wifi') . '"></span>'            
            ));
            ?>
        </nav>
     

        <?php


$paged = (get_query_var('paged')) ? get_query_var('pages') : 1;

//Post abfragen

$args = [
    'post_type' => 'project',
    'order' => 'rand',
    'posts_per_page' => 3,     
];

$project_query = new WP_Query($args);


?>







<!-- Gesamten Blog ausgeben-->




<!-- Schlagwörter ausgeben falls vorhanden -->

<?php the_tags('<div class="meta tags">#','#','</div>');
?>








        <div style="height: 30px" aria-hidden="true"></div>

        <ul class="icon-three">
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
        </ul>



        <h3 class="slider headline">Galerie</h3>













        
    </main>

<?php get_footer();?>
