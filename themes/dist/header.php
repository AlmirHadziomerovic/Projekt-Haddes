<!DOCTYPE html>
<html lang <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sie Benötigen einen NEUEN Webauftritt? Ich helfe Ihnen dabei ganz unkompliziert">
    <title>
            Haddes übernimmt für Sie die Herausforderung Webauftritt!
    </title>
    <!-- Damit Plugin/Wordpress Daten in den Head spielen können-->
    <?php wp_head(); ?> 

</head>
<body <?php body_class();?>>
    <a href="#content" class="screen-reader-text"><?php _e('Zum Inhalt Springen', 'wifi'); ?></a>
    <nav id="navbar">
        <div class="container">
            <div id="brand">
               <?php
                if(function_exists('the_custom_logo')){
                    the_custom_logo();
                }
               ?>
            </div>
            <input type="checkbox" id="nav-toggle">
            <label for="nav-toggle" id="nav-button">
                <span id="nav-button-icon" aria-hidden="true"></span>
                <span class="screen-reader-text"><?php 
                _e('Navigation öffnen/schließen', 'wifi');?></span>
            </label>


                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'menu_id' => 'nav-main',
                    'fallback_cb' => false,
                    'depth' => 2
                ));
                  ?>
        </div>




<sidebar class="social-link columns">
<?php 
    $social_links = get_field('social_links', 'option');
    ?>
<?php if($social_links['facebook']):?>
    
    <a href="<?php echo $social_links['facebook'];?>" target="_blank">
        <span class="icon-facebook1" aria-hidden="true"></span>
        <span class="screen-reader-text"><?php _e('Follow on Facebook', 'wifi');?></span>
    </a>    
    <?php endif;?>
    <?php if($social_links['email']):?>
    
    <a href="<?php echo $social_links['email'];?>" target="_blank">
        <span class="icon-mail" aria-hidden="true"></span>
        <span class="screen-reader-text"><?php _e('Contact Me', 'wifi');?></span>
    </a>  
    <?php endif;?>
  
    <?php if($social_links['instagram']):?>
    
    <a href="<?php echo $social_links['instagram'];?>" target="_blank">
        <span class="icon-instagram" aria-hidden="true"></span>
        <span class="screen-reader-text"><?php _e('Contact Me', 'wifi');?></span>
    </a>    
    <?php endif;?>
    <?php if($social_links['instagram']):?>
    
    <a href="<?php echo $social_links['phone'];?>" target="_blank">
        <span class="icon-phone" aria-hidden="true"></span>
        <span class="screen-reader-text"><?php _e('Call us', 'wifi');?></span>
    </a>    
    <?php endif;?>
</sidebar>
    </nav>

    
