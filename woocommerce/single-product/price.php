<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $post, $product;
?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<?php 

	//remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
		// $variations = $product->get_variation_attributes();
		// $postId = $variations['variation_id'];

	// If product has Variations(children) - [0] Been the first children if exist.
	if($product->children[0]):
		remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_variable_add_to_cart', 1 ); 

		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 60 ); 
		?>

		<?php
	else:
		remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
		add_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 1 );

		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 60 ); 
		?> 
		<p itemprop="price" class="price"><?php echo $product->get_price_html(); ?></p>
		<?php

	endif;

	// echo "<pre>";
	// print_r($product);
	// echo "<pre>";
	?>
	
	
	
	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>