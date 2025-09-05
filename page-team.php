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
    <div class="mv_under_contents">
        <div class='upper'>
            <h2 class="ttl">TEAM<span>チーム紹介</span></h2>
        </div>
    </div>
    <div class="undertitlewrap">
        <div class="undertitlebox">
            <div class="comme"><span>スタッフの趣味はサーフィン・アウトドア・DIY etc…。お客様と趣味の話で盛り上がることがよくあります。</span>
                <span>仕事も遊びも本気で取り組むからこそ、お客様が描く理想のライフスタイルに共感し、良いご提案ができるよう日々努力し続けています。</span>
            </div>
        </div>
    </div>
    <div class="under_contents">
      <section class="team">
 			  <h2 class="studio_hd">湘南乃工務店</h2>

        
<?php

// カスタムタクソノミーのタームを指定
$term_slug = 'shonan';  // 例えば 'yokohama' または 'shonan'

$args = array(
    'post_type' => 'team',
    'posts_per_page' => -1,  // 全ての投稿を表示
    'orderby' => 'date',     // 日付で並び替え
    'order' => 'ASC',        // 古い順
    'tax_query' => array(
        array(
            'taxonomy' => 'studio',
            'field'    => 'slug',
            'terms'    => $term_slug
        )
    )
);

$team_query = new WP_Query($args);

// クエリが投稿を持っているか確認
if ($team_query->have_posts()): ?>
    <ul class="team_block_list clearfix">
        <?php while ($team_query->have_posts()): $team_query->the_post(); ?>
            <li class="team_block team">
                <div class="team_block_wrapper">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <p class="ph">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="team_pic" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumb')); ?>" alt="<?php echo esc_attr(get_field('position')); ?>">
                            <?php endif; ?>
                        </p>
                        <p class="ttl"><?php echo esc_html(get_field('position')); ?></p>
                        <p class="name"><?php the_title(); ?></p>
                    </a>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif;

wp_reset_postdata();  // クエリをリセット
?>

      </section>
      
      
  </div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
