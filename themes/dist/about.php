<?php get_header();?>


<?php $header  get_field('header');?>

<header>
    <div>
         <?php echo wp_get_atachment_image($header['header_image',] 'medium_large', false, array('class' => 'solumn header-media animate'));?>
    </div>
    <div>
        <?php echo $header['header_description']; ?>
    </div>
</header>


<?php
    elseif(is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
    endif;
?>
<?php get_footer();?>