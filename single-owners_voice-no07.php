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
			<div class="keyvisual no12">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice12_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice12_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>07</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd textc"><span>おうち時間をとことん満喫！“楽しい”がたくさん詰まった住まい。</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>千葉県にお住まいのI様ご一家。購入のきっかけは、旦那様のお姉様が先に建てたZERO-CUBEだったとのこと。高いデザイン性に心惹かれ、自分たちもZERO-CUBEを購入したい！　との思いを抱いたそう。こわだりの“パントリー”や“趣味部屋”、屋根つきの広いウッドデッキまで、ご家族の「楽しい」が盛りだくさんのお宅を見せていただきました！</p></div>
			</div>
			
			<div class="ContBox left bg01 no12">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">ファクトリー調の外観に魅了されて…子育て環境も抜群の地域に家を購入。</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice12_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">ファクトリー調の外観に魅了されて…子育て環境も抜群の地域に家を購入。</h4>
				<?php endif; ?>
					<div class="comme">

						<p>「もともと姉がZERO-CUBEに住んでいて。服飾関連の仕事をしているからか、ものすごくオシャレな家なんですよね。<span class="strong">ぼくがインダストリアルデザイン好きなのもあって、ZERO-CUBEに強く心惹かれたんです</span>」そう語ってくれたのは旦那様。</p>
						<p>土地を選んだ決め手は、都内へのアクセスがよく、奥様の実家にも近いことでした。しかし、実際に住んでみるとほかにもさまざまなメリットがあったんだとか。</p>
						<p>「近くに大型スーパーがあり、買い物環境が充実しているのが便利ですね。あとは、自然豊かな地域なので、子育てにも理想的。息子を連れて近所の林を散策したり、自然と触れ合う毎日です。ご近所の皆さんも本当に親切で。息子はよくお菓子をいただいて喜んでいます（笑）。可愛がってもらっていますね」と奥様。</p>
						<p>地域ぐるみの子育てが実現しているのは、住環境における大きなポイントですよね。息子さんの将来の夢は「お侍さん」だそう。可愛いらしさに思わずほっこり♪</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no12">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd"> “動線重視”のパントリーを活用。庭の“趣味部屋”にも大満足。</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice12_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd"> “動線重視”のパントリーを活用。庭の“趣味部屋”にも大満足。</h4>
				<?php endif; ?>
					<div class="comme">
						<p>ご自宅のあちこちに、ご夫婦のこわだりが詰め込まれたI様宅。<span class="strong">奥様たっての希望で設置したのは、棚が可動式になっているパントリー</span>。パントリーにはめずらしく、玄関横のシューズクローゼットとつながるかたちでレイアウトされています。</p>
						<p>「ここに設置したのは、家事動線を考えて。買い物から帰宅後に荷物の移動距離が最低限で済むうえ、キッチンにもつながっているので、とても便利です」。</p>
						<p>災害時に備えて、水やポータブル電源などもここに備蓄。「いざというときのために」そんなスペースがあることが、安心で快適な暮らしにもつながっているそうです。</p>
						<p>一方、<span class="strong">旦那様が希望したのは、ご自身の趣味であるバイクや雑貨を置くためのガレージ</span>。庭の一角に設えたガレージの扉を開けると、ミリタリー雑貨、モデルガン、模造刀など、旦那様が小さなころからコツコツ集め続けたというたくさんのアイテムがずらり。なんと、映画鑑賞用のスクリーンまでも完備してます！息子さんと一緒にアニメーション映画を観るのも楽しければ、一人ゆっくりお酒を飲みながらの映画鑑賞も至福の時なのだとか。</p>
						<p>「このオレンジのキャビネット、面白いでしょう？　上段は工具入れ。下段は冷蔵庫になっているんですよ」何時間でもくつろいでいたい素敵な“趣味部屋”に憧れが募ります♪</p>
					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no12">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">広い屋根付きウッドデッキは家族団らんの場。</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice12_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">広い屋根付きウッドデッキは家族団らんの場。</h4>
				<?php endif; ?>
					<div class="comme">
						<p>仲睦まじいI様ご一家の大切な場が、リビングにつながる広いウッドデッキ。お子様にとっても欠かせない遊び場となっているそうです。</p>
						<p>「<span class="strong">コロナ禍で外出が減り、ウッドデッキで過ごす時間が増えました。テントを張って遊んだり、夏にはビニールプールを置いて水遊びをしたり。日常的にBBQもしてますね。楽しいですよ</span>」賑やかな家族団らんの様子を語ってくれた旦那様。屋根つきなので、天候を気にすることなく過ごせるのもお気に入りのポイントなのだとか。</p>
						<p>今後やりたい“遊び”、ほかにもなにかありますか？　ご夫婦に尋ねると……。</p>
						<p>「夫婦そろってアウトドアが好きなので、息子にもっとそういった遊びを教えていきたいな。たとえば、火おこしとか。また、以前はハーレーに乗っていたんですが、子どもが大きくなったら家族全員でツーリングに行きたいですね。それから、将来的には、庭に置いた倉庫や人工芝を撤去して、畑をつくってみたいなと。息子にも手伝ってもらって、いろんな野菜を育てたら楽しそう」。</p>
						<p>家族で過ごす楽しい時間がますます増えていきそうな予感。無限大の夢、叶えてくださいね！</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img01.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 外観"></a></div>
						<p>ガルバニウム鋼板の外壁は、ZERO-CUBEの特徴を表しています。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img02.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 ガレージ"></a></div>
						<p>旦那様のロマンが詰まったガレージの趣味部屋。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img03.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 ガレージ"></a></div>
						<p>コツコツ集め続けたアイテムがずらり。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img04.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 ガレージ"></a></div>
						<p>上段は工具入れ、下段は冷蔵庫になっているキャビネット。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img05.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 ガレージ"></a></div>
						<p>ガレージの趣味部屋でお子様と一緒に映画鑑賞♪</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img06.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 パントリー"></a></div>
						<p>家事動線を考えて玄関からキッチンへと繋がるパントリーを設置。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img07.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 造作本棚"></a></div>
						<p>造作の本棚を部屋の仕切りに。親子揃ってマンガ大好き。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img08.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 トイレ"></a></div>
						<p>アメリカンテイストを感じる明るく開放的なトイレ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img09.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸 ウッドデッキ"></a></div>
						<p>ウッドデッキで家族とのんびり楽しむプライべート時間。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice12_img10.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice12_img10.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県I様邸"></a></div>
						<p>戦車や飛行機が好きなお子様は、バギーにも興味津々。</p>
					</li>
				</ul>
			
			</div><!-- .gallery -->
			
			<div class="desc_comme">※お施主さま独自のカスタマイズが含まれており、標準仕様と異なる場合がございます。</div>
			<div class="infoBox fun">
				<h4 class="ctl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/title01_voice.png" alt="オーナー様がセレクトした商品は"></h4>
				<div class="bg">
					<div class="inner">
						<div class="imgBox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/main_fun.png" alt="ZERO-CUBE +FUN（ゼロキューブ +FUN）"></div>
						<div class="logo01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_lifelabel.png" alt="LIFE LABEL"></div>
						<div class="logo02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_fun.png" alt=""></div>
						<div class="txt">自分だけのこだわりや<br>楽しさをプラスできる家</div>
						<div class="btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>lineup/zero-cube">詳しくはこちら</a></div>
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
