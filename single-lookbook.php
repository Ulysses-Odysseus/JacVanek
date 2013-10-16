<?php
/*
Template Name: Lookbook Single
*/
get_header('shop'); ?>
	
	<!-- LookBook Post Content
    ---------------------->
      <?php // Start the Loop
      if(have_posts()) : while(have_posts()) : the_post(); 

        // LookBooks
        if(in_category('LookBook')) :

        	// The Slider
        	echo '<article class="slider">';
					the_content();
            echo '</article>';
            
            // Text and Title
            echo '<article class="lookBook_meta">'; ?>
                <h1><?php the_title();?></h1>
                <span class="line"></span>
                <?php 
                if(the_excerpt() != '') : the_excerpt();
	            endif;
            echo '</article>';
            
        endif;

       endwhile; else : ?>
        <p>Sorry, we've encountered an error. Web architects en route.</p>
      <?php endif; ?><!-- End the loop -->

    <!-- #End: Post Content -->

<?php get_footer('shop'); ?>