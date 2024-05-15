<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main zero-cube-Kai" role="main">
		
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
					<h2 class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_keyv_kai.png" alt="ゼロキューブ 回（ZERO-CUBE KAI）"></h2>
					<p class="logotxt">天空から光ふりそそぐ家。</p>
					<p class="txt ffb">伝統的に自然を愛でる日本人にとって、光や風を積極的に取り込むことが快適な暮らしの条件。しかしながら、土地の形状や狭さ、近隣住宅との見合いなど様々な問題に直面し、充分な採光や通風が得られないのが現状です。私たちは、心地よさを五感で感じる理想の住まいづくりを追求し、住まいの中心に光庭という「自然」設ける空間デザインを提案します。</p>
				</dd>
			</dl>
		</div>
		<div class="conceptbox">
			<div class="under_contents cf">
				<div class="txtbox">
					<h3 class="titstylea ffc concept">CONCEPT</h3>
					<p class="txtb ffb"><span class="bor"><span class="lartxt">“</span>ふりそそぐ陽光、通り抜ける風<span class="lartxt">”</span></span></p>
					<p class="txt ffa">夕暮れの茜色やほのかな月明かり。<br>やわらかな春の風。<br>そんな自然との豊かなふれあいを自宅にいながらにして楽しめるのが、<br>キューブ形の建物のまん中に庭をレイアウトした「ZERO-CUBE KAI」。</p>
					<p class="txt ffa">光や風がすべての部屋を穏やかに通り抜けるように空間を設計。<br>キッチンから、廊下から、<br>そして湯船に浸かりながら空を見上げられる、<br>完全プライベートな庭付きの住宅です。</p>
				</div>
			</div>
		</div>
		<div class="meritbox p01">
			<h3 class="titstylea ffc vsp">POINT<span>01</span></h3>
			<dl>
				<dt>
					<h3 class="titstylea ffc vpc">POINT<span>01</span></h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">ふり注ぐ陽光、通り抜ける風</h4>
								<p class="txt ffa">KAIの形状をひと言で表すとすれば、建物のまん中を光のタワーが貫くイメージ。夏の日差しはもちろん、冬の穏やかな光も光庭の白い内壁に反射して、住まいのすみずみに届くよう設計されています。また家の中に風の通り道をつくり、新鮮な外気を取り込む24時間換気システムを採用していますので、いつも快適です。</p>
							</li>
						</ul>
					</div>
				</dt>
				<dd></dd>
			</dl>
		</div>
		<div class="meritbox p02">
			<h3 class="titstylea ffc vsp">POINT<span>02</span></h3>
			<dl>
				<dt> </dt>
				<dd>
					<h3 class="titstylea ffc vpc">POINT<span>02</span></h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">高いデザイン性</h4>
								<p class="txt ffa">KAIはシンプル&amp;スタイリッシュ。ムダな凸凹をそぎ落し、洗練された品位ある造形美を求めた美しい住まいです。でも、単に美しいだけではありません。建築デザイナーの豊な創造性と独自の施工力がコラボした、高いデザイン性と快適機能。住み心地のよさに裏打ちされた美しさが、暮らすほどに満足感を深めてくれます。</p>
							</li>
						</ul>
					</div>
				</dd>
			</dl>
		</div>
		<div class="meritbox p03">
			<h3 class="titstylea ffc vsp">POINT<span>03</span></h3>
			<dl>
				<dt>
					<h3 class="titstylea ffc vpc">POINT<span>03</span></h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">安心のプライバシー&amp;防犯性</h4>
								<p class="txt ffa">庭は建物の外にあるもの－そんな既成概念を破ったKAIは、四角いフォルムに小さな窓が整然と並ぶシンプルな外観。外からの視線や侵入をしっかりガードし、出かけるときも窓に施錠する必要はなく、戸締りは玄関ドアのキーひとつという便利さです。</p>
							</li>
						</ul>
					</div>
				</dt>
				<dd></dd>
			</dl>
		</div>
		<div class="meritbox p04">
			<h3 class="titstylea ffc vsp">POINT<span>04</span></h3>
			<dl>
				<dt> </dt>
				<dd>
					<h3 class="titstylea ffc vpc">POINT<span>04</span></h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">フレキシブルな回遊動線</h4>
								<p class="txt ffa">1階は光庭を中心にパブリック、2階は吹き抜けを囲んでプライベートな居室をまとめ、フレキシブルな導線を実現。視線も動作も行き止まることのない回遊する間取りと、仕切りの少ないオープンな設計が、空間に広がりと快適性を生み出しています。</p>
							</li>
						</ul>
					</div>
				</dd>
			</dl>
		</div>
		<div class="meritbox p05">
			<h3 class="titstylea ffc vsp">POINT<span>05</span></h3>
			<dl>
				<dt>
					<h3 class="titstylea ffc vpc">POINT<span>05</span></h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">あふれる開放感</h4>
								<p class="txt ffa">フラットな面で構成されたフォルムのもう一つの利点は、空間にデッドスペースがほとんどできないこと。そのため大容量のウォークインクローゼットをはじめ、各室の収納も充実。また2階には、住む方の個性で多目的に使えるフリースペースや広いバルコニーを設置。4LDKの常識を超える大らかな暮らしが始まります。</p>
							</li>
						</ul>
					</div>
				</dt>
				<dd></dd>
			</dl>
		</div>
		<div class="meritbox p06">
			<h3 class="titstylea ffc vsp">POINT<span>06</span></h3>
			<dl>
				<dt> </dt>
				<dd>
					<h3 class="titstylea ffc vpc">POINT<span>06</span></h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">敷地の有効活用</h4>
								<p class="txt ffa">KAIは限られた敷地を最大限有効に活用できます。また光庭を中心に居室空間をコーディネートできますので、”道路と敷地の関係”に苦労することがありません。道路の向きに左右されず、快適な住まいづくりが実現します。</p>
							</li>
						</ul>
					</div>
				</dd>
			</dl>
		</div>
		<div class="meritbox p07">
			<h3 class="titstylea ffc vsp">POINT<span>07</span></h3>
			<dl>
				<dt>
					<h3 class="titstylea ffc vpc">POINT<span>07</span></h3>
					<div class="meritli">
						<ul>
							<li>
								<h4 class="tit ffb">家族の気配を感じる間取り</h4>
								<p class="txt ffa">吹き抜けによって1階と2階が一体化した、のびやかな空間は開放感いっぱい。2階にいる子供たちの気配を感じながら、安心して家事ができます。光庭は居室と同じ高さに天然木のデッキ材を張り詰めれば、各部屋からの出入りもスムーズ。サッシを開放すれば、内と外が一体となった広々とした居室空間が出現します。</p>
							</li>
						</ul>
					</div>
				</dt>
				<dd></dd>
			</dl>
		</div>
		
		<div class="planbox">
			<div class="under_contents">
				<h3 class="titstyleb ffc">PLAN</h3>
				<div class="boxser">
					<div class="boxserli">
						<ul>
							<li>
								<dl class="toggle act1">
									<dt>
										<div class="cf">
											<div class="txtbox">
												<h4 class="tit ffc">ACT1</h4>
											</div>
										</div>
									</dt>
									<dd>
										<div class="conceptbox">
											<div class="txtbox">
												<p class="txtb ffb"><span class="bor"><span class="lartxt">“</span>シャープなラインで、洗練された個性を描く家。<span class="lartxt">”</span></span></p>
												<p class="txt ffa">天空が開放された光庭のおかげで、充分な光と風を<br>享受できるため、こんなにスマートなスリット窓が生まれました。<br>個人住宅としてのプライバシーを確保しながら、<br>外観からは想像できない採光・通風を実現する家。<br>昼はスタイリッシュな表情が際立ち、<br>夜は光のラインがひときわ美しい佇まいに変わります。</p>
											</div>
										</div>
										<div class="planin">
											<p class="leftimg mainpic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact1.jpg" alt="ゼロキューブ 回 アクト1（ZERO-CUBE KAI ACT1）外観"></p>
											<div class="txtbox">
												<dl class="plandl">
													<dt><span class="dtbox ffb">2LDK</span></dt>
													<dt class="ffa">延床面積／81.15㎡(24.54坪)<br>1F床面積／81.15㎡(24.54坪) </dt>
												</dl>
												<div class="pricebox">
													<p class="txt ffb">ZERO-CUBE KAI ACT1本体価格</p>
													<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
												</div>
											</div>
										</div>
										<div class="planin last">
											<p class="leftimg img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact1.gif" alt="ゼロキューブ 回 アクト1（ZERO-CUBE KAI ACT1）2LDK間取り"></p>
											<div class="txtbox"><div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/pic_kaiact1.jpg" alt="ゼロキューブ 回 アクト1（ZERO-CUBE KAI ACT1）リビング"><p class="txtplan">お洒落なスリット窓から、光庭から、自然の恵みが訪れて暮らしを祝福するスタイル。機能的でシンプル、そして家族の気配を常に感じられる平屋は、生活動線も、絆を育む会話も、ストレスフリーにつながるでしょう。</p></div></div>
										</div>
										<p class="btn vsp">閉じる</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl class="toggle act2">
									<dt>
										<div class="cf">
											<div class="txtbox">
												<h4 class="tit ffc">ACT2</h4>
											</div>
										</div>
									</dt>
									<dd>
										<div class="conceptbox">
											<div class="txtbox">
												<p class="txtb ffb"><span class="bor"><span class="lartxt">“</span>小さな窓が、リズムを奏でる家。<span class="lartxt">”</span></span></p>
												<p class="txt ffa">天空から光や風を取り込む住まいだから、 <br>こんなにお洒落な小窓が実現しました。 <br>昼は洗練された表情で佇み、<br>夜は光のオブジェのように美しい住まい。 <br>住まう方のセンスとともに24 時間輝き続けます。</p>
											</div>
										</div>
										<div class="planin">
											<p class="leftimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact2.jpg" alt="ゼロキューブ 回 アクト2（ZERO-CUBE KAI ACT2）外観"></p>
											<p class="bottimg vsp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact2.gif" alt="ゼロキューブ 回 アクト2（ZERO-CUBE KAI ACT2）4LDK間取り"></p>
											<div class="txtbox">
												<dl class="plandl">
													<dt><span class="dtbox ffb">4LDK</span></dt>
													<dt class="ffa">延床面積／110.86㎡(33.53坪)<br>1F床面積／59.62㎡(18.03坪) <br>2F床面積／51.24㎡(15.50坪) </dt>
												</dl>
												<div class="pricebox">
													<p class="txt ffb">ZERO-CUBE KAI ACT2本体価格</p>
													<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
												</div>
											</div>
										</div>
										<p class="img vpc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact2.gif" alt="ゼロキューブ 回 アクト2（ZERO-CUBE KAI ACT2）4LDK間取り"></p>
										<p class="btn vsp">閉じる</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl class="toggle act2custom">
									<dt>
										<div class="cf">
											<div class="txtbox">
												<h4 class="tit ffc">ACT2 CUSTOM</h4>
											</div>
										</div>
									</dt>
									<dd>
										<div class="conceptbox">
											<div class="txtbox">
												<p class="txtb ffb"><span class="bor"><span class="lartxt">“</span>二面は閉じる、二面は開く。この新発想で、住まいの快適性能がさらにアップ。<span class="lartxt">”</span></span></p>
												<p class="txt ffa">KAIは、キューブ形の建物のまん中に光庭をレイアウトしたコートハウス。<br>そのスタイリッシュな造形美と先進の設計思想はそのままに、<br>さらに進化をとげたカスタムバージョン。<br>進化のポイントは、住まいの”二面を閉じ二面を開く”という新たな発想。<br>リビングや和室、2Fの居室に大きな窓を設けることにより、さらに明るく開放感がアップ。<br>外から内からふり注ぐ陽光や風通しの良さに加え、<br>窓からの眺めも楽しみたいというご要望にお応えしました。 <br>また光庭もグンとワイドになって、植栽をライトアップ。<br>四季折々の暮らしを鮮やかに彩ることでしょう。</p>
											</div>
										</div>
										<div class="planin">
											<p class="leftimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact2c.jpg" alt="ゼロキューブ 回 アクト2カスタム（ZERO-CUBE KAI ACT2 CUSTOM）外観"></p>
											<p class="bottimg vsp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact2c.gif" alt="ゼロキューブ 回 アクト2カスタム（ZERO-CUBE KAI ACT2 CUSTOM）4LDK間取り"></p>
											<div class="txtbox">
												<dl class="plandl">
													<dt><span class="dtbox ffb">4LDK</span></dt>
													<dt class="ffa">延床面積／109.30㎡(33.06坪)<br>1F床面積／57.13㎡(17.28坪)<br>2F床面積／52.17㎡(15.78坪) </dt>
												</dl>
												<div class="pricebox">
													<p class="txt ffb">ZERO-CUBE KAI ACT2 CUSTOM本体価格</p>
													<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
												</div>
											</div>
										</div>
										<p class="img vpc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_plan_kaiact2c.gif" alt="ゼロキューブ 回 アクト2カスタム（ZERO-CUBE KAI ACT2 CUSTOM）4LDK間取り"></p>
										<p class="btn vsp">閉じる</p>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
			</div><!-- under_contents -->
			<div class="owv_l">
				<div class="tl"><h3><span>OWNER’S VOICE</span>－オーナー様の声－</h3></div>
				<div class="photo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no07"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-kai/img_voice_kai.jpg" alt="施工事例 千葉県N様 インタビュー ZERO-CUBE KAI(ゼロキューブ回)"></a></div>
				<div class="title"><span>家は癒しの空間であり、夢を叶えてくれる場所</span></div>
				<div class="num"><span>#07</span>千葉県 N様 ZERO-CUBE KAI</div>
				<div class="link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no07">記事を読む</a></div>
			</div>
			<div class="under_contents">
				<p class="eventbtn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/hello_<?php echo get_post($wp_query->post->ID)->post_name; ?>" id="kai_link"><span class="ffb">ZERO-CUBE KAI<br><span class="ffc">[ EVENT ] </span>商品説明会</span></a></p>
			</div><!-- under_contents -->
		</div>

</div><!-- .content-area -->

<?php get_footer(); ?>
