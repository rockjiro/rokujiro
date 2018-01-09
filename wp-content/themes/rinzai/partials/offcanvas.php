<div id="offcanvas" data-uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" data-uk-close></button>

        <?php if ( has_nav_menu( 'main' ) ) : ?>
            <?php wp_nav_menu( array(
                'theme_location' => 'main',
                'container' => false,
                'menu_class' => 'uk-nav uk-nav-default',
                'walker' => new Rinzai_Offcanvas_Nav_Walker(),
                'depth' => 2,
            ) ); ?>
        <?php endif; ?>

        <?php if ( has_nav_menu( 'social' ) ) : ?>
            <?php wp_nav_menu( array(
                'theme_location' => 'social',
                'container' => 'nav',
                'container_class' => 'uk-navbar tm-offcanvas-social-navbar',
                'menu_class' => 'uk-navbar-nav',
                'link_before' => '<span class="uk-hidden">',
                'link_after' => '</span>',
            ) ); ?>
        <?php endif; ?>

    </div>
</div>
