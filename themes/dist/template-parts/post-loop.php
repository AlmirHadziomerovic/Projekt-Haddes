
        <div class="blog-content">
            <h2 class="blog-headline">
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h2>
                <time class="date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('d.m.Y');?></time>
                <a href="<?php the_permalink();?>"><?php the_title();?>  <?php
                                //Seperator kann angegeben werden bei einfügung (the_content() wird der Gutenberg Content ausgegeben
                            ?>
                            </a>
        </div>
