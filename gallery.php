<?php
/**
 * Template Name: ギャラリー
 */
get_header(); ?>
<div class="container-fluid content">
   <main class="main" style="max-width: 90%; margin: 0 auto;">
   <?php
   if ( have_posts() ) {
      while ( have_posts() ) {
         the_post();
         the_content();
      }
   }  
   ?>
   <div class="gotop">
      <a href="#top" class="footer-gotop"><img id="gotop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gotop.svg" alt="ページトップへ戻る"></a>
   </div>
   </main>
</div>
<?php get_footer(); ?>