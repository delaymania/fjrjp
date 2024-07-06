<?php
/**
 * 固定ページテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="mv_under_contents">
        <div class='upper'>
            <h2 class="ttl"><?php echo esc_html(get_field('sub_title')); ?><span><?php the_title(); ?></span></h2>
        </div>
    </div>
    
<?php if ($html_content = get_field('lead')): ?>
<div class="undertitlewrap">
  <div class="undertitlebox">
    <div class="comme">
      <?php echo wp_kses_post($html_content); ?>
    </div>
  </div>
</div>
<?php endif; ?>

    
<div class="under_contents_wrap">


      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php the_content(); ?>

      <?php endwhile; else: ?>
      <?php endif; ?>


</div>

<div class="company-list">
  <div class="company-list-inner">
    <h2 class="project-title">グループ会社</h2>
    <div class="company-list-frame">
      <div class="company-list-box">
        <a href="https://www.fujic21.com/company">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-01.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>FJグループ株式会社</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="https://fuji-realty.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-02.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>富士リアルティ株式会社<br>
  一級建築士事務所 湘南乃工務店<br>
  日本本社</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="<?php echo home_url( '/' ); ?>">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-03.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>富士リアルティ株式会社<br>
  一級建築士事務所 湘南乃工務店<br>
  横浜スタジオ</h3>
          </div>
        </a>
      </div>

      <div class="company-list-box">
        <a href="https://www.century21totsuka.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-04.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>センチュリー21富士リアルティ<br>
  サクラス戸塚店</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="https://cambodia.fujic21.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-05.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>Century21 Fuji Realty<br>
  Cambodia</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="https://thai.fuji-realty.asia/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-06.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>Century21 Fuji Realty<br>
  Thailand</h3>
          </div>
        </a>
      </div>

      <div class="company-list-box">
        <a href="https://www.century21umi.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-07.png" alt="">
          </div>
          <div class="company-list-txt">
            <h3>センチュリー21加盟店<br>
  株式会社富士ハウジング<br>
  藤沢店</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="https://www.century21umi.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-08.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>センチュリー21加盟店<br>
  株式会社富士ハウジング<br>
  湘南モールフィル店
  </h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="https://www.century21umi.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-09.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>センチュリー21加盟店<br>
  株式会社富士ハウジング<br>
  辻堂北口店</h3>
          </div>
        </a>
      </div>

      <div class="company-list-box">
        <a href="https://www.c21-plaza.jp/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-10.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>センチュリー21加盟店<br>
  仲介プラザ株式会社</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="http://www.century21mtrust.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-11.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>センチュリー21加盟店<br>
  株式会社エムトラスト</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="https://www.shonan-fj.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-12.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>センチュリー21加盟店<br>
  湘南FJ不動産株式会社</h3>
          </div>
        </a>
      </div>

      <div class="company-list-box">
        <a href="https://fj-care.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-13.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>FJケア株式会社</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-14.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>高齢者住宅仲介センター<br>
  ウチシルベ湘南藤沢</h3>
          </div>
      </div>
      <div class="company-list-box">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-15.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>高齢者住宅仲介センター<br>
  ウチシルベ湘南平塚</h3>
          </div>
      </div>

      <div class="company-list-box">
        <a href="https://fjkickass.weebly.com/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-16.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>FJ KICKASS</h3>
          </div>
        </a>
      </div>
      <div class="company-list-box">
        <a href="https://www.instagram.com/okonomiyakisakura/">
          <div class="company-list-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/company-17.jpg" alt="">
          </div>
          <div class="company-list-txt">
            <h3>関西風お好み焼き桜</h3>
          </div>
        </a>
      </div>

    </div><!-- .company-list-frame -->
  </div><!-- .company-list-inner -->
</div><!-- .company-list -->
    
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
