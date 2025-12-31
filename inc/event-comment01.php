		<div class="evecombox">
			<div class="under_contents">

<?php if ( get_post_type() == 'event' && (is_single('hello_house-canvas_idee') || is_single('hello_wtwhouseproject') || is_single('hello_brooklyn-house') || is_single('online') || is_single('hello_holiday-house') || is_single('hello_tin-house') || is_single('hello_casita') || is_single('hello_dultonhome')) ): ?>
				<div  class="boxArrange">
					<p><span>弊社は、各種ゼロキューブシリーズ含め、豊富な施工実績がございます。また、ご要望に合わせて間取り等を自由にアレンジすることが可能です。ぜひお客様のお好みやライフスタイルに合う理想のカタチを聞かせてください。</span></p>
				</div>
<?php else: ?>
<?php endif; ?>

        
<?php if ( get_post_type() == 'event' && (is_single('hello_zero-cube') || is_single('hello_zero-cube-stepfloor') || is_single('hello_zero-cube-tools') || is_single('hello_zero-cube-freaks') || is_single('hello_freaks-house')) ): ?>
	<?php if ( get_post_type() == 'event' && (is_single('hello_zero-cube') || is_single('hello_zero-cube-stepfloor') || is_single('hello_zero-cube-freaks') || is_single('hello_freaks-house')) ): ?>
				<!--<div class="txtbox">
					<p class="txt ffa">モデルハウス見学会では、ご来店いただくお客様にじっくり見学していただくため、「完全予約制」とさせていただいております。時間帯によっては、すぐに埋まってしまう場合もございます。予めご了承ください。</p>
				</div>-->
				<div class="attention">
					<h4><span>希望日前日に来店予約されるお客様へ</span></h4>
					<div class="tt">
						<p>当社では、直前に来店予約を希望されるお客様にも柔軟に対応させていただけるよう、多数のコーディネーターを在籍させておりますが、最近は事前に予約されるお客様で週末は満席状態が続いております。心苦しい限りですがお断りさせていただく状況が生じています。</p>
						
						<p>その為、希望日前日のご予約におきましては、<span class="fb">担当より折り返しのご連絡をさせていただくまでは確定にはなりません</span>のでご注意ください。</p>
						
						<p>ご予約されるお客様にはご迷惑おかけして誠に申し訳ございませんが、何卒ご理解とご協力をお願い致します。</p>
						<p>※希望日前日18：00までにご予約されることをおすすめ致します。</p>
					</div>
				</div>
	<?php else: ?>
				<div class="attention">
					<h4><span>ご予約について</span></h4>
					<div class="tt">
						<p>弊社のモデルハウスではございますが遠方にあるため、希望日前日のご予約では、ご案内の対応ができない場合がございます。そのため、下記のフォームよりご予約いただいた後、<span class="fb">担当より折り返しのご連絡をさせていただくまでは確定のご予約にはなりません</span>のでご注意ください。</p>
						
						<p>※希望日前日18：00までにご予約されることをおすすめ致します。</p>
					</div>
				</div>
	<?php endif; ?>

<?php else: ?>
				<!-- <div class="txtbox">
					<p class="txt ffa">商品説明会では、専任の住宅コーディネーターが、ご来店されるお客様のご要望にそって最適なプランをご提案させていただくため「完全予約制」とさせていただいております。時間帯によっては、すぐに埋まってしまう場合もございます。予めご了承ください。</p>
				</div>-->
				
				<div class="attention">
					<h4><span>希望日前日に来店予約されるお客様へ</span></h4>
					<div class="tt">
						<p>当社では、直前の来店予約を希望されるお客様にも柔軟に対応させていただけるよう、多数のコーディネーターを在籍させておりますが、最近は事前に予約されるお客様で週末は満席状態が続いております。心苦しい限りですがお断りさせていただく状況が生じています。</p>
						
						<p>その為、希望日前日のご予約におきましては、<span class="fb">担当より折り返しのご連絡をさせていただくまでは確定にはなりません</span>のでご注意ください。</p>
						
						<p>ご予約されるお客様にはご迷惑おかけして誠に申し訳ございませんが、何卒ご理解とご協力をお願い致します。</p>
						<p>※希望日前日18：00までにご予約されることをおすすめ致します。</p>
					</div>
				</div>
