<?php
/**
 * Single template: ZERO-CUBE model house event
 */

$today_ts            = current_time( 'timestamp' );
$weekday             = (int) date( 'w', $today_ts );
$days_until_saturday = ( 6 - $weekday + 7 ) % 7;
$saturday_ts         = strtotime( '+' . $days_until_saturday . ' day', $today_ts );
$sunday_ts           = strtotime( '+1 day', $saturday_ts );
$sat_month           = date_i18n( 'n', $saturday_ts );
$sun_month           = date_i18n( 'n', $sunday_ts );
$saturday_label      = date_i18n( 'n月j日(土)', $saturday_ts );
$sunday_label        = date_i18n( $sat_month === $sun_month ? 'j日(日)' : 'n月j日(日)', $sunday_ts );

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-housecanvas.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-freakshouse.css">
		<style>
		#event .zero-cube-vr-lp {
			border-color: #00427d;
		}
		#event .zero-cube-vr-lp .freaks-house-cta a {
			display: block;
			background: #ff8f73;
			width: 440px;
			margin: 2rem auto;
			font-size: 1.8em;
			color: #fff;
			text-align: center;
			text-decoration: none;
			padding: 0.8em 1.3em;
			position: relative;
		}
		#event .zero-cube-vr-lp .freaks-house-cta a:after {
			content: ' ';
			width: 5px;
			height: 5px;
			border-top: 1px solid #fff;
			border-right: 1px solid #fff;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(45deg);
			position: absolute;
			top: 50%;
			right: 20px;
			margin-top: -3px;
		}
		#event .zero-cube-vr-lp .fv-cta {
			margin: 1.5rem auto 0;
		}
		#event .zero-cube-vr-lp .boxtype_tit {
			margin: 1rem auto;
		}
		#event .zero-cube-vr-lp .event-day {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 0.2em;
			color: #00427d;
			font-size: 1.5rem;
			line-height: 1;
			margin: 0;
			font-weight: 700;
			text-align: center;
		}
		#event .zero-cube-vr-lp .event-day .label {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			border: 1px solid #111;
			background: #111;
			padding: 0.25em 0.7em 0.2em;
			margin-right: 0.45em;
			font-size: 0.75em;
			line-height: 1;
			color: #fff;
			font-weight: 700;
		}
		#event .zero-cube-vr-lp .event-day .day {
			display: inline-flex;
			align-items: center;
			font-weight: 700;
			line-height: 1;
		}
		#event .zero-cube-vr-lp .event-day .sat {
			color: #2f6fb0;
		}
		#event .zero-cube-vr-lp .event-day .sun {
			color: #cc5b5b;
		}
		#event .zero-cube-vr-lp .event-day .sep {
			display: inline-flex;
			align-items: center;
			color: #00427d;
			padding: 0 0.05em;
			line-height: 1;
		}
		#event .zero-cube-vr-lp .hd01:before {
			background: #00427d;
		}
		#event .zero-cube-vr-lp .hd01 {
			font-size: 3.6em;
			font-weight: 700;
			line-height: 1.35;
			text-align: center;
		}
		#event .zero-cube-vr-lp .point .hd03 {
			background: #f0f2f4;
			font-size: 2.4em;
			font-weight: 700;
			line-height: 1.35;
			text-align: center;
			margin: 2.5rem auto;
			padding: 0.8em 1.5em;
		}
		#event .zero-cube-vr-lp .point .photo {
			padding: 0;
			position: relative;
		}
		#event .zero-cube-vr-lp .point .photo img {
			width: 100%;
			display: block;
		}
		#event .zero-cube-vr-lp .point .photo:before {
			content: '';
			border: solid 6px #fff;
			box-sizing: border-box;
			width: 97.5%;
			height: 96%;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto;
		}
		#event .zero-cube-vr-lp .point .txt {
			margin-bottom: 2rem;
		}
		#event .zero-cube-vr-lp .eveplanbox {
			padding: 20px 0;
			position: relative;
			z-index: 200;
		}
		#event .zero-cube-vr-lp .titstyleb {
			font-size: 26px;
			position: relative;
			text-align: center;
			margin-bottom: 20px;
		}
		#event .zero-cube-vr-lp .titstyleb:before {
			position: absolute;
			content: "";
			width: 30px;
			height: 6px;
			background: #a8d2c8;
			left: 50%;
			bottom: -6px;
			transform: translate(-50%, 0);
		}
		#event .zero-cube-vr-lp .eveplanbox .eveplanin {
			max-width: 880px;
			margin: 0 auto;
		}
		#event .zero-cube-vr-lp .eveplanbox .eveplanin ul {
			display: flex;
			flex-wrap: wrap;
		}
		#event .zero-cube-vr-lp .eveplanbox .eveplanin li {
			float: none;
			width: 50%;
			box-sizing: border-box;
			padding: 0 30px;
			text-align: center;
			margin-top: 30px;
			position: relative;
		}
		#event .zero-cube-vr-lp .eveplanbox .eveplanin li span {
			position: absolute;
			bottom: 0;
			right: 50px;
			font-size: 1.6em;
		}
		#event .zero-cube-vr-lp .eveplanbox .eveplanin li:nth-child(3) span {
			right: 50px;
			bottom: -30px;
		}
		#event .zero-cube-vr-lp .eveinfobox {
			padding: 20px;
			border: 1px solid #000;
			float: left;
		}
		#event .zero-cube-vr-lp .eveinfobox .tit {
			font-size: 20px;
			margin-bottom: 20px;
		}
		#event .zero-cube-vr-lp .eveinfobox .eveinfo {
			display: table;
		}
		#event .zero-cube-vr-lp .eveinfobox .eveinfo dt {
			display: table-cell;
		}
		#event .zero-cube-vr-lp .eveinfobox .eveinfo dt .tabbox {
			display: table;
			width: 66px;
			height: 66px;
			background: #000;
		}
		#event .zero-cube-vr-lp .eveinfobox .eveinfo dt .tabbox .size {
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			font-size: 14px;
			color: #fff;
			position: inherit;
		}
		#event .zero-cube-vr-lp .eveinfobox .eveinfo dd {
			display: table-cell;
			padding-left: 10px;
			font-size: 13px;
			line-height: 1.8;
			vertical-align: top;
			text-align: left;
		}
		#event .zero-cube-vr-lp .box_link {
			margin-top: 180px;
		}
		@media screen and (max-width: 768px) {
			#event .zero-cube-vr-lp .freaks-house-cta a {
				width: 440px;
				margin: 1rem auto;
				font-size: 1.4em;
				padding: 0.9em 1.3em;
			}
			#event .zero-cube-vr-lp .event-day {
				font-size: 1.2rem;
			}
			#event .zero-cube-vr-lp .eveplanbox {
				padding: 2rem 0 0;
			}
			#event .zero-cube-vr-lp .eveinfobox {
				padding: 1em;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo,
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dt,
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dt .tabbox,
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dt .tabbox .size {
				display: block;
			}
			#event .zero-cube-vr-lp .eveinfobox .tit {
				margin-bottom: 0.3em;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dt .tabbox {
				width: inherit;
				height: inherit;
				margin-bottom: 0.3em;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dd {
				padding-left: 0;
			}
		}
		@media screen and (max-width: 520px) {
			#event .zero-cube-vr-lp .freaks-house-cta a {
				width: auto;
			}
			#event .zero-cube-vr-lp .collabo {
				padding: 3em 1.8em;
				margin: 3rem auto 2rem;
			}
			#event .zero-cube-vr-lp .box_link {
				margin-top: 140px;
			}
			#event .zero-cube-vr-lp .hd01 {
				font-size: 2.6em;
			}
			#event .zero-cube-vr-lp .point .hd03 {
				font-size: 1.9em;
			}
		}
		@media screen and (max-width: 479px) {
			#event .zero-cube-vr-lp .titstyleb {
				font-size: 20px;
				margin-bottom: 0;
			}
			#event .zero-cube-vr-lp .eveplanbox .eveplanin li {
				width: 100%;
				padding: 0 40px;
				margin-top: 15px;
			}
			#event .zero-cube-vr-lp .eveplanbox .eveplanin li:nth-child(2) {
				margin-left: 10px;
			}
			#event .zero-cube-vr-lp .eveplanbox .eveplanin li span {
				right: 0;
				left: 0;
				width: 100%;
				bottom: -5px;
			}
			#event .zero-cube-vr-lp .eveplanbox .eveplanin li:nth-child(2) span {
				margin-left: -10px;
				bottom: -25px;
			}
			#event .zero-cube-vr-lp .eveplanbox .eveplanin li:nth-child(3) {
				margin-bottom: 50px;
			}
			#event .zero-cube-vr-lp .eveplanbox .eveplanin li:nth-child(3) span {
				right: 50px;
			}
			#event .zero-cube-vr-lp .eveplanbox .eveplanin li:nth-child(4) {
				margin-bottom: 50px;
			}
			#event .zero-cube-vr-lp .eveinfobox {
				padding: 1em;
				float: inherit;
				margin: 0 -40px;
			}
			#event .zero-cube-vr-lp .eveinfobox .tit {
				margin-bottom: 10px;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo {
				display: table;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dt {
				display: table-cell;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dt .tabbox {
				display: table;
				width: 55px;
				height: 55px;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dt .tabbox .size {
				display: table-cell;
				font-size: 12px;
			}
			#event .zero-cube-vr-lp .eveinfobox .eveinfo dd {
				font-size: 11px;
				padding-left: 0.8em;
			}
		}
		</style>

		<div id="event">
			<div id="freaks-house" class="under_contents_wrap request-catalogue-lp zero-cube-vr-lp">
				<div class="under_contents idee">
				<h1 class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/event/zero-cube_logo.png" alt="ゼロキューブプラスファン（ZERO-CUBE+FUN）"></h1>
				<div class="keyvisual"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/bg01w.jpg" alt="ZERO-CUBE+FUN キービジュアル"></div>

				<div class="freaks-house-cta fv-cta">
					<p class="boxtype_tit">ZERO-CUBE モデルハウス見学会</p>
					<p class="event-day"><span class="label">開催日</span><span class="day sat"><?php echo esc_html( $saturday_label ); ?></span><span class="sep">/</span><span class="day sun"><?php echo esc_html( $sunday_label ); ?></span></p>
					<a href="https://forms.shonan-no-koumuten.jp/@arc-form" id="vr_reserve_link_top">来場予約はこちら</a>
				</div>

				<p class="boxtype01">ムダを削ぎ落としたキューブ型の美しい外観。<br>シンプルな家に、ライフスタイルに合わせて「+FUN」を重ねることで、<br>あなたらしい暮らしを叶える住まいです。<br><br>モデルハウス見学会では、間取りや暮らしの導線を体験しながら、<br>土地探しや資金計画までご相談いただけます。</p>

				<div class="collabo">
					<p class="strong">私たちにちょうどいい家。</p>
					<p>屋根の家や最新機能の家もいいけど、どれも複雑だったり、どこか決まったカタチに見えてくる。</p>
					<p>服を選ぶように、マイホームをもっとスタイルに合わせて選びたい。そんな想いに応えるのがZERO-CUBEです。</p>
					<p>シンプルだからこそ、どんなライフスタイルにもフィットします。</p>
				</div>

				<h3 class="titstyleb ffc">POINT</h3>
				<div class="point">
					<h4 class="hd03">凸凹ゼロのデザイン</h4>
					<div class="photo"><img src="https://fj-r.jp/wp-content/themes/fjrjp/img/event/zero-cube-muji-img_gall01.jpg" alt="ZERO-CUBE+FUN 外観"></div>
					<p class="txt">ムダを削ぎ落とした立方体のフォルム。建物の凸凹をなくすことで、美しい外観と広い室内空間を実現しました。キューブスタイルなので、東西南北敷地の向きにかかわらず建設が可能です。</p>
				</div>
				<div class="point">
					<h4 class="hd03">こだわりや楽しみをプラス「+FUN」</h4>
					<div class="photo"><img src="https://fj-r.jp/wp-content/themes/fjrjp/img/event/zero-cube-muji-img_gall02.jpg" alt="ZERO-CUBEに+FUNをプラス"></div>
					<p class="txt">ご予算・ライフスタイルに合わせて必要なものを足していく「+FUN」。家づくりの楽しさがさらに広がります。</p>
				</div>
				<div class="point">
					<h4 class="hd03">ストレスゼロの価格設定</h4>
					<div class="photo"><img src="https://fj-r.jp/wp-content/themes/fjrjp/img/event/zero-cube-muji-img_gall04.jpg" alt="グッドデザイン賞受賞"></div>
					<p class="txt">ひとつひとつの価格がわかっている明快なシステムで、予算オーバーの心配もありません。</p>
				</div>

					<div class="eveplanbox">
						<h4 class="titstyleb ffc">PLAN</h4>
						<div class="eveplanin zero-cube">
							<ul class="cf">
								<li class="hlg01"><img src="https://fj-r.jp/wp-content/themes/fjrjp/img/event/zero-cube-muji-img_eveplan01.jpg" alt="ZERO-CUBE+BOX SKYBALCONY間取り1F"><span class="ffc">1F</span></li>
								<li class="hlg01"><img src="https://fj-r.jp/wp-content/themes/fjrjp/img/event/zero-cube-muji-img_eveplan02.jpg" alt="ZERO-CUBE+BOX SKYBALCONY間取り2F"><span class="ffc">2F</span></li>
								<li class="hlg01"><img src="https://fj-r.jp/wp-content/themes/fjrjp/img/event/zero-cube-muji-img_eveplan03.jpg" alt="ZERO-CUBE+BOX SKYBALCONY間取りPHF"><span class="ffc">PHF</span></li>
								<li>
									<div class="cf">
										<div class="eveinfobox">
											<p class="tit ffc">+SKY BALCONY</p>
											<dl class="eveinfo">
												<dt><p class="tabbox ffb"><span class="size">3LDK</span></p></dt>
												<dd class="ffa">延床面積／105.15㎡（31.80坪）<br>1F床面積／52.99㎡（16.03坪）<br>2F床面積／48.02㎡（14.52坪）<br>SKY BALCONY建物内／4.14㎡(1.25坪)<br>SKY BALCONY／46.37㎡(14.01坪)</dd>
											</dl>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>

						<?php require( 'inc/event-comment01.php' ); ?>

				<div class="box_link">
					<div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_plan01.jpg" alt="ZERO-CUBE+BOX SKY BALCONY"></div>
					<p class="text">シンプルな家に、自分らしい楽しみをプラスしていくZERO-CUBE。モデルハウス見学会で、住み心地やサイズ感を具体的にご体感ください。</p>
					<div class="box_link-cta freaks-house-cta">
						<a href="https://forms.shonan-no-koumuten.jp/@arc-form" id="vr_reserve_link_bottom">来場予約はこちら</a>
					</div>
				</div>
			</div>
		</div>
		</div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
