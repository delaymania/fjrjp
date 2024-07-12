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

<div class="under_contents_wrap entry-content">
<div class="under_contents form-layout">

<h2 class="form_title">お問い合わせフォーム</h2>
<div class="form_sub_title">メールアドレスについてのご注意</div>
<p>フリーメール(Yahoo!メール、Gmail、など)をご利用の場合、弊社からのメールが届かないことや、「迷惑メール用フォルダ」などに振り分けられる場合があ ることが確認されています。ご入カいただくメールアドレスは、できるだけ<span class="form_notice">『フリーメールではないメー ルアドレス』のご利用をお勧めいたします。 </span></p>
<p>また、弊社からのメールが届かない場合や、返信が遅い場合には、念のためお使いのメールソフトの「迷惑メール用フォルダ」などをご確認いただけますよう、併せてお願いいたします。</p>
  

<div class="iframe-container">
<iframe id="iframeContact" src="https://info.fuji-realty.com/l/1063212/2024-04-17/dyr8nm" width="100%" height="1500px" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
</div>

	
  
</div>
</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
