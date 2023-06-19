
<!-- Projekt Holen von WP-->
<div style="height: 30px" aria-hidden="true"></div>


<figure class="project">
    <a href="<?php echo esc_url(get_permalink()); ?>">
        <?php
        $projekt_image = get_field('project_image', get_the_ID());

        if ($projekt_image) {
            echo wp_get_attachment_image($projekt_image, 'projekt');
        } else {
            echo wp_get_attachment_image(get_field('default-project-image', 'options'), 'projekt');
            
        }
        ?>
    </a>
</figure>

<div style="height: 30px" aria-hidden="true"></div>


<!-- Projekte-->