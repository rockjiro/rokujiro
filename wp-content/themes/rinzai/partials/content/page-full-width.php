<?php
/**
 * Template file for displaying page content.
 */
?>


<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <header class="uk-section-muted uk-light">
            <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
                <?php yoast_breadcrumb( '<p id="breadcrumbs" class="tm-text-xsmall">','</p>' ); ?>
            <?php endif; ?>
            <div class="uk-background-norepeat uk-background-cover uk-cover-container uk-background-center-center uk-section uk-section-xlarge" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                <div class="uk-overlay uk-overlay-primary uk-position-cover uk-light uk-flex uk-flex-middle uk-text-center">
                    <h1 class="uk-width-1-1 uk-margin uk-margin-remove-bottom">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </header>
    <?php endif; ?>

    <div class="uk-container uk-container-small uk-section">
        <?php if ( ! has_post_thumbnail() ) : ?>
            <header>
                <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
                    <?php yoast_breadcrumb( '<p id="breadcrumbs" class="tm-text-xsmall">','</p>' ); ?>
                <?php endif; ?>
                <?php the_title( '<h1 class="uk-h1 uk-text-left uk-text-center@m uk-margin-large-bottom">', '</h1>' ); ?>
            </header>
        <?php endif; ?>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
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
