<?php
/**
 * サイトヘッダーテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

defined( 'ABSPATH' ) || die();
?>
<?php if ( !wp_is_mobile() ) : ?>
<header class="site-header-sub">
  <div class="shs-inner">
    <div class="shs-txt">ライフスタイルをとことん楽しむための住まいづくり</div>
    <div class="shs-info">
      <div class="shs-studio"><span class="shs-studio-name">湘南乃工務店</span><i class="fa fa-volume-control-phone"></i><span class="shs-studio-phone">0120-767-221</span></div>
      <div class="shs-contact"><a href="<?php echo home_url( '/contact/' ); ?>"><i class="fa fa-envelope"></i><span>お問い合わせ</span></a></div>
      <div class="shs-member"><a href="<?php echo home_url( '/member/' ); ?>"><i class="fa fa-user"></i>会員登録</a></div>
    </div>
  </div>
</header>
<?php endif; ?>

<header id="masthead" class="site-header">
	<?php do_action( 'ys_site_header_prepend' ); ?>
	<div class="container">
		<div class="site-header__content">
<?php if ( wp_is_mobile() ) : ?>
<div class="site-title">
  <a href="<?php echo home_url( '/' ); ?>" class="custom-logo-link" rel="home">
    <img width="200" height="167" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_w.png" class="custom-logo" alt="湘南乃工務店" decoding="async">
  </a>
</div>
<ul class="gnav-sp">
<li><a href="<?php echo home_url( '/' ); ?>request"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico_catalog.png" alt="資料請求"><p>資料請求</p></a></li>
<li id="spMenuFreedial01"><a href="tel:0120767221"><i class="fa fa-volume-control-phone" aria-hidden="true"></i><p>TEL</p></a></li>
<li><a href="<?php echo home_url( '/' ); ?>online"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico_online.png" alt="WEB相談"><p>WEB相談</p></a></li>
</ul>
<?php else: ?>
			<?php
			/**
			 * サイトタイトル・ロゴの出力
			 */
			ys_get_template_part( 'template-parts/header/header-logo' );
      ?>
			<?php
			/**
			 * グローバルナビゲーション
			 */
			ys_get_template_part( 'template-parts/header/global-nav' );
			?>
<?php endif; ?>

      <nav class="menubox-frame sp_menu">
        <input id="menubox-menu" type="checkbox" name="menubox-menu" class="menubox-menu-check">
        <label for="menubox-menu" class="menubox-btn"></label>
        <p class="menubox-open-txt">メニュー</p>
        <div class="menubox-nav">
          <p class="menubox-close-txt">閉じる</p>

          <div class="menu-page-frame">
          
            <nav class="menu-page-box">
              <ul class="menu-page-list">
              </ul>
            </nav>

            <div class="sitemap clearfix">
              <div class="list">
                <div class="spmenu-single"><a href="<?php echo home_url( '/' ); ?>">ホームへ戻る</a></div>
                <ul class="clearfix">
                  <li><a href="<?php echo home_url( '/' ); ?>event">イベント一覧</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>online">オンライン無料相談</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>owners_voice">お客様の声</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>project">施工事例</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>team">スタッフ紹介</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>studio">スタジオのご案内</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>want-to-sell">売りたい方へ</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>request">資料請求</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>member">会員登録</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>message">ごあいさつ</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>company">会社概要</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>contact">お問い合わせ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
		</div>
	</div>
	<?php do_action( 'ys_site_header_append' ); ?>
</header>


