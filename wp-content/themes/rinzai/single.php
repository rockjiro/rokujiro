<?php
/**
 * Single post template file.
 */
get_header(); ?>

<main data-uk-height-viewport="expand: true">
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="uk-container uk-section-small">
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-2-3@m">
                    <?php get_template_part( 'partials/content/single' ); ?>

                    <?php if ( comments_open() || get_comments_number() ) : ?>
                        <?php comments_template(); ?>
                    <?php endif; ?>
                </div>
                <div class="uk-width-1-3@m">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>

        <?php if ( get_next_post() || get_previous_post() ) : ?>
            <div class="uk-section uk-section-muted uk-section-xsmall">
                <div class="uk-container">
                    <div class="uk-grid-small uk-child-width-expand@s" data-uk-grid>
                        <div>
                            <?php echo get_previous_post_link(); ?>
                        </div>
                        <div class="uk-text-right@m">
                            <?php echo get_next_post_link(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
