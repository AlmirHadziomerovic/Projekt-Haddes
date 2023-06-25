<?php get_header();?>


<main id="container">
        <!--  Seite 404 Text/Textfeld einfügen und danach Textfeld ausgeben -->

    <?php
    $error = get_field('error', 'option');
    ?>
    <h1 class="error-title">
        <?php echo $error['error_title']; ?>
    </h1>
    <p class="error-text">
        <?php echo $error['error_text']; ?>
    </p>
    

  

    <!-- Logo auf der 404 ausgeben/ Schleife falls Logo vorhanden -->
    <div class="error-logo">
        <?php 
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        };
        ?>
    </div>
    <nav class="error-menu">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'error',
                    'container' => false,
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