<?php get_header(); ?>

<main id="content" class="container">


    <h1 class="is-style-headline"><?php the_title();?></h1>


    <div class="meta">
        <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time ('d.m.Y');?></time>

    </div>

    <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                }
            ?>
</main>

    <a class="btn"
        href="mailto:<?php echo antispambot('almir_hadziomerovic@hotmail.com');  ?>"><?php _e('Jetzt Kontaktieren', 'wifi'); ?></a>





<?php get_footer();?>