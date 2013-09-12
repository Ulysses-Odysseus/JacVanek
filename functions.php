<?php 
/*==========================*/
/***	Theme Settings 	  ***/
/*==========================*/
/** Tell WordPress to run JAC_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'JAC_setup' );
function JAC_setup(){
	//Output theme settings
	require_once( get_template_directory() . '/functions/wordpress_resets.php');
	/*****/
}


// Adding Featured Image for Posts
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 400, false );
}

// Remove width and Height attribute from posts
// For responsive images
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

?>