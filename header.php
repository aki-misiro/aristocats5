<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/touch-icon.png" rel="apple-touch-icon-precomposed">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="page-header">
   <div class="header-container">
      <h1 class="header-logo">
         <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-logo.svg" alt="<?php bloginfo( 'name' ); ?>"></a>
      </h1>
      <a href="#" id="slidemenu-btn">
         <span></span>
         <span></span>
         <span></span>
      </a>
   </div>
   <nav class="page-nav">
      <div class="nav-container" id="js-slidemenu">
         <?php
            wp_nav_menu(
               array(
                  'theme_location' => 'main-menu',
                  'menu_class' => 'globalnav',
                  'container' => false,
               )
            );
         ?>
      </div>
   </nav>
</header>