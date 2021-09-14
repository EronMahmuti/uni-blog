<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url()?> "><strong style="color:red;" >Lobi</strong> Shqiptar</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href=" <?php echo site_url('/') ?> ">Ballina</a></li>
              <li><a href=" <?php echo site_url('/rreth-nesh') ?> ">Reth Lobit</a></li>
              <li><a href=" <?php echo site_url('/takimet') ?> ">Takimet</a></li>
              <li><a href=" <?php echo site_url('/kryesia') ?> ">Kryesia</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

