

<figure class="project">
    <a href="<?php echo esc_url(get_permalink()); ?>">
        <?php
        $projekt = get_field('project', get_the_ID());
        if ($projekt['project_image']) {
            echo wp_get_attachment_image($projekt['project_image'], 'projekt');
        }
        ?>
    </a>
    <figcaption class="project-caption">
        <h3 class="project-title">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h3>
    </figcaption>
</figure>
