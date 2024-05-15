<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main hyva" role="main">
		
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
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/hyva/img_keyv_hyva.png" alt="ヒューバアンドスタイル（HYVA AND STYLE）"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>
<?php else :?>
					<p class="boxLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/hyva/img_keyv_hyva.png" alt="ヒューバアンドスタイル（HYVA AND STYLE）"></p>
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
				<p class="txt ffa">愉しい！がいっぱい。<br><span class="ffb">床面積より広く感じる住空間</span><br>HYVÄ AND STYLE。</p><p class="txt ffa">商品説明会では、「HYVÄ AND STYLEってどんなお家なの？」というご質問に丁寧にお答えしながら、<br>弊社が手掛けたHYVÄ AND STYLEの施工実績をご覧いただけます。</p><p class="txt ffa">また、”家を建てたいけれど何から始めたら良いか分からない”<br>そんな不安や疑問を住宅コーディネーターが、</p><p class="txt ffa">お客様のライフスタイルに合わせた理想の暮らしを、<br>土地探しから資金計画のサポートまでご提案致します。</p><p class="txt ffa"><span class="ffb">お客様の描く理想のマイホームやライフスタイルに一歩でも近づくお手伝い</span><br>を精一杯させていただきますので、お気軽にお越しください。</p>
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
						<li><a href="#item01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall01_s.gif" alt="ヒューバアンドスタイル（HYVA AND STYLE）ロゴ"></a></li>
						<li><a href="#item02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall02_s.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）外観"></a></li>
						<li><a href="#item03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall03_s.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）ビングダイニング"></a></li>
						<li><a href="#item04"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall04_s.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）ベッドルーム"></a></li>
						<li><a href="#item05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall05_s.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）ダイニング"></a></li>
					</ul>
				</div>
				<!-- Item-->
				<div id="item01" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">HYVÄ AND STYLE</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall01_l.gif" alt="ヒューバアンドスタイル（HYVA AND STYLE）ロゴ"></p>
						<p class="txt">アウトドアスタイルを楽しむ北欧スタイルの家。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">EXTERIOR</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall02_l.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）外観"></p>
						<p class="txt">暮らすことを考え抜いた空間設計。 建物はコンパクト、生活空間はワイドという理想を実現しました。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall03_l.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）リビングダイニング"></p>
						<p class="txt">床の高さを半階ずつずらして立体的に空間をつなぐスキップフロアは、リビングを中心にゆるやかな段差でフロアが繋がっています。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">BED ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall04_l.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）ベッドルーム"></p>
						<p class="txt">スペースを有効に活用し、外観からの想像をはるかに超えたゆとりをもたらします。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">DINING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_hyva_gall05_l.jpg" alt="ヒューバアンドスタイル（HYVA AND STYLE）ダイニング"></p>
						<p class="txt"></p>
					</div>
				</div>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
