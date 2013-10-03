<?php
/*
Template Name: Cart
*/
get_header('shop'); ?>
    
    <!-- Woocommerce Content
    ---------------------->
    <section id="cart">
		<?php // Start the Loop
		if(have_posts()) : while(have_posts()) : the_post(); ?>

		      <?php the_content(); ?>

		<?php endwhile; else: ?>
			<p>Sorry, we've encountered an error. Web architects en route.</p>
		<?php endif; ?><!-- End the loop -->
    </section>

<?php get_footer('shop'); ?>