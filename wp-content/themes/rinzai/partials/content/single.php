<?php
/**
 * Template for displaying single post content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <header class="uk-section-muted uk-light uk-margin-medium-bottom">
            <div class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-section-xlarge uk-cover-container" style="padding:0px;">
                <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title() ?>">
                <div class="uk-overlay uk-overlay-primary uk-position-cover">
                    <div class="uk-overlay uk-position-bottom">
                        <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
                            <?php yoast_breadcrumb( '<p id="breadcrumbs" class="tm-text-xsmall">','</p>' ); ?>
                        <?php endif; ?>
                        <?php the_title( '<h1 class="uk-h2 uk-margin-remove-bottom">', '</h1>' ); ?>
                        <?php rinzai_post_single_meta(); ?>
                    </div>
                </div>
            </div>
        </header>
    <?php else : ?>
        <header>
            <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
                <?php yoast_breadcrumb( '<p id="breadcrumbs" class="tm-text-xsmall">','</p>' ); ?>
            <?php endif; ?>
            <?php the_title( '<h1 class="uk-h1 uk-margin-remove-vertical">', '</h1>' ); ?>
            <div class="uk-section uk-section-xsmall uk-text-meta">
                <?php rinzai_post_single_meta(); ?>
            </div>
        </header>
    <?php endif; ?>

    <div class="post-content">
        <?php the_content(); ?>

        <?php wp_link_pages( array(
            'before'           => '<p>' . __( 'Pages:', 'rinzai' ),
            'after'            => '</p>',
            'link_before'      => '',
            'link_after'       => '',
            'next_or_number'   => 'number',
            'separator'        => ' ',
            'nextpagelink'     => __( 'Next page', 'rinzai' ),
            'previouspagelink' => __( 'Previous page', 'rinzai' ),
            'pagelink'         => '%',
            'echo'             => 1
        ) ); ?>
    </div>

    <footer>
        <?php rinzai_show_post_author(); ?>
    </footer>
</article>
