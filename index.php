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

<div class="pagination">
  <?php
  $older = get_previous_posts_link( 'Older' );
  $newer = get_next_posts_link( 'Newer');
  ?>
  <?php if ( $older ) : ?>
    <?php echo $older ?>
  <?php else : ?>
    <span class="pagination-item older">Older</span>
  <?php endif; ?>
  <?php if ( $newer ) : ?>
    <?php echo $newer; ?>
  <?php else : ?>
    <span class="pagination-item newer">Newer</span>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
