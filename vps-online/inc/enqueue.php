<?php
/**
 * Enqueue scripts and styles.
 */
function vps_online_scripts() {
	wp_enqueue_style( 'vps-online-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vps-online-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vps-online-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vps_online_scripts' );


function scripts_enqueue() {
	
wp_register_style( 'materializecss', get_template_directory_uri(). '/framework-css/materialize.min.css' );
wp_register_style( 'MaterialIcons','https://fonts.googleapis.com/icon?family=Material+Icons' );


wp_enqueue_style( 'materializecss' );
wp_enqueue_style( 'MaterialIcons' );



wp_register_script( 'jquerys', get_template_directory_uri(). '/js/jquery-3.0.0.min.js' );
wp_register_script( 'materializejs', get_template_directory_uri(). '/js/materialize.min.js' );
wp_register_script( 'scriptsjs', get_template_directory_uri(). '/js/scripts.js' );
wp_register_script( 'carouseljs', get_template_directory_uri(). '/js/carousel.js' );


wp_enqueue_script( 'jquerys' );
wp_enqueue_script( 'materializejs' );
wp_enqueue_script( 'scriptsjs' );
wp_enqueue_script( 'carouseljs' );

}
add_action( 'wp_enqueue_scripts', 'scripts_enqueue' );
?>
