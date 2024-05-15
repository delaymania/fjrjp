<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main zero-cube-Mini" role="main">
		
		<!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="all" />-->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout_lineup.css" type="text/css" media="all" />
		<link rel="stylesheet" media="(max-width: 768px)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile_lineup.css" />
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$('.gallery ul li a').click(function() {
				var itemID = $(this).attr('href');
				$('.gallery ul').addClass('item_open');
				$(itemID).addClass('item_open');
				return false;
			});
			$('.close').click(function() {
				$('.port, .gallery ul').removeClass('item_open');
				return false;
			});

			$(".gallery ul li a").click(function() {
				$('html, body').animate({
					scrollTop: parseInt($("#top").offset().top)
				}, 400);
			});
		});
		</script>


		<div class="mainimg">
			<div class="mainimgin">
				<div class="under_contents">
<?php if ( wp_is_mobile() ):?>
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_keyv_mini.png" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>
<?php else :?>
					<p class="boxLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_keyv_mini.png" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）"></p>
					<h3 class="tit ffb"><span class="bgbox"><?php the_title();?></span></h3>					
<?php endif ;?>
          <p class="day">
            <div class="bgbox">
              <?php if ( is_active_sidebar('kaisaibi') ) : ?>
                <?php dynamic_sidebar('kaisaibi'); ?>
              <?php endif; ?>
            </div>
          </p>
					<p class="ffc"><span class="bgbox"><span class="start">START</span><span class="time">10:00/13:00/16:00</span></span></p>
					<p class="bgmainig"> </p>
				</div>
			</div>
		</div>
		<div class="evetextbox">
			<div class="under_contents">
				<p class="txt ffa">自分だけのこだわりや楽しさをプラスできる家「ZERO-CUBE+FUN」をそのままに、<br><span class="ffb">狭小地に対応したスマートコンパクト</span>なZERO-CUBE MINI。</p><p class="txt ffa">「VRで理想の家を探そう！」VRゴーグル見学会では、<br>新しい住まい探しをより身近に、VRゴーグルを使って、<br>まるで実際に家を見学しているかのように没入体験ができるイベントです。</p><p class="txt ffa">また、”家を建てたいけれど何から始めたら良いか分からない”<br>そんな不安や疑問を住宅コーディネーターが、</p><p class="txt ffa">お客様のライフスタイルに合わせた理想の暮らしを、<br>土地探しから資金計画のサポートまでご提案致します。</p><p class="txt ffa"><span class="ffb">お客様の描く理想のマイホームやライフスタイルに一歩でも近づくお手伝い</span><br>を精一杯させていただきますので、お気軽にお越しください。</p>
			</div>
		</div>
		<div class="evegallbox">
			<div class="ovhid">
				<h4 class="titstyleb ffc">GALLERY</h4>
			</div>
			<div id="top"></div>
			<div class="gallery">
				<div class="under_contents">
					<ul class="cf">
						<li><a href="#item01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall01_s.gif" alt=""></a></li>
						<li><a href="#item02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall02_s.jpg" alt=""></a></li>
						<li><a href="#item03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall03_s.jpg" alt=""></a></li>
						<li><a href="#item04"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall04_s.jpg" alt=""></a></li>
						<li><a href="#item05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall05_s.jpg" alt=""></a></li>
					</ul>
				</div>
				<!-- Item-->
				<div id="item01" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">ZERO-CUBE MINI</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall01_l.gif" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）ロゴ"></p>
						<p class="txt">徹底的にムダを削ぎ落としたからこそ生まれたスクエアデザイン。建物の凸凹をなくすことで、広々とした室内空間が生まれました。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall02_l.jpg" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）リビング"></p>
						<p class="txt">家族の会話が飛び交う、ワイドなリビング・ダイニング。つながるのは、空間だけでなく家族の絆。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">BED ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall03_l.jpg" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）ベッドルーム"></p>
						<p class="txt">1日の始まりを迎えるベッドルームは、優しい朝の光に包まれる。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">INNER GARAGE</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall04_l.jpg" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）インナーガレージ"></p>
						<p class="txt">都会でカーライフを満喫するならガレージはマスト。1階スペースを愛車と趣味のエンターテイメント空間へ。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">SKY BALCONY</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_mini_gall05_l.jpg" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）スカイバルコニー"></p>
						<p class="txt">ガーデニングスペースやカフェスペースとして愉しめる、癒しのスカイバルコニー。</p>
					</div>
				</div>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
