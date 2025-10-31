<?php get_header(); ?>



<!-- Home Section -->
<?php if(wp_is_mobile()): ?>
<section id="home" class="intro-pattern" style="background-attachment: scroll;">
<?php else: ?>
<section id="home" class="intro-pattern" style="background-attachment: fixed;">
<?php endif; ?>

    <div id="player_cover">
        <h1 id="logo">
        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/logo_lifelabel.png" alt="ライフレーベル" class="lifelabel">
			<div class="name">湘南乃<span class="comna">工務店</span></div>
			        	<span class="leadtxt">LIFE LABELとカリフォルニア工務店とのコラボレーション <br>ゼロキューブ マリブ(ZERO-CUBE MALIBU)見学会開催中<i>設計から施工までワンストップ。LIFE LABEL加盟店。</i></span>
			        </h1>
        <div id="copy">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_copy_malibu.png" alt="ZERO-CUBE MALIBU ゼロキューブ マリブ 豊かな時間を、シンプルに愉しむための家"></div>
        <p id="btn_scroll"><a class="start-button" href="#date-hd"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/btn_scroll.png" alt=""></a></p>
    </div>
</section>
<!-- Home Section -->




<!-- date Section -->
<section id="date" class="item_left" style="opacity: 1; left: 0px;">
	<div class="content">
			<h2 id="date-hd"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/hd_date.png" alt="The Date of Tour モデルハウス見学会開催日"></h2>
	
		<dl>
			<dt style="background-color: #000;">完全<br>予約制</dt>
			<dd>
        <div class="bgbox">
          <?php if ( is_active_sidebar('kaisaibi') ) : ?>
            <?php dynamic_sidebar('kaisaibi'); ?>
          <?php endif; ?>
        </div>
        
				<div class="day">
  				<div class="time"><span>START</span>10:00／13:00／16:00</div>
				  <div class="reservation"><a href="#contact" class="scroll"><span>見学会予約はこちら</span></a></div>
			  </div>
      </dd>
		</dl>


		<p class="ind">※当日のご予約につきましては、空き状況を確認させていただいております。お手数ではございますがお電話にてご連絡ください。また、お一人でも多くのお客様にご来店いただけるよう上記の日時でご都合のつかない場合においては平日も対応可能です。<a href="#contact">フォーム</a>よりご希望の日時をお伝えください。</p>

		<p class="ind">※お子様連れの方も、キッズルール完備で女性スタッフがお預かりいたしますのでご安心してお連れいただけます。</p>
		<p class="ind">※当日は、心挽きたてのコーヒーをご用意して、みなさまをお待ちしております。</p>

		<div class="attention">
			<h4><span>当日に見学予約をされるお客様へ</span></h4>
			<div class="tt">

					<p>当社では、直前の来店予約を希望されるお客様にも柔軟に対応させていただけるよう、多数のコーディネーターを在籍させておりますが、最近は事前に予約されるお客様で週末は満席状態が続いております。心苦しい限りですがお断りさせていただく状況が生じています。</p>
						
					<p>その為、希望日前日18：00以降～当日のご予約におきましては、<span class="fb">担当より折り返しのご連絡をさせていただくまでは確定にはなりません</span>のでご注意ください。</p>
						
					<p>ご予約されるお客様にはご迷惑おかけして誠に申し訳ございませんが、何卒ご理解とご協力をお願い致します。</p>
					<p>※希望日前日18：00までにご予約されることをおすすめ致します。</p>
			</div>
		</div>

	</div>
