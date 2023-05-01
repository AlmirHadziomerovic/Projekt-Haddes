<footer id="footer-page" page="column container">

<nav id="footer-nav" class="column">
    
<?php
 //Menü einrichten, depth untermenü ebenen
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'container' => false,
        'menu_class'=> 'nav-menu',
        'fallback_cb' => false,
        'depth' =>2
    ));
?>
</nav>
<div class="social-links column">
    <a href="https://linkedin.com" target="_blank">
        <span class="icon-linkedin" aria-hidden="true"></span>
        <span class="screen-reader-text">Follow on Linked</span>
    </a>

    <a href="https://instagram.com" target="_blank">
        <span class="icon-instagram" aria-hidden="true"></span>
        <span class="screen-reader-text">Follow on Instagram</span>
    </a>

    <a href="https://github.com" target="_blank">
        <span class="icon-github" aria-hidden="true"></span>
        <span class="screen-reader-text">Follow on Github</span>
    </a>
    <a href="https://github.com" target="_blank">
        <span class="icon-facebook" aria-hidden="true"></span>
        <span class="screen-reader-text">Follow on Facebook</span>
    </a>
</div>
<div class="copyright column">
   

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