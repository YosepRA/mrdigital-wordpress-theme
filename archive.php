<?php get_header(); ?>

<main class="container">
  <h1><?php single_cat_title('Category: '); ?></h1>

  <?php if (have_posts()) : while (have_posts()) : the_post() ?>

      <h3><?php the_title(); ?></h3>
      <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>

  <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>