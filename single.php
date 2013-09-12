<?php
get_header();
?>
    
    <!-- Post Content
    ---------------------->
    <section>
      <?php // Start the Loop
      if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article>
          <time datetime="2009-02-18"><?php the_modified_time('F j, Y'); ?></time>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <span class="singleLine"></span>
          <div id="comment_section" class="comments">
              <?php comments_template(); ?>
          </div>
        </article>

      <?php endwhile; else: ?>
        <p>Sorry, there are no shows at this time</p>
      <?php endif; ?><!-- End the loop -->

    </section>
    <!-- #End: Post Content -->

<?php get_footer(); ?>