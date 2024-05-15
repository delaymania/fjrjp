<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main zero-cube-Stepfloor" role="main">
		
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
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_keyv_stepfloor.png" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>
<?php else :?>
					<p class="boxLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_keyv_stepfloor.png" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）"></p>
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
				<p class="txt ffa">ZERO-CUBE STEPFLOORの外と内をつなぐ土間は、遊び心が出入りする空間。<br>そして、ZERO-CUBEの良さをワイドに広げるステップフロアは、<br><span class="ffb">床の高さを半階ずつずらすことで空間の広がり</span>を実現しています。</p>
			</div>
		</div>
		<div class="eveplanbox">
			<div class="under_contents">
				<h4 class="titstyleb ffc">PLAN</h4>
				<div class="eveplanin zero-cube">
					<ul class="cf">
						<li class="hlg01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_eveplan_stepfloor01.gif" alt="ライフレーベル（LIFE LABEL） ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）間取り1F"><span class="ffc">1F</span></li>
						<li class="hlg01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_eveplan_stepfloor02.gif" alt="ライフレーベル（LIFE LABEL） ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）間取り2F"><span class="ffc">2F</span></li>
						<li>
							<div class="cf">
								<div class="eveinfobox">
									<p class="tit ffc">ZERO-CUBE STEPFLOOR</p>
									<dl class="eveinfo">
										<dt><P class="tabbox ffb"><span class="size">5LDK</span></P></dt>
										<dd class="ffa">延床面積／105.98㎡(32.06坪)<br>1F床面積／52.99㎡(16.03坪)<br>2F床面積／52.99㎡(16.03坪)</dd>
									</dl>
								</div>
							</div>
						</li>
					</ul>
				</div>
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
						<li><a href="#item01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall01_s.gif" alt=""></a></li>
						<li><a href="#item02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall02_s.jpg" alt=""></a></li>
						<li><a href="#item03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall03_s.jpg" alt=""></a></li>
						<li><a href="#item04"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall04_s.jpg" alt=""></a></li>
						<li><a href="#item05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall05_s.jpg" alt=""></a></li>
						<li><a href="#item06"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall06_s.jpg" alt=""></a></li>
						<li><a href="#item07"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall07_s.jpg" alt=""></a></li>
					</ul>
				</div>
				<!-- Item-->
				<div id="item01" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">ZERO-CUBE STEPFLOOR</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall01_l.gif" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）ロゴ"></p>
						<p class="txt">床の高さを半階ずつずらして立体的に空間をつなぐスキップフロアは、<br>ZERO-CUBEの良さをそのまま、広く明るい居住空間を実現しています。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall02_l.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）リビング"></p>
						<p class="txt">ステップを上がった2階にあるリビングは、驚くほど明るい。導線の中間にあるので自然と家族が集まります。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">DINING/KITCHEN</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall03_l.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）ダイニング・キッチン"></p>
						<p class="txt">ダイニングと連動しながら、リビング全体を見渡すことができるキッチンは、<br>ステップがあるからこそ見渡しが良いので、家族を見守りやすく、お料理にも専念できます。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">BED ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall04_l.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）ベッドルーム"></p>
						<p class="txt">角部屋ならではの二面開口で、明るく風の通りが生まれます。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">ROOM/h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall05_l.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）ルーム"></p>
						<p class="txt">家具や壁面インテリアが楽しめる、また子供部屋にも適しているシンプルな間取りです。</p>
					</div>
				</div>
				<div id="item06" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">DOMA</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall06_l.jpg" alt="千ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）土間"></p>
						<p class="txt">アクティブな家族におすすめの土間スペースは、玄関とは別に外から直接出入りできて室内への出入りも可能です。</p>
					</div>
				</div>
				<div id="item07" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">EXTERIOR</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_stepfloor_gall07_l.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）外観"></p>
						<p class="txt">シャープでスタイリッシュなキューブ型の外観は、モダンでありながらも、<br>ウッドバルコニーの温かみと調和し、軽快なリズムを生み出しています。</p>
					</div>
				</div>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
