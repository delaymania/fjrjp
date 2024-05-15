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
<div class="under_contents">
<section class="sell">
<article>
<div class="sell_box">
<div class="sell_box_under clearfix">
<div class="sell_boxl">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sell/icon_step_01.png" alt="step1">
</div>
<h3 class="ttl"><span>ご相談</span></h3>
<div class="sell_boxr">
<p class="lead">
まずはご売却の事情や引渡時期の条件等、ご相談下さい。<br>
査定は無料で行います。お問い合わせは、下記記載の番号へお電話いただくか、FAXへご連絡いただくか、売却無料査定フォームからも受け付けております。詳しい情報を記載の上で、フォームからお申し込みいただけますと、迅速に業務を行えますので、ご利用下さい。
</p>
<div class="info">
<div class="tel">
<p>電話でのお問い合わせ</p>
<p class="name pc_only"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>0466-50-7000</p>
<p class="name sp_only"><a href="tel:0466-50-7000"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>0466-50-7000</a></p>
<p class="txt">営業時間／9:30〜20:00　定休日／水曜日</p>
</div>
<div class="fax">
<p>FAXでのお問い合わせ</p>
<p class="name"><i class="fa fa-fax" aria-hidden="true"></i>0466-50-1005</p>
</div>
<p class="link_btn">
<a href="<?php echo home_url( '/' ); ?>sell-form">売却無料査定フォームはこちら</a>
</p>
</div>
</div>
</div>
</div>
<div class="sell_box">
<div class="sell_box_under clearfix">
<div class="sell_boxl">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sell/icon_step_02.png" alt="step2">
</div>
<h3 class="ttl"><span>調査・査定</span></h3>
<div class="sell_boxr">
<p class="lead">
ご売却物件を様々な角度から調査し、近隣相場などを参考に適正な査定価格をご提案致します。<br>
また現地調査を基に市場動向・取引事例などから、売り出しのタイミングや、購入希望者へのアプローチなど、できる限りのお手伝いをお約束いたします。
</p>
</div>
</div>
</div>
<div class="sell_box">
<div class="sell_box_under clearfix">
<div class="sell_boxl">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sell/icon_step_03.png" alt="step3">
</div>
<h3 class="ttl"><span>媒介契約</span></h3>
<div class="sell_boxr">
<p class="lead">
ご売却を決められたら、お客様（売主様）と弊社との間で売却依頼の契約をさせていただきます。</p>
</div>
</div>
</div>
<div class="sell_box">
<div class="sell_box_under clearfix">
<div class="sell_boxl">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sell/icon_step_04.png" alt="step4">
</div>
<h3 class="ttl"><span>販売活動</span></h3>
<div class="sell_boxr">
<p class="lead">
弊社ホームページや不動産流通機構をはじめ、ご売却物件に対する販売活動を行います。<br>
問い合わせの状況や反応、あるいは広告などを含めた活動の経過報告を行いながら、見学希望者が現れた場合、ご都合を合わせてお住まいを見学させて頂きます。
</p>
</div>
</div>
</div>
<div class="sell_box">
<div class="sell_box_under clearfix">
<div class="sell_boxl">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sell/icon_step_05.png" alt="step5">
</div>
<h3 class="ttl"><span>売買契約</span></h3>
<div class="sell_boxr">
<p class="lead">
購入希望者（買主様）が見つかりましたら、諸条件を充分に確認した上で、売買契約を締結します。<br>
当社スタッフ立ち会いのもと重要事項の説明、付帯物の確認、売買契約書の交付、手付金の授受などを執り行います。<br>
内容につきましては当社が厳しくチェックしますので安心してお任せください。
</p>
</div>
</div>
</div>
<div class="sell_box">
<div class="sell_box_under clearfix">
<div class="sell_boxl">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sell/icon_step_06.png" alt="step6">
</div>
<h3 class="ttl"><span>決済登記</span></h3>
<div class="sell_boxr">
<p class="lead">
ご売却物件に住宅ローンやその他の抵当権等が付いている場合、抹消手続を行い、残金の受領日までに引越します。<br>
所有権移転登記の手続き、残代金の授受、その他費用の精算などを行い、決済を完了いたします。<br>
残金を受け取り登記の申請が済むと、物件のお引渡しです。ご売却後も確定申告などお気軽にご相談ください。
</p>
</div>
</div>
</div>
</article>
</section>
</div>
</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
