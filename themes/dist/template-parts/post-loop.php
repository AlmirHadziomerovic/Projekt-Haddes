
    <div class="blog-content">
        <a href="<?php the_permalink();?>">
                <h4 class="blog-headline">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h4>
                    <time class="date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('d.m.Y');?></time>
                    <a href="<?php the_permalink();?>"><?php the_title();?>  <?php
                                ?>
                                </a>
        </a>
    </div>
