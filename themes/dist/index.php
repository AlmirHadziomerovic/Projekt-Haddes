<?php
get_header(); ?>

<ul class="icon-three">
    <li>
        <span class="icon-arrow-down" aria-hidden="false"></span>
    </li>
</ul>
<?php $blogFields = get_field('header','option'); ?>


<main id="content" class="container alignfull">


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

    <?php $blog = get_field('blog', 'option')?>
    <?php
        if(is_home()){
                echo '<h2 class="blog_title">' .$blog['blog_description1'] . '</h2>';
            } else {
                if(the_archive_description()) {
                    the_archive_description('<p>', '</p>');
                }
            }
        ?>
    <?php

    if(have_posts()): ?>
    <div class="blog-wrapper">
        <?php while (have_posts()):
            the_post();
         
            include(get_template_directory() . '/template-parts/post-loop.php'); 
        endwhile; ?>
        </div>
   <?php
    else:?>
    <article class="post">
        <h3 class="post-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h3>
        <div class="meta">
            <time class="date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('d.m.Y');?></time>
            <?php
                        the_category(',');
                        ?>
        </div>
    </article>

    <h4><?php _e('Es wurde kein Beitrag gefunden', 'wifi');?></h4>
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


$args = [
    'post_type' => 'project',
    'order' => 'rand',
    'posts_per_page' => 3,     
];

$project_query = new WP_Query($args);


?>

    <?php the_tags('<div class="meta tags">#','#','</div>');
?>




</main>
<ul class="icon-three">
    <li>
        <span class="icon-arrow-down" aria-hidden="false"></span>
    </li>
</ul>
<?php get_footer();?>