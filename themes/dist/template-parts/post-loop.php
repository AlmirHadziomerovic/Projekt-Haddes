
<!--Abfrage der Kategorien im Gutenberg und ausgabe auf der BlogSeite -->


        <div class="blog-content1">
            <h2 class="blog-headline">
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h2>
                <time class="date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('d.m.Y');?></time>
                <?php
                                //Seperator kann angegeben werden
                                the_content();
                            ?>
                            
        </div>
  

    

    <!-- Blog Beitrag --> 