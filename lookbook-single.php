<?php
/*
Template Name: Lookbook Single
*/
get_header('shop'); ?>
    
    <!-- <div class="slider clearfix">
      <!-- Image slider goes here 
    </div>-->
	
	<section>
		<?php // Start the loop
			if(have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		    <h1>FALL 2013</h1>
		    <span class="line"></span>
		    <p>Suspendisse euismod dolor et erat eleifend, et aliquet ante tempus. Sed risus est, interdum sit amet rutrum in, sagittis non lectus. Vestibulum nisl lectus, posuere ut ultricies id, bibendum et orci. Quisque elementum erat a consectetur auctor.</p>

	    <?php endwhile; else: ?>
            <p>Sorry, there are no post at this time.</p>
        <?php endif; ?>
        <!-- End: Loop -->
	</section>

<?php get_footer('shop'); ?>