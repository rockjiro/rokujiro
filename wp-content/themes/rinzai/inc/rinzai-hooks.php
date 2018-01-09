<?php

/**
 * Move comment field to bottom in the comments form.
 */
function rinzai_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}
add_filter( 'comment_form_fields', 'rinzai_move_comment_field_to_bottom' );

/**
 * Add UIkit uk-active class for active element.
 */
function rinzai_active_nav_class ( $classes, $item ) {
     if ( in_array( 'current-menu-item', $classes ) ) {
         $classes[] = 'uk-active ';
     }
     return $classes;
}
add_filter( 'nav_menu_css_class' , 'rinzai_active_nav_class' , 10 , 2 );

/**
 * Handles JavaScript detection.
 */
function rinzai_javascript_detection() {
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'rinzai_javascript_detection', 0 );

/**
 * Change theme excerpt length.
 */
function rinzai_excerpt_length( $length ) {
	if( is_admin() ) return $length;

	return 10;
}
add_filter( 'excerpt_length', 'rinzai_excerpt_length', 99 );

/**
 * Change theme excerpt more text.
 */
function rinzai_excerpt_more( $more ) {
    if ( is_admin() ) {
        return $more;
    }

    return '&hellip;';
}
add_filter( 'excerpt_more', 'rinzai_excerpt_more' );

/**
 * Add UIkit icons to archive title.
 */
function rinzai_archive_title( $title ) {
    $html_start = '<span class="uk-text-meta uk-button-text">';
    $html_end = '</span>';
    if ( is_category() ) {
        $title = single_cat_title( '<span uk-icon="icon: tag"></span> ', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '<span uk-icon="icon: hashtag"></span> ', false );
    } elseif ( is_author() ) {
        $title = '<span uk-icon="icon: user"></span> <span>' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '<span uk-icon="icon: tag"></span> ', false );
    } else {
        $title = __( 'Archives', 'rinzai' );
    }

    return $html_start.$title.$html_end;
}
add_filter( 'get_the_archive_title', 'rinzai_archive_title' );

/**
* Add UIkit icons to the social menu.
*/
function rinzai_social_menu_icons( $atts, $item, $args ) {

    // Check if item url has a certain string and add UIkit icon attribute to link if so.
    if ( $args->theme_location == 'social' ) {
        $atts['target'] = '_blank';

        if ( strpos( $item->url, 'facebook.com' ) ) {
            $atts['data-uk-icon'] = 'facebook';
        }

        if ( strpos( $item->url, 'twitter.com' ) ) {
            $atts['data-uk-icon'] = 'twitter';
        }

        if ( strpos( $item->url, 'youtube.com' ) ) {
            $atts['data-uk-icon'] = 'youtube';
        }

        if ( strpos( $item->url, 'dribbble.com' ) ) {
            $atts['data-uk-icon'] = 'dribbble';
        }

        if ( strpos( $item->url, 'github.com' ) ) {
            $atts['data-uk-icon'] = 'github';
        }

        if ( strpos( $item->url, 'flickr.com' ) ) {
            $atts['data-uk-icon'] = 'flickr';
        }

        if ( strpos( $item->url, 'behance.net' ) ) {
            $atts['data-uk-icon'] = 'behance';
        }

        if ( strpos( $item->url, 'foursquare.com' ) ) {
            $atts['data-uk-icon'] = 'foursquare';
        }

        if ( strpos( $item->url, 'google.com' ) ) {
            $atts['data-uk-icon'] = 'google';
        }

        if ( strpos( $item->url, 'plus.google.com' ) ) {
            $atts['data-uk-icon'] = 'google-plus';
        }

        if ( strpos( $item->url, 'instagram.com' ) ) {
            $atts['data-uk-icon'] = 'instagram';
        }

        if ( strpos( $item->url, 'linkedin.com' ) ) {
            $atts['data-uk-icon'] = 'linkedin';
        }

        if ( strpos( $item->url, 'pinterest.com' ) ) {
            $atts['data-uk-icon'] = 'pinterest';
        }

        if ( strpos( $item->url, 'soundcloud.com' ) ) {
            $atts['data-uk-icon'] = 'soundcloud';
        }

        if ( strpos( $item->url, 'tripadvisor.com' ) ) {
            $atts['data-uk-icon'] = 'tripadvisor';
        }

        if ( strpos( $item->url, 'tumblr.com' ) ) {
            $atts['data-uk-icon'] = 'tumblr';
        }

        if ( strpos( $item->url, 'vimeo.com' ) ) {
            $atts['data-uk-icon'] = 'vimeo';
        }

        if ( strpos( $item->url, 'whatsapp.com' ) ) {
            $atts['data-uk-icon'] = 'whatsapp';
        }

        if ( strpos( $item->url, 'wordpress.org' ) ) {
            $atts['data-uk-icon'] = 'wordpress';
        }

        if ( strpos( $item->url, 'xing.com' ) ) {
            $atts['data-uk-icon'] = 'xing';
        }

        if ( strpos( $item->url, 'yelp.com' ) ) {
            $atts['data-uk-icon'] = 'yelp';
        }

        if ( strpos( $item->url, 'vk.com' ) ) {
            $atts['data-uk-icon'] = 'vk';
        }

        if ( strpos( $item->url, 'odnoklassniki.ru' ) ) {
            $atts['data-uk-icon'] = 'odnoklassniki';
        }
    }

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'rinzai_social_menu_icons', 10, 3 );
