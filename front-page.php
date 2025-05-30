<?php get_header(); ?>

<div id="primary" class="content-area front-page-content">
    <main id="main" class="site-main">

        <?php
        // Start the Loop for the content of the "Home" page.
        while ( have_posts() ) :
            the_post();
        ?>

            <?php
            // Section 1: Hero Cover Art (using Featured Image)
            if ( has_post_thumbnail() ) : ?>
                <section class="hero-section">
                    <div class="hero-image-container">
                        <?php the_post_thumbnail( 'full' ); // Or a specific image size you define ?>
                    </div>
                </section>
            <?php endif; ?>

            <section class="intro-text-section page-section">
                <div class="container">
                     <?php
                        // Display title of the "Home" page if you want it here,
                        // or it might be part of the general page content.
                        // the_title( '<h1 class="entry-title">', '</h1>' );
                     ?>
                    <div class="entry-content">
                        <?php the_content(); // Content from the "Home" page editor ?>
                    </div>
                </div>
            </section>

        <?php endwhile; // End of the loop. ?>


        <section class="services-teaser-section page-section">
            <div class="container">
                <h2 class="section-title">Our Services</h2>
                <div class="services-grid">
                    <?php
                    // Example: Manually link to key service pages
                    // You can make this more dynamic later if needed.
                    $service_pages = array(
                        'site-planning-urban-design' => 'Site Planning & Urban Design',
                        'project-management' => 'Project Management',
                        'expert-testimony' => 'Expert Testimony',
                        // Add other key services here by their slug and display name
                    );

                    foreach ( $service_pages as $slug => $title ) {
                        $page = get_page_by_path( $slug );
                        if ( $page ) {
                            echo '<div class="service-teaser-item">';
                            echo '<h3><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( $title ) . '</a></h3>';
                            // Optional: Add a short excerpt or custom field for a teaser description
                            // echo '<p>' . esc_html( get_the_excerpt( $page->ID ) ) . '</p>';
                            echo '<a href="' . esc_url( get_permalink( $page->ID ) ) . '" class="button read-more-button">Learn More</a>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <?php
                // Link to a general "Services" landing page if you have one
                $all_services_page = get_page_by_path('services'); // Assuming you might create a parent "Services" page
                if ($all_services_page) :
                ?>
                    <div class="all-services-link">
                        <a href="<?php echo esc_url(get_permalink($all_services_page->ID)); ?>" class="button">Explore All Services</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section class="contact-form-section page-section">
            <div class="container">
                <h2 class="section-title">Get In Touch</h2>
                <?php
                // Placeholder for Contact Form Plugin Shortcode
                // Install a plugin like WPForms Lite or Contact Form 7, create a form,
                // and then paste its shortcode here.
                // Example: echo do_shortcode('[wpforms id="123"]');
                echo do_shortcode('[wpforms id="29"]');
                ?>
            </div>
        </section>

    </main></div><?php get_footer(); ?>