<?php
/*
Template Name: Lookbook Single
*/
get_header('shop'); ?>
	
	<section class="lookBook_post">	
		<?php 

		// Settings 
		$args = array (
			'post_type'			=> 'post',
			'post_status' 		=> 'publish'
        );

        // Query
        $temp = $wp_query; // assign ordinal query to temp variable for later use  
        $wp_query = null;
        $wp_query = new WP_Query($args); 

        // Start Loop
        if( $wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();

        		// LookBooks
		        if(in_category('LookBook')) :

		        	// The Content
	                the_content();
	                ?>
	                <h1><?php the_title();?></h1>
	                <span class="line"></span>
	                <?php 
	                if(the_excerpt() != '') : the_excerpt();
		            endif;
			        ?>
	                <?php
	            endif;

            endwhile;
            wp_reset_postdata();
	    endif;
        $wp_query = $temp;
		?>
	</section>

<?php get_footer('shop'); ?>