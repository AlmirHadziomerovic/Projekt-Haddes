<!-- About Seite-->

<?php 

    $class_name = ' about alignfull';

    if(!empty($about['className'])) {
        $class_name .= '' . esc_attr($about['className']);
    }
    ?>



<?php 
$about = get_field('about');
?>
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
                        echo ' <article class="about-text">' . $about['about_description'] . '</article>';
                    }
                    ?>
            </div>
     </div>
</div>