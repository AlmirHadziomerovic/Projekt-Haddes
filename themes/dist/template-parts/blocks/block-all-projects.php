<?php

$class_name = ' allProjects';

$args = [
    'post_type' => 'project'
];
$project_query = new WP_Query($args); ?>

<ul class="icon-three">
    <li>
        <span class="icon-arrow-down" aria-hidden="false"></span>
    </li>
</ul>
<?php

if($project_query->have_posts()): ?>
   <div class="<?php echo $class_name ?>">
       <?php  while ($project_query->have_posts()):
        $project_query->the_post();
            $allProjects = get_field('project', get_the_ID());
             ?>


        <a href="<?php the_permalink();?>">
        <figure class="allProjectsImg">
            <?php
            echo wp_get_attachment_image($allProjects['project_image'], 'Projects', false, array('class' => 'animate'));
            ?>
            <figcaption class="project-title">
                <?php echo $allProjects['project_title'];?>
            </figcaption>
        </figure>
        </a>


    <?php endwhile;?>
   </div>
<?php endif;


wp_reset_postdata();
?>
<ul class="icon-three">
    <li>
        <span class="icon-arrow-down" aria-hidden="false"></span>
    </li>
</ul>
