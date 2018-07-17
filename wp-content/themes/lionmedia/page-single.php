<?php /* Template Name:シングルカラムTPL */?>
<?php get_header(); ?>
<?php fit_breadcrumb(); ?>
 
  <!-- l-wrapper -->
  <div class="l-wrapper">
	
    <!-- l-main -->
    <main class="l-main l-main-single<?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
    <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
    <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>">
	
      <article> 
      <h1 class="heading heading-page"><?php the_title(); ?></h1>
	  
	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section class="content content-page">
      <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=48&l=ur1&category=primeday&banner=0JG5EB0Y1M4YZD8Q03G2&f=ifr&linkID=72e02d65a6daa39549f3511fb8b2776d&t=symfony0819-22&tracking_id=symfony0819-22" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
	    <?php the_content(); ?>
      </section>
	  <?php endwhile; endif; ?>
      
      </article> 
 
      
    </main>
    <!-- /l-main -->
    
  </div>
  <!-- /l-wrapper -->

<?php get_footer(); ?>