<!-- Header Background Image-->


<?php
    $class_name = 'header-media-text columns reverse';

    if(!empty($block['className'])){
        $class_name .= '' . esc_attr($block['className']);
    }
?>


<?php $header = get_field('header'); ?>

<!-- If Schleife wenn in den Felder nichts eingetragen wird-->
<?php if(!empty($header)): ?>





    <!-- Startseite Aufbauen Image/Headline-->

<section>
    <header class="<?php echo $class_name;?>">
        <div id="page-header" style="background-image:url('<?php echo $header['image'];?>');" class="alignfull">
                <h1  class="headline"><?php echo $header['headline']; ?> </h1>
                    <div class="actions">
                    <a href="contact.html" class="btn"><?php echo $header['link_text']; ?></a>
                </div>
        </div>
    </header>
</section>


    <?php
    elseif (is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
    endif;
 ?>