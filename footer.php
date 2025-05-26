<?php
/**
 * フッターテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?>
	</div>
<div class="zeh_logo">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-sdgs.png" alt="かながわSDGsパートナーロゴ">
  <p>20年長期保証プログラム詳細は<a href="https://fj-r.jp/pdf/sdgs.pdf" target="_blank" rel="noopener">こちら</a></p>
</div>

<footer id="footer" class="<?php if ( is_page() && $post->post_parent > 0 && get_post($post->post_parent)->post_name == 'lineup' || is_home() || is_front_page() || is_page('about') || is_page('message') || is_page('company') || is_page('studio') || is_archive('team') || is_archive('owners_voice') || get_post_type() === 'owners_voice' && is_single() ):?>fixedbnr<?php endif; ?>
	<?php //ワンズキューボ
		if(!( is_page('event') || is_page('form_confirm') || is_page('form_thanks') )): ?>	
		<?php 
		$path = $_SERVER['SCRIPT_NAME'];
		if (strpos($path, '/lineup/onescubo/') !== false || is_page() && $post->post_parent > 0 && get_post($post->post_parent)->post_name == 'lineup/onescubo' ):?>fixedbnr footerOnescubo<?php endif; ?>
	<?php endif; ?>
	<?php //casita
		if(!( is_page('event') || is_page('form_confirm') || is_page('form_thanks') )): ?>	
		<?php 
		$path = $_SERVER['SCRIPT_NAME'];
		if (strpos($path, '/lineup/casita/') !== false || is_page() && $post->post_parent > 0 && get_post($post->post_parent)->post_name == 'lineup/casita' ):?>fixedbnr footerCasita<?php endif; ?>
	<?php endif; ?>
  ">
      <div class="contents">
          <div class="footer_top">
              <p class="top_btn"><a href="#"></a></p>
              <div class="f_lo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_w.png" alt="湘南乃工務店"/></div>
          </div>
          <div class="clearfix">
              <div class="footerLogo">
                  
          <div class="addressBox">
						<div class="column">
						  <p class="studio">[ 横浜スタジオ ]</p>
						  <p class="address">〒231-0023 <br>神奈川県横浜市中区山下町84-5-5F<a class="gm" href="https://maps.app.goo.gl/envvbQtKgaBMWzwC6" target="_blank">Google Map</a></p>
						  <div class="tel_box">
							  <p class="name pc_only"><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>0120-767-221</span></p><p class="name sp_only"><a href="tel:0120-767-221" id="tel_yokohama" onclick="yahoo_report_conversion('tel:0120-767-221')"><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>0120-767-221</span></a></p>
						  </div>
						  <p class="tel"><span><?php if(wp_is_mobile()) : ?><a href="tel:0452227822" id="tel_yokohama" onclick="yahoo_report_conversion('tel:045-222-7822')">TEL/045-222-7822</a><?php else:?>TEL/045-222-7822<?php endif;?></span><span class="fax">FAX/045-222-7821</span></p>
						  <p class="time">OPEN/9:30-18:30　<br>定休日/火曜日・水曜日</p>
						</div><!-- .column -->
						<div class="column">
						  <p class="studio">[ 湘南スタジオ ]</p>
						  <p class="address">〒251-0052 <br>神奈川県藤沢市藤沢1051-5-4F<a class="gm" href="https://maps.app.goo.gl/iQVQ9SarvBz9JrwC8" target="_blank">Google Map</a></p>
						  <div class="tel_box">
							  <p class="name pc_only"><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>0466-50-7000</span></p><p class="name sp_only"><a href="tel:0466-50-7000" id="tel_yokohama" onclick="yahoo_report_conversion('tel:0466-50-7000')"><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>0466-50-7000</span></a></p>
						  </div>
						  <p class="tel"><span><?php if(wp_is_mobile()) : ?><a href="tel:0466507000" id="tel_yokohama" onclick="yahoo_report_conversion('tel:045-222-7822')">TEL/0466-50-7000</a><?php else:?>TEL/0466-50-7000<?php endif;?></span><span class="fax">FAX/0466-50-1005</span></p>
						  <p class="time">OPEN/9:30-18:30　<br>定休日/水曜日・第一火曜日</p>
						</div><!-- .column -->
				  </div><!-- addressBox -->
              </div><!--footerLogo -->
			  <?php if(is_mobile()) : ?>
			  <?php else:?>
              <div class="footerSitemap clearfix">
                  <div class="footerEvent">
                      <div class="ttl">EVENT</div>
                      <div class="sitemap_list">
						  <div class="eventday">
                <span class="kaisai">開催日</span>
                <?php if ( is_active_sidebar('kaisaibi') ) : ?>
                  <?php dynamic_sidebar('kaisaibi'); ?>
                <?php endif; ?>
              </div>
        <?php if ( is_active_sidebar('top-event-list') ) : ?>
          <?php dynamic_sidebar('top-event-list'); ?>
        <?php endif; ?>
					  </div>
                  </div>
                  <div class="sitemap clearfix">
                      <!--<div class="ttl">SITEMAP</div>-->
                      <div class="sitemap_list"><ul class="clearfix">
                          <li><a href="<?php echo home_url( '/' ); ?>studio">スタジオのご案内</a></li>
                          <li><a href="<?php echo home_url( '/' ); ?>blog">ブログ</a></li>
                          <li><a href="<?php echo home_url( '/' ); ?>privacy">プライバシーポリシー</a></li>
                          <!--
                          <li><a href="https://job-gear.net/next21/" target="_blank">中途採用</a></li>
                          <li><a href="https://job.rikunabi.com/2022/company/r668062046/" target="_blank">新卒採用</a></li>
                          -->
                      </ul></div>
                  </div>
              </div><!-- footerSitemap -->
			  <?php endif;?>
          </div><!-- clearfix -->

			  <?php if(is_mobile()) : ?>
			  <?php else:?>
              <div class="footerSub">
                  <div class="footerLinkBox clearfix">
						<div class="link_btn menber sell"><a href="<?php echo home_url( '/' ); ?>want-to-sell">売りたい方へ</a></div>
						<div class="link_btn menber request"><a href="<?php echo home_url( '/' ); ?>request">資料請求</a></div>
						<div class="link_btn menber member"><a href="<?php echo home_url( '/' ); ?>member">会員登録</a></div>
					    <div class="link_btn contact"><a href="<?php echo home_url( '/' ); ?>contact">お問い合わせ</a></div>
                  </div>
                  <div class="sns_box">
                      <p class="msg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer_sns_msg.png" alt="follow me"></p>
                      <ul class="clearfix">
                          <li><a href="https://www.instagram.com/next_lifelabel/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_footer_sns_03.png" alt="instagram"></a></li>
						  <li><a href="https://www.pinterest.jp/next_lifelabel/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_menu_sns_04.png" alt="Pinterest"></a></li>
                          <li><a href="https://www.facebook.com/next.lifelabel/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_footer_sns_01.png" alt="fb"></a></li>
                          <li><a href="https://twitter.com/next_lifelabel" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_footer_sns_02.png" alt="twitter"></a></li>
                      </ul>
                  </div>
              </div><!-- .footerSub -->
			  <?php endif;?>
		  
                  <div class="logoBox">
					  <div class="sns_box">
						  <p class="msg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer_sns_msg.png" alt="follow me"></p>
						  <ul class="clearfix">
							  <li><a href="https://www.instagram.com/shonannokoumuten/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_footer_sns_03.png" alt="instagram"></a></li>
							  <li><a href="https://www.pinterest.jp/shonanno1koumuten/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_footer_sns_04.png" alt="Pinterest"></a></li>
							  <li><a href="https://www.facebook.com/shonannokoumuten/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_footer_sns_01.png" alt="fb"></a></li>
                
						  </ul>
					  </div>
                  </div>		  

          <p id="copyright" class="floBnr">© <?php echo date('Y'); ?> 湘南乃工務店</p>
      </div>
  </footer>
<?php
wp_footer();
do_action( 'ys_body_append' );
?>
</body>
</html>
