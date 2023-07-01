

<?php


$class_name = 'portfolio-wrapper'

?>

<?php
$portfolio = get_field('portfolio');

?>

<ul class="icon-three">
    <li>
        <span class="icon-arrow-down" aria-hidden="false"></span>
    </li>
</ul>

<div class="<?php echo $class_name; ?>">
        <div class="portfolio-img">
        <figure>
            <?php
            echo wp_get_attachment_image($portfolio['portfolio_img'], 'small', false, array('class' => 'portfolio-img animate'));
            ?>
        </figure>
        </div>

</div>

