
<?php
    $anchor = '';
    $class_name = 'projects space-top';


    if(wp_is_mobile()){
        $class_name .= ' is-mobile';
    }
?>

<?php $projects = get_field('projekt_slider'); 

$args = [
            'post_type' => 'project',
            'posts_per_page' => $projects['post_per_page'],
];
$project_query = new WP_Query($args);



if($project_query->have_posts()):
?>
<ul class="icon-three">
            <li>
                <span class="icon-arrow-down" aria-hidden="false"></span>
            </li>
</ul>



<section id="<?php echo $anchor; ?>" class="<?php echo $class_name; ?>">
            <h3 class="is-style-headline portfolio"><?php echo $projects['ueberschrift'];?></h3>
            <div class="columns splide">
                <div class="splide__track">
                    <ul class="splide__list">
                       <?php while($project_query->have_posts()):
                       $project_query->the_post();?>
                       <li class="splide__slide">
                        <?php include(get_template_directory() . '/template-parts/project-loop.php'); ?>
                        </li>
                        <?php endwhile;?>
                    
                    </ul>
                </div>
            </div>

</section>

<?php endif;
wp_reset_postdata();
?>

