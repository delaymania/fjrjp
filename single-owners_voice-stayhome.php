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
	<main id="main" class="site-main voice_single stayhome" role="main">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-ownersvoice.css">

		
		<div class="under_contents_wrap">
			<div class="keyvisual ">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice_bangai01_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice_bangai01_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span class="special">番外編</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_stayhome.png" alt="STAY HOME"></dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd"><span>「STAY HOME」で改めて気づく、家族と過ごす大切さ</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>緊急事態宣言中は、思うように外出できず、グンと増えた「おうち時間」。皆さんは、どう過ごされていましたか。今回は、以前インタビューにご協力いただいたK様ご家族に、外出自粛期間中の「おうち時間」の過ごし方を聞いてみました。</p></div>
			</div>
			
			<div class="ContBox">
				<div class="inner">
					<h4 class="title">外出自粛中は芝生のお庭やウッドデッキでアウトドア気分を満喫！</h4>
					<div class="in">
						<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img01.jpg" alt=""></div>
						<p>ゼロキューブマリブに暮らすK様ご家族。ゼロキューブマリブといえば、リビングと繋がるウッドデッキは、開放的な雰囲気が味わえるとあって、K様ご家族のお気に入りの場所。「ウッドデッキにテーブル広げてご飯を食べたり、芝生のお庭でBBQしたりと、普段でもウッドデッキやお庭で過ごすんですが、外出自粛中は、今まで以上に増えましたね。」</p>
					<?php if ( is_mobile() ) : ?>
						<div class="pic sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img02.jpg" alt=""></div>
					<?php endif; ?>
						<p>休日になると、お庭でプールで遊んで、その後はテントでお昼寝、そして夜は焼き鳥BBQ！ 1DAYおうちアウトドアを満喫していたようです。「最近設置したストリングライトが、よりイイ雰囲気を出してくれてます！」</p>
					<?php if ( is_mobile() ) : ?>
						<div class="pic sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img03.jpg" alt=""></div>
					<?php endif; ?>
						<p>「ドラセナを植えたり、DIYでウッドフェンスを付けて、もっとウッドデッキとお庭での時間を楽しみたいですね。」と奥様と一緒に叶えたいお庭を計画中なんだとか。</p>
						<p>おうちで過ごす時間が増えて、奥様は家事がちょっぴり忙しくなってしまったそうですが、奥様が焼いてくれるできたてホクホクのクッキーとパンを食べるの楽しみのひとつなんだそうです。</p>
					</div>
				</div>
				<div class="inner">
					<h4 class="title">家族と過ごす時間の中で、<br>改めて気づいたこと</h4>
					<div class="in">
						<div class="gpPic">
							<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img04.jpg" alt=""></div>
							<div class="pic"><div class="bg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img05.jpg" alt=""></div></div>
							<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img06.jpg" alt=""></div>
						</div>
						<p>「普段は、食事も寝る時間も家族とバラバラなんですが、改めて家族と過ごす時間が大切さだということに気づきましたね。」今ままでは、お子さんのお話を、奥様から聞いてたそうなんですが、”リアルタイム（今）”でお子さんと過せることが何よりも嬉しいんだとか！</p>
					<?php if ( is_mobile() ) : ?>
						<div class="pic sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img05.jpg" alt=""></div>
					<?php endif; ?>
						<p>「息子と遊びのレパートリーが増えました。ダンボールで被り物やおうちを作ったり、大好きなアーティストのイラストをダウンロードして、一緒に塗り絵を楽しんだりしてます。」</p>
					<?php if ( is_mobile() ) : ?>
						<div class="pic sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img07.jpg" alt=""></div>
					<?php endif; ?>
						<p>他にも、飾ってあるウクレレや、壁に立てかけたギターを手に取っては、引きながら歌ったり、youtubeを観ながら、みんなで踊ったり、今でとは違うおうち時間を楽しんでるようです。</p>
					<?php if ( is_mobile() ) : ?>
						<div class="pic sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img08.jpg" alt=""></div>
					<?php endif; ?>
						<p>「ステッカーDIYにもチャンレジしてます。」</p>
					<?php if ( is_mobile() ) : ?>
						<div class="pic sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/voice_bangai01_img09.jpg" alt=""></div>
					<?php endif; ?>
						<p>K様ご家族の団らんの場になっている空間が、今後どんな風にアップデートされていくのかますます楽しみですね♪</p>
						<p class="thanks">
							<span>インタビュー・写真提供 Thank you for</span>
							<span class="txt"><a href="https://www.instagram.com/kakitaku101/" target="_blank">@kakitaku101</a></span>
						</p>
					</div>

				</div>

			</div><!-- .ContBox -->
			


			<div class="desc_comme">※お施主さま独自のカスタマイズが含まれており、標準仕様と異なる場合がございます。</div>
			<div class="infoBox malibu">
				<h4 class="ctl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/title01_voice.png" alt="オーナー様がセレクトした商品は"></h4>
				<div class="bg">
					<div class="inner">
						<div class="imgBox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/main_malibu.png" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）"></div>
						<div class="logo01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_lifelabel.png" alt="LIFE LABEL"></div>
						<div class="logo02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_malibu.png" alt=""></div>
						<div class="txt">「カリフォルニアの風」が吹き抜ける家</div>
						<div class="btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>zerocube/malibu/" target="_blank">詳しくはこちら</a></div>
					</div><!-- .inner -->
				</div><!-- .bg -->
			</div><!-- .infoBox -->
			<div class="backBtn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice">一覧へ戻る</a></div>
		</div><!-- .under_contents_wrap -->

<?php require("inc/voiceslider.php"); ?>		

	</main><!-- .site-main.voice_single -->
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/luminous-basic.min.css">
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/luminous.min.js"></script>
	<script>
		var luminousTrigger = document.querySelectorAll('.zoom-in');
		new LuminousGallery(luminousTrigger);
	</script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight.js"></script>
	<script>
		$(function() {
			$('.list li').matchHeight();
		});
	</script>			
	
</div><!-- .content-area -->

<?php get_footer(); ?>
