<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); // WordPress hook for styles, scripts, and other head elements ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
        // You can use the Customizer for the logo later
        // For now, let's display the site title and tagline
        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
            the_custom_logo();
        } else {
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>,
                <?php
            endif;
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $site_description; ?></p>
            <?php endif; ?>
        <?php } ?>
    </div><nav id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary_menu', // We'll register this in functions.php
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => false, // Prevents WP from outputting a default menu if 'primary_menu' isn't set
            )
        );
        ?>
    </nav></header><main id="content" class="site-content">