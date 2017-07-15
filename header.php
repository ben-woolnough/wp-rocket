<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <style>
    body {
      background: <?php echo get_theme_mod('background_colour', '#fff'); ?>;
    }
  </style>
  <?php wp_head(); ?>
</head>
<body>

<!-- <div class="logo">
  <h1><?php bloginfo('name'); ?></h1>
</div> -->

<?php if (get_theme_mod('logo_image', '') == '') : ?>
  <h1 id="logo-text"><?php bloginfo('name'); ?></h1>
<?php else : ?>
  <img id="logo-image" src="<?php echo wp_get_attachment_url(get_theme_mod('logo_image', '')) ?>" alt="logo" height="150" width="150">
<?php endif; ?>


<?php
    wp_nav_menu( array(
        'theme_location' => 'header-menu',
        'container'=> 'nav',
        'container_class' => 'navbar-top',
    ));
?>