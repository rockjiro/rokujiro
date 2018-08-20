      <?php
	  if(get_the_category()){
		  $cat_meta = get_option("cat_meta_data");
		  $cat = get_the_category();
		  $cat_id   = $cat[0]->cat_ID;
	  }
	  ?>
      <article class="archiveItem">
        
        <div class="eyecatch eyecatch-archive">
          <?php if(is_sticky()):?>
            <span class="eyecatch__ribbon">Pickup</span>
          <?php endif;?>
          <span class="eyecatch__cat bgc<?php if (isset($cat_meta[$cat_id])) { echo esc_html($cat_meta[$cat_id]);} ?> u-txtShdw"><?php the_category(' ');?></span>
          <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?></a>
        </div>
        
        <ul class="dateList dateList-archive">
          <li class="dateList__item icon-calendar"><?php the_time('Y.m.d'); ?></li>
          <?php if(has_tag()==true) :  ?>
          <li class="dateList__item icon-tag"><?php
		  if (get_option('fit_theme_tagNumber')){
			  $number = get_option('fit_theme_tagNumber');
		  }else{
			  $number = '5';
		  }
          $posttags = get_the_tags();
		  $count = '0';
		  foreach($posttags as $tag) {
			  $count++;
			  if ($count > $number) break; 
			  echo '<a href="'. get_tag_link($tag->term_id) .'" rel="tag">'. $tag->name ."</a><span>, </span>";
		  }
		  ?></li>
          <?php endif; ?>
        </ul>

        <h2 class="heading heading-archive">
          <a class=" hc<?php if (isset($cat_meta[$cat_id])) { echo esc_html($cat_meta[$cat_id]);} ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <p class="archiveItem__text u-none-sp">
		  <?php echo get_the_excerpt(); ?>
        </p>
      
      </article>