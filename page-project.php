<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
            <h2 class="ttl"><?php echo esc_html(get_field('sub_title')); ?><span><?php the_title(); ?></span></h2>
        </div>
    </div>
    
    <?php if ($html_content = get_field('lead')): ?>
    <div class="undertitlewrap">
      <div class="undertitlebox">
        <div class="comme">
          <?php echo wp_kses_post($html_content); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    
    <div class="under_contents_wrap" id="page-project">
      
<div class="under_contents">
    
<section class="project-section">
    <h2 class="project-title">Standard house (規格住宅)</h2>

<?php
// カスタムタクソノミーのタームを指定
$term_slug = 'wtw';
$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1,  // 全ての投稿を表示
    'orderby' => 'date',     // 日付で並び替え
    'order' => 'ASC',        // 古い順
    'tax_query' => array(
        array(
            'taxonomy' => 'project-filter',
            'field'    => 'slug',
            'terms'    => $term_slug
        )
    )
);

$team_query = new WP_Query($args);

// クエリが投稿を持っているか確認
if ($team_query->have_posts()): ?>
        
    <div class="project-frame">
      <?php while ($team_query->have_posts()): $team_query->the_post(); ?>
      <div class="project-box">
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <p class="ph_flame">
            <?php if (has_post_thumbnail()): ?>
              <img class="team_pic" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumb')); ?>" alt="<?php echo esc_attr(get_field('position')); ?>">
            <?php endif; ?>
          </p>
          <div class="link_box"><h3 class="ttl"><?php the_title(); ?></h3></div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
<?php endif;

wp_reset_postdata();  // クエリをリセット
?>

  </section>
  

  <section class="project-section">
    <h2 class="project-title">Basic house (自社規格住宅)</h2>

<?php
// カスタムタクソノミーのタームを指定
$term_slug = 'basic-house';
$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1,  // 全ての投稿を表示
    'orderby' => 'date',     // 日付で並び替え
    'order' => 'ASC',        // 古い順
    'tax_query' => array(
        array(
            'taxonomy' => 'project-filter',
            'field'    => 'slug',
            'terms'    => $term_slug
        )
    )
);

$team_query = new WP_Query($args);

// クエリが投稿を持っているか確認
if ($team_query->have_posts()): ?>
        
    <div class="project-frame">
      <?php while ($team_query->have_posts()): $team_query->the_post(); ?>
      <div class="project-box">
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <p class="ph_flame">
            <?php if (has_post_thumbnail()): ?>
              <img class="team_pic" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumb')); ?>" alt="<?php echo esc_attr(get_field('position')); ?>">
            <?php endif; ?>
          </p>
          <div class="link_box"><h3 class="ttl"><?php the_title(); ?></h3></div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
<?php endif;

wp_reset_postdata();  // クエリをリセット
?>

  </section>
  
  
<section class="project-section">
    <h2 class="project-title">Custom house(注文住宅)</h2>

<?php
// カスタムタクソノミーのタームを指定
$term_slugs = array('order-made', 'the-house-garage');
$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1,  // 全ての投稿を表示
    'orderby' => 'date',     // 日付で並び替え
    'order' => 'ASC',        // 古い順
    'tax_query' => array(
        array(
            'taxonomy' => 'project-filter',
            'field'    => 'slug',
            'terms'    => $term_slugs,
            'operator' => 'IN' // どちらかのタームに属する投稿を取得
        )
    )
);

$team_query = new WP_Query($args);

// クエリが投稿を持っているか確認
if ($team_query->have_posts()): ?>
        
    <div class="project-frame">
      <?php while ($team_query->have_posts()): $team_query->the_post(); ?>
      <div class="project-box">
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <p class="ph_flame">
            <?php if (has_post_thumbnail()): ?>
              <img class="team_pic" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumb')); ?>" alt="<?php echo esc_attr(get_field('position')); ?>">
            <?php endif; ?>
          </p>
          <div class="link_box"><h3 class="ttl"><?php the_title(); ?></h3></div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
<?php endif;

wp_reset_postdata();  // クエリをリセット
?>

</section>
  

<section class="project-section">
    <h2 class="project-title">カリフォルニアステージ (自社ブランド)</h2>

<?php
// カスタムタクソノミーのタームを指定
$term_slug = 'cali-stage-brand';
$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1,  // 全ての投稿を表示
    'orderby' => 'date',     // 日付で並び替え
    'order' => 'ASC',        // 古い順
    'tax_query' => array(
        array(
            'taxonomy' => 'project-filter',
            'field'    => 'slug',
            'terms'    => $term_slug
        )
    )
);

$team_query = new WP_Query($args);

// クエリが投稿を持っているか確認
if ($team_query->have_posts()): ?>
        
    <div class="project-frame">
      <?php while ($team_query->have_posts()): $team_query->the_post(); ?>
      <div class="project-box">
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <p class="ph_flame">
            <?php if (has_post_thumbnail()): ?>
              <img class="team_pic" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumb')); ?>" alt="<?php echo esc_attr(get_field('position')); ?>">
            <?php endif; ?>
          </p>
          <div class="link_box"><h3 class="ttl"><?php the_title(); ?></h3></div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
<?php endif;

wp_reset_postdata();  // クエリをリセット
?>

  </section>
  
  
<section class="project-section">
    <h2 class="project-title">アパート・マンション・ビル</h2>

<?php
// カスタムタクソノミーのタームを指定
$term_slug = 'wood-building';
$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1,  // 全ての投稿を表示
    'orderby' => 'date',     // 日付で並び替え
    'order' => 'ASC',        // 古い順
    'tax_query' => array(
        array(
            'taxonomy' => 'project-filter',
            'field'    => 'slug',
            'terms'    => $term_slug
        )
    )
);

$team_query = new WP_Query($args);

// クエリが投稿を持っているか確認
if ($team_query->have_posts()): ?>
        
    <div class="project-frame">
      <?php while ($team_query->have_posts()): $team_query->the_post(); ?>
      <div class="project-box">
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <p class="ph_flame">
            <?php if (has_post_thumbnail()): ?>
              <img class="team_pic" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumb')); ?>" alt="<?php echo esc_attr(get_field('position')); ?>">
            <?php endif; ?>
          </p>
          <div class="link_box"><h3 class="ttl"><?php the_title(); ?></h3></div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
<?php endif;

wp_reset_postdata();  // クエリをリセット
?>

  </section>
  
</div>

    </div>
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
