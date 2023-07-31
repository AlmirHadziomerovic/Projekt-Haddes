<?php
    $class_name = 'header-media-text columns reverse';

    if(!empty($block['className'])){
        $class_name .= '' . esc_attr($block['className']);
    }
?>


<?php $header = get_field('header'); ?>

<?php if(!empty($header)): ?>

<section>
    <header class="<?php echo $class_name;?>">
        <div id="page-header" style="background-image:url('<?php echo $header['image'];?>');" class="alignfull img">
                <h1  class="headline typing-demo"><?php echo $header['headline']; ?> </h1>
                <div class="actions">
                    <a href="mailto:<?php echo antispambot('office@haddes.at'); ?>"
                        class="btn"><?php echo $header['link_text']; ?></a>
                </div>
                <ul id="scroll">
                    <li>
                        <span class="icon-down is-mobile" aria-hidden="false"></span>
                    </li>
                </ul>
        </div>
    </header>
</section>


    <?php
    elseif (is_admin()):
        echo '<span>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</span>';
    endif;
 ?>