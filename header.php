<!-- header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-MdfzWkfdADrmjKJzH3kZt+dZnLbEApjijz3QptahJW+Is4KIk9DWo4AqTgZ5fYVHL8tQk3xUJ0NJeUOFSllbKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TVT</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body>
<header class="sticky-header">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-circular.png" alt="Logo TVT" class="logo">
  <nav>
    <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => 'main-menu'
      ]);
    ?>
  </nav>
</header>

