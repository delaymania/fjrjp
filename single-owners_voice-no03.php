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
			<div class="keyvisual no06">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice06_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice06_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>03</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd"><span>空間も楽しさも家族の笑顔もダイナミックなフリークスハウス！</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>have fun! をモットーに選んだライフレーベルとフリークスストアがコラボしたアメリカンハウス。家族の絆で笑顔と楽しみがあふれる空間が出来上がりました。明るさと温かみあふれるU様ご一家のフリークスハウスでの過ごし方を、コッソリのぞかせてもらいます。玄関の扉の先に広がる”楽しい”空間に釘付けです。</p></div>
			</div>
			
			<div class="ContBox left bg01 no06">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">家族の想いが導いた、念願のアメリカンハウス</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice06_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">家族の想いが導いた、念願のアメリカンハウス</h4>
				<?php endif; ?>
					<div class="comme">
						<p>閑静な住宅地に、アメ車ダッチバンと、ひと際存在感のあるアメリカンハウスがありました。お邪魔すると、「ようこそ〜！」と、元気な娘さんおふたりと、背の高い旦那様、笑顔でハキハキの奥様のU様ご家族が出迎えてくれました。</p>
						<p>フリークスハウスの木の温かみのある空間に見惚れていると、<span class="strong">「ここを買う前は、自分が欲しかった理想の家となかなかマッチしなかったんだ」</span>と旦那様。実は旦那様は、以前からダッチバン繋がりで弊社の代表と交友があったことから、今回家づくりのご相談をされていました。</p>
						<p>アウトドア要素を入れたスタイリッシュなアメリカンハウスを探していたところ、フリークスハウスに一目惚れ。また、ガレージを付けるのが夢だったそうで、そうなると、少なくとも100坪ほどの土地が必要になり、希望の場所での土地探しは大変だったそうです。それでも、「やっとのことで、この土地を見つけたと思ったら、すでに先約があって・・・」と仕方なく諦めたんだそうです。しかし、突然先約の方から連絡が来て、なんとこの土地を譲ってくれたんだそうです。</p>
						<p>「幸運というか、こういうことってあるんですね！」と旦那様。</p>
						<p><span class="strong">念願の土地を手に入れることができたのは、きっと家族の強い想いが導いた結果</span>なんだと感じました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no06">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">お日様が差し込む広々リビングは、家族が安らぐ大切な集合場所</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice06_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">お日様が差し込む広々リビングは、家族が安らぐ大切な集合場所</h4>
				<?php endif; ?>
					<div class="comme">
						<p>なんて明るく広いリビングなんだろ～と思いながら、お話を聞いていると、照明が付いていないことに気づきました。そうなんです、<span class="strong">窓が大きいため、色んな箇所からお日様の光が入るので、広いリビングでもとても明るく、さらにポカポカと温かくなっていました。</span>「購入時に、寒くないか心配だったんだけど、全然寒くないの！」と奥様。</p>
						<p>「<span class="strong">気密性が高いところもすごくよくて、一度温めると、魔法瓶みたいに温かさが続くんだよね。</span>」と旦那様もコーヒーを飲みながらリラックスされていました。玄関から直結する、広いリビングは、家族全員の集合場所となり、1日のうち必ず顔を合わせるので、会話が増えて、家族ひとりひとり気持ちを知ることができるようになったそうです。</p>
						<p>「<span class="strong">子供も大人も開放的な空間の方が、１日の出来事をお家でリセットできて、リラックスできるね！</span>」と旦那様。「娘のお友達がたくさん遊びにきても、吹き抜けだから声が聞こえてきたり、お庭で遊んでいても目が通るから安心できます」と奥様。 </p>
						<p>U様ご家族にとって、フリークスハウスは、大人も子供たちも安心して穏やかに過ごすことができる空間になっていました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no06">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">絶対に叶えたかった　家族と遊びを共有できるガレージ空間</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice06_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">絶対に叶えたかった　家族と遊びを共有できるガレージ空間</h4>
				<?php endif; ?>
					<div class="comme">
						<p>ガラガラガラとシャッターを開けた先には、立派な作業台と、たくさんの工具がしまってある大きなアメリカンツールキャビネット、そして旦那様と奥様の愛車のバイクが並んでいました。 10代の頃からバイクに乗っていた旦那様。その後ろによく乗っていた奥様は、自分も運転してみたいという想いから、3年ほど前にバイクの免許を取得したそうですよ！今となっては、ふたりの娘さんも、ご夫婦の後ろに乗って、家族みんなでツーリングを楽しんでいるようです。 </p>
						<p>「どうしてもガレージだけは、敷地内に入れたかった」と旦那様。</p>
						<p>自分でやることで愛着がわく、できることは自分でやりたいという旦那様のお気持ちが体現された空間となっていました。また、娘さんもガレージを気に入っていて、いつかは、24時間ガレージ生活をやってみたいそうです！ </p>
						<p><span class="strong">「家族と遊び、楽しむための家が欲しかった。家は人を変えていく大事な空間だから、前に踏み出して、自分の理想に近づいていきたい。家はひとつのつながりとなるので、家族の絆を深めるツールとして選んでほしい」</span></p>
						<p>U様ご家族は、フリークスハウスを通して、家族のありかた、家族にとっての“家”というものを、私たちに伝えてくれました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img01.jpg" alt="フリークスハウス 千葉県U様邸 外観"></a></div>
						<p>アメリカンハウスらしいダイナミックな空間は、アメ車「ダッチ」のバンも広々駐車できてしまいます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img02.jpg" alt="フリークスハウス 千葉県U様邸 こだわりの石柱"></a></div>
						<p>リゾート地にある石柱にあこがれてこだわりにこだわりぬいた約1トンの石柱。ランタンとメールボックスがアメリカンのいい味を出しています。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img03.jpg" alt="フリークスハウス 千葉県U様邸 アメリカンフェンス"></a></div>
						<p>ダイナミックはここにも！映画にでてきそうなアメリカンフェンスは、お庭で遊ぶ子供たちの安全を守っています。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img04.jpg" alt="フリークスハウス 千葉県U様邸 2Fキッズルーム"></a></div>
						<p>広かったベランダを狭くして、もともとひとつの部屋をふたつにカスタマイズ。子供部屋に。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img05.jpg" alt="フリークスハウス 千葉県U様邸 ローテーブル"></a></div>
						<p>こんなの作れる？から始まったご友人作のローテーブルはしっかりした材木に、ネイティブ柄のブルーが引き立っています。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img06.jpg" alt="フリークスハウス 千葉県U様邸 リビング"></a></div>
						<p>リビングでのびのびと大人8人でもくつろげるゆったり空間が広がっています。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img07.jpg" alt="フリークスハウス 千葉県U様邸 キッチンカウンター"></a></div>
						<p>フラっと立ち寄りたくなる、家族の距離が近くなったアメリカンダイナーのようなキッチンカウンター。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img08.jpg" alt="フリークスハウス 千葉県U様邸 ガーデン"></a></div>
						<p>天気のいい日は外でプシュッといただきます！芝生が心地いいガーデンでのバーベキューは、夏の鉄板行事です。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img09.jpg" alt="フリークスハウス 千葉県U様邸 吹き抜け天井"></a></div>
						<p>お家のどこを歩ても開放的で明るい。天井の高さとお日様の明るさが自慢です。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img10.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img10.jpg" alt="フリークスハウス 千葉県U様邸 趣味"></a></div>
						<p>お日様が当たる空間で、のびのび育つ多肉植物。芽が出た瞬間がとても愛おしい。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img11.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img11.jpg" alt="フリークスハウス 千葉県U様邸 ガレージ"></a></div>
						<p>どうしても叶えたかったガレージで、家族と一緒に整備作業を楽しんでします。愛してやまないハコスカも、いつかはここに。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img12.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img12.jpg" alt="フリークスハウス 千葉県U様邸 趣味"></a></div>
						<p>愛車との時間は、自分と向き合う時間。どんなに朝が早くても、きれいな景色を目当てにちょっとそこまでいっちゃいます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img13.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img13.jpg" alt="フリークスハウス 千葉県U様邸 リビング"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img14.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img14.jpg" alt="フリークスハウス 千葉県U様邸 キッチンカウンター"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img15.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img15.jpg" alt="フリークスハウス 千葉県U様邸 趣味"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img16.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img16.jpg" alt="フリークスハウス 千葉県U様邸 階段"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img17.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img17.jpg" alt="フリークスハウス 千葉県U様邸ご家族スナップ"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice06_img18.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice06_img18.jpg" alt="フリークスハウス 千葉県U様邸 洗面台"></a></div>
						<p></p>
					</li>
					
				</ul>
			
			</div><!-- .gallery -->
			<div class="desc_comme">※お施主さま独自のカスタマイズが含まれており、標準仕様と異なる場合がございます。</div>
			<div class="infoBox no06">
				<h4 class="ctl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/title01_voice.png" alt="オーナー様がセレクトした商品は"></h4>
				<div class="bg">
					<div class="inner">
						<div class="imgBox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/main_freakshouse.png" alt="FREAK'S HOUSE（フリークスハウス）"></div>
						<div class="logo01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_lifelabel.png" alt="LIFE LABEL"></div>
						<div class="logo02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_freakshouse.png" alt=""></div>
						<div class="txt">フリークストアがつくる家。</div>
						<div class="btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>freaks-house/">詳しくはこちら</a></div>
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
