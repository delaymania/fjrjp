<?php
/**
 * グローバルナビゲーションテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

defined( 'ABSPATH' ) || die();

if ( ! ys_has_global_nav() ) {
	return;
}
?>
<?php ys_global_nav_toggle_button(); ?>
<div class="<?php ys_global_nav_class( 'global-nav' ); ?>">
	<?php do_action( 'ys_global_nav_prepend' ); ?>
	<nav class="global-nav__container">
    <ul id="gNavi" class="clearfix">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_top.png" alt="">ホーム</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>online"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_about.png" alt="">オンライン無料相談</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_fukidashi.png" alt="">お客様の声</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>project"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_company.png" alt="">施工事例</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>team"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_team.png" alt="">スタッフ紹介</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>studio"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_lineup.png" alt="">スタジオ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_company.png" alt="">会社概要</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>request"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nav_icon_catalog.png" alt="">資料請求</a></li>
    </ul>
	</nav>
	<?php do_action( 'ys_global_nav_before_search' ); ?>
	<?php if ( ys_is_active_header_search_form() ) : ?>
		<button id="global-nav__search-button" class="global-nav__search-button">
			<?php echo ys_get_icon( 'search' ); ?>
		</button>
	<?php endif; ?>
	<?php do_action( 'ys_global_nav_append' ); ?>
</div>

