<?php get_header(); ?>

    <section class="row">
        <div class="twelve columns">
<!-- BEGIN SINGLE PHP -->
            <?php
            if (have_posts() ) {
                /* OUR DATA CONTEXT IS DEFINED  */
                while ( have_posts() ) {
                    the_post();?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                } // end while
            } // end if
            ?>
<!-- END SINGLE PHP -->
        </div>
    </section>

<?php get_footer(); ?>