</section>
<!-- modelhouse Section -->
<section id="modelhouse">
	<div id="content01">
		<h2 id="modelhouse-hd"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/hd_modelhouse.png" alt="モデルハウス Presented by 湘南乃工務店"></h2>
		<p class="lead item_bottom">ZERO-CUBE MALIBU(ゼロキューブ マリブ)は、グッドデザイン賞を受賞したシンプルなキューブ型のデザインが特徴のゼロキューブとカリフォルニアスタイルを打ち出し自由で個性的な空間を手がけるカリフォルニア工務店とがコラボレーションしたカリフォルニアテイスト(アメリカ西海岸風)の住まいです。</p>
	</div>
	<div id="content02">
		<div id="desc" class="item_right">
			<p class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_wtw.png" alt="アーバンサーフブランドWTW青山店"></p>
			<p id="text">部屋のインテリアや雑貨は、アーバンサーフブランドとして人気の「<a href="http://www.wtwstyle.com/" target="_blank">WTW</a>」や弊社で厳選したアイテムでコーディネート。海の香りが感じられる空間です。</p>
		</div>
		<div id="photo" class="item_top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_modelhouse01.jpg" alt="ゼロキューブマリブ モデルハウス内観写真"></div>
	</div>
	<div id="content03">
		<div id="desc" class="item_left">
			<p class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/ico_nextstyle.png" alt="ネクストスタイル"></p>
			<p id="text">外観は機能とデザイン性を兼ね備えた沖縄生まれの花ブロックを取り入れて外観の魅力をより華やかに。</p>
		</div>
		<div id="photo" class="item_top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_modelhouse02.jpg" alt="ゼロキューブマリブ モデルハウス外観写真"></div>
	</div>
	<div id="content04" class="item_bottom">
		<p class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_modelhouse03.png" alt="Enjoy Your Life Style"></p>
		<h2><span>海をそばで感じるサーファーズハウスのようなモデルハウスを見て触って、その居心地を体感してみませんか。</span></h2>
		<div id="button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_click.png" alt="click" class="click" style="margin-top: -10px;"><a href="#contact" class="over"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/btn_contact01.png" alt="見学会予約はこちら"></a></div>
		<ul>
			<li>※お子様連れの方も、キッズルール完備で女性スタッフがお預かりいたしますのでご安心してお連れいただけます。</li>
			<li>※当日は、挽きたてのコーヒーをご用意して、みなさまをお待ちしております。</li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/bg_object02.png" alt=""></li>
		</ul>
	</div>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery-1.10.2.min.js"></script>
	<script>
	$(function () {
		setTimeout('rect()');
		foo();
	});
	function rect() {
		$('.click').animate({
			marginTop: '-=10px'
		}, 800).animate({
			marginTop: '+=10px'
		}, 800);
		setTimeout('rect()', 1600);
	}
	</script>
