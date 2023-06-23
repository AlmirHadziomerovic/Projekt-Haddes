
<?php 
$seo = get_field('block_seo');
?>


<div class="<?php echo $class_name; ?>">
    <div>
                <?php
                 echo wp_get_attachment_image($seo['seo_img'], 'medium-large', false, array('class' => 'about-img animate'));
                ?>
    </div>
    <div>
            <div class="about-text">
            
                <?php echo $seo['seo_description'];
                    if($seo['seo_description']) {
                       
                    }
                    ?>
            </div>
     </div>
</div>