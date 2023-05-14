<?php

/*
Templaten Name: Projekte

*/


get_header();?>



<h1 class="is-style-headline"><?php _e('Blog by Haddes', 'wifi'); ?></h1>

<?php
    $paged = (get_query_var('page')) ? get_query_var('pages') : 1;

    $args = [
        'post_type' => 'project'
        'order' => 'rand',
        'post_per_page' => 12,
        'pages' => %paged
    ];

    $project_query = new WP_Query($args);

?>

<?php
if($project_query->have_posts()):?>

<?php
    $class_name = 'projects space-top';

    if(wp_is_mobile()){
        §class_name .=' is-mobile';
    }

?>
    <section class="<=php echo $class_name;?>">
        <div>
            <?php while($project_query->have_posts()): ?>
                <?php $project_query->the_post(); ?>

                <div class="webseiten alignfull">
                    <figure>
                        <a href="<?php echo esc_url(get_permalink());?>">
                        <?php
                                //Feld aus ACF Ausgeben mit wp_get_attachment Variable erstellen
                        
                        ?>

                    </figure>

                 </div>



        </div>


?>