</section>

  
<?php if( !wp_is_mobile()): ?>
<!-- gallery Section -->
<section id="gallery">
	<h2 id="gallery-hd"><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/hd_gallery.png" alt="GALLERY"></h2>
	<div id="inner">
		<ul id="desktop" class="cf item_bottom">
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery01.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery01.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 外観写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery02.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery02.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ ポスト写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery03.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery03.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 外構写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery04.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery04.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 玄関写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery05.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery05.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッチン写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery06.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery06.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ リビング写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery07.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery07.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ リビング写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery08.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery08.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 階段写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery09.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery09.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ シーリングファン写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery10.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery10.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ ベッドルーム写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery11.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery11.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッズルーム写真"></a></li>
			<li><a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery12.jpg" data-lightbox="group" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery12.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッズルーム写真"></a></li>
		</ul>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery-1.10.2.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/lightbox.js"></script>
		<script>
			lightbox.option({
				'fitImagesInViewport' : true,
				'wrapAround': true
			})
		</script>

		<div id="mobile" class="slider-pro sp-horizontal" style="width: 100%; max-width: 900px;">
			

			
		<div class="sp-slides-container"><div class="sp-mask sp-grab" style="width: 900px; height: 601px;"><div class="sp-slides" style="transform: translate3d(-4550px, 0px, 0px);">
				

				

				

				

				

				

				

				

				

				

				

				

			<div class="sp-slide sp-selected" data-index="0" data-init="true" data-retina-loaded="true" data-loaded="true" style="width: 900px; height: 601px; left: 4550px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery01.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 外観写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery01.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="1" data-init="true" data-retina-loaded="true" data-loaded="true" style="width: 900px; height: 601px; left: 5460px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery02.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ ポスト写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery02.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="2" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 6370px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery03.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 外構写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery03.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="3" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 7280px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery04.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 玄関写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery04.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="4" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 8190px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery05.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッチン写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery05.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="5" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 9100px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery06.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ リビング写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery06.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="6" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 10010px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery07.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ リビング写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery07.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="7" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 0px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery08.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 階段写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery08.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="8" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 910px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery09.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ シーリングファン写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery09.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="9" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 1820px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery10.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ ベッドルーム写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery10.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="10" data-init="true" data-retina-loaded="true" style="width: 900px; height: 601px; left: 2730px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery11.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッズルーム写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery11.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div><div class="sp-slide" data-index="11" data-init="true" data-retina-loaded="true" data-loaded="true" style="width: 900px; height: 601px; left: 3640px;"><div class="sp-image-container" style="width: 900px; height: 601px;"><img class="sp-image" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery12.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッズルーム写真" data-default="https://www.next-at.co.jp/zerocube/wp-content/themes/zerocube/images/img_gallery12.jpg" style="width: 100%; height: auto; margin-left: 0px; margin-top: 0px;"></div></div></div></div><div class="sp-arrows sp-fade-arrows"><div class="sp-arrow sp-previous-arrow"></div><div class="sp-arrow sp-next-arrow"></div></div></div><div class="sp-thumbnails-container sp-bottom-thumbnails" style="width: 900px;"><div class="sp-thumbnails sp-grab" style="width: 1260px; height: 80px;">
				
				
				
				
				
				
				
				
				
				
				
				

			<div class="sp-thumbnail-container sp-selected-thumbnail" data-loaded="true" data-retina-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery01.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 外観写真" data-index="0" data-init="true" style="width: 100%; height: auto; margin-left: -4px; margin-top: -14px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery02.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ ポスト写真" data-index="1" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery03.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 外構写真" data-index="2" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery04.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 玄関写真" data-index="3" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery05.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッチン写真" data-index="4" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery06.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ リビング写真" data-index="5" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery07.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ リビング写真" data-index="6" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery08.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ 階段写真" data-index="7" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" data-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery09.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ シーリングファン写真" data-index="8" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery10.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ ベッドルーム写真" data-index="9" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery11.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッズルーム写真" data-index="10" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div><div class="sp-thumbnail-container" data-retina-loaded="true" style="width: 100px; height: 80px;"><img class="sp-thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_gallery12.jpg" alt="千葉県LIFE LABEL ゼロキューブ マリブ キッズルーム写真" data-index="11" data-init="true" style="width: 100%; height: auto; margin-left: 0px; margin-top: -10px;"></div></div><div class="sp-thumbnail-arrows sp-fade-thumbnail-arrows"><div class="sp-thumbnail-arrow sp-previous-thumbnail-arrow" style="display: none;"></div><div class="sp-thumbnail-arrow sp-next-thumbnail-arrow" style="display: block;"></div></div></div><div class="sp-full-screen-button sp-fade-full-screen"></div></div>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.sliderPro.min.js"></script>
		<script type="text/javascript">
			$( document ).ready(function( $ ) {
				$( '#gallery #mobile' ).sliderPro({
					width: 900,
					height: 601,
					fade: true,
					arrows: true,
					buttons: false,
					fullScreen: true,
					shuffle: false,
					smallSize: 640,
					mediumSize: 1000,
					largeSize: 3000,
					thumbnailArrows: true,
					autoplay: false
				});
			});
		</script>
	</div><!-- #inner -->
</section>
<?php endif; ?>

