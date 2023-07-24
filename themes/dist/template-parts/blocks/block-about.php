
<?php 

    $class_name = ' about alignfull animate';

    if(!empty($about['className'])) {
        $class_name .= '' . esc_attr($about['className']);
    }

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

            <div class="about-text">
                <h2 class="titleabout"> HALLO</h2>
                <?php echo $about['about_description'];
                ?>
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
