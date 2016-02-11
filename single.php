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
                    the_post();?>
                    <h3><?php the_title(); ?></h3>
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
