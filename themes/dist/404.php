<?php get_header();?>


<main id="error">
    <h1>
        <?php _e('Ups, da ist was schief gegangen', 'wifi'); ?>
    </h1>

    <p>
    <?php _e('Leider gibt es die Seite, die du gesucht hast, auf unserer Webseite nicht.
        Doch vielleicht haben wir trotzdem etwas für dich.
        Lass und gemeinsam nachsehen!');
    ?>
    </p>

    <?php 
    if (function_exists('the_custom_logo')){
        the_custom_logo();
    }
    ?>
    </div>
    <nav class="error-menu">

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'error',
                    'container' => 'false',
                    'menu_class' => 'nav-menu',
                    'menu_id' => 'nav-error',
                    'fallback_cb' => false,
                    'depth' => 1
                )
                );
        ?>
    </nav>
</main>

<?php get_footer();?>