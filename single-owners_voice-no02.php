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
			<div class="keyvisual no03">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice03_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice03_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>02</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd"><span>家族４人が思い思いに過ごせる、開放感のある住まい</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>ご主人の趣味であるサーフィンや、愛車を収納するガレージ、子ども部屋、愛犬のスペースなどの理想を実現したＫ様邸。ZERO-CUBE（ゼロキューブ）をカスタマイズして理想の空間をつくりました。</p></div>
			</div>
			
			<div class="ContBox left bg01 no03">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">家族４人と愛犬が暮らす生活空間を一から考え直す</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice03_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">家族４人と愛犬が暮らす生活空間を一から考え直す</h4>
				<?php endif; ?>
					<div class="comme">

						<p>新しい家に住もうと思いたったのは、１年半ほど前のこと。当時も戸建て住宅に住んでいましたが、もともと夫婦二人用に設計していたため、一階に寝室があり２階がリビングダイニングという間取りでした。その後子どもが二人できて、<span class="strong">長女が小学校の高学年を迎えようとしていたこともあり、子ども部屋も必要に。そこで新たに家を建てようと決めました。</span></p>
						<p>私の趣味は１８歳から２０年続けているサーフィンで、千葉の九十九里や一宮方面で波乗りをしています。若い頃は週に４、５回海に出るような生活も送りましたが、都内近郊に居を構えた方がトータルで刺激があると考え、今は海から離れているところに住む、いわゆる「通いサーファー」です。都内にある職場と海の間に自宅があるので、仕事と家庭、サーフィンの距離感がうまく保てています。</p>
						<p>前の家もそうでしたが、<span class="strong">「開放的な間取りと無垢の木など自然素材を使った家が好きだった」</span>んです。ラブラドールレトリバーを室内飼いしていることから、愛犬がいるスペースも確保しないといけない。そうすると建売住宅を選ぶという考えは、頭の片隅にも浮かびませんでした。前の家からそう遠くないところで土地から探し、自分たちのライフスタイルや好みにあった家を建てられるところを探し始めることになりました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no03">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">サーフボードと車を収納できるガレージは必須条件だった</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice03_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">サーフボードと車を収納できるガレージは必須条件だった</h4>
				<?php endif; ?>
					<div class="comme">
						<p>ZERO-CUBEは、サーファー向きのデザインとオプションでガレージが付けられるというところで目にとまりました。ガレージはバイクも一緒に置ける広さが魅力の一つです。ケガをしてしばらくサーフィンができないときに集めた、スニーカーの置き場も必要でした。土間とガレージ以外にも70足ほどスニーカーがあります。<span class="strong">インターネットでZERO-CUBEを知った妻は「ガレージの上にバルコニーが付けられるのが一番の決め手になった」と話しています。ZERO-CUBEを選んだ理由として、シンプルで一番カスタマイズしやすかったというのもあります。セミオーダーみたいな感覚で、間取りから内装まで標準からかなり変えましたね。</span></p>
						<p>まずは玄関から土間を通じてリビングに上がるようにし、土間には愛犬のスペースを作りました。床はパインの無垢材で、天井も木目調にして統一感を出しました。土間を作ったので、リビング階段の位置も動かしました。それでも<span class="strong">デザイン事務所に頼んで設計してもらうよりは、コストがかなり抑えられた</span>のではないでしょうか。オプションで付けたガレージには、ダイニングから直で出られます。</p>
						<p>妻は、キッチンスペースに手を加えました。アイランド型のキッチンをリビングが見渡せるように配置しました。調理スペースも広々としています。床はコルク材にして、水などをこぼしても、さっと拭けば大丈夫。「板材だと、こぼした飲み物やほこりなどが、目地にたまることがあるので、掃除がたいへんになる」と妻も言っていました。また、コルクは柔らかい感触があるので、キッチンスペースの床の感触が変わる、というところもアクセントになっています。</p>
					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no03">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">自分たちの思い描いていたライフスタイルをかたちに</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice03_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">自分たちの思い描いていたライフスタイルをかたちに</h4>
				<?php endif; ?>
					<div class="comme">
						<p>ZERO-CUBEに住みはじめて気に入っているところは、前の家よりリビングダイニングが広くなって、吹き抜けからの光も差し込んで明るいところ。正直、建てる前は「もう少しチープな感じになるんじゃないか」と思っていましたが、出来上がりを見てみると「想像していたよりいいじゃん」と（笑）。<span class="strong">いかにもサーファーが好みそうな、単なるミーハーな家にはしたくなかったので、シンプルなところが良かったと思いますね。</span></p>
						<p>子ども二人はともにサッカーをやっていて、家では長女がソファに座ってテレビで海外ドラマなどを観て、小一の長男はリビングを走り回ったり。私も遊びに付き合っています。妻はダイニングでiPadを見るなど、家族それぞれ思い思いに過ごせています。子ども部屋と寝室は２階にあり、長女は自分の部屋でパズルを作ることなども好きでやっています。</p>
						<p>家を建てたのは今回が２軒目なので、さすがにここを出て３軒目を探すということは考えられません。夏を迎えて子ども用のプールを、今の家には置けるところも気に入っています。「これからは友人たちを呼んでバーベキューなどもやれたらいいな」と思います。これから子供たちが成長していっても、安心して暮らしていける家が手に入りました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img01.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 玄関アプローチ"></a></div>
						<p>PCフェンスとグリーンや無垢材のコントラストがCOOLな玄関アプローチ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img02.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 ガレージ"></a></div>
						<p>ガレージには車とバイクが1台ずつ、そして奥には趣味やグッズの収納スペースを確保。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img03.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 1Fリビング"></a></div>
						<p>吹き抜けから差し込む優しい陽光。家族がゆるやかにつながる間仕切りがない開放的なリビング。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img04.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 toolbox木製カウンター洗面台"></a></div>
						<p>空間に合わせてサイズ幅を調整できる『tool box』の木製ワークカウンター洗面台。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img05.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 土間収納棚"></a></div>
						<p>土間の収納棚にはスニーカーがずらり。見せる収納でスニーカーをオシャレにディスプレイ。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img06.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 吹き抜けシーリングファン"></a></div>
						<p>ZERO-CUBEの特徴ともいえる、吹き抜けの大きなFIX窓。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img07.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 インテリア"></a></div>
						<p>電球そのもののフォルムや雰囲気を楽しめるペンダントライト。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img08.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 ウッドデッキ"></a></div>
						<p>縁側のようなウッドデッキでひと休み。木の塀でプライベートゾーンもしっかり守られています。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice03_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice03_img09.jpg" alt="ZERO-CUBE +GARAGE（ゼロキューブ ガレージ）千葉県Ｋ様邸 子供部屋"></a></div>
						<p>お人形遊びが大好きなお子さま。お人形がインテリアの一部になってオシャレで可愛いコーデに。</p>
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
