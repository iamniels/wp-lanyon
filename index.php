<?php get_header(); ?>
<div class="posts">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
      <h1 class="post-title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>

      <span class="post-date"><?php the_date(); ?></span>

      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>

</div>
<?php get_footer(); ?>
