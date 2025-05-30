<?php get_header(); ?>

<div id="primary" class="content-area page-content-area">
    <main id="main" class="site-main">
        <div class="container"> <?php // Optional container for styling ?>
            <?php
            while ( have_posts() ) :
                the_post();

                the_title( '<h1 class="entry-title">', '</h1>' );

                // Display featured image if it exists (optional for pages)
                if ( has_post_thumbnail() ) : ?>
                    <div class="page-featured-image">
                        <?php the_post_thumbnail('large'); // Or 'full' or another size ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gregstuart-urbandesign' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div><?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; // End of the loop. ?>
        </div> <?php // End .container ?>
    </main></div><?php get_footer(); ?>