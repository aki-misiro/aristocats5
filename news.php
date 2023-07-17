<?php
/**
 * Template Name: お知らせ
 */
get_header(); ?>
<div class="news">
   <div class="news-container">
      <div class="home-news">
         <div class="pagination">
            <div class="list-box">
               <p>お知らせ</p>
               <?php
               $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               $the_query = new WP_Query( array(
                  'post_status' => 'publish',
                  'post_type' => 'news', //　ページの種類（例、page、post、カスタム投稿タイプ名）
                  'paged' => $paged,
                  'posts_per_page' => 10, // 表示件数
                  'orderby'     => 'date',
                  'order' => 'DESC'
               ) );
               if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
                  ?>
                     <?php
                     $date = get_the_content();
                     $title = get_the_title();
                     echo '<dl><dt>'.$date.'</dt>'.'<dd>'.$title.'</dd></dl>';
                     ?>
                  <?php
                  endwhile;
               else:
                  echo '<div><p>お知らせはありません。</p></div>';
               endif;
               ?>
            </div>
         
            <div class="pnavi">
               <?php //ページリスト表示処理
               global $wp_rewrite;
               $paginate_base = get_pagenum_link(1);
               if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                  $paginate_format = '';
                  $paginate_base = add_query_arg('paged','%#%');
               }else{
                  $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                  user_trailingslashit('page/%#%/','paged');
                  $paginate_base .= '%_%';
               }
               echo paginate_links(array(
                  'base' => $paginate_base,
                  'format' => $paginate_format,
                  'total' => $the_query->max_num_pages,
                  'mid_size' => 1,
                  'current' => ($paged ? $paged : 1),
                  'prev_text' => '&lt',
                  'next_text' => '&gt',
               ));
               ?>
            </div>
         </div>
      </div>
   </div>
   <div class="gotop">
      <a href="#top" class="footer-gotop"><img id="gotop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gotop-index.svg" alt="ページトップへ戻る"></a>
   </div>
</div>
</div>
<?php get_footer(); ?>