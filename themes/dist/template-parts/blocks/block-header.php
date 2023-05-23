<?php

$class_name = 'header-media-text columns reverse';

if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}


<?php $header get_field('header', 'option');?>
<?php if(!empty($header)): ?>

<header class="<?php echo $class_name; ?>">
    <div class="column header-media">
        <?php
       echo wp_get_attachment_image($header['header_image'], 'medium_large', false, array('class' => 'column header-media animate'));
        ?>
    </div>
    <div class="column header-text animate">
        <h1 class="headline">
            <?php echo $header['header_description'];
            if ($header['header_description']) {
                echo ' <span class="name">' . $header['header_description'] . '</span>';
            }
            if ($header['small']) {
                echo ' <span class="work">' . $header['header_description'] . '</span>';
            } ?>
        </h1>
        <?php
        if ($header['link']) {
                echo '<a href="' . $header['link'] . '" class="btn">' . $header['link_text'] . '</a>';
            } ?>
    </div>
</header>

<?php
    elseif(is_admin()):
        echo '<h2>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</h2>';
    endif;
?>