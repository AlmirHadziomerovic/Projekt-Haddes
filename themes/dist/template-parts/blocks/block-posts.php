

<?php
$anchor = '';

    if(!empty($block['anchor'])) {
        $anchor = 'id="' . esc_attr($block['anchor']) . '"';
    }

    $class_name = 'blog-wrapper alignfull';

if(!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}

?>

<?php $posts = get_field('posts'); 

$args = [
    'post_type' => 'post',
    'posts_per_page' => $posts['post_per_page'],
];


$post_query = new WP_Query($args);


if($post_query->have_posts()): ?>
  <ul class="icon-three">
            <li>
                <span class="icon-arrow-down" aria-hidden="false"></span>
            </li>
</ul>

  <h2 class="is-style-headline"><?php echo $posts['ueberschrift'];?></h2>

<section>
    <div id="<?php echo $anchor;?>" class="<?php echo $class_name;?>">
            <?php while($post_query->have_posts()):
                $post_query->the_post();
                
                include(get_template_directory(). '/template-parts/post-loop.php');
                
            endwhile;?>
    </div>
        <?php

        $page_for_posts = get_option('page_for_posts'); ?>
    <div class="actions">
            <a href="<?php the_permalink($page_for_posts); ?>" class="btn"><?php _e('All Posts', 'wifi');?></a>   
        </div>
</section>

<ul class="icon-three">
            <li>
                <span class="icon-arrow-down" aria-hidden="false"></span>
            </li>
</ul>


<?php endif;
wp_reset_postdata();
?>