<?php
/* Template Name: Search Page */
get_header(); ?>
<div class="row">
    <div class="twelve columns">
        <?php if( have_posts() ) :?>
            <h1>
                <?php printf(
                    __('Search Results for: %s'),
                    '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
         else : ?>
            <h2>Nothing Found</h2>
            <p>Sorry, but nothing matched your search criteria. Please
 try again with different search terms.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
