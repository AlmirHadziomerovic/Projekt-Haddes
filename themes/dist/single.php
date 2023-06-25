<?php get_header(); ?>

<!-- Single Blog ausgeben-->

<main id="content" class="container">


    <h1 class="is-style-headline"><?php the_title();?></h1>


    <div class="meta">
        <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time ('d.m.Y');?></time>
        <?php 
                    the_category(', ' );
                ?>
    </div>

    <!-- Post/blog ausgeben-->
    <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                }
            ?>

    <?php the_tags('<div class="meta tags">#', ' #', '</div>'); ?>

<?php echo the_field('project_image', 'projekt') ?>

</main>


<!--  Im Blog einen Button zur Kontaktaufnahme-->

    <a class="btn"
        href="mailto:<?php echo antispambot('almir_hadziomerovic@hotmail.com');  ?>"><?php _e('Jetzt Kontaktieren', 'wifi'); ?></a>





<?php get_footer();?>