

<?php


$class_name = 'portfolio-wrapper allProjects'

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
        <div class="portfolio-img2">
            <figure>
                <?php
                echo wp_get_attachment_image($portfolio['portfolio_img'], 'extrasmall', false, array('class' => 'portfolio-img1 animate'));
                ?>
            </figure>
         </div>
        <div class="portfolio-img3">
            <figure>
                <?php
                echo wp_get_attachment_image($portfolio['portfolio_img'], 'small', false, array('class' => 'portfolio-img2 animate'));
                ?>
            </figure>
         </div>
</div>

