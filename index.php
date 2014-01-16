<?php
// This is the blog landing page
get_header('blog'); ?>

    <!-- Post Content
    ---------------------->
    <section>
        <?php // Start the Loop
        if(have_posts()) : while (have_posts()) : the_post(); ?>

            <article>
                <time datetime="<?php the_date('Y-m-d'); ?>"><?php the_modified_time('F j, Y'); ?></time>
                <h1><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></h1>
                <!-- Feauture Image -->
                <?php
                if(has_post_thumbnail()) :
                    $thumb_size = 'full'; ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size);?></a>
                    <?php
                endif;
                ?>
                <!-- Content -->
                <?php // If excerpt exists, show it
                if(!$post->post_excerpt){
                    the_content();
                } else {
                    the_excerpt();
                }
                ?>
                <!-- Comments -->
                <div class="count linearTrans">
                    <a href="<?php the_permalink(); ?>#comment_section">
                        <?php
                        comments_number(
                            'no comments',                            // (optional) Text to display when there are no comments.
                            '<strong>1</strong>&nbsp;&bull; comment', // (optional) Text to display when there is one comment.
                            '<strong>%</strong>&nbsp;&bull; comments' // (optional) Text to display when there is more than one comment.
                        );?>
                    </a>
                </div>
                <!-- End: Comments -->
                <span class="line"></span>
            </article>

        <?php endwhile; else: ?>
            <p>Sorry, there are no post at this time.</p>
        <?php endif; ?>
        <!-- End: Loop -->
    </section>
    <!-- End: Post Content -->

<?php get_footer('blog'); ?>