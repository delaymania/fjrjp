<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<script type="text/javascript">
             jQuery(function () {

                 jQuery('.staff_blog_list.sp_only').slick({
                     infinite: true,
                     dots: true,
                     slidesToShow: 5,
                     slidesToScroll: 1,
                     autoplay: true,
                     autoplaySpeed: 2000,
                     responsive: [{
                         }, {

                             breakpoint: 589,
                             settings: {
                                 slidesToShow: 3,
                                 slidesToScroll: 1,
                                 centerMode: true,
                                 centerPadding: '15%'

                             }
                         }, {
                             breakpoint: 490,
                             settings: {
                                 slidesToShow: 2,
                                 slidesToScroll: 1,
                                 centerMode: true,
                                 centerPadding: '15%'
                             }
                         }, {
                             breakpoint: 430,
                             settings: {
                                 slidesToShow: 2,
                                 slidesToScroll: 1,
                                 centerMode: true,
                                 centerPadding: '15%'
                             }
                         }, {
                             breakpoint: 360,
                             settings: {
                                 slidesToShow: 2,
                                 slidesToScroll: 1,
                                 centerMode: true,
                                 centerPadding: '10%'
                             }
                         }
                     ]
                 });
             });

</script>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="team_detail">
          <div class="staffSubWrap">
              <table class="staffDetailBox clearfix">
                      <tr>
                          <td class="staffPhoto">
                              <div class="bg_profile_img" style="background: url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>) no-repeat center center; background-size: cover;"></div>
                          </td>
                          <td class="staffTextBox">
                              <div class="staffText">
<p class="ttl"><?php echo esc_html(get_field('role')); ?></p>
<?php the_title('<h1 class="name">', '</h1>'); ?>
<p class="sub"><?php echo esc_html(get_field('furigana')); ?></p>
<dl class="clearfix">
    <?php if ($license = get_field('license')): ?>
        <dt class="license">資格</dt>
        <dd class="license_text"><?php echo esc_html($license); ?></dd>
    <?php endif; ?>

    <?php if ($hometown = get_field('hometown')): ?>
        <dt class="birthplace">出身地</dt>
        <dd class="city"><?php echo esc_html($hometown); ?></dd>
    <?php endif; ?>
</dl>
                              </div>
                          </td>
                      </tr>
              </table>
          </div>
      </section>
      <div class="under_contents">
          <section>
              <article class="staffPlofile">
                  <div class="staffPlofileBox clearfix">
                      <h4><span>お客様へのメッセージ</span><p class="pc_only">MESSAGE</p></h4>
                      <div class="staffCommentWrapper">
                        <div class="staffComment">
<?php 
$message = get_field('message');
if ($message) {
    echo wpautop($message); // wpautopは改行を<br>タグに変換します
}
?>
                        </div>
                      </div>
                  </div>
                  <div class="border"></div>
                  <div class="staffPlofileBox clearfix">
                      <h4><span>仕事をする上で大切にしていること</span><p class="pc_only">ATTITUDE TO WORK</p></h4>
                      <div class="staffCommentWrapper">
                        <div class="staffComment">
<?php 
$important = get_field('important');
if ($important) {
    echo wpautop($important);
}
?>
                        </div>
                      </div>
                  </div>
                  <div class="border"></div>
                  <div class="staffPlofileBox clearfix">
                      <h4><span>好きなモノ・コト</span><p class="pc_only">LIKE</p></h4>
                      <div class="staffCommentWrapper">
                        <div class="staffComment">
<?php 
$like = get_field('like');
if ($like) {
    echo wpautop($like);
}
?>
                        </div>
                      </div>
                  </div>
                
                <!--
                  <ul class="staff_profile_photo clearfix">
                    
<li><div class="li_wrapper"><img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumb')); ?>" alt=""></div></li>

<?php if (get_field('image01')): ?>
    <li><div class="li_wrapper"><img src="<?php the_field('image01'); ?>" alt=""></div></li>
<?php endif; ?>
<?php if (get_field('image02')): ?>
    <li><div class="li_wrapper"><img src="<?php the_field('image02'); ?>" alt=""></div></li>
<?php endif; ?>
<?php if (get_field('image03')): ?>
    <li><div class="li_wrapper"><img src="<?php the_field('image03'); ?>" alt=""></div></li>
<?php endif; ?>
                  </ul>
                -->
              </article>

          </section>
      </div>
    </article><!-- #post-## -->
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
