<?php get_header(); ?>

<?php if (is_home() || is_archive()) : ?>
  <?php get_sidebar(); ?>
<?php endif; ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('content', get_post_format()); ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>