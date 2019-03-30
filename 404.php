<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package reevai
 */

get_header(); ?>
	<div class="container">
		<div class="error-page-wrapper">
			<h1><?php _e('Ľutujeme, stránka neexistuje.', 'reevai'); ?></h1>
			<div class="animated-error-bg">
				<?php include ('images/404_backround.svg'); ?>
			</div>
			<a href="<?php echo home_url(); ?>" class="btn"> <?php _e('Vrátiť sa', 'reevai'); ?></a>
		</div>
	</div>

<?php
get_footer();
