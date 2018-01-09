<?php
/**
 * Footer template file.
 */
?>
            </div> <!-- #content -->

            <footer class="uk-section uk-section-default uk-padding-remove-bottom uk-padding-remove-top">
                <div class="uk-container">
                    <div class="uk-margin-top uk-margin-bottom">
                        <div class="uk-child-width-1-1 uk-child-width-expand@m uk-grid-collapse uk-flex-middle uk-flex-center" data-uk-grid>
                            <div class="uk-text-center uk-text-left@m uk-text-small">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><?php _e( ' works on <a class="uk-text-small" target="_blank" href="https://wordpress.org">WordPress</a>', 'rinzai' ); ?>
                                <span>&copy; <?php echo date_i18n( __( 'Y', 'rinzai' ) ); ?></span>
                            </div>
                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <div class="uk-width-auto@m uk-margin-remove-top">
                                    <?php wp_nav_menu( array(
                                        'theme_location' => 'social',
                                        'container' => 'nav',
                                        'container_class' => 'uk-navbar',
                                        'menu_class' => 'uk-navbar-nav uk-navbar-center',
                                        'link_before' => '<span class="uk-hidden">',
                                        'link_after' => '</span>',
                                    ) ); ?>
                                </div>
                            <?php endif; ?>
                            <div class="uk-text-center uk-text-right@m uk-margin-remove-top">
                                <p class="uk-text-small">
									<?php _e( 'Rinzai theme by <a target="_blank" href="https://ivanfonin.com">Ivan Fonin</a>.', 'rinzai' ); ?>
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <?php
            /*
             * Offcanvas navigation.
             */
            get_template_part( 'partials/offcanvas' ); ?>

            <?php
            /*
             * Search modal.
             */
            get_template_part( 'partials/search-modal' ); ?>

        </div> <!-- .uk-offcanvas-content -->

    </div><!-- #app -->
<?php wp_footer(); ?>
</body>
</html>
