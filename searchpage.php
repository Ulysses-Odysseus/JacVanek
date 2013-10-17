<?php
/*
Template Name: Search Page
*/
get_header('shop'); ?>

	<?php // Preserving Search Page Results & Pagination

	global $query_string;

	$query_args = explode("&", $query_string);
	$search_query = array();

	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach

	$search = new WP_Query($search_query);
	?>
	
	<!-- Search Template Content -->
	<section id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 
            <?php if ( have_posts() ) : ?>
 
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->
 
                <?php shape_content_nav( 'nav-above' ); ?>
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'search' ); ?>
 
                <?php endwhile; ?>
 
                <?php shape_content_nav( 'nav-below' ); ?>
 
	            <?php else : ?>
	 
	                <?php get_template_part( 'no-results', 'search' ); ?>
	 
	            <?php endif; ?>
 
            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->

<?php get_footer('shop'); ?>