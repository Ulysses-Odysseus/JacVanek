<?php 
	global $wp_query;
	$page_id = $wp_query->get_queried_object_id();

	$page = get_page( $page_id );
	$content = apply_filters('the_content', $page->post_content); 
	echo $content;
?>