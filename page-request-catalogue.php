<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-housecanvas.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page-freakshouse.css">
<style>
#freaks-house.request-catalogue-lp .freaks-house-cta a {
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
#freaks-house.request-catalogue-lp .freaks-house-cta a:after {
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
#freaks-house.request-catalogue-lp .freaks-house-cta a span {
	background: #fff;
	text-align: center;
	font-size: 0.8em;
	color: #00427d;
	padding: 0.4em 1em;
	margin-right: 0.5em;
	display: inline-block;
	line-height: 1;
}
@media screen and (max-width: 768px) {
	#freaks-house.request-catalogue-lp .freaks-house-cta a {
		width: 440px;
		margin: 1rem auto;
		font-size: 1.4em;
		padding: 0.9em 1.3em;
	}
}
@media screen and (max-width: 520px) {
	#freaks-house.request-catalogue-lp .collabo-head {
		margin-top: -11rem;
		margin-bottom: 5.5rem;
	}
	#freaks-house.request-catalogue-lp .collabo .logo {
		margin-top: 0;
		margin-bottom: 1rem;
	}
	#freaks-house.request-catalogue-lp .freaks-house-cta a {
		width: auto;
	}
    #freaks-house .collabo {
        padding: 1em 1.5em 3.5em;
        margin: 11rem auto 1.5rem;
    }
}
</style>
		<div id="freaks-house" class="under_contents_wrap request-catalogue-lp">
			<div class="under_contents idee">
				<h1 class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/log_freakshouse.gif" alt="FREAK'S HOUSE（フリークス ハウス）ロゴ"></h1>
				<div class="keyvisual"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse_keyvisual.jpg" alt="FREAK'S HOUSE（フリークス ハウス）キービジュアル"></div>
				<p class="boxtype_tit">フリークストアがつくる家。</p>
				<p class="boxtype01">家は、もっともっと楽しい場所であるべきだと思う。<br>お気に入りの服を着て気分が上がるように、<br>お気に入りの家に住めば人生はもっと楽しくなる。<br><br>家族や仲間、自然とのつながりを大切にし、<br>大好きな家で豊かな人生を楽しむ。<br>それがフリークスストアが考えるTHE FUN LIFE。</p>
				<div class="collabo">
					<div class="collabo-head">
						<div class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/logo_freakshouse_collago.gif" alt="LIFE LABELとFREAK'S STORE（フリークス ストア）のコラボレーション"></div>
						<div class="freaks-house-cta">
							<a href="https://forms.shonan-no-koumuten.jp/@request-catalog" id="freaks_link">資料請求はこちら</a>
						</div>
					</div>
					<p class="strong">コンセプトは、”つながる(＝セッション)を楽しむ家”。</p>
					<p>さまざまなスタイルにあった暮らし方を提案する住宅ブランド「ライフレーベル」とアメリカンライフスタイルを軸に展開するセレクトショップ「フリークスストア」がタッグを組み、家族や仲間、自然とのゆるやかなつながりを生み出す空間をデザインしました。</p>
				</div>
			
				<h3 class="hd01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/hd_freakshouse01.png" alt="FREAK'S HOUSE（フリークス ハウス）のPOINT"></h3>
				<div class="point">
					<h4 class="hd03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/hd_freakshouse02.png" alt="FREAK'S HOUSE（フリークス ハウス）のリビングとガーデン"></h4>
					<div class="photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse01.jpg" alt="FREAK'S HOUSE（フリークス ハウス）のガーデン＆リビング写真"></div>
					<h5 class="hd04">仲間が集まる、もうひとつのリビング。</h5>
					<p class="txt">FREAK'S HOUSEの大きな特徴は、平屋と2階建て、2つの建物をひとつにした大胆なレイアウト。リビングは平屋部分を丸ごと使った大空間。天井と軒、床とデッキをフラットにつないで室内と屋外の境界をなくし、庭とリビングの一体感をデザイン。ここには、面積以上の開放感が広がっている。</p>
					<div class="photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse02.jpg" alt="FREAK'S HOUSE（フリークス ハウス）のガーデン＆リビング写真"></div>
					<h5 class="hd04">つながり、広がる、リビングと庭。</h5>
					<p class="txt">庭だけでなく、キッチンや2階スペースまでのつながりを感じることができる大空間は、日常をワクワクできる時間に変えてくれる場所。思い思いに読書やコーヒーを楽しんだり、仲間たちとアフターサーフのひとときを過ごしたり、庭先で犬と遊んだり、ウッドデッキでアウトドア・パーティを開いたり、お気に入りの音楽や映像を流しながら、家フェスを開催してみたり…と、使い方は自由自在。</p>
				</div>	

				<div class="point">
					<h4 class="hd03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/hd_freakshouse03.png" alt="FREAK'S HOUSE（フリークス ハウス）のキッチン"></h4>
					<div class="photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse03.jpg" alt="FREAK'S HOUSE（フリークス ハウス）のキッチン写真"></div>
					<h5 class="hd04">集まる人や時間の変化が、多彩なシーンをつくりだす。</h5>
					<p class="txt">家の真ん中に位置する庇（ひさし）のあるカウンターキッチンは、よくあるキッチンとはひと味ちがう、まるで行きつけのカフェみたいな居心地のよさ。カウンター越しに人と人とが向かい合う場所をつくり、家族や仲間が集まって自然と会話が生まれる。</p>
				</div>	

				<div class="point">
					<h4 class="hd03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/hd_freakshouse04.png" alt="FREAK'S HOUSE（フリークス ハウス）のシェアスペース"></h4>
					<div class="photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse04.jpg" alt="FREAK'S HOUSE（フリークス ハウス）のシェアスペース写真"></div>
					<h5 class="hd04">使い方自由自在のシェアスペース。</h5>
					<p class="txt">アイデア次第で自由に使える2Fのシェアスペース。自由度を高めるために、空間を仕切る壁などはできるだけなくし、趣味やライフスタイルに合わせて使い方を柔軟に変化させられるようにデザイン。例えば、横幅のあるデスクを置けば、親子で勉強や工作をしたりできる。工具やラックを用意すれば、仲間たちと一緒にサーフボードや自転車などのメンテナンスだって思いのまま。そう、ここなら、誰と何をしていても熱中できる。</p>
				</div>	
				
				<h3 class="hd01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/hd_freakshouse04.png" alt="FREAK'S HOUSE（フリークス ハウス）の間取り"></span></h3>
				<div class="photo plan table">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse_plan01.png" alt="FREAK'S HOUSE（フリークス ハウス）の間取り図">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse_plan02.png" alt="FREAK'S HOUSE（フリークス ハウス）の間取り図">
				</div>
				<div class="cont">
					<p class="txt01">[ 本体価格 ]<span class="price">お問い合わせください</span></p>
					<p class="txt02">延床面積／109.57㎡（33.14坪）<br>床面積／1F：74.11㎡（22.42坪） 2F：35.46㎡（10.72坪）</p>
					<p class="txt03">※価格は、消費税を含まない商品本体の価格であり建築する際は、付帯工事や登録に係る手数料等、別途費用が必要となります。また、家具・調度品・植栽等は本体費用に含まれておりません。</p>
				</div>
				
				<div class="box_link">
					<div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/freaks-house/img_freakshouse05.jpg"></div>
					<p class="text">アメリカのローカルハウスをモチーフに家族や仲間、自然とのつながりが生まれていくFREAK'S HOUSE。住宅とファッションが、ジャンルを超えて新しいライフスタイルをつくる、住宅業界の常識に縛られない自由で楽しい住まいです。もうワクワクしますよね！</p>
      			  <div class="box_link-cta freaks-house-cta">
					<a href="https://forms.shonan-no-koumuten.jp/@request-catalog" id="freaks_link">資料請求はこちら</a>
				  </div>
				</div>
				
			</div>
		</div>



	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
