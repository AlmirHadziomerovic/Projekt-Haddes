<?php
    // Header erstellt um mit seiten zu verbinden
    get_header();?>


<main id="content" class="container">

<?php The_title('<h1 class="is-style-headline">','</h1>'); ?>

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
}

?>



</main>

<?php
    //footer erstellt um mit seiten zu verbinden
    get_footer();
?>