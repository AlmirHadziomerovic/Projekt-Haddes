<?php

$class_name = 'leistungen'

?>

<?php
$leistungen = get_field('leistungen');

?>



<div class="<?php echo $class_name; ?>">
        <figure class="leistungen-img">
            <?php
            echo wp_get_attachment_image($leistungen['leistungen_img'], 'small', false, array('class' => 'leistungen_img animate'));
            ?>
        </figure>
        <span class="leistungen_description">
            <?php echo $leistungen['leistungen_description'];?>
        </span>
    <figure class="leistungen-img_Kopie">
        <?php
            echo wp_get_attachment_image($leistungen['leistungen_img_Kopie'], 'small', false, array('class' => 'leistungen_img animate'));
        ?>
    </figure>
    <span class="leistungen_description_Kopie">
            <?php echo $leistungen['leistungen_description_Kopie'];?>
        </span>
    <figure class="leistungen-img_Kopie">
        <?php
            echo wp_get_attachment_image($leistungen['leistungen_img_Kopie'], 'small', false, array('class' => 'leistungen_img animate'));
        ?>
    </figure>
    <span class="leistungen_description_Kopie">
            <?php echo $leistungen['leistungen_description_Kopie'];?>
        </span>

</div>

