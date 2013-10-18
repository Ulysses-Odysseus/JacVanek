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
/***    	LightBox   	  ***/
/*==========================*/
// LOAD PRETTY PHOTO for the whole site
add_action( 'wp_enqueue_scripts', 'frontend_scripts_include_lightbox' );
function frontend_scripts_include_lightbox() {
  global $woocommerce;
  $suffix      = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
  $lightbox_en = get_option( 'woocommerce_enable_lightbox' ) == 'yes' ? true : false;
  if ( $lightbox_en ) {
    wp_enqueue_script( 'prettyPhoto', $woocommerce->plugin_url() . '/assets/js/prettyPhoto/jquery.prettyPhoto' . $suffix . '.js', array( 'jquery' ), $woocommerce->version, true );
    wp_enqueue_script( 'prettyPhoto-init', $woocommerce->plugin_url() . '/assets/js/prettyPhoto/jquery.prettyPhoto.init' . $suffix . '.js', array( 'jquery' ), $woocommerce->version, true );
    wp_enqueue_style( 'woocommerce_prettyPhoto_css', $woocommerce->plugin_url() . '/assets/css/prettyPhoto.css' );
  }
}
?>