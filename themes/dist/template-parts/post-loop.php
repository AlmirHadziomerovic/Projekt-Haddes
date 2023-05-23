
<!--Abfrage der Kategorien im Gutenberg und ausgabe auf der BlogSeite -->

<article class="post">
        <h2 class="post-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h2>
        <div class="meta">
            <time class="date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('d.m.Y');?></time>
            <?php
                            //Seperator kann angegeben werden
                            the_category(',');
                        ?>
        </div>
    </article>

    <!-- Blog Beitrag --> 