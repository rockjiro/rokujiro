<?php
/**
 * Page template file.
 */
?>

<?php get_header(); ?>

    <main data-uk-height-viewport="expand: true">

        <div class="uk-container uk-section-small">
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-grid-medium uk-child-width-expand@s" data-uk-height-match="target: > article; row: false" data-uk-grid>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'partials/content/page' ); ?>

                            <?php if ( comments_open() || get_comments_number() ) : ?>
                                <?php comments_template(); ?>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <?php get_sidebar( 'page' ); ?>
                </div>
            </div>
        </div>

    </main>

<?php get_footer(); ?>
