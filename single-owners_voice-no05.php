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
			<div class="keyvisual no09">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice09_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice09_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>05</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd"><span>好きなハーレーダビッドソンとアメリカ。限られた敷地でも理想を追求した家</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>ハーレーダビッドソンに憧れ、アメリカ文化をこよなく愛する旦那様。週末には仲間とBBQでエンジョイしているというK様ご夫婦のライフスタイルをご紹介します。</p></div>
			</div>
			
			<div class="ContBox left bg01 no09">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">敷地ににぴったりだったZERO-CUBE+GARAGE</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice09_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">敷地ににぴったりだったZERO-CUBE+GARAGE</h4>
				<?php endif; ?>
					<div class="comme">
						<p>清楚な住宅街にあるK様ご夫婦のお住まい。奥様のご両親からこの土地を譲り受けたのだそう。「住む場所を決めるとき、私がわがままを言って『ここがいい』ってお願いしました。生まれてずっと過ごしてきたところなので、愛着があったんです」と奥様。そして、「いざ家を建てるぞ」と夢を抱いて住宅展示場にも行ったけど、「よくある普通の家」にはまったく惹かれなかったそうです。</p>
						<p>「どんな家がいい？」「ログハウスが良いんじゃない」「いいね！」と意見は一致。最初はbessを検討したそうです。しかし、「<span class="strong">bessではガレージがスペースが取れないことが分かったんです。それにログハウスはメンテナンスが大変だし、都会の環境では景観が馴染まないとも思いました</span>」と旦那様。そんな中で、ライフスタイルの雑誌に載っていたFREAK'S HOUSEに目が留まったそうです。早速相談してみると、「ガレージどころか、FREAK'S HOUSEを建てるのは面積的にムリですよと言われたんです（笑）。でも、担当の方がこれならどうですか？と提案してきたのが『ZERO-CUBE』でした。」</p>
						<p>「<span class="strong">モデルハウスを見に行ったら、部屋の雰囲気もすごく素敵で良いなと思いました</span>」と奥様。「『ガレージを付けても敷地にピッタリ入ります』と言われて気に入りました。それに1000万円から建てられるというのも魅力でした」と当時を思い起こす旦那様。お二人とも大賛成だったそうです。</p>

					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no09">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">ガレージにこだわった理由</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice09_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">ガレージにこだわった理由</h4>
				<?php endif; ?>
					<div class="comme">
						<p>実は、旦那様は以前働いていたハーレーダビッドソンジャパンで「ミスターハーレー」と呼ばれていた人物。「<span class="strong">僕と同じ生まれ年に製造された、ハーレーダビッドソンショベルヘッドを無造作に置きたくなかったんですよね</span>」と旦那様がガレージにこだわったのもうなずけます。</p>
						<p>「僕の夢が詰まっている」というガレージには、ハーレーダビッドソンで働いていた想い出の品々がコレクションとして展示されています。また、ガレージにはハーレーダビッドソンだけでなく愛車も置きたかったので、標準仕様でキッチンの奥にあったバスルームを削って広く取りました。</p>
						<p>「ハーレーの魅力は、ずっと変わらずに伝統を引き継いで行くことなんです」と旦那様。家もハーレーにある古き良き時代のアメリカを感じるテイストが満ちています。「<span class="strong">朝出勤する際に、愛車に乗り込み、ガレージの電動シャッターが徐々に上がっていくに連れて、外の陽の光が差し込んでくると『家を建ててよかったな～』と思いますよ</span>」と遠い目。</p>
						<p>家は寝るだけの場所ではなく、仕事に疲れた時の安らぎとと同時に、仕事への活力を与えてくれる存在だそう。「家にいる時間が増えました」とお二人は目を細めます。</p>
					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no09">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">バルコニーとバーコーナー。やりたいことへのこだわり</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice09_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">バルコニーとバーコーナー。やりたいことへのこだわり</h4>
				<?php endif; ?>
					<div class="comme">
						<p>週末になると、友達を呼んでＢＢＱをすることが増えたK様ご夫婦。バルコニーには、自慢のロティサリーグリルが置かれていました。そう実は、ガレージを広く取ったことで、その上のバルコニーが広くなった利点も。「<span class="strong">BBQが大好きな主人と洗濯の大好きな私にはピッタリのバルコニーです</span>」と奥様。</p>
						<p>また、お酒が大好きな旦那様は、キッチンの一角にバーコーナーを設置。バーボンなどのお酒類が並びます。「このコーナーを作りたかったんですよ、バーコーナーでお酒を作って、ソファーでリラックスして飲む。最高でしょ」と嬉しそうな旦那様。旦那様の希望ばかりではなく、奥さまのネールコーナーもあります。「忙しくて使えてないですけどね」とほほ笑む奥様。</p>
						<p>そして、リビングにあるペレットストーブもこだわりひとつ。「『お酒は火を見ながら飲みたい』とか言って（笑）。他にもあれも置きたい、これも置きたいと言うのを暴走しないようにするのが私の役割です！（笑）」と奥様。でも、休日には二人で出かけて部屋に置く雑貨を見て廻っている仲良しご夫婦です。</p>
						<p>奥さまは「<span class="strong">打ち合わせは20回くらいしました。嫌とは思いませんでしたよ。楽しかった。もう一度やりたいくらいです</span>」と笑顔を見せます。今後はバーコーナーにテーブルを付けたり、ドライガーデンを作りたいとのこと。こだわりのライフスタイルに終わりはないみたい。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img01.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 外観"></a></div>
						<p>ブラックのサイディングを施した重厚な外観。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img02.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 ガレージディスプレイ"></a></div>
						<p>ハーレーダビッドソンUSAで働いていた時の作業着をガレージにディスプレイ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img03.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 ショベルヘッド"></a></div>
						<p>1973年に製造された愛車ハーレーダビッドソン ショベルヘッド。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img04.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 リビングダイニング"></a></div>
						<p>白を基調にしたウッディなテイストの明るい空間。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img05.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 バーコーナー"></a></div>
						<p>こだわりのバーコーナー。冷蔵庫には氷やビールでいっぱい。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img06.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 ペレットストーブ"></a></div>
						<p>ペレットストーブ。好きなサボテンを並べて。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img07.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 インテリア雑貨"></a></div>
						<p>古木の棚を設けてアメリカのビール缶をディスプレイ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img08.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 2Fゲストルーム"></a></div>
						<p>2Fのゲストルーム。ハンモックも吊るせます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img09.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 ベッドルーム"></a></div>
						<p>ベッドルームは、シンプルでいて収納もたっぷり。プロジェクターも装備。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img10.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img10.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 パウダールーム"></a></div>
						<p>シンプルに使いやすさを追求したパウダールーム。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img11.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img11.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 トイレ"></a></div>
						<p>トイレの内装もトータルにコーディネート。カフェのよう。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img12.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img12.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 プラスワンリビングバルコニー"></a></div>
						<p>ガレージの上はプラスワンリビングのバルコニー。物干しざおは置かずに広々した空間。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img13.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img13.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 バルコニー"></a></div>
						<p>友達が来たときはバルコニーでBBQ。ロティサリーチキンでおもてなし。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img14.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img14.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 吹き抜け壁アート"></a></div>
						<p>吹き抜けの壁に、好きなフライヤーを飾る。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img15.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img15.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 インテリア雑貨"></a></div>
						<p>クリスマスツリーにもハーレーダビッドソンのステッカーで飾りつけ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img16.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img16.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 インテリア雑貨"></a></div>
						<p>階段の片隅に何気なく飾られているSTAR WARSのポスター。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img17.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img17.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 バーコーナー"></a></div>
						<p>バーコーナーでバーボンを作る。贅沢な時間を過ごす。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img18.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img18.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 "></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img19.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img19.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 "></a></div>
						<p></p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice09_img20.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice09_img20.jpg" alt="ゼロキューブ +ガレージ 神奈川県K様邸 "></a></div>
						<p></p>
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
