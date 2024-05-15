<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main Tools ZerocubeFreaks" role="main">
		
		<!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="all" />-->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout_lineup.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-freakshouse.css" type="text/css" media="all" />
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
			<div class="under_contents">
				<div class="titleBox">
					<p>[ LIFE LABEL X FREAK'S STORE コラボ商品第2弾! ]</p>
					<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zerocube_freaks_logo01.png" alt="ZERO-CUBE FREAK'S"></div>
				</div>
				<div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zerocube_freaks_cg.png" alt="ZERO-CUBE FREAK'S"></div>
			</div>
			<div class="bottom">
				<div class="under_contents">
					<h3 class="tittxt ffb">ZERO-CUBE FREAK'S <br>VR見学会</h3>
					<dl class="day">
            <dt>
                <?php if ( is_active_sidebar('kaisaibi') ) : ?>
                  <?php dynamic_sidebar('kaisaibi'); ?>
                <?php endif; ?>
            </dt>
						<dd><span class="start">START</span>10:00 / <span>13:00</span> / <span>16:00</span></dd>			
					</dl>
				</div>
			</div>
		</div>
<?php if ( wp_is_mobile() ):?>
		<div class="mainPhotoMobile"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/mainimg_zerocubefreaks_tab.jpg" alt="ZERO-CUBE FREAK'S 内観"></div>
<?php else :?>
		<div class="mainPhoto"></div>
<?php endif ;?>
				
		<div class="evetextbox">
			<div class="under_contents">
					
				<p class="txt ffa titce"><span class="ffb">「THE FUN LIFE」がグレードアップ</span></p>
				
				<p class="txt ffa">大反響を呼んだ第1弾「FREAK'S HOUSE」のデザインやコンセプトを、そのままZERO-CUBEに詰め込みました。<br>また、住む人の趣味やライフスタイルに合わせて追加できる【CAVIN(小屋)】のオプションプランをご用意。</p>
				<p class="txt ffa">お家がもっと楽しくなる！！</p>
				
				<div id="freaks-house">
					<div class="collabo">
						<div class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/logo_freakshouse_collago.gif" alt="LIFE LABELとFREAK'S STORE（フリークス ストア）のコラボレーション"></div>
						<p class="strong">コンセプトは、”つながる(＝セッション)を楽しむ家”。</p>
						<p>さまざまなスタイルにあった暮らし方を提案する住宅ブランド「ライフレーベル」とアメリカンライフスタイルを軸に展開するセレクトショップ「フリークスストア」がタッグを組み、家族や仲間、自然とのゆるやかなつながりを生み出す空間をデザインしました。</p>
					</div>
				</div>
			</div>
			
		</div>
		

<?php require("inc/event-comment01.php"); ?>
		
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
