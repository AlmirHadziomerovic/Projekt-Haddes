

<!-- Post des Blogs auf der Startseite ausgeben welche im Backend der Kunde erfassen kann-->
<?php
$anchor = '';

    if(!empty($block['anchor'])) {
        $anchor = 'id="' . esc_attr($block['anchor']) . '"';
    }

    $class_name = 'space-top';

if(!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}

?>



<?php $posts = get_field('posts'); 




$args = [
    'post_type' => 'post',
    'posts_per_page' => $posts['post_per_page'],     //durch die Variable kann der Kunde die Posts definieren
];


$post_query = new WP_Query($args);


if($post_query->have_posts()): ?>
  

<section id="<?php echo $anchor;?>" class="<?php echo $class_name;?>">
<div style="height: 50px" aria-hidden="true"></div>


<h2 class="is-style-headline"><?php echo $posts['ueberschrift'];?></h2>

<?php while($post_query->have_posts()):
    $post_query->the_post();
    
    
    include(get_template_directory(). '/template-parts/post-loop.php');
    
endwhile;?>


<?php
// get_option -> page_for_posts gibt die ID der Beitragseite zurück
$page_for_posts = get_option('page_for_posts'); ?>
<div style="height: 50px" aria-hidden="true"></div>

<div class="actions">
        <a href="<?php the_permalink($page_for_posts); ?>" class="btn"><?php _e('All Posts', 'wifi');?></a>   
    </div>
 <div style="height: 50px" aria-hidden="true"></div>

</section>




<?php endif;
wp_reset_postdata();
?>