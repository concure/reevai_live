<?php
/**
 * reevai functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package reevai
 */

if ( ! function_exists( 'reevai_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function reevai_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on reevai, use a find and replace
	 * to change 'reevai' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'reevai', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'reevai' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'reevai_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'reevai_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reevai_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reevai_content_width', 640 );
}
add_action( 'after_setup_theme', 'reevai_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reevai_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'reevai' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'reevai' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'reevai_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reevai_scripts() {
	//wp_enqueue_style( 'reevai-style', get_stylesheet_uri() );
	wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/bower_components/aos/dist/aos.css', array(), '20192802' );
	wp_enqueue_style( 'reevai-style', get_template_directory_uri() . '/css/style.css', array(), '20151215' );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/bower_components/tether/dist/js/tether.min.js', array(), false, true );
    wp_enqueue_script('aos', get_template_directory_uri() . '/bower_components/aos/dist/aos.js', array('jquery'), '20192802', true );
    wp_enqueue_script('animejs', get_template_directory_uri() . '/node_modules/animejs/lib/anime.min.js', array('jquery'), '20192802', true );
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/bower_components/masonry-layout/dist/masonry.pkgd.min.js', array(), false, true );
	wp_enqueue_script( 'reevai-script', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reevai_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Post Type

function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Referencie', 'Post Type General Name', 'reevai' ),
		'singular_name'         => _x( 'Referencia', 'Post Type Singular Name', 'reevai' ),
		'menu_name'             => __( 'Referencie', 'reevai' ),
		'name_admin_bar'        => __( 'Referencie', 'reevai' ),
	);
	$args = array(
		'label'                 => __( 'Referencia', 'reevai' ),
		'description'           => __( 'Post Type Description', 'reevai' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'menu_icon'				=> 'dashicons-star-filled',
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'referencie', $args );

}
add_action( 'init', 'custom_post_type', 0 );


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
