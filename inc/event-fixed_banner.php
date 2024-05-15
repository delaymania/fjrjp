<?php if ( is_home() || is_front_page() || is_page('about') || is_page('message') || is_page('company') || is_page('studio') || is_archive('team')  ) : ?>
	<?php if ( is_mobile() ):?>
		<script type="text/javascript" src="https://www.next-at.co.jp/wp-content/themes/next-at/js/jquery.min.js"></script>
		<script type="text/javascript">
			var $d = jQuery.noConflict();
			$d(function(){
				$d(".doorclose").click(function(){
					$d(".doorbtnbox .doorbtnboxin").fadeOut();
					$d(".doorbtnsp .doorbtnspin").fadeOut();
					return false;
				});

				if(window.innerWidth > 767){
					$d(window).scroll(function () {
						if ($d(this).scrollTop() > 200) {
							$d('.doorbtnbox').fadeIn();
						} else {
							$d('.doorbtnbox').fadeOut();
						}
					});
				}else{
					$d(window).scroll(function () {
						if ($d(this).scrollTop() > 200) {
							$d('.doorbtnsp').fadeIn();
						} else {
							$d('.doorbtnsp').fadeOut();
						}
					});
				}
				return false;
			});
		</script>
		<div class="doorbtnsp wtw">
			<div class="doorbtnspin">
				<p class="doorclose"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btn_close02.png" alt="閉じる"></p>
				<div class="overhid">
					<div class="doorspin cf">
						<p class="btna ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>lineup/sunny-track-house" id="sunnytrackhouse_link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bnr_fixed.jpg" alt="Sunny Track House by HAPPY OUTSIDE BEAMS（サニートラックハウス）外遊びを楽しむための家。"></a></p>
					</div>
				</div>
			</div>
		</div>
	<?php else: ?>
		<script type="text/javascript" src="https://www.next-at.co.jp/wp-content/themes/next-at/js/jquery.min.js"></script>
		<script type="text/javascript">
			var $d = jQuery.noConflict();
			$d(function(){
				$d(".doorclose").click(function(){
					$d(".sideBanner ul").fadeOut();
					return false;
				});

				if(window.innerWidth > 767){
					$d(window).scroll(function () {
						if ($d(this).scrollTop() > 200) {
							$d('.sideBanner').fadeIn();
						} else {
							$d('.sideBanner').fadeOut();
						}
					});
				}
				return false;
			});
		</script>
	<?php endif; ?>
<?php endif; ?>
<?php 
$path = $_SERVER['SCRIPT_NAME'];
if (strpos($path, '/lineup/') !== false || is_page() && $post->post_parent > 0 && get_post($post->post_parent)->post_name == 'lineup' ):?>
		<script type="text/javascript" src="https://www.next-at.co.jp/wp-content/themes/next-at/js/jquery.min.js"></script>
		<script type="text/javascript">
			var $d = jQuery.noConflict();
			$d(function(){
				$d(".doorclose").click(function(){
					$d(".doorbtnbox .doorbtnboxin").fadeOut();
					$d(".doorbtnsp .doorbtnspin").fadeOut();
					return false;
				});

				if(window.innerWidth > 767){
					$d(window).scroll(function () {
						if ($d(this).scrollTop() > 200) {
							$d('.doorbtnbox').fadeIn();
						} else {
							$d('.doorbtnbox').fadeOut();
						}
					});
				}else{
					$d(window).scroll(function () {
						if ($d(this).scrollTop() > 200) {
							$d('.doorbtnsp').fadeIn();
						} else {
							$d('.doorbtnsp').fadeOut();
						}
					});
				}
				return false;
			});
		</script>
<?php if(!( is_page('event') || is_page('form_confirm') || is_page('form_thanks') || is_page('event_glb_showroom') || is_page('event_type-b') || is_page('sunny-track-house') )): ?>
<?php if ( is_mobile() ):?>
		<div class="doorbtnsp">
			<div class="doorbtnspin">
				<p class="doorclose"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/ico_close.jpg" alt="閉じる"></p>
				<p class="tit ffb">モデルハウスや商品のこともっと知りたい</p>
				<div class="overhid">
					<div class="doorspin cf">
	<?php //ワンズキューボ
	$path = $_SERVER['SCRIPT_NAME'];
	if (strpos($path, '/lineup/onescubo/') !== false || is_page() && $post->post_parent > 0 && get_post($post->post_parent)->post_name == 'lineup/onescubo' ):?>
						<p class="btna btn ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/">この商品の説明会</a></p>
	<?php else: //それ以外 ?>
						<p class="btna btn ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/hello_<?php echo get_post($wp_query->post->ID)->post_name; ?>">この商品の<?php if(is_page('zero-cube') || is_page('zero-cube-stepfloor') || is_page('brooklyn-house') || is_page('freaks-house') || is_page('zero-cube-freaks') ): ?>見学会<?php else: ?>説明会<?php endif; ?></a></p>
	<?php endif; ?>
						<p class="btnb btn ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>request">資料請求</a></p>
					</div>
				</div>
			</div>
		</div>
<?php else: ?>
		<div class="doorbtnbox">
			<div class="doorbtnboxin">
				<p class="doorclose"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/zero-cube/ico_close.jpg" alt="閉じる"></p>
				<p class="tit ffb">モデルハウスや商品のこともっと知りたい</p>
				<div class="doorboxin">
					
					
	<?php //ワンズキューボ
	$path = $_SERVER['SCRIPT_NAME'];
	if (strpos($path, '/lineup/onescubo/') !== false || is_page() && $post->post_parent > 0 && get_post($post->post_parent)->post_name == 'lineup/onescubo' ):?>				
					<p class="btna btn ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/">この商品の説明会予約</a></p>
	<?php //デイトナハウス
	$path = $_SERVER['SCRIPT_NAME'];
	elseif (strpos($path, '/lineup/daytona-house/') !== false || is_page() && $post->post_parent > 0 && get_post($post->post_parent)->post_name == 'lineup/daytona-house' ):?>				
					<p class="btna btn ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/">この商品のイベント</a></p>
	<?php else: //それ以外 ?>
					<p class="btna btn ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/hello_<?php echo get_post($wp_query->post->ID)->post_name; ?>">この商品の<?php if(is_page('zero-cube') || is_page('zero-cube-stepfloor') || is_page('brooklyn-house') || is_page('freaks-house') || is_page('zero-cube-freaks')  ): ?>見学会<?php else: ?>説明会<?php endif; ?>予約</a></p>
	<?php endif; ?>
					<p class="btnb btn ffb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>request">資料請求</a></p>
				</div>

			</div>
		</div>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
