<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="page">
      <h1 class="page-title">
          <?php the_title(); ?>
      </h1>

      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>

<?php get_footer(); ?>
