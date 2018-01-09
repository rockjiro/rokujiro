<?php
/**
 * Header template file.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rinzai' ); ?></a>

    <div id="app">

        <div class="uk-offcanvas-content">
            <div class="uk-navbar-container uk-box-shadow-small">
                <div class="uk-container">
                    <nav class="uk-navbar" data-uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php if ( has_custom_logo() ) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php else : ?>
                                    <?php bloginfo( 'name' ); ?>
                                <?php endif; ?>
                            </a>
                            <?php if ( has_nav_menu( 'main' ) ) : ?>
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'main',
                                    'container' => false,
                                    'menu_class' => 'uk-navbar-nav uk-visible@m',
                                    'walker' => new Rinzai_Navbar_Walker(),
                                    'depth' => 2,
                                ) ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="uk-navbar-right">
                            <div class="uk-navbar-item uk-padding-remove-left">
                                <button class="uk-button uk-button-link" id="show-search-modal" data-uk-toggle="target: #search-modal" data-uk-icon="icon: search" type="button">
                                    <span class="screen-reader-text"><?php _e( 'Search', 'rinzai' ); ?></span>
                                </button>
                            </div>
                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'social',
                                    'container' => 'nav',
                                    'container_class' => 'uk-navbar uk-visible@m',
                                    'menu_class' => 'uk-navbar-nav uk-navbar-center',
                                    'link_before' => '<span class="uk-hidden">',
                                    'link_after' => '</span>',
                                ) ); ?>
                            <?php endif; ?>
                            <?php if ( has_nav_menu( 'main' ) ) : ?>
                                <div class="uk-navbar-item uk-hidden@m">
                                    <button class="uk-button uk-button-link uk-padding-small" data-uk-toggle="target: #offcanvas" type="button">
                                        <span data-uk-icon="icon: menu"></span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </nav>
                </div>
            </div>

            <div id="content">
