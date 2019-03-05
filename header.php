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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header clear" role="banner">
	<nav class="navbar navbar-toggleable-md navbar-light">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/reevai_logo.png" alt="Logo" class="logo-img">
		</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => false, 'menu_class' => 'navbar-nav mr-auto')); ?>
		</div>
	</nav>
</header>
