<?php get_header('blog'); ?>
    
    <!-- Single Post Content
    ---------------------->
    <section>
      <?php // Start the Loop
      if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article>
          <time datetime="<?php the_date('Y-m-d'); ?>"><?php the_modified_time('F j, Y'); ?></time>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php if(the_excerpt() ) : 
            the_excerpt();
            endif;
          ?>
          <span class="singleLine"></span>
          <div id="comment_section" class="comments">
              <?php comments_template(); ?>
          </div>
        </article>

      <?php endwhile; else: ?>
        <p>Sorry, we've encountered an error. Web architects en route.</p>
      <?php endif; ?><!-- End the loop -->

    </section>
    <!-- #End: Post Content -->

<?php get_footer('blog'); ?>