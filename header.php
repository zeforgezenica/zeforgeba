<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/17a9e6f17a.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body class="container">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?php echo site_url();?>/wp-content/images/logo.png" alt="" width="60" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="pocetna" href="/">Početna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="hammerit" href="/hammerit">HammerIT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="meetupi" href="/meetupi">Meetup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="kontakt" href="/kontakt">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>