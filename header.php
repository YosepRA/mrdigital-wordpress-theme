<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MrDigital - WordPress Theme Development</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="main-nav sticky-top">
    <div class="container">
      <?php wp_nav_menu(
        array(
          'theme-location' => 'top-menu',
          'menu_class' => 'navigation'
        )
      ); ?>
    </div>
  </nav>