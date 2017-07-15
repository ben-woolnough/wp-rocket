<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="page-container">
      <h1><?php the_title(); ?></h1>
      <p><?php echo the_content(); ?></p>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>