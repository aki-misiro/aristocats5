<?php
function neko_theme_setup() {
   add_theme_support( 'title-tag' );
   register_nav_menus( array(
      'main-menu' => 'メインメニュー',
      'footer-menu' => 'フッターメニュー'
   ) );
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

function create_post_type_news(){
   register_post_type( 
      'news',
      array(
      'labels' => array(
      'name' => 'お知らせ'
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail','author'),
      'show_in_rest' => true,
      )
   );
}
add_action( 'init', 'create_post_type_news' );

function shortcode_news_list() {
   $args = array(
      'posts_per_page' => 6,  // 一覧に表示させる件数
      'post_type' => 'news',  // お知らせのスラッグ
      'post_status' => 'publish'
   );
   $the_query = new WP_Query( $args );
   // お知らせ一覧用HTMLコード作成
   if ( $the_query->have_posts() ) {
      $html = '';
      while ( $the_query->have_posts() ) :
      $html .= '<dl>';
      $the_query->the_post();
      $date = get_the_content();
      $title = get_the_title();
      $html .= '<dt>'.$date.'</dt>'.'<dd>'.$title.'</dd>';
      $html .= '</dl>';
      endwhile;
   }
   return $html;
}
add_shortcode("news_list", "shortcode_news_list");

// function shortcode_news_list_more() {
//    $args = array(
//       'posts_per_page' => 10,  // 一覧に表示させる件数
//       'post_type' => 'news',  // お知らせのスラッグ
//       'post_status' => 'publish'
//    );
//    $the_query = new WP_Query( $args );
//    // お知らせ一覧用HTMLコード作成
//    if ( $the_query->have_posts() ) {
//       $html = '';
//       while ( $the_query->have_posts() ) :
//       $html .= '<dl>';
//       $the_query->the_post();
//       $date = get_the_content();
//       $title = get_the_title();
//       $html .= '<dt>'.$date.'</dt>'.'<dd>'.$title.'</dd>';
//       $html .= '</dl>';
//       endwhile;
//    }
//    return $html;
// }
// add_shortcode("news_list_more", "shortcode_news_list_more");