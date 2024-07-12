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
		<section class="member">
			<div class="eyecath visibleTS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/img_member01_sp.jpg" alt=""></div>

			<div class="inner">
				<div class="eyecath visiblePC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/img_member01_pc.jpg" alt=""></div>
				<p class="cap01">「無料会員登録フォーム」を入力して<br>「登録」ボタンを押すだけ！</p>
				<p class="cap02">ご登録会員様だけに、<br><span>SALE・キャンペーン情報</span><br>をメールでお届けします</p>
				<div class="entry-content">
					<h3 class="form_title">無料会員登録フォーム</h3>

					<div class="iframe-container">
						<iframe id="iframeMember" src="https://info.fuji-realty.com/l/1063212/2024-05-24/dz4ttz" width="100%" height="2400px" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
					</div>
          
				</div><!-- .entry-content -->
					
			</div><!-- .inner -->
		</section>
		
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>
