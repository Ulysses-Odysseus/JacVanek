<?php
/*
Template Name: Lookbook Single
*/
get_header('shop'); ?>
	
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

		        	// The Content
		        	echo '<article class="slider">';
							the_content();
	                echo '</article>';
	                
	                // Text and Title
	                echo '<article class="lookBook_post">'; ?>
		                <h1><?php the_title();?></h1>
		                <span class="line"></span>
		                <?php 
		                if(the_excerpt() != '') : the_excerpt();
			            endif;
		            echo '</article>';
			        ?>
	                <?php
	            endif;

            endwhile;
            wp_reset_postdata();
	    endif;
        $wp_query = $temp;
		?>

<?php get_footer('shop'); ?>