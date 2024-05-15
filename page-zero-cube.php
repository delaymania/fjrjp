<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
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
				<dt><div id="gooddesign"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_gooddesignlogo.gif" alt="グッドデザイン賞受賞"></div></dt>
				<dd>
					<p class="logolifelabel"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifelabel_logo.png" alt="ライフレーベル（LIFE LABEL）"></p>
					<h2 class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_keyv01.png" alt="ゼロキューブプラスファン（ZERO-CUBE+FUN）私たちにちょうどいい家。1000万円からはじめる家づくり。モデルハウス見学会開催中。"></h2>
					<p class="logotxt"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_keyv02.png" alt="グッドデザインアワード"></p>
					<p class="txt ffb">ムダを削ぎ落とした家づくりの基本コンセプトとデザイン性が評価され、グッドデザインアワードを受賞しました。</p>
				</dd>
			</dl>
		</div>
		<div class="conceptbox">
			<div class="under_contents cf">
				<div class="txtbox">
					<h3 class="titstylea ffc">CONCEPT</h3>
					<p class="txt ffa">屋根の家や最新機能の家もいいけど<br>どれも複雑だったり、<br>どこか決まったカタチに見えてくる。</p>
					<p class="txt ffa">服を選ぶように、<br>マイホームをもっと<br>スタイルに合わせて選びたい。</p>
					<p class="txtb ffb"><span class="bor"><span class="lartxt">“</span>私たちにちょうどいい家<span class="lartxt">”</span></span></p>
					<p class="txt ffa">シンプルだからこそ<br>どんなライフスタイルにもフィットする。</p>
				</div>
				<div class="youtubebox">
					<div class="youtubein"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/mxE4uOHdfpM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
					<p class="tit ffb">CM動画</p>
					<p class="tittxt ffa">1000万円からはじめる家づくり。(90秒)</p>
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
								<h4 class="tit ffb">凸凹ゼロのデザイン</h4>
								<p class="txt ffa">ムダを削ぎ落とした立方体のフォルム。建物の凸凹をなくすことで、美しい外観と広い室内空間を実現しました。</p>
							</li>
							<li>
								<h4 class="tit ffb">こだわりや楽しみをプラス「+FUN」</h4>
								<p class="txt ffa">1,350万円～の家をベースに、ご予算・ライフスタイルに合わせて必要なものを足していく「+FUN」。家づくりの楽しさが、さらに広がります。</p>
							</li>
							<li>
								<h4 class="tit ffb">ストレスゼロの価格設定</h4>
								<p class="txt ffa">ひとつひとつの価格がわかっている明快なシステムで、予算オーバーの心配もありません。</p>
							</li>
							<li>
								<h4 class="tit ffb">敷地に関する制約もゼロ</h4>
								<p class="txt ffa">キューブスタイルなので、東西南北敷地の向きにかかわらず建設が可能です。</p>
							</li>
						</ul>
					</div>

				</dd>
			</dl>
		</div>
		<div class="planbox">
			<div class="under_contents">
				<h3 class="titstyleb ffc">PLAN</h3>
				<div class="planin">
					<div id="gooddesign02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_gooddesignlogo.gif" alt="グッドデザイン賞受賞"></div>
					<p class="leftimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_plan01.jpg" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブプラスファン（ZERO-CUBE+FUN）シンプルは美しい"></p>
					<p class="bottimg vsp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_plan02.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブプラスファン（ZERO-CUBE+FUN） 3LDK間取り"></p>
					<div class="txtbox">
						<dl class="plandl">
							<dt><span class="dtbox ffb">3LDK</span></dt>
							<dd class="ffa">延床面積／98.53㎡(29.80坪)<br>1F床面積／52.99㎡(16.03坪) <br>2F床面積／45.54㎡(13.77坪)</dd>
						</dl>
						<div class="pricebox">
							<p class="txt ffb">ZERO-CUBE+FUN本体価格</p>
							<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
						</div>
					</div>
				</div>
				<p class="img vpc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_plan02.gif" alt="ライフレーベル（LIFE LABEL） ブランド ゼロキューブプラスファン（ZERO-CUBE+FUN） 3LDK間取り"></p>
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
					<p class="tit"><span class="titin ffa">例：+BOXの場合</span></p>
					<div class="tabbox">
						<table>
							<tr>
								<td class="ffc txta">BASE</td>
								<td rowspan="3" class="ffc ico">+</td>
								<td class="ffc txta">+FUN</td>
								<td rowspan="3" class="ffc ico">=</td>
								<td class="ffc"></td>
							</tr>
							<tr>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_subbox01.png" alt="ゼロキューブ(ZERO-CUBE)"></td>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_subbox02.png" alt="+BOX(プラスボックス)"></td>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_subbox03.png" alt="ZERO-CUBE+FUN+BOX(ゼロキューブプラスボックス)"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="txtbox">
					<p class="txt ffa">それぞれのライフスタイルを受け止め、<br>その夢を家づくりに注ぎ込むというオーダー感覚の歓びをご提案。<br>居住空間を拡大したり、先進装備をプラスしたりと、<br>1,350万円~が基準だから、<br>お客様の負担が大幅に増すことはありません。<br>自由にセレクトして、<br>わが家だけの住み心地をコーディネートしてください。</p>
				</div>
			</div>
			<div class="boxser">
				<h4 class="titstyle ffc">BOX SERIES<span class="ffa">部屋とウッドデッキをプラス！</span></h4>
				<div class="boxserli">
					<ul>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt01.jpg" alt="ZERO-CUBE+BOX(ゼロキューブプラスボックス)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+BOX</h5>
											<p class="tittxt ffb">+BOXの楽しみ方は自由自在</p>
											<p class="txt ffa">家族構成やライフスタイルに合わせてBOXをプラスすれば、マイホームの「あったらいいな」がカタチになります。休日に家族でバーベキューが楽しめるウッドデッキ、客間として、また子どもとのふれあいスペースとして活用できる和室など、スタイルは自由自在。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan01.gif" alt="ZERO-CUBE+BOX(ゼロキューブプラスボックス) 4LDK間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">4LDK</span></span></p>
												<p class="right ffa">延床面積／108.47㎡(32.81坪)<br>1F床面積／62.93㎡(19.04坪)<br>2F床面積／45.54㎡(13.77坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+BOX 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">JAPANESE ROOM ( FREE ROOM )</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd01.jpg" alt="和室"></p>
													<p class="txt">コンパクトながら趣を感じさせる和室。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">WOOD DECK</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd02.jpg" alt="ウッドデッキ"></p>
													<p class="txt">ウッドデッキはリビング、和室のどちらからもで出入り可能。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd03.jpg" alt="バルコニー"></p>
													<p class="txt">開放感あふれるモダンなルーフバルコニー。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt02.jpg" alt="ZERO-CUBE+BOX2(ゼロキューブプラスボックス2)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+BOX<sup>2</sup></h5>
											<p class="tittxt ffb">3LDKが広々5LDKに大変身</p>
											<p class="txt ffa">異なる使い方の2つのBOXを積み重ねて、それぞれを自分流にアレンジできる+FUNです。1階の和室は、寝室や客間、リビングの一部として機能。2階のFREE ROOMは、独立性が高く、寝室はもちろん書斎や書見室などに最適です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan02.gif" alt="ZERO-CUBE+BOX2(ゼロキューブプラスボックス2) 5LDK間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">5LDK</span></span></p>
												<p class="right ffa">延床面積／121.72㎡(36.82坪)<br>1F床面積／62.93㎡(19.04坪)<br>2F床面積／58.79㎡(17.78坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+BOX<sup>2</sup> 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">JAPANESE ROOM ( FREE ROOM )</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd04.jpg" alt="和室"></p>
													<p class="txt">コンパクトながら趣を感じさせる和室。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">WOOD DECK</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd05.jpg" alt="ウッドデッキ"></p>
													<p class="txt">ウッドデッキはリビング、和室のどちらからもで出入り可能。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd06.jpg" alt="バルコニー"></p>
													<p class="txt">開放感あふれるモダンなルーフバルコニー。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">FREE ROOM</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd07.jpg" alt="フリールーム"></p>
													<p class="txt">趣味の部屋としても活用できるファンルーム。</p>
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
				<h4 class="titstyle ffc">SKY BALCONY SERIES<span class="ffa">屋上にバルコニーをプラス！</span></h4>
				<div class="boxserli">
					<ul>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt06.jpg" alt="ZERO-CUBE+SKY BALCONY(ゼロキューブプラススカイバルコニー)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+SKY BALCONY</h5>
											<p class="tittxt ffb">周囲の視線もまったく気にならない。開放感あふれるプライべートゾーン。</p>
											<p class="txt ffa">ワンフロア分の広々バルコニーは、周囲の視線から隔絶された開放感あふれるプライべートゾーン。ふと見上げれば、青空と太陽を近くで感じることができます。子どもの遊び場として、花々や草木を楽しむガーデニングスペースとしてなど、その魅力は無限大です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan06.gif" alt="ZERO-CUBE+SKY BALCONY(ゼロキューブプラススカイバルコニー)3LDK"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">3LDK</span></span></p>
												<p class="right ffa">延床面積／105.15㎡(31.80坪)<br>1F床面積／52.99㎡(16.03坪)<br>2F床面積／48.02㎡(14.52坪)<br>SKY BALCONY建築内／4.14㎡(1.25坪)<br>SKY BALCONY／46.37㎡(14.01坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+SKY BALCONY 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">SKY BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd12.jpg" alt="スカイバルコニー"></p>
													<p class="txt">家族だけの贅沢なくつろぎスペース。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt07.jpg" alt="ZERO-CUBE+BOX SKY BALCONY(ゼロキューブプラスボックススカイバルコニー)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+BOX SKY BALCONY</h5>
											<p class="tittxt ffb">光も風も、家族になる。開放感を欲張るプラン。</p>
											<p class="txt ffa">1階にプラスしたBOXは、多目的に使える和室を。2階には3つの個室とルーフバルコニーをプラン。もちろん、ワンフロア分のスカイバルコニーもプラス。空、光、風をわが家に招く、開放感いっぱいの家です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan07.gif" alt="ZERO-CUBE+BOX SKY BALCONY(ゼロキューブプラスボックススカイバルコニー)4LDK"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">4LDK</span></span></p>
												<p class="right ffa">延床面積／115.09㎡(34.81坪)<br>1F床面積／62.93㎡(19.04坪)<br>2F床面積／48.02㎡(14.52坪)<br>SKY BALCONY建築内／4.14㎡(1.25坪)<br>SKY BALCONY／46.37㎡(14.01坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+BOX SKY BALCONY 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">SKY BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd13.jpg" alt="スカイバルコニー"></p>
													<p class="txt">家族だけの贅沢なくつろぎスペース。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">JAPANESE ROOM ( FREE ROOM )</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd14.jpg" alt="和室"></p>
													<p class="txt">コンパクトながら趣を感じさせる和室。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">WOOD DECK</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd15.jpg" alt="ウッドデッキ"></p>
													<p class="txt">ウッドデッキはリビング、和室のどちらからもで出入り可能。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd16.jpg" alt="バルコニー"></p>
													<p class="txt">開放感あふれるモダンなルーフバルコニー。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt08.jpg" alt="ZERO-CUBE+BOX2 SKY BALCONY(ゼロキューブプラスボック2ススカイバルコニー)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+BOX<sup>2</sup> SKY BALCONY</h5>
											<p class="tittxt ffb">+FUNの究極プラン。スタイリッシュなゆとりの住まい。</p>
											<p class="txt ffa">+BOXの機能性と+SKY BALCONY の開放感がひとつになった「ZERO-CUBE」の完成形のひとつが、+BOX<sup>2</sup> SKY BALCONY。従来のサイズに比べ、BOX部分が追加されているため、さらなる開放感を満喫できます。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan08.gif" alt="ZERO-CUBE+BOX2 SKY BALCONY(ゼロキューブプラスボック2ススカイバルコニー)5LDK間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">5LDK</span></span></p>
												<p class="right ffa">延床面積／128.34㎡(38.82坪)<br>1F床面積／62.93㎡(19.04坪)<br>2F床面積／61.27㎡(18.53坪)<br>SKY BALCONY建築内／4.14㎡(1.25坪)<br>SKY BALCONY／56.31㎡(17.03坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+BOX<sup>2</sup> SKY BALCONY 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">SKY BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd17.jpg" alt="スカイバルコニー"></p>
													<p class="txt">家族だけの贅沢なくつろぎスペース。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">JAPANESE ROOM ( FREE ROOM )</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd18.jpg" alt="和室"></p>
													<p class="txt">コンパクトながら趣を感じさせる和室。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">WOOD DECK</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd19.jpg" alt="ウッドデッキ"></p>
													<p class="txt">ウッドデッキはリビング、和室のどちらからもで出入り可能。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd20.jpg" alt="バルコニー"></p>
													<p class="txt">開放感あふれるモダンなルーフバルコニー。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">FREE ROOM</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd21.jpg" alt="フリールーム"></p>
													<p class="txt">趣味の部屋としても活用できるファンルーム</p>
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

				<h4 class="titstyle ffc">GARAGE &amp; STOCKS SERIES<span class="ffa">万能ガレージや収納をプラス！</span></h4>
				<div class="boxserli">
					<ul>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt03.jpg" alt="ZERO-CUBE+GARAGE(ゼロキューブプラスガレージ)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+GARAGE</h5>
											<p class="tittxt ffb">ガレージとわが家を一体化し、暮らしをカスタマイズする。</p>
											<p class="txt ffa">愛車をゆとりある空間で保管できる屋内ガレージは、クルマのコンディションを保つと共にセキュリティ面でも安心。２階に新しく出現したのが、ガレージ屋上のワイドなバルコニー。各居室の収納性も高く、大型品はガレージに収納できるため、すっきり美しい暮らしが始まります。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan03.gif" alt="ZERO-CUBE+GARAGE(ゼロキューブプラスガレージ)3LDK間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">3LDK</span></span></p>
												<p class="right ffa">延床面積／121.72㎡(36.82坪)<br>1F床面積／76.18㎡(23.04坪)<br>2F床面積／45.54㎡(13.78坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+GARAGE 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">GARAGE</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd08.jpg" alt="ガレージ"></p>
													<p class="txt">クルマ好きのご主人がくつろげる、ラウンジとしても居住性充分。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd09.jpg" alt="バルコニー"></p>
													<p class="txt">開放感あふれるモダンなルーフバルコニー。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt04.jpg" alt="ZERO-CUBE+INNER GARAGE(ゼロキューブプラスインナーガレージ)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+INNER GARAGE</h5>
											<p class="tittxt ffb">ガレージを1つのリビングと考えると、暮らしはもっと楽しくなる。</p>
											<p class="txt ffa">1階にインナーガレージを設け、普段のリビングスペースを見晴らしのよい2階に移した3階建ての住まい。広いガレージは愛車だけでなく、自慢の自転車やサーフボードなどをディスプレイして、ショールームみたいにドレスアップするのも素敵。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan04.gif" alt="ZERO-CUBE+INNER GARAGE(ゼロキューブプラスインナーガレージ)4LDK間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">4LDK</span></span></p>
												<p class="right ffa">延床面積／151.52㎡(45.81坪)<br>1F床面積／52.99㎡(16.02坪)<br>2F床面積／52.99㎡(16.02坪)<br>3F床面積／45.54㎡(13.77坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+INNER GARAGE 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">INNER GARAGE</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd10.jpg" alt="インナーガレージ"></p>
													<p class="txt">愛車のメンテナンスにも便利な屋内ガレージ。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt05.jpg" alt="ZERO-CUBE+STORAGE(ゼロキューブプラスストレージ)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+STORAGE</h5>
											<p class="tittxt ffb">美しい暮らしの裏技、大収納空間。</p>
											<p class="txt ffa">収納力を高めるために「中2階」を設けた新発想の住まいです。家事に配慮された1階は、機能性と団らんを重視した設計。中2階～2階には、独立性の高い主寝室と大収納空間をプランし、明るい子供室2部屋を設けた構成となり、住まい全体の高さもアップ。適材適所の収納も充実しており、広々暮らす技を満喫した家です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan05.gif" alt="ZERO-CUBE+STORAGE(ゼロキューブプラスストレージ)3SLDK間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">3SLDK</span></span></p>
												<p class="right ffa">延床面積／98.53㎡(29.80坪)<br>1F床面積／52.99㎡(16.03坪)<br>2F床面積／45.54㎡(13.77坪)<br>生活有効床面積／119.43㎡(36.13坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+STORAGE 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01 mt0">
													<p class="ffc tit">STORAGE</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd11.jpg" alt="ストレージ"></p>
													<p class="txt">システム家具などを使い、自在に整理できる大収納。</p>
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
				<h4 class="titstyle ffc">ROOFTOP SERIES<span class="ffa">屋上にもっとこだわりをプラス！</span></h4>
				<div class="boxserli">
					<ul>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt09.jpg" alt="ZERO-CUBE+PENTHOUSE(ゼロキューブプラスペントハウス)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+PENTHOUSE</h5>
											<p class="tittxt ffb">自分のスタイルで楽しむ、こだわりのペントハウス。</p>
											<p class="txt ffa">3階のバルコニーにつながるPENTHOUSEは、趣味やこだわりを詰め込んだ空間として楽しみたいところ。ギターやピアノなどの練習部屋として、写真や陶芸などの趣味の空間として、あなただけの、とっておきの世界を演出します。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan09.gif" alt="ZERO-CUBE+PENTHOUSE(ゼロキューブプラスペントハウス)4LDK"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">4LDK</span></span></p>
												<p class="right ffa">延床面積／118.40㎡(35.81坪)<br>1F床面積／52.99㎡(16.03坪)<br>2F床面積／48.02㎡(14.52坪)<br>PENTHOUSE建物内／17.39㎡(5.26坪)<br>バルコニー／33.12㎡(10.01坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+PENTHOUSE 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">PENTHOUSE</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd22.jpg" alt="ペントハウス"></p>
													<p class="txt">ペントハウスの楽しみ方は自由自在。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">SKY BALCONY</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd23.jpg" alt="スカイバルコニー"></p>
													<p class="txt">ペントハウスとつながるバルコニーは、青空を独り占めできるスカイバルコニー。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt10.jpg" alt="ZERO-CUBE+LOHAS(ゼロキューブプラスロハス)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+LOHAS</h5>
											<p class="tittxt ffb">スロウな時間を楽しむ、プライベートな自然界を屋上に。</p>
											<p class="txt ffa">開放感いっぱいのスカイバルコニーは、最大限に満喫しないともったいない。そんな気持ちで創造したのが、LOHASです。ナチュラルで肌合いもやさしいウッドデッキ、ごろんと寝ころびたくなる芝生、そして「ZERO-CUBE」と調和した花壇ボックスなどをトータルコーディネート。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<div class="lohasPlan cf">
												<dl><dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan10_01.gif" alt="ZERO-CUBE+LOHAS(ゼロキューブプラスロハス) ペントハウスの間取り"></dt><dd><p class="tl">PENTHOUSE <br>本体価格</p><p class="pr"></p></dd></dl>
												<dl><dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan10_02.gif" alt="ZERO-CUBE+LOHAS(ゼロキューブプラスロハス) スカイバルコニーの間取り"></dt><dd><p class="tl">SKY BALCONY <br>本体価格</p><p class="pr">お問い合わせください</p></dd></dl>
												<dl><dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan10_03.gif" alt="ZERO-CUBE+LOHAS(ゼロキューブプラスロハス) +BOX2 SKY BALCONY(プラスボックス2 スカイバルコニー)の間取り"></dt><dd><p class="tl">BOX<sup>2</sup> SKY BALCONY <br>本体価格</p><p class="pr">お問い合わせください</p></dd></dl>
											</div>
										</div>
										<div class="txtbox">
											<div class="pribox">
												<p class="name ffb">+LOHAS 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
											<p class="note">※ SKY BALCONYもしくはPENTHOUSEの設定が別途必要です。</p>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01 mt0">
													<p class="ffc tit">LOHAS</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd24.jpg" alt="ロハス"></p>
													<p class="txt mt0">自然と共に育ち、ゲストにも自慢したくなる場所にグレードアップ。</p>
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
				<h4 class="titstyle ffc">OTHER SERIES<span class="ffa">未来設計と機能性をプラス！</span></h4>
				<div class="boxserli">
					<ul>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt11.jpg" alt="ZERO-CUBE+ECO(ゼロキューブプラスエコ)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+ECO</h5>
											<p class="tittxt ffb">太陽の恵みで光熱費を抑えるECO。先進の暮らし方を象徴するツールです。</p>
											<p class="txt ffa">太陽光発電ならCO2を排出せず、光熱費も大幅に削減することができます。しかも選んだのは、先進性と経済性で注目を集める太陽光発電システム「エコノルーツ」。屋根を最大限に活用できる新技術、独自のテクノロジーを駆使した新素材の採用などにより、発電電力量を大幅に向上させました。安全性や強度においてもひとクラス上。環境配慮が評価される時代を先導し、一生涯必要な光熱費もグンと抑えられる賢い選択です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffa">長州産業 太陽電池モジュールGシリーズ［プレミアムブルー］タイプ</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan11.jpg" alt="ZERO-CUBE+ECO(ゼロキューブプラスエコ)長州産業 太陽電池モジュールGシリーズ［プレミアムブルー］タイプ"></p>
										</div>
										<div class="txtbox">
											<div class="pribox">
												<p class="name ffb"><span class="leftinfo">+ECO 本体価格</span></p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01">
													<p class="ffc tit">SOLOR POWER</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd25.jpg" alt="長州産業 太陽電池モジュールGシリーズ［プレミアムブルー］タイプ"></p>
													<p class="txt">従来型では活用できなかった紫外線（UV）も波長変換で可視光にすれば発電に行かせます。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">ECO CUTE</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd26.jpg" alt="エコキュート"></p>
													<p class="txt">Panasonic 370Lエコオートタイプ。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt12.gif" alt="ZERO-CUBE+ECO AIR(ゼロキューブプラスエコエア)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+ECO AIR</h5>
											<p class="tittxt ffb">冬温かく、夏涼しい省エネルギー快適換気</p>
											<p class="txt ffa">＋FUNで提案するのは最も効率が良いとされる第1種換気で、ファンにより適切に調整しながら、新鮮な外気を取り入れ汚れた空気を排出するシステムです。花粉を99%除去する花粉フィルターを採用するなど先進の技術を搭載。日本の気候に最適な全熱交換型換気により、光熱費を抑え経済性にも優れています。良好な換気は、家族の健康を守ると共に、住まいそのものを長持ちさせる鍵です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01 mt0">
													<p class="ffa tit">夏の涼しい床下を利用</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd27.jpg" alt="外気30℃ 地中熱24℃"></p>
													<p class="litxt ffa">冷房時は冷えた排気ダクトで床下を冷やし、かつ熱交換器で排気を冷やして床下に給気。</p>
													<p class="litxt ffa">熱交換器で外給気の湿気を回収して屋外に排気。除湿された外給気が床下に給気。</p>
													<p class="litxt ffa">地熱と排気熱で冷やされたベタ基礎コンクリートの効果で床下温度は安定し、健康で快適な室内環境。</p>
												</li>
												<li class="hlg01 mt0">
													<p class="ffa tit">冬の暖かい床下</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd28.jpg" alt="外気0℃ 地中熱14℃"></p>
													<p class="litxt ffa">暖房時は、温かい排気ダクトで床下を暖め、かつ熱交換器で排気熱を回収して床下に給気。</p>
													<p class="litxt ffa">熱交換器で排気から湿気を回収し、これで給気を加湿する。冬の過乾燥防止に有効。</p>
													<p class="litxt ffa">地中熱と排気熱で暖められるベタ基礎コンクリートの効果で、床下温度は安定し、健康で快適な室内環境です。</p>
												</li>
												<li class="hlg01 mt0">
													<p class="ffa tit">床下設置</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd29.jpg" alt="床下設置 花粉除去率99.8％"></p>
													<p class="litxt ffa">花粉を99.8％除去する高性能フィルターを採用。</p>
													<p class="litxt ffa">室内空気汚染濃度が高い床面から排気することで汚染物質を効率よく除去します。</p>
													<p class="litxt ffa">排気ファン本体を床下に設置するので、ファンからの風切音が気になりません。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<!--<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt13.jpg" alt="ZERO-CUBE+ZERO-CUBE W(ゼロキューブプラスゼロキューブダブリュー)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+ZERO-CUBE W</h5>
											<p class="tittxt ffb">ZERO-CUBEが考えた、スープが冷めない距離。</p>
											<p class="txt ffa">同じ敷地内に、二世帯が「一緒に離れて」暮らすというご提案。左右対称のレイアウトなので、ご両親の様子を見守るのにも安心です。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxplan12.gif" alt="ZERO-CUBE+ZERO-CUBE W(ゼロキューブプラスゼロキューブダブリュー)3LDK×2間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">3LDK<br>X2</span></span></p>
												<p class="right ffa">延床面積／198.74㎡(60.11坪)<br>1F床面積／106.82㎡(32.31坪)<br>2F床面積／91.92㎡(27.80坪)</p>
											</div>
											<div class="pribox">
												<p class="name ffb">+ZERO-CUBE W PLAN 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>-->
						<li class="mutenka">
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt14.jpg" alt="ZERO-CUBE+無添加(ゼロキューブプラスムテンカ)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+無添加</h5>
											<p class="tittxt ffb">天然素材や自然素材が健やかな生活環境をつくっている。家族みんなの健康を考えて、無添加の生活、始めました。</p>
											<p class="txt ffa">外壁、アクセントウォール、フローリング。天然素材や自然素材を使用して、家族みんなの健康を考えた生活環境を整えます。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxb">
										<div class="picli">
											<ul class="cf">
												<li class="hlg01 mt0">
													<p class="ffc tit hlg02">外壁（チャネルオリジナル）</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd30.jpg" alt="外壁（チャネルオリジナル）防腐・防蟻効果"></p>
													<p class="txt lh15">天然木に防火機能を加え薬剤処理をしていないウェスタンレッドシダーを使用。「本物の木」の贅沢な外観です。</p>
												</li>
												<li class="hlg01 mt0">
													<p class="ffc tit hlg02 fstit">アクセントウォール/エコカラット(LIXIL)</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd31.jpg" alt="エコカラット"></p>
													<p class="txt lh15">「エコカラット」は、粘土鉱物などの微細な孔を持つ原料を焼成した内装壁材。孔は、湿気を吸ったり吐いたりするのに適した大きさに設計されていて、室内の湿度が高くなると湿気を吸収して湿度を下げ、逆に湿度が低くなると湿気を放出して潤いを与えます。</p>
												</li>
												<li class="hlg01 mt0">
													<p class="ffc tit hlg02">無垢フローリング</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd32.jpg" alt="天然無垢材のフローリング"></p>
													<p class="txt lh15">天然無垢材のフローリングは、室内の湿気が多いときは余分な湿気を吸収しサラッと快適。冬は水分を排出するなど調湿機能に優れています。シックハウス症候群の心配もなく、自然素材が持つ温かみがほっとする安らぎを生み出します。</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="btn vsp">閉じる</p>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="toggle">
								<dt>
									<div class="cf">
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/img_boxdt15.jpg" alt="ZERO-CUBE+KIDS(ゼロキューブプラスキッズ)"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+KIDS</h5>
											<p class="tittxt ffb">お子様を夢中にさせる絵本の世界を、わが家に。</p>
											<p class="txt ffa">コンパクトデザインのZERO-CUBEに、子どもたちの大きな夢をコーディネートしませんか。ヨーロッパのインテリア雑誌で見かける、自由にお絵描きできる黒板塗装、遊び心いっぱいのデスク、お菓子の家のような秘密基地など愉快なアイテムが勢揃い！子ども部屋にワクワクするシーンがあれば、好奇心や想像力はもちろん、自立心もきっと育ちます。カラフルな色彩は、絵本のように美しく、夢中にさせる工夫もいっぱいです。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd class="mt0">
									<div class="boxa cf">
										<div class="txtbox">
											<p class="pritxt">黒板塗装(10㎡の範囲)／かくれ家／<br>コロロデスク(2コ)／ハンモック(置き型タイプ) </p>
											<div class="pribox">
												<p class="name ffb">+KIDS 本体価格</p>
												<p class="prinum ffc"><span class="ffa">お問い合わせください</span></p>
											</div>
										</div>
									</div>
									<div class="boxb">
										<div class="picli">
											<ul class="cf kids">
												<li class="hlg01">
													<p class="ffc tit">黒板塗装</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd33.jpg" alt="リビング 黒板塗装"></p>
													<p class="txt lh15">広々とした壁そのものを黒板に変える新発想の塗装です。チョークでお絵描きしたり、時には算数の問題を解いたり。「落書きOKの壁」は、子どもたちにとって夢の存在。家族もメッセージを書くなど、楽しみ方は自由自在です。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">かくれ家</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd34.jpg" alt="子ども部屋 かくれ家"></p>
													<p class="txt lh15">お菓子の家をテーマにしたチョコレート色の秘密基地は、きっとお子様の自慢になります。小屋の中で静かに絵本を読んだり、想像力を高める「ごっこ遊び」をサポートしたりと、遊びの幅が無限に広がります。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">コロロデスク</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd35.jpg" alt="子ども部屋 コロロデスク"></p>
													<p class="txt lh15">小窓を開けたら開放的に、閉じたら自分だけの世界に没頭できるプライベートスペースに早変わり。自由にアレンジでき、想像力の翼を広げるアイデア・デスクとして人気です。スツールの中は便利な収納スペースになっています。</p>
												</li>
												<li class="hlg01">
													<p class="ffc tit">ハンモック</p>
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/pic_boxdd36.jpg" alt="子ども部屋 ハンモック"></p>
													<p class="txt lh15">ゆらり揺れて心地いい眠りを楽しむ、ぬいぐるみなどを飾る、ボールを入れて遊ぶなど、多彩な使い方ができるハンモック。お部屋をリゾートのように開放的に演出し、楽しい雰囲気づくりもサポートします。</p>
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
			<p class="eventbtn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/hello_<?php echo get_post($wp_query->post->ID)->post_name; ?>" id="zerocube_link"><span class="ffb">ZERO-CUBE+FUN<br><span class="ffc">[ EVENT ] </span>モデルハウス見学会</span></a></p>
		</div>
		
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
