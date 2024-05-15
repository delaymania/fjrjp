<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main gordonmiller" role="main">
		
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
					<p class="tit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dolive_logo.png" alt="ドライブ（Dolive）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/gordonmiller/img_keyv_gordonmiller.png" alt="THE HOUSE GARAGE PROJECT(ゴードンミラーのガレージハウス)"></p>
					<h3 class="tittxt ffb"><?php the_title();?></h3>
<?php else :?>
					<p class="boxLogo02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dolive_logo.png" alt="ドライブ（Dolive）"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/gordonmiller/img_keyv_gordonmiller.png" alt="THE HOUSE GARAGE PROJECT(ゴードンミラーのガレージハウス)"></p>
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
				<p class="txt ffa">DoliveがGORDON MILLERと共にノウハウを結集し開発した<br><span class="ffb">“全員、たのしい。そんな家。 THE HOUSE GARAGE PROJECT“</span></p><p class="txt ffa">好きなこと、なんでも表現できて、大切な仲間たちと思う存分くつろげる。<br>家まるごとガレージの新空間に、「自分らしさ」を詰め込んで、<br>家族との時間も、自分の時間も目一杯楽しもう。</p><p class="txt ffa">THE HOUSE GARAGE PROJECTが、<br>全員、楽しい。そんなライフスタイルをお届けします。</p><p class="txt ffa">「VRで理想の家を探そう！」VRゴーグル見学会では、<br>新しい住まい探しをより身近に、VRゴーグルを使って、<br>まるで実際に家を見学しているかのように没入体験ができるイベントです。</p><p class="txt ffa">また、”家を建てたいけれど何から始めたら良いか分からない”<br>そんな不安や疑問を住宅コーディネーターが、</p><p class="txt ffa">お客様のライフスタイルに合わせた理想の暮らしを、<br>土地探しから資金計画のサポートまでご提案致します。</p><p class="txt ffa"><span class="ffb">お客様の描く理想のマイホームやライフスタイルに一歩でも近づくお手伝い</span><br>を精一杯させていただきますので、お気軽にお越しください。</p>
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
						<li><a href="#item01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall01_s.gif" alt=""></a></li>
						<li><a href="#item02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall02_s.jpg" alt=""></a></li>
						<li><a href="#item03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall03_s.jpg" alt=""></a></li>
						<li><a href="#item04"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall04_s.jpg" alt=""></a></li>
						<li><a href="#item05"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall05_s.jpg" alt=""></a></li>
					</ul>
				</div>
				<!-- Item-->
				<div id="item01" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">THE HOUSE GARAGE PROJECT</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall01_l.gif" alt="THE HOUSE GARAGE PROJECT(ゴードンミラーのガレージハウス)ロゴ"></p>
						<p class="txt">シンプルな塗り壁、モルタル、ウッド、アイアン、セメント板など素材を生かしたハウスガレージ。それぞれの空間が個性的でありながら、全体につながりを持つ。全員、たのしい。そんな家。</p>
					</div>
				</div>
				<div id="item02" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">FACADE</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall02_l.jpg" alt="THE HOUSE GARAGE PROJECT(ゴードンミラーのガレージハウス)外観"></p>
						<p class="txt">限られた敷地でも建てられるコンパクトな3階建てタイプと、家の真ん中に大きなガレージを配置した大胆な間取りの平屋タイプをご用意。</p>
					</div>
				</div>
				<div id="item03" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">GARAGE</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall03_l.jpg" alt="THE HOUSE GARAGE PROJECT(ゴードンミラーのガレージハウス)ガレージ"></p>
						<p class="txt">ガレージと各フロアがつながるシームレスな空間。エントランスとの仕切りには大きなサッシを採用し、床を一続きの土間にすることで、空間に広がりを持たせ、趣味のスペースとしても楽しめる作りになっている。</p>
					</div>
				</div>
				<div id="item04" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">DINING／KITCHEN</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall04_l.jpg" alt="THE HOUSE GARAGE PROJECT(ゴードンミラーのガレージハウス) ダイニング・キッチン"></p>
						<p class="txt">家族と過ごせるリビングダイニングを2階に設置。食卓を囲んだり、リラックスする時間を一緒に過ごせる。ガレージやワークスペースとシームレスにつながっているので、家族同士のコミュニケーションもとりやすい。</p>
					</div>
				</div>
				<div id="item05" class="port">
					<div class="under_contents">
						<a href="#" class="close"></a>
						<h5 class="tit ffc">WORK SPACE</h5>
						<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/img_gordonmiller_gall05_l.jpg" alt="THE HOUSE GARAGE PROJECT(ゴードンミラーのガレージハウス) ワークスペース"></p>
						<p class="txt">見せる収納でギアをコレクションしたり、趣味のスペースとしてこだわりの空間を楽しめるワークスペース。開放感のあるスキップフロアを採用しているので、ガレージを眺められる仕様となっている。</p>
					</div>
				</div>
			</div>
		</div>
<?php require("inc/event-comment01.php"); ?>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
