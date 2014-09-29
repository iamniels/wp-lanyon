<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
      <h1 class="post-title"><?php the_title(); ?></h1>

      <span class="post-date"><?php the_date(); ?></span>

      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>

<?php get_footer(); ?>
