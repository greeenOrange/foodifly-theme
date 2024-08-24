<?php
function foodifly_header_logo(){ 
    $logo_image_url = get_theme_mod('logo_image_url', get_template( ) . '/assets/images/img/logo.png');
    ?>
    <a href="<?php home_url('/') ?>">
    <img src="<?php echo $logo_image_url; ?>" alt=""></a>
    <?php
}
function foodifly_footer_logo(){ 
    $footer_logo_image_url = get_theme_mod('footer_logo_image_url', get_template( ) . '/assets/images/img/logo-footer.png');
    ?>
    <a href="<?php home_url('/') ?>">
    <img src="<?php echo $footer_logo_image_url; ?>" alt=""></a>
    <?php
}

function foodifly_footer_social(){
    $footer_facebook_url = get_theme_mod('footer_facebook_url', '#');
    $footer_twitter_url = get_theme_mod('footer_twitter_url', '#');
    $footer_linkedin_url = get_theme_mod('footer_linkedin_url', '#');
    $footer_vimeo_url = get_theme_mod('footer_vimeo_url', '#');

    ?>
    <?php if(!empty($footer_facebook_url)) : ?>
    <a class="facebook" href="<?php echo esc_url($footer_facebook_url); ?>"><i class="icofont-facebook"></i></a>
    <?php endif; ?>
    <?php if(!empty($footer_twitter_url)) : ?>
    <a class="twitter" href="<?php echo esc_url($footer_twitter_url); ?> "><i class="icofont-twitter"></i></a>
    <?php endif; ?>
    <?php if(!empty($footer_linkedin_url)) : ?>
    <a class="linkedin" href="<?php echo esc_url($footer_linkedin_url); ?>"><i class="icofont-linkedin"></i></a>
    <?php endif; ?>
    <?php if(!empty($footer_vimeo_url)) : ?>
    <a class="vimeo" href="<?php echo esc_url($footer_vimeo_url); ?>"><i class="icofont-vimeo"></i></a>
    <?php endif; ?>
<?php
}
// Add Footer Copyright
function foodifly_footer_copyright(){ 
    $footer_copyright = get_theme_mod('footer_copyright', __('2021 Mezban Design By FoxCoders', 'foodifly')); 
    ?>
    <p>
        <?php echo foodifly_kses($footer_copyright); ?></p>
    <?php 
}
function foodifly_kses( $allow_tags = '' ) {
	$allowed_html = [
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $allow_tags, $allowed_html );
}