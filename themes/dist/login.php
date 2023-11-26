<?php add_action('login_enqueue_scripts', function () {
    wp_enqueue_style('custom-login', get_template_directory_uri() . '/assets/login.css', false);
});


add_filter('login_message', function ($message) {
    echo '<div class="login-logo">';
    echo '<a href="' . home_url() . '">';?>
<svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 162 53.2" style="enable-background:new 0 0 162 53.2;" xml:space="preserve">
<style type="text/css">
	.st0{display:none;}
	.st1{display:none;fill-rule:evenodd;clip-rule:evenodd;fill:#00A2FF;}
	.st2{enable-background:new    ;}
	.st3{fill:#255991;}
	.st4{font-family:'Apple-Chancery';}
	.st5{font-size:10.6331px;}
	.st6{fill:#929292;}
	.st7{font-size:4.2532px;}
</style>
<g id="Feder" class="st0">
	
		<image style="display:inline;overflow:visible;enable-background:new    ;" width="1222" height="400" id="image2" xlink:href="3D693CA1DD6CB51F.png"  transform="matrix(1.176 0.679 0.5726 -0.9918 -135 -134.7247)">
	</image>
</g>
<g id="HADES-LOGOGZeichenflche-1">

		<image style="display:none;overflow:visible;enable-background:new    ;" width="2475" height="1756" id="Ellipse--Linie" xlink:href="3D693CA1DD6CB51D.png"  transform="matrix(0.1098 0 0 3.601256e-02 -44.9999 -0.463)">
	</image>
	<path id="Ellipse" class="st1" d="M212.4,31.3c0-14.9-54.4-27.1-121.6-27.1C23.7,4.2-30.7,16.3-30.7,31.3
		c0,14.9,54.4,27.1,121.6,27.1C158,58.3,212.4,46.2,212.4,31.3z"/>
	<g id="Gruppe">
		<text transform="matrix(3.6446 0 0 1 19.5386 38.2657)" class="st2"><tspan x="0" y="0" class="st3 st4 st5">Had</tspan><tspan x="19.9" y="0" class="st6 st4 st5">des</tspan><tspan x="-3.3" y="5.1" class="st3 st4 st7">Hadziomerovic</tspan><tspan x="22.9" y="5.1" class="st6 st4 st7"> Design</tspan></text>
		<rect x="241.9" y="61.2" style="fill:none;" width="1.1" height="2.3"/>
	</g>
</g>
</svg>
<?php
    echo '</a></div>';
    if (!empty($message)) return $message;
});

add_action('login_footer', function () {
    ?>
    <p class="creator">
        <small>development by Haddes.</small>
        <a class="creator-logo" href="https://www.haddes.at" target="_blank" title="wifi">
            <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 162 53.2" style="enable-background:new 0 0 162 53.2;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:none;fill-rule:evenodd;clip-rule:evenodd;fill:#00A2FF;}
    .st2{enable-background:new    ;}
    .st3{fill:#255991;}
    .st4{font-family:'Apple-Chancery';}
    .st5{font-size:10.6331px;}
    .st6{fill:#929292;}
    .st7{font-size:4.2532px;}
</style>
                <g id="Feder" class="st0">

                    <image style="display:inline;overflow:visible;enable-background:new    ;" width="1222" height="400" id="image2" xlink:href="3D693CA1DD6CB51F.png"  transform="matrix(1.176 0.679 0.5726 -0.9918 -135 -134.7247)">
                    </image>
                </g>
                <g id="HADES-LOGOGZeichenflche-1">

                    <image style="display:none;overflow:visible;enable-background:new    ;" width="2475" height="1756" id="Ellipse--Linie" xlink:href="3D693CA1DD6CB51D.png"  transform="matrix(0.1098 0 0 3.601256e-02 -44.9999 -0.463)">
                    </image>
                    <path id="Ellipse" class="st1" d="M212.4,31.3c0-14.9-54.4-27.1-121.6-27.1C23.7,4.2-30.7,16.3-30.7,31.3
		c0,14.9,54.4,27.1,121.6,27.1C158,58.3,212.4,46.2,212.4,31.3z"/>
                    <g id="Gruppe">
                        <text transform="matrix(3.6446 0 0 1 19.5386 38.2657)" class="st2"><tspan x="0" y="0" class="st3 st4 st5">Had</tspan><tspan x="19.9" y="0" class="st6 st4 st5">des</tspan><tspan x="-3.3" y="5.1" class="st3 st4 st7">Hadziomerovic</tspan><tspan x="22.9" y="5.1" class="st6 st4 st7"> Design</tspan></text>
                        <rect x="241.9" y="61.2" style="fill:none;" width="1.1" height="2.3"/>
                    </g>
                </g>
</svg><img>
        </a>
    </p>
    <?php
});