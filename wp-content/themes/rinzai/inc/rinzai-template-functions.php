<?php
/**
 * Theme helper functions.
 */

add_filter( 'wp_generate_tag_cloud', 'rinzai_tag_cloud', 10, 3 );
function rinzai_tag_cloud( $tag_string ) {
    return preg_replace( '/style=("|\')(.*?)("|\')/', '', $tag_string );
}

/**
* Add support for the Pageviews plugin.
*/
if ( ! function_exists( 'rinzai_show_pageviews' ) ) {

    function rinzai_show_pageviews() {
       if ( ! has_action( 'pageviews' ) )
           return;

       $post = get_post(); ?>

       <span class="tm-text-xsmall">
           <span data-uk-icon="icon: forward; ratio: .7" style="position: relative; bottom: 1px;"></span> <span class="pageviews"><?php do_action( 'pageviews' ); ?></span>
       </span>

       <?php
    }

}

/**
* Show posted on date.
*/
if ( ! function_exists( 'rinzai_show_post_date' ) ) {

    function rinzai_show_post_date() {
        $posted_on = sprintf( '<time class="date uk-margin-small-right tm-text-xsmall" datetime="%1$s">%2$s</time>',
                             esc_attr( get_the_date('c') ),
                             esc_html( get_the_date('Y/m/d') )
        ); ?>

        <span data-uk-icon="icon: clock; ratio: .65" style="position: relative; bottom: 1px;"></span> <span class="posted-on"><?php echo $posted_on; ?></span>

        <?php
    }

}

/**
* Show post author.
*/
if ( ! function_exists( 'rinzai_show_post_author' ) ) {

    function rinzai_show_post_author() {
        $author = sprintf( '<a class="author-link uk-margin-small-right" href="%1$s">%2$s</a>',
                          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                          esc_html( get_the_author() )
        );

        echo '<span data-uk-icon="icon: user; ratio: .7" style="position: relative; bottom: 1px;"></span> <span class="author">' . $author . '</span> ';
    }

}

/**
* Show post categories.
*/
if ( ! function_exists( 'rinzai_show_post_categories' ) ) {

    function rinzai_show_post_categories() {
        $categories_list = get_the_category_list( __( '</span>, <span class="tm-text-xsmall" style="opacity: .5;">', 'rinzai' ) );

        if ( $categories_list ) {
            echo '<span class="uk-margin-small-right">';
                echo '<span data-uk-icon="icon: tag; ratio: .7" style="position: relative; bottom: 1px;"></span> ';
                echo '<span class="tm-text-xsmall" style="opacity: .5;">' . $categories_list . '</span>';
            echo '</span>';
        }
    }

}

/**
* Show tags list.
*/
if ( ! function_exists( 'rinzai_show_post_tags' ) ) {

    function rinzai_show_post_tags() {
        $tag_list = get_the_tag_list( '<span data-uk-icon="icon: hashtag; ratio: .7" style="position: relative; bottom: 1px;"></span><span class="tags uk-margin-small-right"><span class="tm-text-xsmall" style="opacity: .5;">', '</span>, <span class="tm-text-xsmall" style="opacity: .5;">', '</span></span>' );

        if ( $tag_list ) {
            echo $tag_list;
        }
    }

}

/**
* Show comments number.
*/
if ( ! function_exists( 'rinzai_show_comments_number' ) ) {

    function rinzai_show_comments_number() { ?>
        <span class="uk-margin-small-right">
            <span data-uk-icon="icon: comment; ratio: .7" style="position: relative; bottom: 1px;"></span>&nbsp;
            <span class="tm-text-xsmall">
                <?php echo get_comments_number(); ?>
            </span>
        </span>
        <?php
    }

}

/**
 * Post meta info - publishing date, author and categories list.
 */
if ( ! function_exists( 'rinzai_post_meta' ) ) {

    function rinzai_post_meta() {
            rinzai_show_post_date();
            rinzai_show_comments_number();
            rinzai_show_pageviews();
    }

}

/**
 * Post single meta - author, categories list, tags list.
 */
if ( ! function_exists( 'rinzai_post_single_meta' ) ) {

    function rinzai_post_single_meta() {
        rinzai_show_post_date();
        rinzai_show_post_categories();
        rinzai_show_post_tags();
    }

}

/**
 * Wrap posts pagination with special markup to style it.
 */
function rinzai_print_posts_pagination() {

    // Display pagination only if there is more than one page.
    if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	} ?>

    <div class="uk-section uk-section-muted uk-section-xsmall">
        <div class="uk-container">
            <?php the_posts_pagination( array(
                'end_size' => 2,
                'mid_size' => 2,
                'prev_text' => __( 'Previous', 'rinzai' ),
                'next_text' => __( 'Next', 'rinzai' ),
                'screen_reader_text' => __( 'Posts Navigation', 'rinzai' ),
            ) ); ?>
        </div>
    </div>

    <?php
}

/**
 * Display comment navigation links.
 */
if ( ! function_exists( 'rinzai_comment_nav' ) ) {

    function rinzai_comment_nav() {

        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

            <nav class="comment-navigation">
                <h2 class="comment-nav-title"><?php _e( 'Comment navigation', 'rinzai' ); ?></h2>
                <div class="comment-nav-links">
                    <?php
                        if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'rinzai' ) ) ) :
                            printf( '<div class="nav-previous">%s</div>', $prev_link );
                        endif;

                        if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'rinzai' ) ) ) :
                            printf( '<div class="nav-next">%s</div>', $next_link );
                        endif;
                    ?>
                </div>
            </nav>

        <?php endif;
    }

}
