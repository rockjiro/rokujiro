<?php
/**
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" class="uk-width-1-2@s uk-width-1-3@l uk-margin-remove-bottom">
    <header class="post-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>">
                <figure class="uk-margin-small-bottom uk-cover-container uk-height-small uk-section-muted uk-transition-toggle">
                    <?php the_post_thumbnail( 'medium', array( 'data-uk-cover' => '' ) ); ?>
                    <div class="uk-overlay-default uk-position-cover uk-transition-fade">
                        <div class="uk-position-center">
                            <span data-uk-overlay-icon></span>
                        </div>
                    </div>
                </figure>
            </a>
            <div class="uk-article-meta uk-margin-small-bottom">
                <div class="uk-text-meta">
                    <?php rinzai_post_meta(); ?>
                </div>
            </div>
            <h2 class="uk-h5 uk-margin-small-bottom uk-margin-small-top">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        <?php else : ?>
            <h2 class="uk-h5 uk-margin-small-bottom">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="uk-article-meta uk-margin-small-bottom">
                <div class="uk-text-meta">
                    <?php rinzai_post_meta(); ?>
                </div>
            </div>
        <?php endif; ?>
    </header>
    <div class="tm-excerpt">
        <a class="uk-link-reset" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php //the_excerpt(); ?>
        </a>
    </div>
    <footer>
        <?php rinzai_show_post_categories(); ?>
    </footer>
</article>
