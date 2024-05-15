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
			<div class="keyvisual">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice02_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice02_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>01</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<div class="under_contents">
				
			</div><!-- under_contents -->
			<h4 class="hd"><span>中でも外でも子どもがのびのびと過ごせる、どこにいてもつながる空間</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>「サーフテイストの家が理想の住まい！カリフォルニア工務店は憧れだった。」とサーフィンが趣味のK様。LIFE LABELとカリフォルニア工務店とのコラボハウスZERO-CUBE MALIBUとの出会い、K様の家づくりのこだわりをご紹介します。</p></div>
			</div>
			
			<div class="ContBox left bg01 no02">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">カリフォルニア工務店が手掛ける理想に近い住まいが購入の決め手に</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice02_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">カリフォルニア工務店が手掛ける理想に近い住まいが購入の決め手に</h4>
				<?php endif; ?>
					<div class="comme">
						<p>以前は駅近マンションに住んでいました。暮らしやすくて生活環境は良かったのですが、子どもが生まれて「そろそろマイホームが欲しい」と思うようになりました。色々と情報を集めているうちに、家賃や管理費などの維持費と一戸建てを購入した場合の費用にあまり差がないこともわかってきて住まい探しを真剣に考え始めました。</p>
						<p>趣味がサーフィンの私は、海に近い立地を探していました。通勤圏内で色々と物件を見て回りましたが、希望に叶う物件が見つからず。そんな時、思い出したのが以前見かけたZERO-CUBE MALIBUの雑誌広告だったんです。</p>
						<p>サーファーたちにとって、カリフォルニア工務店は憧れ的存在です。「そのコラボハウスは見なきゃならないだろう」と、早速予約してモデルハウスへ。そして、モデルハウスに足を踏み入れると期待以上でした！ 見た目はいいし、開放感のある雰囲気もいい。見学しながら「この家以外ないだろうな」と感じていました。<span class="strong">鎧調の無骨なルックスにウッドバルコニーにつながる大開口、インテリアの標準装備が充実している等、自分が想い描いていた「こんな家に住みたい」というイメージに近かったんです。</span></p>
						<p>土地探しの方も、担当の方が海へのアクセス・通勤圏内という希望条件に加え、とても住環境の良い土地を探してくれたおかげで、散々悩んでいたのが嘘みたいにすんなりと決まりました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no02">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">ラフな暮らしを楽しむカリフォルニアスタイルを実現！</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice02_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">ラフな暮らしを楽しむカリフォルニアスタイルを実現！</h4>
				<?php endif; ?>
					<div class="comme">
						<p>ZERO-CUBE MALIBUは、私の「こんな家に住みたい」というイメージのベースが既に出来ていたので、あとは大好きなサーフテイストのインテリアや家具を置いて、好きなモノに囲まれた居心地の良い空間を作りたいと思っていました。<span class="strong">リビングダイニングのインテリアは、僕の好きなサーフテイストを思い切り反映！</span> カウンターキッチンや、シンプルなソファ、普段から使っているサーフボードをディスプレイとして活用するなど、モノの数を極力抑えながらお気に入りの品をレイアウトしています。</p>
						<p>また、リビングに隣接したウッドデッキにこだわりをプラス。柱とウッドデッキスペースを通常よりも広げてもらいました。子どもをウッドデッキで遊ばせながら、その様子をリビングで見守ったり、夜は星を見ながら夫婦でお酒を飲んだり…と、家の外と内がひとつながりになったような開放的な大空間です。<span class="strong">「どこにいてもつながるリビングっていいですよね！」</span>この吹き抜ける空間を通して２階にいてもリビングの声が聞こえます。壁で仕切られた空間だと閉塞感がありますが、こうすればみんな楽しく暮らせる感じがするんです。</p>
						<p>妻のこだわりは、何と言ってもキッチンスペースかな!? ゆとりのあるスペースを持たせたキッチンカウンターやカップボードは、家族で暮らしやすいようにカスタムメイドしたことで、<span class="strong">「前の家よりも料理がしやすくなりました」</span>と、妻も楽しそうに料理を作っています。奥にはパントリーを設けて食品の収納も十分すぎるぐらい収まります！…と言いたいところですが、最近は買い置き品や常備品が増えてきて、ちょっと整理しないといけないかな（笑）。</p>
					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no02">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">住み始めて２年。家の楽しみ方が広がってきました！</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice02_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">住み始めて２年。家の楽しみ方が広がってきました！</h4>
				<?php endif; ?>
					<div class="comme">
						<p>ウッドデッキの上に備え付けたオーニングもこだわりました。夏場は日よけとして、冬はオーニングを巻き上げ、暖かい日差しを室内に取り込むことができるので大活躍しています！実用面はもちろん、ストライプ柄が外観デザインのアクセントとしても◎。スタイリッシュでとても気に入っています。</p>
						<p>週末は九十九里浜でサーフィンを楽しんだり、お気に入りのウッドデッキや芝生の庭で仲間とBBQパーティーをすることを日常的に楽しんでいます。子どもも最近遊びのバリエーションが増えてきて、家の中でスベリ台やミキサー車の模型で遊んでいたと思ったら、突然外に出てストライダーに乗ったり、夏は芝生に出したプールで水遊びをしたりと、元気いっぱいに遊んでいます。近所に同世代の家族が増えていく環境なので、これから友だちが増えていくのも楽しみですね。</p>
						<p>今後は、庭にシンボルツリーなどグリーンを植えたいと思っています。あと、なかなか取り組めていませんが、DIYで外構づくりもチャレンジしたい（笑）。住まいの一部を自分たちの手で作ることで、より愛着が湧いてくると思うんです。<span class="strong">大切な家族と仲間、好きなものに囲まれてゆったり向き合って過ごす時間をこれからも大切にしていきたいですね。</span></p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img01.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 外観"></a></div>
						<p>アウトドア感なラングラーがZEO-CUBE MALIBUの外観にマッチ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img02.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 2F子ども部屋"></a></div>
						<p>パステルカラーのクロスが柔らかい雰囲気の子ども部屋。海外の子ども部屋をイメージ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img03.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 トイレ"></a></div>
						<p>サーフを感じさせるWCは来客から「センスが良い」と好評だとか。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img04.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 ベッドルーム"></a></div>
						<p>寝室のテレビは配線が見えないように壁掛けにしてスッキリと。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img05.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 ストライプ柄パントリー"></a></div>
						<p>キッチン奥にあるパントリーは、海外のキッチンをイメージしてストライプ柄に。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img06.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 インテリアサーフボード"></a></div>
						<p>ご主人自慢のサーフボードをディスプレイ。インテリアとしても抜群の存在感を発揮。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img07.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 吹き抜け空間シーリングファン"></a></div>
						<p>日差しが降り注ぎ部屋全体を明るく包み込んでくれる吹き抜けの開放的な空間。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img08.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 玄関"></a></div>
						<p>星をモチーフにしたシーリングライトが西海岸イメージを盛り上げる。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img09.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 ストライプ柄オーニング"></a></div>
						<p>ストライプのキャンバスがZERO-CUBE MALIBUの外観によく映えます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img10.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img10.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 リビングウッドデッキ"></a></div>
						<p>スライドサッシを開けば、リビングとウッドデッキまでひと繋がりの大空間。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img11.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img11.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 キッチン"></a></div>
						<p>白を基調とした爽やかなキッチン。木材がナチュラルな魅力を際立たせます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice02_img12.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice02_img12.jpg" alt="ZERO-CUBE MALIBU（ゼロキューブ マリブ）千葉県Ｋ様邸 ハンモック"></a></div>
						<p>ウッドデッキで心地よいひと時を過ごせるハンモック。</p>
					</li>
				</ul>
			
			</div><!-- .gallery -->
			
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
