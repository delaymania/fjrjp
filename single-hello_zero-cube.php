<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main zero-cube-muji" role="main">
		
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
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_zero-cube_sp.png" alt="ゼロキューブプラスファン（ZERO-CUBE+FUN）"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>					
<?php else :?>
					<p class="boxLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo02.png" alt="ライフレーベル（LIFE LABEL）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube_logo.png" alt="ゼロキューブプラスファン（ZERO-CUBE+FUN）"></p>
					<h3 class="tit ffb"><span class="bgbox"><?php the_title();?></span></h3>
<?php endif; ?>
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
				<p class="txt ffa">ベースのZERO-CUBEに、+FUNで屋上バルコニーをプラスしたSKY BALCONY。<br><span class="ffb">家族のだんらんがたくさん詰まったオススメのFUN</span>を実現しています。</p>
			</div>
		</div>
		<div class="eveplanbox">
			<div class="under_contents">
				<h4 class="titstyleb ffc">PLAN</h4>
				<div class="eveplanin zero-cube">
					<ul class="cf">
						<li class="hlg01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_eveplan01.jpg" alt="ZERO-CUBE+BOX SKYBALCONY間取り1F"><span class="ffc">1F</span></li>
						<li class="hlg01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_eveplan02.jpg" alt="ZERO-CUBE+BOX SKYBALCONY間取り2F"><span class="ffc">2F</span></li>
						<li class="hlg01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_eveplan03.jpg" alt="ZERO-CUBE+BOX SKYBALCONY間取り3F"><span class="ffc">3F</span></li>
						<li>
							<div class="cf">
								<div class="eveinfobox">
									<p class="tit ffc">+SKY BALCONY</p>
									<dl class="eveinfo">
										<dt><P class="tabbox ffb"><span class="size">3LDK</span></P></dt>
										<dd class="ffa">延床面積／105.15㎡（31.80坪）<br>1F床面積／52.99㎡（16.03坪）<br>2F床面積／48.02㎡（14.52坪）<br>SKY BALCONY建物内／4.14㎡(1.25坪)<br>SKY BALCONY／46.37㎡(14.01坪)</dd>
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
						<li><a href="#item01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall01.jpg" alt=""></a></li>
						<li><a href="#item02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall02.jpg" alt=""></a></li>
						<li><a href="#item03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall03.jpg" alt=""></a></li>
						<li><a href="#item04"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall04.jpg" alt=""></a></li>
						<li><a href="#item05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall05.jpg" alt=""></a></li>
						<li><a href="#item06"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall06.jpg" alt=""></a></li>
						<li><a href="#item07"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall07.jpg" alt=""></a></li>
						<li><a href="#item08"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall08.jpg" alt=""></a></li>
						<li><a href="#item09"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall09.jpg" alt=""></a></li>
					</ul>
				</div>
				<!-- Item-->
				<div id="item01" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">ZERO-CUBE+FUN</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall01.jpg" alt="ZERO-CUBE 1"></p>
						<p class="txt">ムダを削ぎ落としたキューブ型の美しい外観、服を選ぶようにスタイルに合わせて+FUNを選ぶ住まいの新しいカタチ。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING/DINING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall02.jpg" alt="ZERO-CUBE 2"></p>
						<p class="txt">大きく取られた窓から入りこむ、柔らかな日差しと心地よい風。家族の語らいと笑顔がたくさん生まれる、明るく快適な空間です。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">JAPANESE ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall03.jpg" alt="ZERO-CUBE 3"></p>
						<p class="txt">1Fの和室は、寝室やゲストルーム、リビングの一部として機能。<br>フリールームの変更も可能ですので、趣味のお部屋としてなど+BOXの楽しみ方は自由自在。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">KITCHEN</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall04.jpg" alt="ZERO-CUBE 4"></p>
						<p class="txt">家族の気配をいつでも感じられる対面キッチン。スペースも広々として使い勝手のいいキッチンレイアウトです。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">BED ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall05.jpg" alt="ZERO-CUBE 5"></p>
						<p class="txt">目覚めの朝に、自然光がたっぷりと降り注ぐ、大きな窓が特徴です。</p>
					</div>
				</div>
				<div id="item06" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall06.jpg" alt="ZERO-CUBE 6"></p>
						<p class="txt">一面だけ壁紙を変えてリズムを生み出す空間になっています。</p>
					</div>
				</div>
				<div id="item07" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">EXTERIOR</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall07.jpg" alt="ZERO-CUBE 7"></p>
						<p class="txt">キューブ型のシンプルな外観は周囲からひと際目立ち、ガルバリムのCOOLさ、木の温かみを感じていただけます。</p>
					</div>
				</div>
				<div id="item08" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">WOOD DECK</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall08.jpg" alt="ZERO-CUBE 8"></p>
						<p class="txt">リビングや和室(フリールームも可)から出入りできるウッドデッキは、BBQも楽しめるアウトドアリビングとして活用できます。</p>
					</div>
				</div>
				<div id="item09" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">SKY BALCONY - DAYTIME -</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall09.jpg" alt="ZERO-CUBE 9"></p>
						<p class="txt">プライバシーを保ちつつも、開放感ある贅沢なくつろぎスペース。家族や仲間と一緒にベランピングライフを満喫できます。</p>
					</div>
				</div>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
