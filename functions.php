<?php
function neko_theme_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'neko_theme_setup' );

function neko_enqueue_scripts() {
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script(
      'neko-index-script',
      get_template_directory_uri() . '/assets/js/index-script.js',
      array(),
      '1.0.0',
      true
   );
   wp_enqueue_script(
      'neko-slideshow',
      get_template_directory_uri() . '/assets/js/slideshow.js',
      array(),
      '1.0.0',
      true
   );
   wp_enqueue_script(
      'neko-custrom',
      get_template_directory_uri() . '/assets/js/custom.js',
      array(),
      '1.0.0',
      true
   );
   wp_enqueue_style(
      'neko-normalize',
      get_template_directory_uri() . '/assets/css/normalize.css',
      array(),
      '1.0.0',
   );
   wp_enqueue_style(
      'neko-style',
      get_template_directory_uri() . '/assets/css/style.css',
      array('neko-normalize'),
      '1.0.0',
   );
   wp_enqueue_style(
      'googlefonts-noto',
      'https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap&subset=japanese',
      array(),
      '1.0.0'
   );
   wp_enqueue_style(
      'googlefonts-croi',
      'https://fonts.googleapis.com/css?family=Croissant+One&display=swap',
      array(),
      '1.0.0'
   );
   wp_enqueue_style(
      'googlefonts-zen',
      'https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap',
      array(),
      '1.0.0'
   );
   wp_enqueue_style(
      'googlefonts-yomogi',
      'https://fonts.googleapis.com/css2?family=Yomogi&display=swap',
      array(),
      '1.0.0'
   );
}
add_action( 'wp_enqueue_scripts', 'neko_enqueue_scripts' );