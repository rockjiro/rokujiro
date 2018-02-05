<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package nucleare
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<script type="text/javascript" src="//widget.booklog.jp/blogparts/js/booklog_minishelf.js?default" id="booklog_minishelf"></script>
	<script type="text/javascript" src="//api.booklog.jp/json/takumioozato?category=0&status=3&count=25&callback=booklog_minishelf"></script>
</div><!-- #secondary -->
