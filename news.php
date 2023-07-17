<?php
/**
 * Template Name: お知らせ
 */
get_header(); ?>
<div class="news">
   <div class="news-container">
      <div class="home-news">
      <?php
         if ( have_posts() ) {
            while ( have_posts() ) {
               the_post();
               the_content();
            }
         }
      ?>
      </div>
      <?php get_template_part( 'template-parts/parts', 'pagination' ); ?>
   </div>
   <div class="gotop">
      <a href="#top" class="footer-gotop"><img id="gotop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gotop-index.svg" alt="ページトップへ戻る"></a>
   </div>
</div>
</div>
<?php get_footer(); ?>