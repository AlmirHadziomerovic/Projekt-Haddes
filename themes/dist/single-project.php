<?php get_header();?>
<main id="Content" class="container">


<?php the_title('<h1 class="is-style-headline">','</h1>');?>

    <div class="meta">
        <time class="date" datetime="<?php the_time('Y-md'); ?>"><?php the_time('d.m.Y');?></time>
        <?php   
            the_category(', ');
        ?>
    </div>

    <?php
    if(have_posts()){
        while(have_posts()){
        the_post();
        the_content();
    }
    }
?>



<!-- Schlagwörter ausgeben falls vorhanden -->

<?php the_tags('<div class="meta tags">#','#','</div>');
?>




<?php get_footer();?>
