
<?php 
$seo = get_field('block_seo');
?>

<?php $class_name = ' seo' ?>
<ul class="icon-three">
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
</ul>

<div class="<?php echo $class_name; ?>">
    <div class="seo-img">
                <?php
                 echo wp_get_attachment_image($seo['seo_img'], 'medium-large', false, array('class' => 'seo-img animate'));
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