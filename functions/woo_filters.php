<?php
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
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );           //Remove You may also like...

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

/* Product Price
=============================*/

/* Change From to Price in Product */
add_filter('woocommerce_variable_price_html','custom_from',10);
add_filter('woocommerce_grouped_price_html','custom_from',10);
add_filter('woocommerce_variable_sale_price_html','custom_from',10);

function custom_from($price){
	$new_from = "";
	$price = str_replace('From:',$new_from,$price);
	return $price;
}

// Display Product Price
add_filter('woocommerce_get_price_html','product_price',90);
function product_price($price){
	// echo "Test";
	return $price;
}

add_filter('woocommerce_variation_price_html', 'variation_price');
function variation_price($price){
	// echo "test -";
	return $price;
}
