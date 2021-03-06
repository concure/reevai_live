<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reevai
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Ads: 753918145 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-753918145"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-753918145');
    </script>

        <!-- Event snippet for Reevai zvýšenie návštevnosti conversion page -->
    <script>
      gtag('event', 'conversion', {'send_to': 'AW-753918145/aOCzCMfq2ZcBEMHBv-cC'});
    </script>
<script src="http://localhost:35729/livereload.js"></script>
</head>

<body <?php body_class(); ?>>
<header class="header clear" role="banner">
    <div class="container">
        <div class="row">
            <a href="<?php echo home_url(); ?>" class="logo" data-aos="fade-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-img">
            </a>
            <nav class="navbar navbar-toggleable-md navbar-light" data-aos="fade-left">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => false, 'menu_class' => 'navbar-nav mr-auto')); ?>
                </div>
            </nav>
            <div id="open-menu" data-aos="fade-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