<section id="media">
	<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/hd_media.png" alt="Media"></h2>
	<p class="item_left">弊社で家創りのお手伝いをさせていただきました千葉県S様邸。ご夫婦の想いが詰まった、とっても素敵なZERO-CUBE MALIBUが、雑誌『カリフォルニアスタイル Vol.6』や『Lightning特別編集 ハウジング・ブック』、ZERO-CUBEシリーズをご紹介するWEBマガジン『LIFE LABEL Magazine』に掲載されました。</p>
	<div id="box">
		<ul class="cf item_right">
			<li>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_magazine01.png" alt="" class="magazine">
				<a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_media01.jpg" class="lgtbox" data-lightbox="group-media" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_media01.jpg" alt=""></a>
				<span class="fa fa-external-link" aria-hidden="true"></span>カリフォルニアスタイル Vol.6
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_magazine02.png" alt="" class="magazine">
				<a href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_media02.jpg" class="lgtbox" data-lightbox="group-media" data-title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/img_media02.jpg" alt=""></a>
				<span class="fa fa-external-link" aria-hidden="true"></span>Lightning特別編集 ハウジング・ブック
			</li>
		</ul>
	</div>
</section>



<script type="text/javascript" id="" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/ytag.js"></script>
<script type="text/javascript" id="">window.yjDataLayer=window.yjDataLayer||[];function ytag(){yjDataLayer.push(arguments)}ytag({type:"ycl_cookie"});</script>
<!-- contact Section -->
<section id="contact">
	<h2>
    <span>ゼロキューブマリブ モデルハウス見学会予約</span>
  </h2>
  <?php require("inc/event-comment01.php"); ?>
</section>	
	






<!-- Js Library -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery-1.10.2.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.easing-1.3.pack.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.appear.js"></script>
  <!--
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.backstretch.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.sticky.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.flexslider-min.js"></script>
-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/script.js"></script>
<script>
jQuery(function() {
    var topBtn = jQuery('#footerFloatingMenu');
    topBtn.hide();
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 400) { // 400pxで表示
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/youtube.js"></script><!-- desktop用youtube -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/lity.js"></script><!-- mobile用youbue動画lightbox -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.fullImage.js"></script><!-- mobile用背景画像フルスクリーン -->
<script>// mobile用背景画像フルスクリーン
		$(function() {
			$("#player_mobile").FullImage({
				defaultWidth: 1565, // 画像の元サイズwidth
				defaultHeight: 2000,　// 画像の元サイズheight
				centerPosition: true // 画像をセンターに合わせるかどうか
			});
		})
</script>




<!-- mouseflow -->
<script type="text/javascript">
var _mfq = _mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.async = true;
    mf.src = "//cdn.mouseflow.com/projects/99ef3918-e41d-4be8-9e63-8aa49429050e.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>

<!-- User Insight PCDF Code Start : next-at.co.jp -->
<script type="text/javascript">
var _uic = _uic ||{}; var _uih = _uih ||{};_uih['id'] = 52890;
_uih['lg_id'] = '';
_uih['fb_id'] = '';
_uih['tw_id'] = '';
_uih['uigr_1'] = ''; _uih['uigr_2'] = ''; _uih['uigr_3'] = ''; _uih['uigr_4'] = ''; _uih['uigr_5'] = '';
_uih['uigr_6'] = ''; _uih['uigr_7'] = ''; _uih['uigr_8'] = ''; _uih['uigr_9'] = ''; _uih['uigr_10'] = '';

(function() {
var bi = document.createElement('script');bi.type = 'text/javascript'; bi.async = true;
bi.src = '//cs.nakanohito.jp/b3/bi.js';
var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bi, s);
})();
</script>
<!-- User Insight PCDF Code End : next-at.co.jp -->
<script type="text/javascript">
/* <![CDATA[ */
var cf7msm_posted_data = {"cf7msm_prev_urls":null};
/* ]]> */
</script>
  <!--
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/cf7msm.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/wp-embed.min.js"></script>
-->
  <?php get_footer(); ?>
