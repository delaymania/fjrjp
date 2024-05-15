<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main BlancAnge" role="main">
		
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
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/blancange/img_keyv_blancange.png" alt="ブランアンジュ（Blanc Ange）"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>
<?php else :?>
					<p class="boxLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/blancange/img_keyv_blancange.png" alt="ブランアンジュ（Blanc Ange）"></p>
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
				<p class="txt ffa">小さな頃に思い描いていたような三角屋根のフィルムに木製のあたたかみのあるドア<br><span class="ffb">どこか懐かしく心落ち着くデザイン</span><br>Blanc Ange。</p><p class="txt ffa">商品説明会では、「Blanc Angeってどんなお家なの？」というご質問に詳しくご説明いたします。</p><p class="txt ffa">また、”家を建てたいけれど何から始めたら良いか分からない”<br>そんな不安や疑問を住宅コーディネーターが、</p><p class="txt ffa">お客様のライフスタイルに合わせた理想の暮らしを、<br>土地探しから資金計画のサポートまでご提案致します。</p><p class="txt ffa"><span class="ffb">お客様の描く理想のマイホームやライフスタイルに一歩でも近づくお手伝い</span><br>を精一杯させていただきますので、お気軽にお越しください。</p>
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
						<li><a href="#item01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall01_s.gif" alt=""></a></li>
						<li><a href="#item02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall02_s.jpg" alt=""></a></li>
						<li><a href="#item03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall03_s.jpg" alt=""></a></li>
						<li><a href="#item04"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall04_s.jpg" alt=""></a></li>
						<li><a href="#item05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall05_s.jpg" alt=""></a></li>
					</ul>
				</div>
				<!-- Item-->
				<div id="item01" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">Blanc Ange</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall01_l.gif" alt="ブランアンジュ（Blanc Ange）ロゴ"></p>
						<p class="txt">南フランスの伝統的なライフスタイルにヒントを得た、素朴で美しい魅力をたくさんつめこんだお家。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">EXTERIOR</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall02_l.jpg" alt="ブランアンジュ（Blanc Ange）外観"></p>
						<p class="txt">プロヴァンスの風景に映える、白い漆喰調の壁材と、味わい深いレンガ調の屋根材を採用。カラーも選べます。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall03_l.jpg" alt="ブランアンジュ（Blanc Ange）リビング"></p>
						<p class="txt">開放的な吹き抜けのリビングは、明るい光が差し込み、いつでも家族の温もりを感じられます。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">DINING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall04_l.jpg" alt="ブランアンジュ（Blanc Ange）ダイニング"></p>
						<p class="txt">明るい陽光はやさしく降り注ぎ、さわやかな空気とともにゆったりした時間が流れます。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">COUNTER KITCHEN</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_blancange_gall05_l.jpg" alt="ブランアンジュ（Blanc Ange）カウンターキッチン"></p>
						<p class="txt">1階が見渡せる対面キッチンでは、家族との会話も弾みます。</p>
					</div>
				</div>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
