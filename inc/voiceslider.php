    <div class="contentsWrap pb00 voicearhive">
		<div id="voice">
			<div class="in">
				<div class="ttl_wrap">
					<h2 class="coja"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice/title02_voice.png" alt=""/></h2>
				</div>
				
				<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slider-pro.min.css">
				<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.sliderPro.min.js"></script>

			<?php if ( is_mobile() ) : ?>
				<script>
					jQuery(function($){
						$( '.slider-pro-pc' ).sliderPro({
							height: 336,
							visibleSize: '100%',
							arrows: true,
							buttons: true,
							slideDistance:4,
							autoplayDelay: 7000
						});

					})
				</script>	
			<?php else: ?>
				<script>
					jQuery(function($){
						$( '.slider-pro-pc' ).sliderPro({
							width: 1010,
							height: 400,
							visibleSize: '100%',
							arrows: true,
							buttons: true,
							slideDistance:4,
						});

					})
				</script>			
			<?php endif; ?>			
				<div id="mainimg">			
						<div class="slider">
							<div class="slider-pro-pc">
								<div class="sp-slides">
<?php
$args = array('post_type' => 'owners_voice', 'posts_per_page' => 3);
query_posts($args);
while(have_posts()): the_post();
?>
    <div class="sp-slide voice_<?php $slug_name = $post->post_name; echo $slug_name; ?>">
        <a href="<?php the_permalink(); ?>">
            <div class="textBox">
                <?php if (date('U') - get_the_time('U') <= 30 * 24 * 60 * 60): ?>
                    <span class="ico_new">NEW</span>
                <?php endif; ?>      
                <p class="voice_num">OWNER<span>’</span>S VOICE</p>
                <p class="tl"><?php the_title(); ?></p>
            </div>
            <div class="sp-img taC">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('alt' => get_the_title()));
                }
                ?>
            </div>
        </a>
    </div>
<?php endwhile; wp_reset_query(); ?>

									
								</div><!-- sp-slides -->
							</div><!-- slider-pro-pc -->
						</div><!-- slider -->
				</div><!-- mainimg -->

			</div><!-- in -->
		</div><!-- #voice -->
	</div><!-- contentsWrap -->		
