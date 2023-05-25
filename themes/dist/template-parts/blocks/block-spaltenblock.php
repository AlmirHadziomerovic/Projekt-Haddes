<!--
Foto auf der Startseite mit der möglichkeit die Richtung zu ändern
-->
<?php

$anchor = '';

if(!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}



$class_name = 'spaltenblock';

if(!empty($block['className'])){
    $class_name .= '' . esc_attr($block['className']);
}
?>

<?php

$spaltenBlock = get_field('spaltenblock');





$class_name .= '' . $spaltenBlock['color'];

if(!empty($spaltenBlock)):?>

<section <?php echo $anchor; ?> class="<?php echo $class_name;?>">
            <div class="content">
                <span class="title"><?php echo $spaltenBlock['title'];?></span>
             <p class="description"><?php echo $spaltenBlock['content'];?></p>
            </div>
            <div class="image">
            <?php echo wp_get_attachment_image($spaltenBlock['block'], 'medium_large');?>
            </div>
</section>



    <?php
    elseif (is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
    endif;
    ?>

