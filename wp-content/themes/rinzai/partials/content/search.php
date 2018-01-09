<?php
/**
 * Template for displaying content in search results.
 */
?>

<article id="post-<?php the_ID(); ?>" class="uk-article">
    <header>
        <?php the_title( sprintf( '<h2 class="uk-article-title uk-margin-small-bottom"><a class="uk-link-reset" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="uk-article-meta uk-margin-small-bottom">
                <?php rinzai_post_meta(); ?>
            </div>
        <?php elseif ( 'page' == get_post_type() ) : ?>
            <div class="uk-article-meta">
                <p class="uk-text-uppercase uk-margin-small-bottom">
                    <?php _e( 'Page', 'rinzai' ); ?>
                </p>
            </div>
        <?php endif; ?>
    </header>
    <div class="uk-text-small tm-excerpt">
        <?php the_excerpt(); ?>
    </div>
    <footer class="uk-text-meta">
        <?php rinzai_show_post_author(); ?>
    </footer>
</article>
