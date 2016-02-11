<?php get_header(); ?>

    <section class="row">
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
        <div class="nine columns">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
    </section>

<?php get_footer(); ?>
