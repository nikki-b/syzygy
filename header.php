<!doctype html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta description="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:500,400,300|Unica+One&effect=shadow-multiple" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="sticky-top">
      <nav class="header_nav row">
        <!-- <ul class="col-md-7"> -->
        <?php wp_nav_menu( array( 
          'theme_location' => 'primary',
          'container_class' => 'col-md-7',
          'depth' => 1 
          ) ); ?>
        <div class="header_nav_social col-md-5 text-right">
          <ul>
            <li><a href="<?php echo get_theme_mod('link1_url', '/'); ?>"><i class="fab <?php echo get_theme_mod('link1_icon', 'fa-instagram'); ?>"></i></a></li>
            <li><a href="<?php echo get_theme_mod('link2_url', '/'); ?>"><i class="fab <?php echo get_theme_mod('link2_icon', 'fa-instagram'); ?>"></i></a></li>
            <li><a href="<?php echo get_theme_mod('link3_url', '/'); ?>"><i class="fab <?php echo get_theme_mod('link3_icon', 'fa-instagram'); ?>"></i></a></li>
            <li><a href="<?php echo get_theme_mod('link4_url', '/'); ?>"><i class="fab <?php echo get_theme_mod('link4_icon', 'fa-instagram'); ?>"></i></a></li>
            <li><a href="<?php echo get_theme_mod('link5_url', '/'); ?>"><i class="fab <?php echo get_theme_mod('link5_icon', 'fa-instagram'); ?>"></i></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <section class="branding">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </section>