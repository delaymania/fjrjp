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
			<div class="keyvisual no10">
				<div class="image">
				<?php if ( wp_is_mobile() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice10_keyvisual_s.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/img_voice10_keyvisual.jpg" alt="<?php echo get_post_meta(get_the_ID(), 'title_page', true); ?>">		
				<?php endif; ?>
				</div>
				<div class="textBox">
					<div class="inner">
						<dl class="voice_num">
							<dt>OWNER<span>’</span>S VOICE</dt>
							<dd><span>#</span>06</dd>
						</dl>
						<h3 class="tl"><?php echo get_post_meta(get_the_ID(), 'title_page', true); ?></h3>
					</div><!-- inner -->
				</div><!-- textBox -->
			</div><!-- keyvisual -->
			
			<h4 class="hd textc"><span>子供たちの成長と共に進化する家</span></h4>
			<div class="textBox01">
				<div class="under_contents"><p>目指したのは家族5人が楽しく暮らせるマイホーム。シンプルで使いやすく、しかも子供たちのことを第一に考えて。子育ては大変でも充実した日々を過ごせているというS様に伺いました。</p></div>
			</div>
			
			<div class="ContBox left bg01 no10">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">今のお家が手狭に。5人家族が暮らす家が欲しかった</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice10_img01_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">今のお家が手狭に。5人家族が暮らす家が欲しかった</h4>
				<?php endif; ?>
					<div class="comme">

						<p>6歳の長男、2歳の双子の女の子と暮らすS様一家。以前は2LDKのマンション暮らしでしたが、<span class="strong">双子の赤ちゃんが生まれくるのをきっかけに、家の購入を考えた</span>そうです。「最初は、建売り住宅を考えましたが、主人の祖父母が住んでいた土地を譲り受け、ここに家を建てることに決めたんです」と奥様。そこでどんな家がいいかと考えていたお二人は、InstagramでZERO-CUBEを知ることに。</p>
						<p>「<span class="strong">建物のシンプルさと手頃な価格がいいなと思いました</span>」と旦那様。「私は海の近くで育ったので、ZERO-CUBE MALIBUを見学したとき、すごく素敵だなと思ったんです」と奥様。</p>
						<p>さらには、「住宅展示場にも行きましたし、いくつかの工務店にも足を運びましたが、ちゃんと話を聞けたのは湘南乃工務店さんだけでした。何度も図面を見直してくれたり、間取りの工夫もしてくれて、私たちの要望である子供たちのことを第一に考えた提案をして頂けたんです」。</p>
						<p>そして、出来上がったお家は、小さなお子様でも安全に暮らせる4LDK（間仕切りすると5LDK）のZERO-CUBEにMALIBUのエッセンスをプラスしたマイホームが完成しました。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			
			<div class="ContBox right bg02 no10">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">子供たちのことを考えた間取りと導線</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice10_img02_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">子供たちのことを考えた間取りと導線</h4>
				<?php endif; ?>
					<div class="comme">
						<p>1階は、リビングとひと続きのリビングテラスで開放的な大空間に。LDKの面したお庭のウッドデッキは、子供たちの遊び場になってます。「広いから走り回れて楽しい」と子供たちに大好評なんだとか。</p>
						<p>ZERO-CUBEは、部屋数も収納も少なくてシンプルなのが良いところ。その良さをキープしつつ、階段のスペースを利用して収納を増やしたりしました。また、リビングの隣に作った和室は、「子どもがお昼寝をしたり、両親が来た時に泊まってもらおうと思って。引き戸で開閉も出来ますが、いつもはオープンにして子供たちの遊び空間になっています」と奥様。さらに、2階の双子の子供部屋は、2部屋分に大きく取って収納とドアを2つずつ付けています。「<span class="strong">成長して個室がよいと言えば仕切ればいいし、ずっと同じ部屋がいいと言うならそのままで</span>」と旦那様。</p>
						<p>子供たちが遊びやスポーツで汚れて帰ってきたら、洗面所に直行できるように間取りを変えたのも、子供のことを考えてなんだとか。ご夫婦の「<span class="strong">5人で住むにはどうすればよいかを第一に考えた</span>」間取りと導線です。</p>
					</div>
				</div>
			</div><!-- .ContBox -->

			<div class="ContBox left bg03 no10">
			<?php if ( is_mobile() ) : ?>
				<h4 class="hd">ZERO-CUBEのオーナーさんのアドバイスが役立った</h4>
				<div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/bg_voice10_img03_s.jpg" alt=""></div>
			<?php endif; ?>
				<div class="inner">
				<?php if (!(is_mobile() )) : ?>
					<h4 class="hd">ZERO-CUBEのオーナーさんのアドバイスが役立った</h4>
				<?php endif; ?>
					<div class="comme">
						<p>S様ご夫婦の家に対する考え方は「子供中心」。ベビーゲートを付けたり、階段にネットを貼ったり、最初はテレビの前にソファを置いていたけれど、子ども達が走り回ると危ないので移動させるなど安全面を重視しています。また、奥様がキッチンにいても、子供たちの様子を伺えるように、キッチンと和室の間に窓を付けました。</p>
						<p>こうした工夫はInstagramを見て参考にしたんだそうです。<span class="strong">ZERO-CUBEのオーナーさんが工夫した点やこうすればよかったといったアドバイスが役立っていると言います</span>。「こうした情報を見つけては湘南乃工務店さんに相談してましたね。」と10回以上打ち合わせしたのは、そういうことだったんですね！「でも、出来ないことは断らず、代替え案をくれたんです」と、希望を叶えてくれようとしてくれた姿勢に好感が持てたんだとか。</p>
						<p>「<span class="strong">子育ては大変なこともありますが、この子たちの笑顔を見ればその大変さも吹っ飛びます</span>」と旦那様。子供たちには伸び伸びと好きなことをやらしてあげたいと目を細めます。奥様も「共働きなので朝も夜もバタバタで、育児が大変で泣きたくなることもあるけれど、長男が妹の面倒見てくれて助かっています」とのこと。頼もしいお兄ちゃんだそう。</p>
						<p>子供の成長に合わせて、これからどう家が進化していくのかとても楽しみですね。</p>
					</div>
				</div>
			</div><!-- .ContBox -->
			<div class="gallery">
				<h4>PHOTO GALLERY</h4>
				<ul class="list cf">
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img01.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img01.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 ハンモック"></a></div>
						<p>大好きなハンモックに揺られてリラックス。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img02.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img02.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 外構PCフェンス"></a></div>
						<p>PCフェンスに赤いパーキングプレート。アメリカンな雰囲気出てます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img03.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img03.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 外構ＰCフェンス"></a></div>
						<p>ドラセナとも相性◎ 存在感放ってます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img04.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img04.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 花ブロック"></a></div>
						<p>門柱のデザインアクセントになっている花ブロック。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img05.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img05.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 玄関ポーチ"></a></div>
						<p>玄関ポーチにさりげなく書かれた「HELLO」。つい笑顔になってしまいます。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img06.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img06.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 リビング"></a></div>
						<p>なるべく家族で一緒にいたいからと、広くとったリビング。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img07.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img07.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 ダイニング"></a></div>
						<p>階段はどこに作るかで悩んだそう。階段の下は収納庫に。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img08.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img08.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 キッチン窓"></a></div>
						<p>キッチンには隣の和室で遊ぶ子供たちが見えるようにと小窓を作りました。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img09.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img09.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 階段防止ネット"></a></div>
						<p>子供が小さいうちは転落防止用のネットで安全に。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img10.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img10.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 子供部屋"></a></div>
						<p>ドラえもんが大好きな長男は、お部屋をブルーでコーディネート。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img11.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img11.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 リビング"></a></div>
						<p>お引き渡しにサプライズで、長男が家族のみんなを描いた絵は、リビングに飾られています。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img12.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img12.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸"></a></div>
						<p>マイホームを建てたご家族の思い出を形に残した記念の手形。</p>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img13.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img13.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 "></a></div>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img14.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img14.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 階段防止ネット"></a></div>
					</li>
					<li>
						<div class="photo"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/gallery_voice10_img15.jpg" class="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/thumb_voice10_img15.jpg" alt="ZERO-CUBE （ゼロキューブ）千葉県S様邸 キッチン"></a></div>
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
