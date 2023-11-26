
    <div class="blog-content">
                <h3 class="blog-headline">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h3>
        <div class="meta">
                    <time class="date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('d.m.Y');?></time>
                    <a class="blog-category" href="<?php the_permalink();?>"><?php the_category(); ?></a>
        </div>
    </div>