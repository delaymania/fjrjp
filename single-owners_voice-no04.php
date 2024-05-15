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
			<div class="keyvisual no07">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice07_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice07_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>04</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd textc"><span>家は癒しの空間であり、夢を叶えてくれる場所</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>住宅街にたたずむブルーの「ZERO-CUBE KAI」。ここにお住いなのがN様ご家族です。奥様にとってお住まいは、日常に癒しのある空間であると同時に、夢を叶えてくれる場所でもありました。</p></div>
			</div>
			
			<div class="ContBox left bg01 no07">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">長く愛おしく住める理想の家にする</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice07_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">長く愛おしく住める理想の家にする</h4>
				<?php endif; ?>
					<div class="comme">
						<p><span class="strong">「四角い家を建てたい！」</span><br>奥様は独身時代からそう決めていたそう。なぜなら、理想とする家のイメージを雑誌などからスクラップしてみたら、四角い家ばかりが並んだから。</p>
						<p>「三角屋根の家には惹かれませんでした」と微笑みます。<br>結婚を機にマイホームを検討することになり、千葉県にある旦那様の土地に建てることになりました。「主人は希望はなかったのか、私に言えなかったのか（笑）『君に任せる』のひと言でした」。任せてもらえるならとうぜん四角い家。探し当てたのが「ZERO-CUBE KAI」。これぞ思い描く家とひと目惚れだったそう。</p>
						<p><span class="strong">「四角い家の、シンプルでミニマムで、見た目の可愛らしさが好きだったんです」</span><br>ただし、完成まで2年もかかったそうです。と言うのは、次々に浮かぶアイデアを担当スタッフに伝え、それが可能かを確認してもらうことを繰り替えすことに月日を要したから。</p>
						<p>「後でリフォームするのではなく、最初から何も変えなくてもよい住まいにしたかったんです」と奥様。完成を急ぐより、とことんこだわりたかったと語ります。</p>
						<p><span class="strong">「嬉しかったのは、湘南乃工務店さんは私のわがままを『できません』と言わないことでした。全て採用してくれました」</span>と満足げです。ブルーが美しいZERO-CUBE KAIは、奥様が憧れていた居心地のいい家になりました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no07">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">細部までこだわって自分らしさを演出する</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice07_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">細部までこだわって自分らしさを演出する</h4>
				<?php endif; ?>
					<div class="comme">
						<p>奥様が一番、こだわったのは「フローリング」です。<br>「ナチュラルで光沢のない素材の床にしたかったのと、部屋ごとに色味と艶を全部、変えたかったんです」。最適な床を求めて、旦那様と一緒にあちこちのショールームを巡ったようです。</p>
						<p>「フローリングを各部屋で色違いにすることを考えました」<br>同じメーカーにしたことで世界観が統一されていて、とても素敵。</p>
						<p>「なんとか調ではなく、ヨーロッパのおしゃれな空間を意識したんです」<br>キッチンもやはり探してきた、使いやすいシステムキッチンに取り換え、壁や玄関の小さなタイルひとつひとつも好みのものを集めるなど、細部まで自分らしさを凝縮させています。しかも、お金をかけずにリーズナブルにと工夫して。</p>
						<p><span class="strong">「2年もかかりましたが、素材を探し廻るのは楽しかった。もう一回やれと言われてもできますよ」</span>とニコリ。</p>
						<p>お気に入りの家だから、たまにお世話になっている人達を招いて食事会をすることも。そのときは料理人の旦那様が腕を振るってくれると笑顔を覗かせます。</p>

					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no07">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">夢だった自分のお花屋さんとカフェを家の隣にオープン</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice07_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">夢だった自分のお花屋さんとカフェを家の隣にオープン</h4>
				<?php endif; ?>
					<div class="comme">
						<p><span class="strong">ブルーのご自宅の隣にあるアイボリーのガレージは、いつかここで花屋さんをすると決めて建てたもの。</span>というのは、奥様はフローリストだったから。そして、2020年6月にようやくお店がオープンしました。ただし看板は制作中。</p>
						<p>お店はダークアイボリーの壁面で、木のテーブルが並んで、とても心地よい空間です。<br>扱うお花は奥様の趣味を優先。心がけているのは少しダーク調の色味を選ぶこと。ネットでは高価なものを安価で提供しています。</p>
						<p>ユニークなのはカフェスペースがあることです。「近所の方とコミュニケーションできるようにと、カフェも併設することにしました」。オープンする前から『あのブルーの四角い家の隣はお店になるのに違いない』と評判だったとか。特徴的なスタイルの「ZERO-CUBE KAI」が、今も目印になっているそうです。</p>
						<p><span class="strong">「自分がやりたいことをやって、生活がそこそこできて、ということがすごい幸せなんだなとオープンしてから気づきました」</span>と奥様。</p>
						<p>今はひとりでお花を仕入れて、カウンターに並べるマフィンやクッキーなどのお菓子を作るなど、お店を切り盛りするのに大忙し。もちろん、旦那様もデザート作りなどを手伝ってくれるそうです。</p>
						<p>これからの計画を訊ねると、「今考えているのは、年に1、2度、入り口にテントを張って、ちょっと変わったグリーン市をやってみたいですね」とのこと。夢がたくさんあるようです。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img01.jpg" alt="ゼロキューブ回 千葉県N様邸 外観"></a></div>
						<p>四角い外観に小さな窓が整然と並ぶシンプルなフォルム。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img02.jpg" alt="ゼロキューブ回 千葉県N様邸 玄関"></a></div>
						<p>扉を開けると2種類のタイルを組み合わせた可愛いタイルがお出迎え。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img03.jpg" alt="ゼロキューブ回 千葉県N様邸 リビングダイニング"></a></div>
						<p>真ん中の中庭の空から注ぐ光や風が、すべての部屋を穏やかに通り抜ける。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img04.jpg" alt="ゼロキューブ回 千葉県N様邸 照明"></a></div>
						<p>リビングの照明は3つのモロッコランプでトーンを下げて落ち着いた空間を演出。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img05.jpg" alt="ゼロキューブ回 千葉県N様邸 中庭"></a></div>
						<p>プライベートが守られながら楽しめる中庭は、アウトドアリビングとしても活用できます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img06.jpg" alt="ゼロキューブ回 千葉県N様邸 バスルーム"></a></div>
						<p>ホテルのようなバスルーム。ガラス張りにすることで高級感＆開放的に。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img07.jpg" alt="ゼロキューブ回 千葉県N様邸 店舗住宅"></a></div>
						<p>お花屋さんとカフェをミックスさせた空間。ご近所の方も気軽に立ち寄ります。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img08.jpg" alt="ゼロキューブ回 千葉県N様邸 趣味部屋"></a></div>
						<p>旦那様の趣味部屋。好きなものに囲まれた暮らしを楽しんでいる様子が目に浮かびます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img09.jpg" alt="ゼロキューブ回 千葉県N様邸 2Fホール"></a></div>
						<p>窓をケーシング枠で額縁のように太くし、ガラスは格子柄にすることで、部屋に柔らかい光が差し込みます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img10.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img10.jpg" alt="ゼロキューブ回 千葉県N様邸 花屋"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img11.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img11.jpg" alt="ゼロキューブ回 千葉県N様邸 トイレ"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img12.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img12.jpg" alt="ゼロキューブ回 千葉県N様邸 リビング階段"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img13.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img13.jpg" alt="ゼロキューブ回 千葉県N様邸 中庭"></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice07_img14.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice07_img14.jpg" alt="ゼロキューブ回 千葉県N様邸 タイル"></a></div>
						<p></p>
					</li>
					
				</ul>
			
			</div><!-- .gallery -->
			<div class="desc_comme">※お施主さま独自のカスタマイズが含まれており、標準仕様と異なる場合がございます。</div>
			<div class="infoBox no07">
				<h4 class="ctl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/title01_voice.png" alt="オーナー様がセレクトした商品は"></h4>
				<div class="bg">
					<div class="inner">
						<div class="imgBox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/main_kai.png" alt="ZERO-CUBE KAI（ゼロキューブ回）"></div>
						<div class="logo01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_lifelabel.png" alt="LIFE LABEL"></div>
						<div class="logo02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/logo_kai.png" alt=""></div>
						<div class="txt">暮らしの真ん中に「庭」がある家</div>
						<div class="btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>lineup/zero-cube-kai/">詳しくはこちら</a></div>
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
