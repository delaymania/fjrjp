<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main online" role="main">
    <div class="mv_under_contents">
        <div class='upper'>
            <h2 class="ttl">ONLINE<span>オンライン無料相談</span></h2>
        </div>
    </div>
		<div class="undertitlewrap">
			<div class="undertitlebox">
				<div class="comme"><span>オンライン無料相談は、Zoomを利用して、住宅コーディネーターとリアルタイムで住まいのご相談ができるサービスです。</span>
					<span>同じ画面を見ながらご説明いたしますので、会話だけでは伝わらない情報もお伝えする事ができます。</span><span>外出するのが不安な方も、オンライン無料相談でご自宅でリラックスしながら、家づくりの疑問や不安を解消しませんか？</span>
				</div>
			</div>
		</div>		
		<!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="all" />-->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout_lineup.css" type="text/css" media="all" />
		<link rel="stylesheet" media="(max-width: 768px)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile_lineup.css" />
		
		<div class="under_contents">
			<div class="ol-cont-01">
				<dl>
					<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_zoom.png" alt="Zoom(ズーム)"></dt>
					<dd><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/online_img01.png" alt=""></dd>
					<ul>
						<li><span>無料で利用できます</span></li>
						<li><span>デバイスの制限なし</span></li>
						<li><span>インターネットに繋がっていればOK！</span></li>
					</ul>
				</dl>
				<div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/online_img02.jpg" alt=""></div>
				<div class="link"><a href="https://zoom.us/jp-jp/meetings.html" target="_blank">Zoom公式サイト</a></div>
				<ul class="splink">
					<li><a href="https://apps.apple.com/jp/app/zoom-cloud-meetings/id546505307" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_appstore.png" alt="Zoom App Stroe"></a></li>
					<li><a href="https://play.google.com/store/apps/details?id=us.zoom.videomeetings&hl=ja" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_googleplay.png" alt="Zoom Google Play"></a></li>
				</ul>
			</div><!-- ol-cont-01 -->
			<div class="ol-cont-02 cf">
				<div class="step cf">
					<div class="num"><div class="gp"><span>STEP</span><br><strong>01</strong></div></div>
					<h3>仮予約のお申込み</h3>
					<p class="att">下記のフォームよりご希望の日時・ご相談内容を入力の上、お申し込みください。</p>
				</div>
				<div class="step cf">
					<div class="num"><div class="gp"><span>STEP</span><br><strong>02</strong></div></div>
					<h3>予約確定のご連絡</h3>
					<p class="att">担当スタッフより、予約確定のご連絡・ミーティングURLを送付致します。</p>
				</div>			
				<div class="step cf">
					<div class="num"><div class="gp"><span>STEP</span><br><strong>03</strong></div></div>
					<h3>Zoomインストール</h3>
					<p class="att">オンライン相談の当日までにZoomをインストールしてください。</p>
				</div>
				<div class="step cf">
					<div class="num"><div class="gp"><span>STEP</span><br><strong>04</strong></div></div>
					<h3>相談当日</h3>
					<p class="att">お時間になりましたら、STEP2のミーティングURLをクリック。スタートです！</p>
				</div>
			</div><!-- ol-cont-02 -->
			<dl class="ol-cont-03">
				<dt>利用時の注意事項</dt>
				<dd>
					<ul>
						<li>※オンライン相談サービスはパケット通信を利用するため、WiFi環境でのご利用を推奨しています。従量課金制通信サービスや通信料に上限があるネット回線・プランを利用する場合は、通信量に注意してください。</li>
						<li>※お客さまがご利用のインターネットの回線速度やセキュリティなどの影響で本サービスをご利用いただけない場合がございます。</li>
					</ul>
				</dd>
			</dl>
		</div><!-- inner -->

<div class="under_contents_wrap entry-content">
<div class="under_contents form-layout">
        <div class="evecombox">
			<div class="under_contents">
				<h4 class="everesertit ffb">予約フォーム</h4>
				<div class="evereserpanle cf">
					<div class="evereserbox02">
						<p class="ffa">当日ご希望の方は下記の番号へお電話ください。</p>
						<p class="ffc tel"><span class="studio">湘南乃工務店</span><a href="tel:0120767221" id="tel_yokohama"><span>0120-767-221</span></a></p>
						<p class="ffa">営業時間／AM9:30-PM6:30　定休／火曜・水曜</p>
					</div>
				</div>
			</div>	
		</div>
		

<script src="https://sdk.form.run/js/v2/embed.js"></script>
<div
  class="formrun-embed"
  data-formrun-form="@arc-form"
  data-formrun-redirect="true"
  data-formrun-host="https://forms.shonan-no-koumuten.jp"
>
</div>



</div>
</div>
	
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>
