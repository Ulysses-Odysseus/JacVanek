<?php
get_header();
?>
    
    <!-- Post Content
    ---------------------->
    <section>
      <?php // Start the Loop
      if(have_posts()) : while (have_posts()) : the_post(); ?>

          <article>
            <time datetime="2009-02-18">Aug 31, 2013</time>
            <a href="<?php the_permalink(); ?>" target="_top">
            <?php the_title(); ?>
            </a>
            <?php the_content(); ?>
            <div class="count linearTrans">
                <a href=""><strong>300</strong>&nbsp;&bull;&nbsp;comments</a>
            </div>
            <span class="line"></span>
          </article>

      <?php endwhile; else: ?>
        <p>Sorry, there are no post at this time.</p>
      <?php endif; ?>
      <!-- End the loop -->
    </section>
    <!-- #End: Post Content -->

<?php get_footer(); ?>