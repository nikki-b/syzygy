<div class="blog-post row">
	<?php if(has_post_thumbnail()) : ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
	<?php endif; ?>
	<div class="blog-post-date col-md-1">
		<p class="blog-post-meta">
			<span class="blog-post_date_d"><?php the_time('d'); ?></span>
			<span class="blog-post_date_m"><?php the_time('M'); ?></span>
  	</p>
	</div>
	<div class="blog-post_main col-md-11">
		<h2 class="blog-post-title">
	    <?php if(is_single()) : ?>
	      <?php the_title(); ?>
	    <?php else : ?>
	      <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	    <?php endif; ?>
    </h2>
    <div class="blog-post_content">
    	<?php if(is_single()) : ?>
    		<?php the_content() ?>
    	<?php else : ?>
        <?php the_excerpt() ?>
      <?php endif; ?>
      <?php if(is_single()) : ?>
        <?php comments_template(); ?>
      <?php endif; ?>
    </div>
    <p class="blog-post_details"><?php the_time('h:i'); ?> / <?php the_category(', '); ?> / <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author();?></a></p>
	</div>
</div><!-- /.blog-post -->