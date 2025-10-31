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
						<li class="hlg01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_eveplan03.jpg" alt="ZERO-CUBE+BOX SKYBALCONY間取りPHF"><span class="ffc">PHF</span></li>
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
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall01.jpg" alt="ZERO-CUBE+FUN"></p>
						<p class="txt">ムダを削ぎ落としたキューブ型の美しい外観、服を選ぶようにスタイルに合わせて+FUNを選ぶ住まいの新しいカタチ。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">SKY BALCONY</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall02.jpg" alt="SKY BALCONY"></p>
						<p class="txt">空とつながる、もうひとつのリビング。周囲の視線を気にせず、空の下でくつろぐ贅沢なひとときを。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">HALL</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall03.jpg" alt="HALL"></p>
						<p class="txt">玄関を入るとレッドシダーの板張りがお出迎え。ブラックのドアがその先のワクワク感を引き立たせます。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">LIVING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall04.jpg" alt="LIVING"></p>
						<p class="txt">光と素材が調和し、木の香りと光が満ちる、毎日が特別になるリビング。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">DINING</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall05.jpg" alt="DINING"></p>
						<p class="txt">大きく取られた窓から入りこむ、柔らかな日差しと心地よい風。家族の笑顔が集まる、ぬくもりあふれる空間。</p>
					</div>
				</div>
				<div id="item06" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">KITCHEN</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall06.jpg" alt="KITCHEN"></p>
						<p class="txt">料理をしながら会話が弾む、心がつながる対面キッチン。スペースも広々として使い勝手のいいキッチンレイアウトです。</p>
					</div>
				</div>
				<div id="item07" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">POWDER ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall07.jpg" alt="POWDER ROOM"></p>
						<p class="txt">木の温もりを感じる造作洗面化粧台で、毎日の支度も特別に。</p>
					</div>
				</div>
				<div id="item08" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">ROOM 1</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall08.jpg" alt="ROOM 1"></p>
						<p class="txt">テントの中で夢を描くように、子どもたちの想像力が育つ場所。遊び心を詰め込んだ、小さなグランピングルーム。</p>
					</div>
				</div>
				<div id="item09" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">MAIN BED ROOM</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube-muji-img_gall09.jpg" alt="MAIN BED ROOM"></p>
						<p class="txt">グレージュの優しい色合いが、一日の終わりを穏やかに整える、やすらぎをデザインした寝室。</p>
					</div>
				</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
