<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nucleare
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nucleare' ); ?></a>
	
	<div class="theNavigationBar">
		<div class="theNavigationBlock">
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<?php 
				$hideRss = get_theme_mod('nucleare_theme_options_rss', '1');
				$hideSearch = get_theme_mod('nucleare_theme_options_hidesearch', '1');
				$facebookURL = get_theme_mod('nucleare_theme_options_facebookurl', '#');
				$twitterURL = get_theme_mod('nucleare_theme_options_twitterurl', '#');
				$googleplusURL = get_theme_mod('nucleare_theme_options_googleplusurl', '#');
				$linkedinURL = get_theme_mod('nucleare_theme_options_linkedinurl', '#');
				$instagramURL = get_theme_mod('nucleare_theme_options_instagramurl', '#');
				$youtubeURL = get_theme_mod('nucleare_theme_options_youtubeurl', '#');
				$pinterestURL = get_theme_mod('nucleare_theme_options_pinteresturl', '#');
				$tumblrURL = get_theme_mod('nucleare_theme_options_tumblrurl', '#');
				$vkURL = get_theme_mod('nucleare_theme_options_vkurl', '#');
				$stumbleuponURL = get_theme_mod('nucleare_theme_options_stumbleuponurl', '');
				$snapchatURL = get_theme_mod('nucleare_theme_options_snapchaturl', '');
			?>
			<div class="theNavigationSocial">
			</div>
		</div>
	</div>
	
	<?php if ($hideSearch == 1 ) : ?>
	<!-- Start: Search Form -->
		<div id="search-full">
			<div class="search-container">
				<?php get_search_form(); ?>
				<span><a id="close-search"><i class="fa fa-close spaceRight"></i><?php esc_html_e('Close', 'nucleare'); ?></a></span>
			</div>
		</div>
	<!-- End: Search Form -->
	<?php endif; ?>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
