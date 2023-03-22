<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wwWizard
 */

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">




		
	    <nav class="sticky-nav">
      <div class="container-fluid d-flex flex-nowrap  justify-content-around">
        <a class="navbar-brand" href="<?php echo site_url(); ?>"
          ><img class="logo" src="<?php echo get_theme_file_uri('/images/white-logo.png'); ?>" alt="logo"
        /></a>
        <ul class="nav justify-content-center d-none d-lg-flex rtl">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#main">ראשי</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">השירותים שלי</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">יצירות אחרונות</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">אודות</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">צרו קשר</a>
          </li>
        </ul>
        <a href="#contact" style="text-decoration: none;">
        <button
        class="btn btn-outline-primary me-md-2 rounded-1 custom-btns nav-btn d-none d-lg-block"
        type="button"
      >
        דברו איתי
      </button>
      </a>
      </div>
    </nav>
    <nav
      class="navbar navbar-expand-lg navbar-light bg-transparent p-3 nav-desktop"
     >
      <div class="container-fluid d-flex flex-nowrap">
     
        <a href="<?php echo site_url(); ?>">
    <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" id="logo" class="logo" alt="site-logo" rel="home">
</img>
</a>
        <img
          class="hamburger-nav"
          src="<?php echo get_theme_file_uri('/images/hamburger-nav.png'); ?>"
          alt="hamburger"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasTop"
          aria-controls="offcanvasTop"
        />

        <div
          class="offcanvas offcanvas-end mobile-navbar"
          tabindex="-1"
          id="offcanvasTop"
          aria-labelledby="offcanvasTopLabel"
        >
          <div class="offcanvas-header">
            <img src="<?php echo get_theme_file_uri("./images/logo.png"); ?>" alt="logo">
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body rtl">
            <ul class="nav flex-column d-lg-none">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#main">ראשי</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">השירותים שלי</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">יצירות אחרונות</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">אודות</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">צרו קשר</a>
          </li>
            </ul>
          </div>
        </div>
        <ul class="nav justify-content-center d-none d-lg-flex rtl">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#main">ראשי</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">השירותים שלי</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">יצירות אחרונות</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">אודות</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">צרו קשר</a>
          </li>
        </ul>
      </div>
      <a href="#contact" style="text-decoration: none;">
      <button
        class="btn btn-outline-primary me-md-2 rounded-1 custom-btns nav-btn d-none d-lg-block"
        type="button"
      >
        דברו איתי
      </button>
      </a>
    </nav>

	</header><!-- #masthead -->
