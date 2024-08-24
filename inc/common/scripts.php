<?php
function foodifly_theme_support() {
    /** thumbnail */
    add_theme_support( 'post-thumbnails' );
    /** automatic feed Link */
    add_theme_support( 'automatic-feed-links' );
    /** title tag */
    add_theme_support( 'title-tag' );
    /** HTML5 Support */
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    /** refresh Widget */
    add_theme_support('customize-selective-refresh-widgets');

    /** Post Format */
    add_theme_support('post-formats', array('image', 'video', 'audio', 'gallery', 'quote', 'link'));


};
add_action( 'after_setup_theme', 'foodifly_theme_support' );

function add_theme_scripts() {
    wp_enqueue_style( 'animate', get_template_directory_uri() . "/assets/css/animate.css", array(),'1.0', 'all' );
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . "/assets/css/flaticon.css", array(), '5.2.3', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/assets/css/fontawesome.css", array(), '6.0.0', 'all' );
    wp_enqueue_style( 'icofont', get_template_directory_uri() . "/assets/css/icofont.min.css", array(), '1.0.1', 'all' );
    wp_enqueue_style( 'foodifly-core', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . "/assets/css/swiper-min.css", array(), '1.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '5.1.3', true);
	wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.js', array( 'jquery' ), '1.0.1', true);
	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'imagesloaded' ), '3.0.6', true);
	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), '3.0.6', true);
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array( 'jquery' ), '3.4.1', true);
	wp_enqueue_script( 'lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array( 'jquery' ), '2.5.0', true);
	wp_enqueue_script( 'tab', get_template_directory_uri() . '/assets/js/tab.js', array( 'jquery' ), '1.0.0', true);
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array( 'jquery' ), '4.0.0', true);
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '1.1.3', true);
    wp_enqueue_script( 'foodifly-main', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), '1.0', true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
