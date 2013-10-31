<?php
//Add featured image to posts
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 400, false );
}

//Remove w/h attribute from posts. For responsive images
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//Add excerpt to pages
add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

/*==========================*/
/***    Template Filter   ***/
/*==========================*/

add_action('template_include', 'lookBook_single_template');
function lookBook_single_template($template){
	$new_template = '';

	// Single post template
    if( is_single() ) {
      global $post;

      // LookBook Single
      if( has_term('LookBook', 'category', $post) ) {
        $new_template = locate_template(array('single-lookbook.php' ));
      }

    }
    return ('' != $new_template) ? $new_template : $template;

}

/*==========================*/
/***      Custom Menu     ***/
/*==========================*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );