    <div class="l-sidebar">
	  
	  <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar' ); ?>
	  <?php endif; ?>
	  
	  <?php if ( is_active_sidebar( 'sidebar-sticky' ) ) : ?>
      <div class="widgetSticky">
        <?php dynamic_sidebar( 'sidebar-sticky' ); ?>
      	<script type="text/javascript" src="//widget.booklog.jp/blogparts/js/booklog_minishelf.js?default" id="booklog_minishelf"></script>
      	<script type="text/javascript" src="//api.booklog.jp/json/takumioozato?category=0&status=3&count=25&callback=booklog_minishelf"></script>
      </div>
	  <?php endif; ?>
    
    </div>

