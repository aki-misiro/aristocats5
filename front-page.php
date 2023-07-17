<?php get_header(); ?>
<div class="home">
<div id="graphic">
	<ul>
		<li class="now"><img class="image1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide1.jpg" alt=""></li>
		<li><img class="image2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide2.jpg" alt=""></li>
		<li><img class="image3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide3.jpg" alt=""></li>
	</ul>
</div>
<div class="page-main">
   <div class="main-container">
      <div class="logo-cat">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-cat.svg" alt="">
      </div>
      <h2>ギルド情報</h2>
      <table class="guild-info">
         <tr>
            <th>活動場所</th>
            <td>日本ワールド1</td>
         </tr>
         <tr>
            <th>活動時間</th>
            <td>21時～1時前</td>
         </tr>
         <tr>
            <th>酒場</th>
            <td>ビンテージ</td>
         </tr>
         <tr>
            <th>出店</th>
            <td>倉庫</td>
         </tr>
         <tr>
            <th>設備</th>
            <td>マケ手数料軽減 Lv6</td>
         </tr>
         <tr>
            <th>姉妹ギルド</th>
            <td>ゆる魂（日本2）<br>
            定期的に合同イベ予定です♪
            </td>
         </tr>
      </table>
   </div>
</div>
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
   </div>
   <div class="gotop">
      <a href="#top" class="footer-gotop"><img id="gotop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gotop-index.svg" alt="ページトップへ戻る"></a>
   </div>
</div>
</div>
<?php get_footer(); ?>