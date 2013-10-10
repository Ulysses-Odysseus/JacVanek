<?php 
/*==========================*/
/***	Theme Settings 	  ***/
/*==========================*/

//Get WP resets when the 'after_setup_theme' hook is run
add_action( 'after_setup_theme', 'JAC_setup' );

function JAC_setup(){
	require_once( get_template_directory() . '/functions/wordpress_resets.php');
}


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


/*==========================*/
/***	Woocommerce 	  ***/
/*==========================*/

//Unhook woocommerce default wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Hook in custom wrappers for theme
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

//Declare woocommerce support
add_theme_support( 'woocommerce' );

//Let's get rid of some stuff
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );                         //Results count
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );                     //Product sorting
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );           //SKU & categories
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 ); //Review & other tabs

//Add some things
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 8 );                //SKU & categories ( after title )

//Product description on shop single
function tf_do_product_desc() {
	global $woocommerce, $post;

	if ( $post->post_content ) : ?>
		<div itemprop="description">

			<?php $heading = apply_filters('woocommerce_product_description_heading', __('Product Description', 'woocommerce')); ?>

			<?php the_content(); ?>

		</div>
	<?php endif;
}
add_action( 'woocommerce_single_product_summary', 'tf_do_product_desc', 15 );

// Template Filter
add_action('template_include', 'my_template');
function my_template($template){
	$new_template = '';

	// single post template
    if( is_single() ) {
      global $post;

      // LookBook Single
      if( has_term('LookBook', 'category', $post) ) {
        $new_template = locate_template(array('single-lookbook.php' ));
      }

    }
    return ('' != $new_template) ? $new_template : $template;
   
}
?>
