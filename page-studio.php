<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="mv_under_contents">
        <div class='upper'>
            <h2 class="ttl">STUDIO<span>スタジオ</span></h2>
        </div>
    </div>
    <div class="under_contents_wrap">
      <div class="undertitlewrap">
        <div class="undertitlebox">
          <div class="comme"><span>各スタジオ・アクセスマップのご案内です。</span>
          </div>
        </div>
      </div>
      
      <div class="under_contents studio yokohama" id="shonan-studio">
        <div class="accessBox01 cf">
          <div class="area">
            <h3><span class="en">SHONAN STUDIO</span><span class="ja">湘南スタジオ</span></h3>
            <p>藤沢駅北口より徒歩8分。</p>
            <ul>
              <li>徒歩8分</li>
            </ul>
          </div>
          <div class="txtBox">
            <table>
              <tr>
                <th><span>住所</span>
                </th>
                <td>〒251-0052 神奈川県藤沢市藤沢1051-5　TAIKI 3 BLDG. 4F</td>
              </tr>
              <tr>
                <th><span>電話</span>
                </th>
                <td>0466-50-7000</td>
              </tr>
              <tr>
                <th><span>アクセス</span>
                </th>
                <td>[ 電車 ]<br>JR「藤沢」駅徒歩8分</td>
              </tr>
            </table>
          </div><!-- .txtBox -->
        </div><!-- .accessBox01 -->

        
        <div class="map-canvas">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.612433933156!2d139.47971771170475!3d35.34044454850472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184feb8d5aff59%3A0xd41d4f1735122a46!2z5rmY5Y2X5LmD5bel5YuZ5bqX!5e0!3m2!1sja!2sus!4v1704532115432!5m2!1sja!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="textC"><a href="https://maps.app.goo.gl/ZhU1aTzeEpw4irff7" target="_blank" class="btn_access02 rev">Googleマップで見る</a></div>
      </div>
      
      <div class="under_contents studio yokohama" id="yokohama-studio">
        <div class="accessBox01 cf">
          <div class="area">
            <h3><span class="en">YOKOHAMA STUDIO</span><span class="ja">横浜スタジオ</span></h3>
            <p>最寄り駅徒歩1分。中華街や山下公園も徒歩5分以内とアクセス抜群です。横浜市山下町地下駐車場をご利用いただければ、お帰りの際精算させていただきます。</p>
            <ul>
              <li>徒歩1分</li>
              <li>駐車場有</li>
              <li>キッズルーム</li>
            </ul>
          </div>
          <div class="txtBox">
            <table>
              <tr>
                <th><span>住所</span>
                </th>
                <td>〒231-0023 神奈川県横浜市中区山下町84-5-5F</td>
              </tr>
              <tr>
                <th><span>電話</span>
                </th>
                <td>045-222-7822</td>
              </tr>
              <tr>
                <th><span>アクセス</span>
                </th>
                <td>[ 電車 ]<br>みなとみらい線「元町・中華街」駅徒歩1分<br>[ 車 ]<br>首都高「新山下」「山下町」「横浜公園」出口
                  <div class="btn_access01"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/access_info-yokohama-guide.pdf" target="_blank">アクセスのご案内</a>
                  </div>
                </td>
              </tr>
            </table>
          </div><!-- .txtBox -->
        </div><!-- .accessBox01 -->

        <div class="swiper-container">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/studio/studio_yokohama01.jpg" alt="横浜スタジオ 店内">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/studio/studio_yokohama02.jpg" alt="横浜スタジオ 店内">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/studio/studio_yokohama03.jpg" alt="横浜スタジオ キッズルーム">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/studio/studio_yokohama04.jpg" alt="横浜スタジオ キッズルーム">
            </div>
          </div>
          </div><!-- swiper-wrapper -->
        </div><!-- swiper-container -->

        <div class="map-canvas">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.477641244041!2d139.6493288!3d35.4429678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185d367acffffb%3A0xe9e38959a4ffc963!2z5a-M5aOr44Oq44Ki44Or44OG44KjIOa5mOWNl-S5g-W3peWLmeW6lyDmqKrmtZzjgrnjgr_jgrjjgqo!5e0!3m2!1sja!2sjp!4v1740537058755!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="textC"><a href="https://maps.app.goo.gl/envvbQtKgaBMWzwC6" target="_blank" class="btn_access02 rev">Googleマップで見る</a></div>
      </div><!-- .studio -->
    </div>
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
