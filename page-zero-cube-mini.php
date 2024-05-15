<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main zero-cube-Mini" role="main">
		
		<!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="all" />-->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout_lineup.css" type="text/css" media="all" />
		<link rel="stylesheet" media="(max-width: 768px)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile_lineup.css" />
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
		<script type="text/javascript">
			$(function(){
				$('.toggle dt').click(function(){
					if($(this).hasClass("on")){
						$(this).next().stop().slideUp(300);
						$(this).removeClass("on");
					}else{
						$(this).next().stop().slideDown(300);
						$(this).addClass("on");
					}

				});
				$('.toggle dd .btn').click(function(){
					var view = $(this).parent();
					var togdt = $(this).parent().prev()
					if(togdt.hasClass("on")){
						view.stop().slideUp(300);
						togdt.removeClass("on");
					}else{
						view.stop().slideDown(300);
						togdt.addClass("on");
					}

				});			
				return false;
			});
		</script>
		<div class="keyvbox">
			<dl>
				<dt></dt>
				<dd>
					<p class="logolifelabel"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo.png" alt="ライフレーベル（LIFE LABEL）"></p>
					<h2 class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_keyv_mini.png" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）"></h2>
					<p class="logotxt">限られたスペースに、<br>自由自在のアイデアを。</p>
					<p class="txt ffb">狭い敷地だから、ちいさな家。それは都市で暮らすことの常識・・・なのでしょうか？ヨコのスペースがとれないから、タテに伸ばしていく。隣家との境が気になるなら、窓の配置にこだわってみる。空間に開放感を持たせるために、吹き抜けを設けてみよう。たとえ敷地や空間は限られていても、都市生活を愉しむ家はかならずできます。その理由はとっても、シンプル。<br>だって、アイデアやデザインに限界はないのだから。さまざまな制約がある、都会の一角にジャストサイズのデザインハウスができました。</p>
				</dd>
			</dl>
		</div>
		<div class="conceptbox lead">
			<div class="under_contents cf">
				<div class="txtbox">
					<h3 class="titstylea ffc concept">MINI fits it anywhere.</h3>
					<p class="txt ffa">毎日の暮らしをエンジョイするには、どうすればいいんだろう。<br>答えはカンタン。それは…「楽しいエリア」に家を建てればいいのです。</p>
					<p class="txt ffa">人気のグルメスポット、心躍るショッピング、面白いイベントetc...<br>どこに住んでいても、都会の賑わいと輝きを365日体感できる、<br>そんな場所にぴったりの「ZERO-CUBE MINI」ができました。</p>
					<p class="txt ffa">住まう人の好みに応じたシティライクな暮らし方をお届けします。</p>
				</div>
			</div>
		</div>
		<div class="conceptbox">
			<div class="under_contents cf">
				<div class="txtbox">
					<h3 class="titstylea ffc">CONCEPT</h3>
					<p class="txtb ffb"><span class="bor"><span class="lartxt">“</span>ゼロキューブがスマートになりました。<span class="lartxt">”</span></span></p>
					<p class="txt ffa">ゼロにこだわり、ゼロから発想することで実現した、<br>1,350万円からの家づくり「ZERO-CUBE+FUN」。</p>
					<p class="txt ffa">居住空間を広げたり、屋上にスカイバルコニーを設けたりと、<br>自分流の家づくりができる”楽しさ”が人気の秘密です。</p>
					<p class="txt ffa">そんな「ZERO-CUBE+FUN」に狭小地向けのスマートデザインが誕生。これまで入りづらかった都市部の敷地でも対応可能になりました。</p>
				</div>

			</div>
		</div>
		<div class="meritbox">
			<h3 class="titstylea ffc vsp">POINT</h3>
			<dl>
				<dt> </dt>
				<dd>
					<h3 class="titstylea ffc vpc">POINT</h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">狭小エリアにも柔軟に対応</h4>
								<p class="txt ffa">どんな土地にもフィットするように、間口が2間（3.64m）/ 2.5間（4.45m）2つの広さのプランを用意しました。</p>
							</li>
							<li>
								<h4 class="tit ffb">シンプル＆ワイドな空間</h4>
								<p class="txt ffa">ZERO-CUBEの外観を受け継ぎ、徹底的にムダを削ぎ落したからこそ生まれたスクエアデザイン。建物の凸凹をなくすことで、内観もゆったりと確保できます。</p>
							</li>
							<li>
								<h4 class="tit ffb">明るい吹き抜け</h4>
								<p class="txt ffa">1Fメインスペースには吹き抜けを設け、狭小地において難点となりがちな採光性を気にしないレイアウトに。</p>
							</li>
							<li>
								<h4 class="tit ffb">こだわりや楽しみをプラス「+FUN」</h4>
								<p class="txt ffa">狭小エリアでも自分たちらしいスタイルを。ご予算・ライフスタイルに合わせて必要なものを足していく+FUNの楽しさはそのままに。</p>
							</li>
						</ul>
					</div>

				</dd>
			</dl>
		</div>
		<div class="planbox">
			<div class="under_contents">
				<h3 class="titstyleb ffc">PLAN</h3>
				
				<ul class="tab_btn_box clearfix">
					<li class="tab_btn_01 openTab01">間口2間タイプ</li>
					<li class="tab_btn_02">間口2.5間タイプ</li>
				</ul>
				<div class="tab_content01 openTab01">
					<div class="planin">
						<div class="leftimg">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_plan_mini01.jpg" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ（ZERO-CUBE MINI） 間口2間タイプ">
							<p class="img vsp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_plan_mini02.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ（ZERO-CUBE MINI） 間口2間タイプ 2LDK間取り"></p>
							<dl class="plandl">
								<dt><span class="dtbox ffb">2LDK</span></dt>
								<dd class="ffa">延床面積／72.03㎡(21.78坪)<br>1F床面積／39.74㎡(12.02坪) <br>2F床面積／32.29㎡(9.76坪)</dd>
							</dl>
							<div class="pricebox">
								<p class="txt ffb">ZERO-CUBE MINI<br>間口2間タイプ 本体価格</p>
								<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
							</div>
						</div>
						<div class="txtbox">
							<p class="img vpc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_plan_mini02.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ（ZERO-CUBE MINI） 間口2間タイプ 2LDK間取り"></p>
						</div>
					</div>
				</div>
				<div class="tab_content02">
					<div class="planin">
						<div class="leftimg">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_plan_mini03.jpg" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ（ZERO-CUBE MINI） 間口2.5間タイプ">
							<p class="img vsp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_plan_mini04.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ（ZERO-CUBE MINI） 間口2.5間タイプ 2LDK間取り"></p>
							<dl class="plandl">
								<dt><span class="dtbox ffb">2LDK</span></dt>
								<dd class="ffa">延床面積／72.03㎡(21.78坪)<br>1F床面積／41.40㎡(12.52坪) <br>2F床面積／30.63㎡(9.26坪)</dd>
							</dl>
							<div class="pricebox">
								<p class="txt ffb">ZERO-CUBE MINI<br>間口2.5間タイプ 本体価格</p>
								<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
							</div>
						</div>
						<div class="txtbox">
							<p class="img vpc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_plan_mini04.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ（ZERO-CUBE MINI） 間口2.5間タイプ 2LDK間取り"></p>
						</div>
					</div>
				</div>
				
				<p class="arrange"><span>※弊社では、上記の間取り以外にご要望に合わせて自由にアレンジすることができます。</span></p>
			</div>
		</div>
		<div class="subfunbox">
			<div class="under_contents">
				<div class="subfunin">
					<div class="subfuninfo">
						<h3 class="tit ffc">+FUN</h3>
						<p class="txt ffb">お気に入りの服を合わせて<br>アクセサリーを選ぶように…<br>こだわりや楽しさをプラスする、<br>住まいの新発想。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="under_contents">
			<div class="subbox cf">
				<div class="frame">
					<p class="tit"><span class="titin ffa">例：+INNER GARAGEの場合</span></p>
					<div class="tabbox">
						<table>
							<tr>
								<td class="ffc txta">BASE</td>
								<td rowspan="3" class="ffc ico">+</td>
								<td class="ffc txta fun">+FUN</td>
								<td rowspan="3" class="ffc ico">=</td>
								<td class="ffc"></td>
							</tr>
							<tr>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_subbox_mini01.png" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）"></td>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_subbox_mini02.gif" alt="+INNER GARAGE(プラス インナーガレージ)"></td>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_subbox_mini03.png" alt="ゼロキューブ ミニ（ZERO-CUBE MINI）プラス インナーガレージ"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="txtbox">
					<p class="txt ffa">それぞれのライフスタイルを受け止め、<br>その夢を家づくりに注ぎ込むというオーダー感覚の歓びをご提案。<br>居住空間を拡大したり、先進装備をプラスしたりと、<br>1,350万円が基準だから、<br>お客様の負担が大幅に増すことはありません。<br>自由にセレクトして、<br>わが家だけの住み心地をコーディネートしてください。</p>
				</div>
			</div>
			<div class="boxser">
				<h4 class="titstyle ffc">SKY BALCONY SERIES<span class="ffa">屋上にバルコニーをプラス！</span></h4>
				<div class="boxserli">
					<ul>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_boxdt_mini01.jpg" alt="ZERO-CUBE MINI SKY BALCONY(ゼロキューブ プラス スカイバルコニー)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+SKY BALCONY</h5>
											<p class="tittxt ffb">ガーデニングやカフェスペースとして愉しめる癒しのスカイバルコニー。</p>
											<p class="txt ffa">「都会でもお庭を持ちたい」屋上のスカイバルコニーなら都会の限られたスペースを有効活用できます。花々や草木を楽しむガーデニングや、気持ちの良い青空と太陽の下でカフェなど、その魅力は無限大です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="planbox fun">
										<div class="under_contents">
											<ul class="tab_btn_box clearfix">
												<li class="tab_btn_03 openTab03">間口2間タイプ</li>
												<li class="tab_btn_04">間口2.5間タイプ</li>
											</ul>
											<div class="tab_content03 openTab03">
												<div class="planin">
													<div class="leftimg">
														<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_boxplan_mini01.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ スカイバルコニー（ZERO-CUBE MINI +SKY BALCONY）間口2間タイプ 2LDK間取り"></p>
													</div>
													<div class="txtbox">
														<dl class="plandl">
															<dt><span class="dtbox ffb">2LDK</span></dt>
															<dt class="ffa">延床面積／76.99㎡(23.28坪)<br>1F床面積／39.74㎡(12.02坪) <br>2F床面積／32.29㎡(9.76坪)<br>SKY BALCONY／4.96㎡(1.50坪)</dt>
														</dl>
														<div class="pricebox">
															<p class="txt ffb">+SKY BALCONY<br>間口2間タイプ 本体価格</p>
															<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
														</div>			
													</div>
												</div>
											</div>
											<div class="tab_content04">
												<div class="planin">
													<div class="leftimg">
														<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_boxplan_mini02.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ スカイバルコニー（ZERO-CUBE MINI +SKY BALCONY）間口2.5間タイプ 2LDK間取り"></p>
													</div>
													<div class="txtbox">
														<dl class="plandl">
															<dt><span class="dtbox ffb">2LDK</span></dt>
															<dt class="ffa">延床面積／76.99㎡(23.28坪)<br>1F床面積／41.40㎡(12.52坪) <br>2F床面積／30.63㎡(9.26坪)<br>SKY BALCONY／4.96㎡(1.50坪)</dt>
														</dl>
														<div class="pricebox">
															<p class="txt ffb">+SKY BALCONY<br>間口2.5間タイプ 本体価格</p>
															<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">SKY BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/pic_boxdd_mini01.jpg" alt="スカイバルコニー"></p>
													<p class="txt">青空に手が届きそうな暮らしのオアシス。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
					</ul>
				</div>

				<h4 class="titstyle ffc">GARAGE<span class="ffa">万能ガレージをプラス！</span></h4>
				<div class="boxserli">
					<ul>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_boxdt_mini02.jpg" alt="ZERO-CUBE MINI +INNER GARAGE(ゼロキューブ ミニ プラスインナーガレージ)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+INNER GARAGE</h5>
											<p class="tittxt ffb">都会でカーライフを満喫する。 愛車と趣味のエンターテインメント空間へ。</p>
											<p class="txt ffa">都会でカーライフを満喫するならガレージはマスト。一階スペースを愛車のためのガレージへカスタマイズ。アウトドア用品や備品もたっぷり収納できる広々スペース。ガレージに直結する奥の6帖フリールームは、趣味に没頭できるプライベート空間。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="planbox fun">
										<div class="under_contents">
											<ul class="tab_btn_box clearfix">
												<li class="tab_btn_05 openTab05">間口2間タイプ</li>
												<li class="tab_btn_06">間口2.5間タイプ</li>
											</ul>
											<div class="tab_content05 openTab05">
												<div class="planin">
													<div class="leftimg">
														<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_boxdt_mini03.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ インナーガレージ（ZERO-CUBE MINI +INNER GARAGE）間口2間タイプ 3LDK間取り"></p>
													</div>
													<div class="txtbox">
														<dl class="plandl">
															<dt><span class="dtbox ffb">3LDK</span></dt>
															<dt class="ffa">延床面積／110.11㎡(33.30坪)<br>1F床面積／39.74㎡(12.02坪) <br>2F床面積／39.74㎡(12.02坪)<br>3F床面積／30.63㎡(9.26坪)</dt>
														</dl>
														<div class="pricebox">
															<p class="txt ffb">+INNER GARAGE<br>間口2間タイプ 本体価格</p>
															<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
														</div>			
													</div>
												</div>
											</div>
											<div class="tab_content06">
												<div class="planin">
													<div class="leftimg">
														<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/img_boxdt_mini04.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブ ミニ インナーガレージ（ZERO-CUBE MINI +INNER GARAGE）間口2.5間タイプ 3LDK間取り"></p>
													</div>
													<div class="txtbox">
														<dl class="plandl">
															<dt><span class="dtbox ffb">3LDK</span></dt>
															<dt class="ffa">延床面積／98.12㎡(29.67坪)<br>1F床面積／24.01㎡(7.26坪) <br>2F床面積／42.44㎡(12.83坪)<br>3F床面積／31.67㎡(9.58坪)</dt>
														</dl>
														<div class="pricebox">
															<p class="txt ffb">+INNER GARAGE<br>間口2.5間タイプ 本体価格</p>
															<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
														</div>			
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">GARAGE</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-mini/pic_boxdd_mini02.jpg" alt="ガレージ"></p>
													<p class="txt">愛車のメンテナンスにも便利な屋内ガレージ。</p>
												</li>
											</ul>
										</div>
									</div>

									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>
		
			<p class="eventbtn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/hello_<?php echo get_post($wp_query->post->ID)->post_name; ?>" id="mini_link"><span class="ffb">ZERO-CUBE MINI<br><span class="ffc">[ EVENT ] </span>商品説明会</span></a></p>
			</div>
		</div>

</div><!-- .content-area -->

<?php get_footer(); ?>
