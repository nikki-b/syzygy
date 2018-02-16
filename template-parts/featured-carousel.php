<section class="featured-carousel">
  <div class="featured-carousel_items">
    <?php query_posts('posts_per_page=6&cat=11');
      if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="featured-carousel_item card">
        <img class="card-img" src="<?php the_post_thumbnail_url(); ?>">
        <div class="card-img-overlay">
          <h2 class="card-title font-effect-shadow-multiple"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="card-text"><small class="text-muted"><?php the_category(', '); ?></small></p>
        </div>
      </div>
    <?php endwhile; ?> <?php wp_reset_query(); ?>
  </div>
</section>