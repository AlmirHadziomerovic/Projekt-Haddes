<?php get_header();?>

<main id="content" class="container">

    <?php
    $project = get_field('project', get_the_ID()); ?>
    <ul class="icon-three">
        <li>
            <span class="icon-arrow-down" aria-hidden="false"></span>
        </li>
    </ul>
    <div class="project animate">
            <h1 class="single-project_title">
                <?php echo $project['project_title'];?>
            </h1>
            <div class="project_img">
                <?php echo wp_get_attachment_image($project['project_image'], 'medium_large');?>
            </div>
            <span class="project_description">
                <?php echo $project['project_description'];?>
            </span>
    </div>
    <ul class="icon-three">
        <li>
            <span class="icon-arrow-down" aria-hidden="false"></span>
        </li>
    </ul>


</main>






<?php get_footer();?>
