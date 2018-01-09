=== Rinzai ===
Contributors: ivanfonin
Donate link: https://ivanfonin.com
Tags: blog, education, photography, portfolio, news, one-column, two-columns, right-sidebar, grid-layout, translation-ready, custom-menu, custom-logo, featured-images, full-width-template
Requires at least: 4.7
Tested up to: 4.8
License: MIT License
License URI: https://opensource.org/licenses/MIT

Rinzai is a modern and minimalist blogging theme for WordPress. See demo at https://demo.webminimalism.com/rinzai

== Description ==

Rinzai is a modern and minimalist blogging theme for WordPress. It has a
responsive layout, clean and easy to read typography, a three-column grid layout
on blog page, a widget area in blog sidebar, a special menu for your social
profiles, custom logo, featured images for posts and pages and much more.

See demo at https://demo.webminimalism.com/rinzai

For more information about Rinzai theme please go to https://ivanfonin.com.

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the 'Add New' button.
2. Type in Rinzai in the search form and press the 'Enter' key on your keyboard.
3. Click on the 'Activate' button to use your new theme right away.
4. Go to https://demo.webminimalism.com/rinzai to see configured demo.
5. Navigate to Appearance > Customize in your admin panel and customize to taste.

== Copyright ==

Rinzai bundles the following third-party resources:

HTML5 Shiv, Copyright 2014 Alexander Farkas
Licenses: MIT/GPL2
Source: https://github.com/aFarkas/html5shiv

normalize.css, Copyright 2012-2016 Nicolas Gallagher and Jonathan Neal
License: MIT License
Source: https://necolas.github.io/normalize.css

UIkit v3, Copyright YOOtheme GmbH
License: MIT License
Source: https://github.com/uikit/uikit

PT Sans Font, Copyright ParaType
License: Open Font License
Source: https://fonts.google.com/specimen/PT+Sans

Yeseva One Font, Copyright Jovanny Lemonad
License: Open Font License
Source: https://fonts.google.com/specimen/Yeseva+One

Screenshot image #1, Copyright Szolkin
License: CC0 1.0 Universal (CC0 1.0)
Source: http://www.lifeofpix.com/photo/pears/

Screenshot image #2, Copyright Julien Steiner
License: CC0 1.0 Universal (CC0 1.0)
Source: http://www.lifeofpix.com/photo/sandwich/

Screenshot image #3, Copyright Slike
License: CC0 1.0 Universal (CC0 1.0)
Source: http://www.lifeofpix.com/photo/fruit-yoghurt/

Screenshot image #4, Copyright LEEROY Agency
License: CC0 1.0 Universal (CC0 1.0)
Source: http://www.lifeofpix.com/photo/breakfast-by-sunlight/

Screenshot image #5, Copyright alexis
License: CC0 1.0 Universal (CC0 1.0)
Source: http://www.lifeofpix.com/photo/tomatoes/

Screenshot image #6, Copyright Slike
License: CC0 1.0 Universal (CC0 1.0)
Source: http://www.lifeofpix.com/photo/french-fries-2/


== Changelog ==

= 1.0.8 =
* Released: December 13, 2017
* Updated UIkit v3 script to beta.35 version and refactored main script file.
* Fixed some typos in readme.txt file.
* Added new default.pot file and completed russian translation.
* Changed heading sizing on smaller screens via css.

= 1.0.7 =
* Released: December 11, 2017
* Added readme.txt file.

= 1.0.6 =
* Released: December 9, 2017
* All theme markup now passes W3C Markup Validator without any errors.
* Added two more social icons support - vk and odnoklassniki.
* Changed styling of featured image for single post and single page layouts.
* Added template for content on full width page and refactored page template markup.
* Added yoast breadcrumbs to page templates.
* Added sidebar to page.php and added page-sidebar widget area for it.
* Also added full width page template.
* Added styling to sidebar ul and li tags and removed sidebar custom render functions.
* Added styling to tag cloud widget, now all tags are equal size.
* Changed blog layout a little bit, increased sidebar and decreased posts size.
* Removed post formats support for now.
* Decreased header and widgets box shadow size.
* Changed background color to light gray.
* Added Yoast SEO breadcrumbs support.
* Changed layout in content.php for post with featured image and without.
* Replaced h1 tag with h2 in content.php and search.php.
* Changed copyright text position, classes and markup in footer.php.

= 1.0.5 =
* Released: September 23, 2017
* Fixed broken markup in footer.php.

= 1.0.4 =
* Released: September 21, 2017
* Prefixed theme style handle.
* Replaced screenshot.png and changed copyright info about used images.

= 1.0.3 =
* Released: September 21, 2017
* Prefixed theme script handle.
* Replaced Unsplash images on screenshot.png with CCO 1.0 licensed.

= 1.0.2 =
* Released: September 20, 2017
* Add unminified version for all JavaScript files.
* Changed CSS selectors in editor-style.css file.
* Removed support for search-form and comment-list  from functions.php as I added
* custom searchform.php and walkers.
* Added if( is_admin() ) return $length; to excerpt_length filter.
* Replaced esc_attr with esc_attr__ in searchform.php.
* Replaced date('Y') with date_i18n( __( 'Y','rinzai' ) ) in footer.php.
* Replaced https://wordpress.org/ with <?php echo esc_url( __( 'https://wordpress.org/', 'rinzai' ) ); ?> in footer.php.
* Added license information for fonts from Google Fonts catalog.

= 1.0.1 =
* Released: July 30, 2017
* Replaced cdn links in all wp_enqueue_script functions. Added js to theme folder.
* Changed screenshot.png to a right one.
* Provided unique theme prefix (rinzai) to all theme functions and variables.
* Replaced <?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?> with wp_excerpt().
* Added wp_link_pages() to single posts and pages.
* Escaped translated texts inside html attributes with esc_attr().

= 1.0.0 =
* Released: July 24, 2017
* Initial release
