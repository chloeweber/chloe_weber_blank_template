<?php get_header(); ?>
<div class="row">
    <div class="twelve columns">
        <?php if ( have_posts() ) : ?>
            <h2 class="page-heading"><?php single_cat_title(); ?></h2>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();
                if ( has_post_thumbnail() ) { ?>
                    <div class="post-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
                <?php } ?>
            <!-- data context -->
                <h3>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="date-author-archive">
                    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> </small>
                </div>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
