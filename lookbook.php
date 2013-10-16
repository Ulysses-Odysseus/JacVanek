<?php
/*
Template Name: Lookbook
*/
get_header('shop'); ?>
	
	<article class="lookBook_post">	
		<?php 

		// Settings 
		$args = array (
			'post_type'		=> 'post',
			'post_status' 	=> 'publish'
        );
        // Query
        $temp = $wp_query; // assign ordinal query to temp variable for later use  
        $wp_query = null;
        $wp_query = new WP_Query($args); 

        // Start Loop
        if( $wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();

        		// LookBooks
		        if(in_category('LookBook')) :

		        	// Feauture Image
		        	if(has_post_thumbnail()) :
		        		$thumb_size = 'full';
		        		?>
		        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size);?></a>
		        		<?php
		        	endif;

	            endif;

            endwhile;
        else :?>
            <p>Sorry, there are no LookBooks at this time. Come back again later.</p>
	    <?php endif;
        $wp_query = $temp;
		?>
	</article>

<?php get_footer('shop'); ?>