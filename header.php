<!Doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $args["metaDescription"] ?>">
  <meta name="keywords" content="">
  <link delay-1 rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
  <link delay-1 rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
  <meta property="og:locale" content="pl_PL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $args["ogTitle"] ?>">
  <meta property="og:url" content="<?php echo $args["ogUrl"] ?>">
  <meta property="og:site_name" content="<?php echo $args["ogSite_name"] ?>">
  <meta name="google-site-verification" content="" />
  <title><?php echo $args["title"] ?></title>

  <?php
  wp_head();
  ?>
</head>

<body>
  <!-- NAWIGACJA -->
  <div class="navigation container-fluid sticky-top">
    <!-- SIDEBAR -->
    <div id="mySidebar" class="sidebar hiden-side text-align-center ">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <br>

      <a href="<?php echo get_home_url() ?>" class="side-links ">Strona główna</a>
      <a href="<?php echo get_home_url() ?>/rzeczoznastwo" class="side-links">Rzeczoznawca</a>
      <a href="<?php echo get_home_url() ?>/pomoc" class="side-links">Pomoc drogowa</a>
      <a href="<?php echo get_home_url() ?>/cennik" class="side-links">Cennik</a>
      <a href="<?php echo get_home_url() ?>/galeria" class="side-links">Galeria</a>
    </div>

    <div id="main">
      <button class="openbtn hiden-side" onclick="openNav()">☰</button>
    </div>

    <div class="row align-items-center row-nav">
      <div class="col-sm-12 col-md-2 col-img  ">
        <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/assets/nowelogo1.webp'; ?>" alt="logo sprawdź auto" class="img-fluid" /></a>
      </div>

      <div class="col-sm-12 col-md-8 menu-desktop">
        <div class="col-sm-12 hidden pb-1">
          <ul class="nav d-flex justify-content-around">
            <li class="nav-item">
              <a class="nav-link nav-link-active" href="<?php echo get_home_url() ?>">Strona główna</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() ?>/rzeczoznastwo">Rzeczoznawca</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() ?>/pomoc">Pomoc Drogowa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() ?>/cennik">Cennik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() ?>/galeria">Galeria</a>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-sm-12 col-md-2 telefon">
        <li class=" float-md-right "> <a href="tel:0048500711715" class="number"><i class="fas fa-phone-alt mr-2"></i> +48 500 711 715</a></li>
      </div>
    </div>
  </div>