<?php 

/**
 * Essential theme supports
 **/
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults );

    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    /** custom menu **/
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'foodifly' ),
        'footer_menu'  => __( 'Footer Menu', 'foodifly' ),
    ) );
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme','theme_setup');

/**
 * Add a sidebar.
 */
function foodifly_widgets_init() {

    // Footer Widget 01: Footer Menu
    register_sidebar( array(
        'name'          => __( 'Footer widget 01', 'foodifly' ),
        'id'            => 'footer-widget-01',
        'description'   => __( 'Footer area with navigation menu.', 'foodifly' ),
        'before_widget' => '<div id="%1$s" class="footer-menu %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'foodifly_widgets_init' );

include_once('inc/common/scripts.php');

include_once('inc/walker-nav-menu.php');

include_once('inc/template-function.php');

if ( class_exists( 'Kirki' ) ) {
    include_once('inc/foodiflykirki.php');
}