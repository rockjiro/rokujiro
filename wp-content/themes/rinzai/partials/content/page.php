<?php
/**
 * Template file for displaying page content.
 */
?>


<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <header class="uk-section-muted uk-margin-medium-bottom uk-light">
            <div class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-height-large uk-cover-container" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
                <div class="uk-overlay uk-overlay-primary uk-position-cover">
                    <div class="uk-overlay uk-position-bottom">
                        <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
                            <?php yoast_breadcrumb( '<p id="breadcrumbs" class="tm-text-xsmall">','</p>' ); ?>
                        <?php endif; ?>
                        <?php the_title( '<h1 class="uk-h2 uk-margin-remove-bottom">', '</h1>' ); ?>
                    </div>
                </div>
            </div>
        </header>
    <?php else : ?>
        <header>
            <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
                <?php yoast_breadcrumb( '<p id="breadcrumbs" class="tm-text-xsmall">','</p>' ); ?>
            <?php endif; ?>
            <?php the_title( '<h1 class="uk-h1 uk-margin-remove-top uk-margin-medium-bottom">', '</h1>' ); ?>
        </header>
    <?php endif; ?>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

    <footer>
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
    </footer>

</article>
