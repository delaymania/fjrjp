<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main FreaksHouse" role="main">
		
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
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/lifelabel_logo03.png" alt="ライフレーベル（LIFE LABEL）とフリークストア（FREAK'S STORE）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_keyv_freakshouse.png" alt="フリークスハウス(FREAK'S HOUSE)"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>
<?php else :?>
					<p class="boxLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/lifelabel_logo03.png" alt="ライフレーベル（LIFE LABEL）"></p>
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
			<div class="under_contents cf">
				<div class="ico"><?php if ( wp_is_mobile() ):?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_freakshouse02_sp.png" alt=""><?php else :?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_freakshouse02.png" alt=""><?php endif ;?></div>
				<p class="txt ffa">2020.9.27 OPENしたモデルハウス兼店舗の「さいたまスタジオ」で、<br><span class="ffb">FREAK'S HOUSE</span>をご覧いただけます。</p>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
