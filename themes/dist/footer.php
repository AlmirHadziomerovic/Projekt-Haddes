<footer id="footer-page" page="column container">

<nav id="footer-nav" class="column">



    //Menü einrichten, depth-> untermenü ebenen
<?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'container' => false,
        'menu_class'=> 'nav-menu',
        'fallback_cb' => false,
        'depth' =>2
    ));
?>
</nav>
<div class=copyright column>

<?php
    echo sprint(__('&copy; %1$s, %2$s'), date('Y'),get_bloginfo('name'));
?>

</div>
</footer>

<div id="totop"><?php _e('top', 'wifi');?></div>


<?php
    wp_footer();
?>

</html>