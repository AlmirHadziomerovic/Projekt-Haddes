<!DOCTYPE html>
<html lang <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    </nav>

    
    <?php wp_footer(); ?>
</body>