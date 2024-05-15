<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main NordicHouse" role="main">
		
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
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/nordichouse/img_keyv_nordichouse.png" alt="ノルディックハウス（NORDIC HOUSE）"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>
<?php else :?>
					<p class="boxLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/nordichouse/img_keyv_nordichouse.png" alt="ノルディックハウス（NORDIC HOUSE）"></p>
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
				<p class="txt ffa"><span class="ffb">北欧の人々が大切にしている暮らしをイメージした</span><br>NORDIC HOUSE。</p><p class="txt ffa">商品説明会では、「NORDIC HOUSEってどんなお家なの？」というご質問に丁寧にお答えしながら、<br>弊社が手掛けたNORDIC HOUSEの施工実績をご覧いただけます。</p><p class="txt ffa">また、”家を建てたいけれど何から始めたら良いか分からない”<br>そんな不安や疑問を住宅コーディネーターが、</p><p class="txt ffa">お客様のライフスタイルに合わせた理想の暮らしを、<br>土地探しから資金計画のサポートまでご提案致します。</p><p class="txt ffa"><span class="ffb">お客様の描く理想のマイホームやライフスタイルに一歩でも近づくお手伝い</span><br>を精一杯させていただきますので、お気軽にお越しください。</p>
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
						<li><a href="#item01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall01_s.gif" alt=""></a></li>
						<li><a href="#item02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall02_s.jpg" alt=""></a></li>
						<li><a href="#item03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall03_s.jpg" alt=""></a></li>
						<li><a href="#item04"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall04_s.jpg" alt=""></a></li>
						<li><a href="#item05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall05_s.jpg" alt=""></a></li>
					</ul>
				</div>
				<!-- Item-->
				<div id="item01" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">NORDIC HOUSE</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall01_l.gif" alt="ノルディックハウス（NORDIC HOUSE）ロゴ"></p>
						<p class="txt">デザイン性と機能性を兼ね備えたノルディックハウスの家。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">EXTERIOR</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall02_l.jpg" alt="ノルディックハウス（NORDIC HOUSE）外観"></p>
						<p class="txt">三角屋根のカラフルな家はどこか懐かしく、いつの時代も色あせないフォルム 。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall03_l.jpg" alt="ノルディックハウス（NORDIC HOUSE）リビング"></p>
						<p class="txt">柔らかな光に包まれた吹き抜けのリビングは、明るく開放的。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">DINING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall04_l.jpg" alt="ノルディックハウス（NORDIC HOUSE）ダイニング"></p>
						<p class="txt">「SOVE（睡眠）」＆「SMIL（笑顔）」いい一日はいい夜と、いい夜はいい一日とつながっている。笑顔で溢れた毎日が、ここちよく回っている。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_nordichouse_gall05_l.jpg" alt="ノルディックハウス（NORDIC HOUSE）リビング"></p>
						<p class="txt">階段をリビングに設けることで、自然と家族のコミュニケーションが生まれる憩いの場。</p>
					</div>
				</div>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
