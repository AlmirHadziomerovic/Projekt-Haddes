<?php get_header();?>

<main id="content" class="container">

    <?php
    $project = get_field('project', get_the_ID()); ?>

    <div class="meta">

        <div class="meta">
            <time class="date" datetime="<?php the_time('Y-md'); ?>"><?php the_time('d.m.Y');?></time>
            <div class="portfolio">
                <?php echo wp_get_attachment_image($project['project_image'], 'medium_large');?>
            </div>

        </div>
    </div>

    <?php
    if(have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
?>

</main>






<?php get_footer();?>
