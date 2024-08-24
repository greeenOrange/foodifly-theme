<!doctype html>
<html <?php language_attributes( ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">


    <?php wp_head(); ?>
</head>

<body <?php body_class( ); ?>>



    <!-- header area start -->
<?php echo get_template_part('template-parts/header/header-1'); ?>
    <!-- header area end -->