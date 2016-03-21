<?php get_header(); ?>
    <section class="row">
        <div class="two columns">
            &nbsp;
        </div>
        <div class="eight columns">
<!-- BEGIN SINGLE PHP -->
            <?php
            if (have_posts() ) {
                /* OUR DATA CONTEXT IS DEFINED  */
                while ( have_posts() ) {
                    the_post();
                    if ( has_post_thumbnail() ) { ?>
                        <div class="single-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                    <?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="date-author-single">
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> </small>
                    </div>
                    <?php the_content();
                } // end while
            } // end if
            ?>
<!-- END SINGLE PHP -->
        </div>
        <div class="two columns">
            &nbsp;
        </div>
    </section>

<?php get_footer(); ?>
