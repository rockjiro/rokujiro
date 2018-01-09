<?php
/**
 * The main template file.
 */

get_header(); ?>

<main data-uk-height-viewport="expand: true">

    <?php if ( have_posts() ) : ?>

        <div class="uk-container uk-section-small">
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-grid-medium uk-child-width-expand@s" data-uk-height-match="target: > article; row: false" data-uk-grid>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'partials/content/content', get_post_format() ); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>

        <?php rinzai_print_posts_pagination(); ?>

    <?php else : ?>

        <?php get_template_part( 'partials/content/none' ); ?>

    <?php endif; ?>

</main>


<?php get_footer(); ?>
