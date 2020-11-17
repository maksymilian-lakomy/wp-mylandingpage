<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body>

  <?php
  load_template(get_template_directory() . '/templates/aside.php');
  ?>

  <?php
  load_template(get_template_directory() . '/templates/product.php', false);
  load_template(get_template_directory() . '/templates/product.php', false);
  load_template(get_template_directory() . '/templates/product.php', false);
  load_template(get_template_directory() . '/templates/product.php', false);
  ?>

  <?php get_footer(); ?>
</body>

</html>