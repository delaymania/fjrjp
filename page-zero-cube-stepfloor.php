<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main zero-cube-Stepfloor" role="main">
		
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
					<h2 class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_keyv_stepfloor.png" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）"></h2>
					<p class="logotxt">研ぎ澄まされた都市型モダン。</p>
					<p class="txt ffb">面で構成されたシンプルな外観は、敷地を有効活用できると共に、どこから見てもシャープでスタイリッシュな風合いを実現しています。「グッドデザイン賞」を受賞した人気のZERO-CUBEシリーズとして、素材の良さを活かした無駄のないフォルムを追求。街に軽快なリズムが生まれます。</p>
				</dd>
			</dl>
		</div>
		<div class="conceptbox">
			<div class="under_contents cf">
				<div class="txtbox">
					<h3 class="titstylea ffc concept">CONCEPT</h3>
					<p class="txtb ffb"><span class="bor"><span class="lartxt">“</span>風景にリズムが生まれました<span class="lartxt">”</span></span></p>
					<p class="txt ffa">外観はシンプル。居住空間は広く明るくモダン。</p>
					<p class="txt ffa">ZERO-CUBEの良さを縦に、横に、<br>ワイドに広げたスキップフロアの家を作りました。<br>お届けするのは、4つのフロア、6つの空間、<br>そして自由自在な暮らし方。</p>
					<p class="txt ffa">外と内、光と風、家族のふれあい。<br>さまざまな歓びが交差しながら、<br>暮らしそのものが風景に変わる家です。</p>
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
								<h4 class="tit ffb">光と風と心が集う2階リビング。</h4>
								<p class="txt ffa">ウッドバルコニーと連動した2階リビングは、ゲストも驚くほどの開放感と清々しい印象を醸し出します。天空からまっすぐ光が届き、季節の風を肌で感じる心地良さです。白を基調にしたシンプルな空間だからこそ、木の温もりを感じるアクセントが新鮮。会話や挨拶のシーンを演出するリビング階段が、家族の絆を育み、いつまでも記憶に残るふれあいをお届けします。</p>
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
								<h4 class="tit ffb">3STEP ステップが楽しい、広々が嬉しい。</h4>
								<p class="txt ffa">ひとつの段差で、空間の可能性は広がります。空間が連動することで、人と人はつながることができます。ステップフロアは、そのふたつの発想をコラボレーションした家。床の段差を階ごとにずらすことで空間のゆとりだけではなく、目線や動線も大きく変わります。外部や家族との一体感、そして段差がもたらす独立性など、楽しくて嬉しいメリットがいっぱいです。</p>
							</li>
							<li><div class="drawing"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_meritbox_stepfloor01.png" alt="ステップフロア それは、小さく建てて、大きく住まう技。"></div></li>
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
								<h4 class="tit ffb">フロアで仕切ると、違う風景が見えてくる。</h4>
								<p class="txt ffa">外とつながる、人とつながる、視界が変わる。素敵な日常ヘステップアップ。</p>
							</li>
						</ul>
						<div class="boxSub">
							<h5 class="ffc">OUTDOOR SPACE</h5>
							<div class="in cf"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_meritbox_stepfloor02.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）アウトドアスペース"><p>玄関とは別に、遊び心が出入りする空間があります。シューズインで外部から直接アクセスできるアウドアスペース。こだわりの自転車やバイクを持ち込んだり、D.I.Yに専念したり。贅沢に趣味を満喫できます。</p></div>
						</div>
						<div class="boxSub">
							<h5 class="ffc">KITCHEN</h5>
							<div class="in cf"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_meritbox_stepfloor03.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）キッチン"><p>ダイニングと連動しながら、リビング全体を見渡すことができるステップアップ・キッチンです。お子様を見守りやすく、お料理にも専念できるイメージ。段差があるからこそ、格別な一体感を感じられることでしょう。</p></div>
						</div>
						<div class="boxSub">
							<h5 class="ffc">ENTRANCE</h5>
							<div class="in cf"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_meritbox_stepfloor04.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）エントランス"><p>シンプルでゆとりある玄関ホールは、住まいの風格を物語り、ゲストをやさしく迎える佇まいを追求しました。アウトドアスペースへ、階段へと、スムーズに行き来できる使い勝手の良さも魅力です。</p></div>
						</div>
					</div>
				</dt>
				<dd></dd>
			</dl>
		</div>

		<div class="planbox">
			<div class="under_contents">
				<h3 class="titstyleb ffc">PLAN</h3>
				<div class="planin">
					<p class="leftimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_plan_stepfloor01.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）外観"></p>
					<p class="bottimg vsp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_plan_stepfloor02.gif" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）5LDK間取り"></p>
					<div class="txtbox">
						<dl class="plandl">
							<dt><span class="dtbox ffb">5LDK</span></dt>
							<dd class="ffa">延床面積／105.98㎡(32.06坪)<br>1F床面積／52.99㎡(16.03坪) <br>2F床面積／52.99㎡(16.03坪) </dd>
						</dl>
						<div class="pricebox">
							<p class="txt ffb">ZERO-CUBE STEPFLOOR本体価格</p>
							<p class="pricein ffc"><span class="priin ffa">お問い合わせください</span></p>
						</div>
					</div>
				</div>
				<p class="img vpc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_plan_stepfloor02.gif" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR） 5LDK間取り"></p>
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
								<td class="ffc txta fun">+FUN</td>
								<td rowspan="3" class="ffc ico">=</td>
								<td class="ffc"></td>
							</tr>
							<tr>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_subbox_stepfloor01.png" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）"></td>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_subbox_stepfloor02.png" alt="+BOX(プラスボックス)"></td>
								<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_subbox_stepfloor03.png" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）+BOX"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="txtbox">
					<p class="txt ffa">それぞれのライフスタイルを受け止め、<br>その夢を家づくりに注ぎ込むというオーダー感覚の歓びをご提案。<br>居住空間を拡大したり、先進装備をプラスしたりと、<br>1,640万円～が基準だから、<br>お客様の負担が大幅に増すことはありません。<br>自由にセレクトして、<br>わが家だけの住み心地をコーディネートしてください。</p>
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
										<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_boxdt_stepfloor01.jpg" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）+BOX"></p>
										<div class="txtbox">
											<h5 class="tit ffc">+BOX</h5>
											<p class="tittxt ffb">ライフスタイルへの夢は、家族の数だけあります。</p>
											<p class="txt ffa">家族構成やライフスタイルに合わせてBOXをプラスすれば、休日に家族でバーベキューが楽しめるウッドデッキ、客間として、また子どもとのふれあいスペースとして活用できる和室など、BOXのスタイルは自由自在。BOX部分には、開放感あふれる大型ルーフバルコニーを採用することで、快適な＋αのプライベートゾーンが誕生しました。</p>
										</div>
									</div>
									<p class="btn vsp">詳細を見る</p>
								</dt>
								<dd>
									<div class="boxa cf">
										<div class="imgbox">
											<p class="tit ffc">PLAN</p>
											<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/img_boxplan_stepfloor01.gif" alt="ゼロキューブ ステップフロア（ZERO-CUBE STEPFLOOR）+BOX 6LDK間取り"></p>
										</div>
										<div class="txtbox">
											<div class="dlbox">
												<p class="left"><span class="leftin ffb"><span class="leftinfo">6LDK</span></span></p>
												<p class="right ffa">延床面積／115.92㎡(35.06坪)<br>1F床面積／62.93㎡(19.03坪) <br>2F床面積／52.99㎡(16.03坪)</p>
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
													<p class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube-stepfloor/pic_boxdd_stepfloor01.jpg" alt="ウッドデッキ"></p>
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
					</ul>
				</div>
			</div>
			<p class="eventbtn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/hello_<?php echo get_post($wp_query->post->ID)->post_name; ?>"><span class="ffb">ZERO-CUBE STEPFLOOR<br><span class="ffc">[ EVENT ] </span>モデルハウス見学会</span></a></p>
		</div>
		
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
