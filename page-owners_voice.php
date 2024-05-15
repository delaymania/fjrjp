<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="mv_under_contents">
        <div class='upper'>
            <h2 class="ttl">OWNER'S VOICE<span>お客様の声</span></h2>
        </div>
    </div>
    
    <div id="voice" class="under_contents_wrap archive">
			<div class="under_contents">
				<div class="owners-voice-title-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/title_voice01.png" alt="オーナー様のこだわり、ライフスタイルをCLOSE UP">
        </div>
								<div class="List">
					<div class="sp-slide voice_no13"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no08">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE</p>
							<p class="tl">千葉県 K様 <br>NORDIC HOUSE</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice13_wide.jpg" alt="オーナー様の声 千葉県 K様 <br>NORDIC HOUSE"></div>
					</a></div>
				</div><!-- List -->
								<div class="List">
					<div class="sp-slide voice_no12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no07">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE</p>
							<p class="tl">千葉県 I様 <br>ZERO-CUBE+BOX</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice12_wide.jpg" alt="オーナー様の声 千葉県 I様 <br>ZERO-CUBE+BOX"></div>
					</a></div>
				</div><!-- List -->
<!--
								<div class="List">
					<div class="sp-slide voice_no10"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no10">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE</p>
							<p class="tl">千葉県 S様 <br>ZERO-CUBE</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice10_wide.jpg" alt="オーナー様の声 千葉県 S様 <br>ZERO-CUBE"></div>
					</a></div>
				</div>
!-- List -->
								<div class="List">
					<div class="sp-slide voice_no09"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no05">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE</p>
							<p class="tl">神奈川県 K様 <br>ZERO-CUBE +GARAGE</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice09_wide.jpg" alt="オーナー様の声 神奈川県 K様 <br>ZERO-CUBE +GARAGE"></div>
					</a></div>
				</div><!-- List -->
        
								<div class="List">
					<div class="sp-slide voice_no07"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no04">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE</p>
							<p class="tl">千葉県 N様 <br>ZERO-CUBE KAI</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice07_wide.jpg" alt="オーナー様の声 千葉県 N様 <br>ZERO-CUBE KAI"></div>
					</a></div>
				</div><!-- List -->
								<div class="List">
					<div class="sp-slide voice_stayhome"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/stayhome">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE <span>#</span>STAY HOME</p>
							<p class="tl">千葉県 K様 <br>ZERO-CUBE MALIBU</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice_bangai01_wide.jpg" alt="オーナー様の声 千葉県 K様 <br>ZERO-CUBE MALIBU"></div>
					</a></div>
				</div><!-- List -->
								
								<div class="List">
					<div class="sp-slide voice_no02"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no02">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE</p>
							<p class="tl">千葉県 K様 <br>ZERO-CUBE +GARAGE</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice03_wide.jpg" alt="オーナー様の声 千葉県 K様 ZERO-CUBE +GARAGE"></div>
					</a></div>
				</div><!-- List -->
								
								<div class="List">
					<div class="sp-slide voice_no02"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owners_voice/no01">
						<div class="textBox">
																			<p class="voice_num">OWNER<span>’</span>S VOICE</p>
							<p class="tl">千葉県 K様 <br>ZERO-CUBE MALIBU</p>
						</div>
						<div class="sp-img em taC"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_voice02_wide.jpg" alt="オーナー様の声 千葉県 K様 <br>ZERO-CUBE MALIBU"></div>
					</a></div>
				</div><!-- List -->

  		</div><!-- under_contents -->
		</div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
