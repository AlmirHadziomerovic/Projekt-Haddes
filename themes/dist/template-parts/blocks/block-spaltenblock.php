<!--
Foto auf der Startseite mit der möglichkeit die Richtung zu ändern
-->
<?php

$anchor = '';

if(!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}



$class_name = 'posts container ';

if(!empty($block['className'])){
    $class_name .= '' . esc_attr($block['className']);
}
?>

<?php

$spaltenBlock = get_field('spaltenblock');





$class_name .= '' . $spaltenBlock['color'];

if(!empty($spaltenBlock)):?>

<div style="height: 50px" aria-hidden="true"></div>

<section <?php echo $anchor; ?> class="<?php echo $class_name;?>">
    <article class="post-item">
        <div class="img-wrapper">
                    <?php echo wp_get_attachment_image($spaltenBlock['block'], 'medium_large');?>
        </div>



                    <div class="content">
                        <span class="content-headline"><?php echo $spaltenBlock['title'];?></span>
                    <p><?php echo $spaltenBlock['content'];?></p>
                    </div>
    </article>
            
</section>

<div style="height: 0px" aria-hidden="true"></div>



    <?php
    elseif (is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
    endif;
    ?>

