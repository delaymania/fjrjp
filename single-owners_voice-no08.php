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
	<main id="main" class="site-main voice_single" role="main">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-ownersvoice.css">

		
		<div class="under_contents_wrap">
			<div class="keyvisual no13">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice13_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice13_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>08</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd textc"><span>こだわりの雑貨とインテリアに囲まれたノルディックハウスの暮らし</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>K様ご一家のお宅は、ナチュラルでぬくもりに満ちたノルディックテイスト。“北欧”をこよなく愛する奥様が手掛けた室内には、小さな雑貨から大きな家具まで、一つひとつを吟味し集めたというこだわりのアイテムがそこかしこに。暮らしを楽しみ、住まいを慈しむ。そんなご家族の様子が伝わってくる素敵なご自宅を見せていただきました。</p></div>
			</div>
			
			<div class="ContBox left bg01 no13">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">北欧が大好きな奥様。「ノルディックハウス」に一目ぼれ。</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice13_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">北欧が大好きな奥様。「ノルディックハウス」に一目ぼれ。</h4>
				<?php endif; ?>
					<div class="comme">
						<p>以前は社宅にお住まいだったK様ご一家。ところがあるとき、社宅が取り壊されるとの通知が。それをきかっけに、新しい家を探しはじめたそうです。「ノルディックハウスを知ったのは、私が愛読している雑誌『リンネル』に掲載されていたZERO-CUBEの広告でした。『このおうち、可愛い！』と衝撃を受けて、早速調べてみたらノルディックハウスを見つけたんです。<span class="strong">外観が可愛くて、木の感じもすごく好きだなと。ほかにも、開放感ある吹き抜けのリビングに、内階段も高ポイントで。完全に一目ぼれですね（笑）</span>」。</p>
						<p>昔から北欧の雑貨やテイストが大好きだという奥様。好きな映画がフィンランドの首都ヘルシンキを舞台にした『かもめ食堂』なら、新婚旅行もフィンランドとスウェーデンだったそう。もちろん、ご自宅の家具やインテリアも大好きな北欧テイストに統一。ソファはシンプルで温かみある雰囲気が特徴の国産家具ブランド「モモ ナチュラル」、ダイニングの椅子カバーは北欧好きに人気のブランド「ミナ ペルホネン」のものを愛用中。</p>
						<p>そして、ダイニングに釣り下がっているペンダントライトは、北欧テイストの家にはおなじみの「ルイスポールセン」で購入したアイテムだそう。どの角度から見ても、電球の光が直接目に入らない点に心地よさを感じていると、ニコニコ笑顔で教えてくださった奥様。お気に入りのアイテムに囲まれて毎日がとてもHAPPYなんだそうですよ♪</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no13">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">実物を見ずに購入！旦那様の賛成も後押しに。</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice13_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">実物を見ずに購入！旦那様の賛成も後押しに。</h4>
				<?php endif; ?>
					<div class="comme">
						<p>今のお住まいに大満足の奥様から、家購入にまつわる大胆なエピソードも飛び出しました。「<span class="strong">購入前に実物を見ることはありませんでしたね。『絶対この家に住みたい！』という直感に従って、資料と写真を見ただけで購入に踏み切ったんです！</span>」。</p>
						<p>そうお話ししてくださった奥様。不安などはなかったのでしょうか。旦那様に伺うと……。「一目見て、『妻の好みにドンピシャの家だ！』と確信しました（笑）。だから、反対するという選択肢は浮かびませんでしたね」。</p>
						<p>奥様のご意向を尊重したとのこと。ご夫婦の仲睦まじい様子が伝わってきます。共働きのため、掃除や洗濯などの家事は奥様と旦那様で完全に分担制なのだとか。旦那様は育児にも積極的で、2歳の息子さんもパパが大好き！ リビングに面した和室にオモチャの車や電車を広げて、ふたりで楽しそうに遊ぶ姿が印象的でした。</p>
					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no13">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">子育ても充実の環境に満足。今後増やしたいのは “お庭時間”。</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice13_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">子育ても充実の環境に満足。今後増やしたいのは “お庭時間”。</h4>
				<?php endif; ?>
					<div class="comme">
						<p>近隣には公園がたくさんあり、子育てしやすい環境が整っていると教えてくださった奥様。オシャレなカフェやお花屋さんをあちこちめぐるのも、いまの生活の楽しみの一つだそう。見渡すと、たしかにリビングや玄関やキッチンなど、あちらこちらに植物やドライフラワーが飾られており、お住まいに柔らかな色を添えています。</p>
						<p>「<span class="strong">ガーデニングが大好きなんです。自分で育てたラベンダーを摘んできて、玄関に飾ってます。今後はもっとガーデングッズを増やしていきたいな</span>」。</p>
						<p>そんな奥様のお隣で、旦那様もニコニコ。</p>
						<p>「考えてみれば、息子と家はほぼ同い年。これからもずっと一緒に仲良く歩んでいってくれたら嬉しいな。とりあえず、今年の夏は花火やBBQやプールを庭でやりたいよね、と妻と話していて。楽しい思い出をいっぱいつくっていきたいですね」。</p>
						<p>K様ご一家の夢と未来がたくさん詰まったノルディックハウス。お庭もお部屋もこれからますます楽しい空間にグレードアップしていきそうな予感です！</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img01.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 外観"></a></div>
						<p>北欧の田舎町に建っているようなどこか懐かしく可愛らしい外観。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img04.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 mina perhonen(ミナ ペルホネン)の椅子カバー"></a></div>
						<p>奥様お気に入りのミナ ペルホネンの椅子カバー。とってもキュート。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img05.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸"></a></div>
						<p>旦那様も積極的に家事・育児を手伝ってくれんだとか♡</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img06.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 ルイスポールセン"></a></div>
						<p>ルイスポールセンの柔らかい光が食卓を心地よく照らす。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img07.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 インテリア"></a></div>
						<p>木の質感を生かした温かみのあるひな階段とモモ ナチュラルのソファ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img09.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 トイレ"></a></div>
						<p>トイレだって、清潔感や懐かしさを感じさせる北欧スタイルのクロスをチョイス。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img10.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img10.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 吹き抜け"></a></div>
						<p>窓が多いから、吹き抜け天井からたくさんの光が降り注ぎます</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img11.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img11.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 ベッドルーム"></a></div>
						<p>グリーンカラーで統一したベッドルーム。リラックス効果が高まって、ぐっすりと眠れるんだとか。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img12.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img12.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 ガーデニング"></a></div>
						<p>これから少しずつ手を入れていくというガーデニング。数年後どう変身していくのかとても楽しみです。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img02.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 リビングダイニング"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img08.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice13_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice13_img03.jpg" alt="NORDIC HOUSE （ノルディックハウス）千葉県K様邸 キッチン"></a></div>
						<p></p>
					</li>

				</ul>
			
			</div><!-- .gallery -->
			
			<div class="desc_comme">※お施主さま独自のカスタマイズが含まれており、標準仕様と異なる場合がございます。</div>
			<div class="infoBox nordichouse">
				<h4 class="ctl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/title01_voice.png" alt="オーナー様がセレクトした商品は"></h4>
				<div class="bg">
					<div class="inner clearfix">
						<div class="imgBox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/main_nordic.png" alt="NORDIC HOUSE（ノルディックハウス）"></div>
						<div class="logo01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_lifelabel.png" alt="LIFE LABEL"></div>
						<div class="logo02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_nordic.png" alt=""></div>
						<div class="txt">シンプル＆ナチュラルな<br>北欧スタイルの家</div>
						<div class="btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/hello_nordic-house">商品説明会こちら</a></div>
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
