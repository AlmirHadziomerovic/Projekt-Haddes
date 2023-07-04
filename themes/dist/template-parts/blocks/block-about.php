
<?php 

    $class_name = ' about alignfull animate';

    if(!empty($about['className'])) {
        $class_name .= '' . esc_attr($about['className']);
    }
    ?>


<h1 class="is-style-headline"><?php the_title();?></h1>
<?php 
$about = get_field('about');
?>
<ul class="icon-three">
            <li>
                <span class="icon-arrow-down" aria-hidden="false"></span>
            </li>
</ul>

<div class="<?php echo $class_name; ?>">
    <div>
                <?php
                 echo wp_get_attachment_image($about['about_image'], 'medium-large', false, array('class' => 'about-img animate'));
                ?>
    </div>
    <div>
            <div class="about-text">
            
                <?php echo $about['about_description'];
                    if($about['about_description']) {
                       
                    }
                    ?>
            </div>
     </div>
</div>
<div class="actions">
                    <a href="mailto:<?php echo antispambot('almir_hadziomerovic@hotmail.com'); ?>" 
                        class="btn"><?php echo $about['about_link']; ?></a>
                </div>

<ul class="icon-three">
            <li>
                <span class="icon-arrow-down" aria-hidden="false"></span>
            </li>
</ul>
