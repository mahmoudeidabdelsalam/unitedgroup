<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UG</title>

    <meta name="description" content="Medical Equipment">
    <meta name="keywords" content="Medical Equipment">
    <meta property="og:title" content="Medical Equipment"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="" />

    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo-h.png"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo-h.png"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    
    <!--CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-rtl.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script src="https://kit.fontawesome.com/f339a7c60b.js"></script>

  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-xl navbar-light navbar-index fixed-top navbar-tow">
      <div class="container">
        <a class="navbar-brand" href="<?= site_url(); ?>">
          <img id="Logo_1" class="img-brand img-1" src="<?= the_field('logo_header', 'option'); ?>" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <?php
            $args = array(
              'theme_location' => 'primary',
              'depth'      => 3,
              'container'  => false,
              'menu_class'     => 'navbar-nav mb-2 mb-lg-0',
              'walker'     => new Bootstrap_Walker_Nav_Menu()
              );
            if (has_nav_menu('primary')) {wp_nav_menu($args);}
          ?>
          <ul class="navbar-nav d-flex">
            <li class="nav-item dropdown">
              <a class="nav-link nav-boder dropdown-toggle" href="#"id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-globe"></i>English
              </a>
              <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">عربى</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>



