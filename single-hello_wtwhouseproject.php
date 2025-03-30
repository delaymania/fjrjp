<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main WtwhouseProject" role="main">
		
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
			<div class="under_contents">
				<div class="title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/wtwhouseproject/wtwhouseproject_logo.png" alt="WTW HOUSE PROJECT"></div>
				<h3 class="tittxt ffb">WTW HOUSE PROJECT <br>VR見学会</h3>
				<dl class="day">
					<dt>
              <?php if ( is_active_sidebar('kaisaibi') ) : ?>
                <?php dynamic_sidebar('kaisaibi'); ?>
              <?php endif; ?>
          </dt>
					<dd><span class="start">START</span>10:00 / 13:00 / 16:00</dd>			
				</dl>
			</div>
		</div>
<?php if ( wp_is_mobile() ):?>
		<div class="mainPhotoMobile"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/wtwhouseproject/mainimg_wtwhouseproject_tab.jpg" alt="WTW HOUSE PROJECT 内観"></div>
<?php else :?>
		<div class="mainPhoto"></div>
<?php endif ;?>
		<div class="illust"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/wtwhouseproject/img_illust_wtwhouseproject.png" alt="WTW HOUSE PROJECT 外観イラスト"></div>
				
		<div class="evetextbox">
			<div class="under_contents">
				<p class="txt ffa nobr">WTWが提案するライフスタイルをそのまま表現した住宅<br><span class="ffc">WTW HOUSE PROJECT</span></p>
					
				<p class="txt ffa"><span class="ffb">この家の中で流れるのは、“波を待つひととき”のような特別な時間。</span></p>
				
				<p class="txt ffa">Waiting for the wave……波待ちの時間。<br>それはサーファーたちにとって至福のひととき。</p>
				<p class="txt ffa">次はどんな波と出会えるだろうか。どんなライドが楽しめるだろうか。<br>自然と自分が一体になっていくような開放感。</p>
				<p class="txt ffa">そして湧き上がる静かな高揚感……<br>WTW HOUSE PROJECTが提案するデザイン住宅は、</p>
				<p class="txt ffa">そんな贅沢な時間と感覚を、日々のライフスタイルの中で体感できる。<br>都会と自然、日常と非日常、インテリア選びと家づくり……</p>
				<p class="txt ffa">さまざまなファクターが混ざり合い、そこに巻き起こる波を、<br>あなたならどう楽しむだろうか。</p>
			</div>
		</div>
		<div class="evetextbox re">
			<div class="under_contents">
				<p class="txt ffa">「VRで理想の家を探そう！」VRゴーグル見学会では、<br>新しい住まい探しをより身近に、VRゴーグルを使って、<br>まるで実際に家を見学しているかのように没入体験ができるイベントです。</p><p class="txt ffa">また、”家を建てたいけれど何から始めたら良いか分からない”<br>そんな不安や疑問を住宅コーディネーターが、</p><p class="txt ffa">お客様のライフスタイルに合わせた理想の暮らしを、<br>土地探しから資金計画のサポートまでご提案致します。</p><p class="txt ffa"><span class="ffb">お客様の描く理想のマイホームやライフスタイルに一歩でも近づくお手伝い</span><br>を精一杯させていただきますので、お気軽にお越しください。</p>
			</div>
		</div>
		
		<div class="linkBanner"><a href="#event-mailform"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bnr_wtw_stylingcampaign.jpg" alt="WTW(ダブルリューティー)家具セット割引キャンペーン"/></a></div>

<?php require("inc/event-comment01.php"); ?>
		
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
