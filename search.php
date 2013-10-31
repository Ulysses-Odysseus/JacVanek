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
	<section class="searchPage">
        <div>

        <?php if ( have_posts() ) : ?>

                <h1><?php printf( __( 'Search Results for : %s', 'jacvanek' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

            <?php //Start the Loop
            while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
				<?php $thumb_size = 'medium' //Options (thumbnail - medium - large - full)?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size);?></a>
            <?php// the_content(); ?>
            <span class="line"></span>

            <?php endwhile; ?>
            <?php else : ?>

                <h1 class="entry-title"><?php _e( 'Nothing Found', 'jacvanek' ); ?></h1>

				<div>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'jacvanek' ); ?></p>
					<div id="newSearch">
						<?php get_search_form(); ?>
					</div>
 				</div>
            <?php endif; ?>

	    </div>
    </section>

<?php get_footer('shop'); ?>