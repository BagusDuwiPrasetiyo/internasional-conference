<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventre</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="<?= base_url('assets/'); ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Themefisher Font -->  
  <link href="<?= base_url('assets/'); ?>plugins/themefisher-font/style.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets/'); ?>plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="<?= base_url('assets/'); ?>plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="<?= base_url('assets/'); ?>plugins/slick/slick.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="<?= base_url('assets/'); ?>images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="index.html">
        <img src="<?= base_url('assets/'); ?>images/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown active dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">Home
            <span>/</span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.html">Homepage</a>
            <a class="dropdown-item" href="homepage-two.html">Homepage 2</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="speakers.html">Speakers
            <span>/</span>
          </a>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown">Pages<span>/</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="about-us.html">About Us</a>
              <a class="dropdown-item" href="single-speaker.html">Single Speaker</a>
              <a class="dropdown-item" href="gallery.html">Gallery</a>
              <a class="dropdown-item" href="gallery-two.html">Gallery-02</a>
              <a class="dropdown-item" href="testimonial.html">Testimonial</a>
              <a class="dropdown-item" href="pricing.html">Pricing</a>
              <a class="dropdown-item" href="FAQ.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule.html">Schedule<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sponsors.html">Sponsors<span>/</span></a>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">News
            <span>/</span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="news.html">News without sidebar</a>
            <a class="dropdown-item" href="news-right-sidebar.html">News with right sidebar</a>
            <a class="dropdown-item" href="news-left-sidebar.html">News with left sidebar</a>
            <a class="dropdown-item" href="news-single.html">News Single</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
      <a href="#" class="ticket">
        <img src="<?= base_url('assets/'); ?>images/icon/ticket.png" alt="ticket">
        <span>Buy Ticket</span>
      </a>
      </div>
  </div>
</nav>