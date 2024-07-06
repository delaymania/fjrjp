<?php get_header(); ?>


	<div class="mainimg page-structure-eyecatch">
        <div class="mainimgin">
            <div class="under_contents">
                <h3 class="tit ffb page-structure-title"><span class="bgbox"><?php the_title();?></span></h3>					
                <p class="day">
                  <div class="bgbox">
                    <?php if ( is_active_sidebar('kaisaibi') ) : ?>
                      <?php dynamic_sidebar('kaisaibi'); ?>
                    <?php endif; ?>
                  </div>
                </p>
                <p class="ffc"><span class="bgbox"><span class="start">START</span><span class="time">10:00/13:00/16:00</span></span></p>
                <p class="bgmainig"> </p>
            </div>
        </div>
    </div>


	<div class="evetextbox">
        <div class="under_contents cf">
			<div class="page-structure-picture">
				<div class="page-structure-picture-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-structure-contents.jpg" alt="構造見学会">
				</div>
				<div class="page-structure-picture-txt">
		            <p class="txt ffa">建築中のおうちの中身を見てみませんか？<br><span class="ffb">構造見学会</span>では担当者が会場をご案内いたします！</p>
					<p class="txt ffa">会場：神奈川県横浜市内</p>	
				</div>
	        </div>
        </div>
    </div>


	
<div class="evecombox">
			<div class="under_contents">

				<div class="attention">
					<h4><span>希望日前日18：00以降～当日に来店予約されるお客様へ</span></h4>
					<div class="tt">
						<p>当社では、直前の来店予約を希望されるお客様にも柔軟に対応させていただけるよう、多数のコーディネーターを在籍させておりますが、最近は事前に予約されるお客様で週末は満席状態が続いております。心苦しい限りですがお断りさせていただく状況が生じています。</p>
						
						<p>その為、希望日前日18：00以降～当日のご予約におきましては、<span class="fb">担当より折り返しのご連絡をさせていただくまでは確定にはなりません</span>のでご注意ください。</p>
						
						<p>ご予約されるお客様にはご迷惑おかけして誠に申し訳ございませんが、何卒ご理解とご協力をお願い致します。</p>
						<p>※希望日前日18：00までにご予約されることをおすすめ致します。</p>
					</div>
				</div>
				

				<table class="evetable ffa">
					<tbody><tr>
						<th class="evetablebg">イベント名</th>
						<td class="evetablebg">構造見学会</td>
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
								<p class="txt"><span class="studio"><a href="https://maps.app.goo.gl/ncPoWTrzu4ycsnpy9">横浜スタジオ</a></span></p>
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
				</tbody></table>
			</div>
		</div>
</div>

<div class="evereser">
			<div class="under_contents">
				<h4 class="everesertit ffb">来場予約</h4>
				<div class="evereserpanle cf">
					<div class="evereserbox02">
						<p class="ffa">当日ご希望の方は下記の番号へお電話ください。</p>

						<p class="ffc tel"><span class="studio">横浜スタジオ</span><a href="tel:0120767221" id="tel_yokohama"><span>0120-767-221</span></a></p>
						<p class="ffa">営業時間／AM9:30-PM6:30　定休／火曜・水曜</p>
					</div>

          
				</div>
			</div>
		</div>

<?php get_footer(); ?>
