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
                    <a href="mailto:<?php echo antispambot('almir_hadziomerovic@hotmail.com'); ?>" 
                        class="btn"><?php echo $header['link_text']; ?></a>
                </div>
                <ul id="scroll">
                    <li>
                        <span class="icon-down" aria-hidden="false"></span>
                    </li>
                </ul>
        </div>
      
    </header>
</section>


    <?php
    elseif (is_admin()):
        echo '<span>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</span>';
    endif;
 ?>