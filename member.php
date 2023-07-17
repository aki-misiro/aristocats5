<?php
/**
 * Template Name: メンバー
 */
get_header(); ?>
<div class="member-top">
<div class="page-main">
   <div class="main-container">
      <div class="member-image">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member-cats.png" alt="">
      </div>
      <h2>メンバー</h2>
      <form id="form">
         <p>
            <select name="select">
               <option value="#member1">ゆいにゃん</option>
               <option value="#member2">ゆん</option>
               <option value="#member3">アイン</option>
               <option value="#member4">アルリス</option>
               <option value="#member5">笑夢</option>
               <option value="#member6">蚊取り閃光</option>
               <option value="#member7">サイユノ</option>
               <option value="#member8">富条璃奈</option>
               <option value="#member9">福助</option>
               <option value="#member10">ふみてゃ</option>
               <option value="#member11">まひにゃ</option>
               <option value="#member12">Misiro</option>
               <option value="#member13">夜卜yato</option>
            </select>
         </p>
     </form>
     <div class="members">
         <div class="member" id="member1">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member1.png" alt="ゆいにゃん">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>ゆいにゃん</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>たこ焼きLv.10（クリ率＋30）</li>
                           <li>しょうゆラーメンLv.7（命中＋58）</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>双剣</li>
                           <li>銃</li>
                           <li>剣盾</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member2">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member2.png" alt="ゆん">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>ゆん</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>たこ焼きLv.10（クリ率＋30）</li>
                           <li>ビーフシチューLv.9（ヘイト＋86%）</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>双剣</li>
                           <li>銃</li>
                           <li>壁</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member3">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member3.png" alt="アイン">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>アイン</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>たこ焼きLv.9（クリ率＋26）</li>
                           <li>焼きそばLv.7（攻撃MP回復＋18）</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member4">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member4.png" alt="アルリス">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>アルリス</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>ビーフバーガーLv.2（物理耐性＋8%）</li>
                           <li>なし</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>手甲盾</li>
                           <li>両手剣</li>
                           <li>自動弓</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member5">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member5.png" alt="笑夢">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>笑夢</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>おかかおにぎりLv.4（STR＋8）</li>
                           <li>なし</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>双剣</li>
                           <li>自動弓</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member6">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member6.png" alt="蚊取り閃光">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>蚊取り閃光</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>あんかけチャーハンLv.9（最大MP＋860）</li>
                           <li>焼きそばLv.6（攻撃MP回復＋14）</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>双剣</li>
                           <li>素材集め用の魔具</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member7">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member7.png" alt="サイユノ">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>サイユノ</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>黄金チャーハンLv.8（最大HP＋3800）</li>
                           <li>なし</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>両手剣</li>
                           <li>抜刀</li>
                           <li>剣盾</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member8">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member8.png" alt="富条璃奈">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>富条璃奈</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>固定していない</li>
                           <li>固定していない</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member9">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member9.png" alt="福助">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>福助</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>ビーフバーガーLv.8（物理耐性＋38%）</li>
                           <li>なし</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>火力サポ魔職</li>
                           <li>裸抜刀</li>
                           <li>ハゲ4確</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member10">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qmark.svg" alt="ふみてゃ">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>ふみてゃ</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member11">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member11.png" alt="まひにゃ">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>まひにゃ</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>たこ焼きLv.10（クリ率＋30）</li>
                           <li>なし</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>拳盾</li>
                           <li>双剣</li>
                           <li>純弓</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member12">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member12.png" alt="Misiro">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>Misiro</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>鮭おにぎりLv.8（DEX＋22）</li>
                           <li>なし</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>純弓</li>
                           <li>ラック拳魔</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member13">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member13.png" alt="夜卜yato">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>夜卜yato</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>マルゲリータピザLv.10（武器ATK＋100）</li>
                           <li>ボンゴレLv.5（水属性にダメージ＋5%）</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>純弓</li>
                           <li>自動弓</li>
                           <li>槍</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <h2>メンバー（from ゆる魂）</h2>
      <form id="form-yuru">
         <p>
            <select name="select">
               <option value="#member101">アズ姉</option>
               <option value="#member102">ACARIA</option>
               <option value="#member103">ぁめ。</option>
               <option value="#member104">銀狼　白</option>
               <option value="#member105">ザトイチ</option>
               <option value="#member106">シュウ</option>
               <option value="#member107">みたま</option>
               <option value="#member108">みるくここあ</option>
            </select>
         </p>
     </form>
     <div class="members">
         <div class="member" id="member101">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member101.png" alt="アズ姉">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>アズ姉</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>焼きそばLv.8（攻撃MP回復＋22）</li>
                           <li>シーオジャガ料理人</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>双剣</li>
                           <li>壁</li>
                           <li>農家</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member102">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member102.png" alt="ACARIA">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>ACARIA</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>黄金チャーハンLv.9（最大HP＋4400）</li>
                           <li>なし</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>純弓</li>
                           <li>双剣</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member103">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qmark.svg" alt="ぁめ。">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>ぁめ。</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member104">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qmark.svg" alt="銀狼　白">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>銀狼　白</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member105">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qmark.svg" alt="ザトイチ">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>ザトイチ</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member106">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/member106.png" alt="シュウ">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>シュウ</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>マルゲリータピザLv.8（武器ATK＋72）</li>
                           <li>梅干おにぎりLv.8（INT＋22）</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>杖</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member107">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qmark.svg" alt="みたま">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>みたま</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="member" id="member108">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qmark.svg" alt="みるくここあ">
            <div class="member-text">
               <p><q>&nbsp;&nbsp;<strong>みるくここあ</strong>&nbsp;&nbsp;</q></p>
               <div class="tab">
                  <ul class="tab-menu clear">
                     <li class="selected"><a href="#" data-tabid="1">料理</a></li>
                     <li><a href="#" data-tabid="2">職業</a></li>
                  </ul>
                  <div class="tab-contents">
                     <div data-contentid="1">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                     <div class="hidden" data-contentid="2">
                        <ul class="cooking-list">
                           <li>？</li>
                           <li>？</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="gotop">
      <a href="#top" class="footer-gotop"><img id="gotop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gotop.svg" alt="ページトップへ戻る"></a>
   </div>
</div>
</div>
<?php get_footer(); ?>