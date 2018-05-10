<?php
/**
 * VPS ONLINE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VPS_ONLINE
 */

if ( ! function_exists( 'vps_online_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vps_online_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on VPS ONLINE, use a find and replace
	 * to change 'vps-online' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'vps-online', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'primary', 'vps-online' ),
		'products' => esc_html__( 'products', 'vps-online' ),
		'footer1' => esc_html__( 'footer1', 'vps-online' ),
		'footer2' => esc_html__( 'footer2', 'vps-online' ),
	) );
	/*
	 * Custom thumbnail sizes
	 * for template
	 */
	add_image_size( 'custom-size', 850, 450, true );

	add_image_size( 'medium-size', 1100, 400, true );

	add_image_size( 'max-size', 1270, 628, true );

	/*
	 * Woocommerce Support
	 *
	 */
	function woocommerce_support() {
	    add_theme_support( 'woocommerce' );
	}

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
	add_theme_support( 'custom-background', apply_filters( 'vps_online_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'vps_online_setup' );
add_action( 'after_setup_theme', 'woocommerce_support' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vps_online_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vps_online_content_width', 640 );
}
add_action( 'after_setup_theme', 'vps_online_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vps_online_widgets_init() {

	/*Right Sidebar */
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vps-online' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vps-online' ),
		'before_widget' => '<div class="card"><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<h4 class="widget">',
		'after_title'   => '</h4>',
	) );

	/* Homepage Middle Market Sidebar */

	register_sidebar( array(
		'name'          => esc_html__( 'Home Sidebar 1', 'vps-online' ),
		'id'            => 'h1',
		'description'   => esc_html__( 'Add widgets here.', 'vps-online' ),
		'before_widget' => '<div class="hs1">',
		'after_widget'  => '</div>',
		'before_title'  => '<center><h5>',
		'after_title'   => '</h5></center>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home Sidebar 2', 'vps-online' ),
		'id'            => 'h2',
		'description'   => esc_html__( 'Add widgets here.', 'vps-online' ),
		'before_widget' => '<div class="hs2">',
		'after_widget'  => '</div>',
		'before_title'  => '<center><h5>',
		'after_title'   => '</h5></center>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home Sidebar 3', 'vps-online' ),
		'id'            => 'h3',
		'description'   => esc_html__( 'Add widgets here.', 'vps-online' ),
		'before_widget' => '<div class="hs3">',
		'after_widget'  => '</div>',
		'before_title'  => '<center><h5>',
		'after_title'   => '</h5></center>',
	) );

	/*Footer Sidebars */
		register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'vps_online' ),
		'id'            => 'f1',
		'description'   => esc_html__( 'Add widgets here.', 'vps_online' ),
		'before_widget' => '<div class="footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		) );		

		register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'vps_online' ),
		'id'            => 'f2',
		'description'   => esc_html__( 'Add widgets here.', 'vps_online' ),
		'before_widget' => '<div class="footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		) );

		register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'vps_online' ),
		'id'            => 'f3',
		'description'   => esc_html__( 'Add widgets here.', 'vps_online' ),
		'before_widget' => '<div class="footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		) );
}
add_action( 'widgets_init', 'vps_online_widgets_init' );


/* Excerpt Settings */
function new_excerpt_more($more) {
global $post;
return '<p><a class="read-more button center" href=" ' . get_permalink($post->ID) . '"><span class="black-text">Read More</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');
function custom_excerpt_length() {
return 60;
}
add_filter('excerpt_length', 'custom_excerpt_length');
add_action( 'widgets_init', 'vps_online_widgets_init' );

/**
 * Woocommerce Support
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'vps_online_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'vps_online_wrapper_end', 10);

function vps_online_wrapper_start() {
  echo '<div id="main" class="col s12 m8">';
}

function vps_online_wrapper_end() {
  echo '</div>';
}

function vps_online_theme_customizer( $wp_customize ) {

$wp_customize->add_section( 'vps_online_logo' , array(
'title'       => __( 'Change the logo', 'vps_online' ),
'priority'    => 20,
'description' => 'Add/Change logo of your website',
) );
$wp_customize->add_setting( 'vps_online_logo' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vps_online_logo', array(
'label'    => __( 'Upload your custom Logo', 'vps_online' ),
'section'  => 'vps_online_logo_section',
'settings' => 'vps_online_logo',
) ) );

$wp_customize->add_section( 'vps_online_slider_section' , array(
'title'       => __( 'VSP Slider Settings', 'vps_online' ),
'priority'    => 30,
'description' => 'Change the slider settings',
) );

$wp_customize->add_setting( 'vps_online_slider1' );
$wp_customize->add_setting( 'vps_online_slider2' );
$wp_customize->add_setting( 'vps_online_slider3' );
$wp_customize->add_setting( 'vps_online_slider4' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vps_online_slider1', array(
'label'    => __( 'Upload your custom Image', 'vps_online' ),
'section'  => 'vps_online_slider_section',
'settings' => 'vps_online_slider1',
) ) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vps_online_slider2', array(
'label'    => __( 'Upload your custom Image', 'vps_online' ),
'section'  => 'vps_online_slider_section',
'settings' => 'vps_online_slider2',
) ) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vps_online_slider3', array(
'label'    => __( 'Upload your custom Image', 'vps_online' ),
'section'  => 'vps_online_slider_section',
'settings' => 'vps_online_slider3',
) ) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vps_online_slider4', array(
'label'    => __( 'Upload your custom Image', 'vps_online' ),
'section'  => 'vps_online_slider_section',
'settings' => 'vps_online_slider4',
) ) );

}

add_action( 'customize_register', 'vps_online_theme_customizer' );

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
/**
 * Load extra scripts
 */
require get_template_directory() . '/inc/enqueue.php';
/**
 * Custom Widgets
 */
require get_template_directory() . '/inc/custom-widgets.php';
/**
 * pagination
 */
require get_template_directory() . '/inc/pagination.php';