<?php endif; ?>
				

				<table class="evetable ffa">
					<tr>
						<th class="evetablebg">イベント名</th>
						<td class="evetablebg">
              <?php 
                $slug = get_post_field('post_name', get_post());
                if ($slug === 'am6') {
                    the_title(); 
                    echo ' 商品説明会';
                } elseif ($slug === 'tochi') {
                    echo '安定収入を得るための土地活用・アパート・マンション賃貸経営説明会';
                } else {
                    the_title();
                }
              ?>
            </td>
					</tr>
					<tr>
						<th>開催日</th>
						<td>
                <?php if ( is_active_sidebar('kaisaibi') ) : ?>
                  <?php dynamic_sidebar('kaisaibi'); ?>
                <?php endif; ?>
            </td>
					</tr>
					<tr>
						<th class="evetablebg">時間</th>
						<td class="evetablebg">10：00／13：00／16：00</td>
					</tr>
					<tr>
						<th>場所</th>
						<td>
							<div class="evetabletxt">
								<p class="txt"><span class="studio"><a href="https://maps.app.goo.gl/xt413rYr4H2cqjQm8">湘南乃工務店</a></span></p>
              </div>
						</td>
					</tr>
					<tr>
						<th class="evetablebg">備考</th>
						<td class="evetablebg">
							<ul class="remarks">
								<li>・駐車場完備。</li>
								<li>・お子様連れの方も、キッズルーム完備で女性スタッフがお預かりいたしますのでご安心してお連れいただけます。</li>
								<li>・当日は、挽きたてのコーヒーをご用意して、みなさまをお待ちしております。</li>
								<li>・モデルハウスの写真撮影はOKですが、SNS・ブログ等のインターネットへの掲載はお控えください。</li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
		</div>


		<div class="evereser">
			<div class="under_contents">
				<h4 class="everesertit ffb">WEB来場予約</h4>
				<div class="evereserpanle cf">
					<div class="evereserbox02">
						<p class="ffa">当日ご希望の方は下記の番号へお電話ください。</p>

						<p class="ffc tel"><span class="studio">湘南乃工務店</span><a href="tel:0120767221" id="tel_yokohama"><span>0120-767-221</span></a></p>
						<p class="ffa">営業時間／AM9:30-PM6:30　定休／火曜・水曜</p>
					</div>

<?php if ( is_page('tochi') ): ?>
          <div style="background-color: #eee; padding: 10px 20px; font-size: 15px; font-weight: bold; margin: 30px auto -20px; max-width: 540px;">
            <p style="margin: 0;">※お手数ですが、湘南乃工務店にご来店いただくか、「その他・ご質問等」の欄にご記載ください。</p>
          </div>
<?php endif; ?>
          
				</div>
<?php if ( get_post_type() == 'event' && (is_single('hello_house-canvas_idee')) ): ?>
				<div class="boxAttension"><p>以下はVR見学会・商品説明会のご予約フォームとなります。モデルハウス見学会をご希望の方はお電話で承っておりますのでご注意ください。</p></div>
<?php endif; ?>
			</div>
		</div>
		<div class="under_contents">
			<div class="entry-content">
        
				<div class="iframe-container" id="event-mailform">
          <iframe id="iframeEvent" src="https://info.shonan-no-koumuten.jp/l/1063212/2024-11-08/f1jy74?EventName=<?php the_title(); ?>" width="100%" height="2200px" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
				</div>
        <!--
<?php echo do_shortcode('[contact-form-7 id="18b730e" title="イベントページ"]'); ?>
              -->
  
		    </div>
		</div>
