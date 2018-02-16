<?php get_header();  ?>
<?php get_template_part('template-parts/featured-carousel', 'none'); ?>

<div class="container main-content">
  <?php if(!is_single()) : ?>
    <section class="main-content_title">
      <h3>Latest Posts</h3>
      <p>From the outer reaches of the galaxy</p>
    </section>
  <?php endif; ?>
  <div class="row">
    <!-- MAIN POSTS -->
    <section class="main-content_posts col-md-8">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/post/content', get_post_format()); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php __('No Posts Found');?></p>
      <?php endif; ?>
    </section>

    <?php get_template_part('template-parts/sidebar', 'none'); ?>
  </div>
</div>

<?php get_footer(); ?>