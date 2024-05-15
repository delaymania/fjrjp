<?php
/**
 * The template part for displaying  posttype school
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

// パンくず用に遷移元ページを取得する
$ref = $_SERVER["HTTP_REFERER"];
$arr = explode("/",$ref);
$city = end($arr);
switch ($city) {
  case 'funabashi':
    $area = "船橋";
    break;
  case 'kamagaya':
    $area = "鎌ヶ谷";
    break;
  
  default:
    # code...
    break;
}

// 校区別物件一覧のクエリ用にスラッグから学校IDを取得する
$sch_id = str_replace("sch_","",get_page_uri($post->ID));
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
     <h1 class="entry-title">SCHOOL<span>学区情報</span></h1><?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<div class="entry-content">
  <div class="breadcrumb">
    <ul class="clearfix">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>school_information/">学区情報</a></li>
        <li><a href="<?php echo $ref; ?>"><?php echo $area; ?>市小・中学校一覧</a></li>
        <li><?php the_title(); ?></li>
    </ul>
  </div>
  <div class="undertitlewrap loan_ttl">
    <div class="undertitlebox">
        <div class="comme">
            <span>千葉県船橋市を中心とした、各周辺の小学校・中学校をご紹介いたします。</span>
        </div>
    </div>
  </div>
  <div class="under_contents">
      <section class="school_detail">
          <h3 class="ttl"><?php the_title(); ?></h3>

          <div class="post-thumbnail">
              <img width="640" height="480" src="<?php the_field('画像'); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
          </div><!-- .post-thumbnail -->

          <div class="txt_box_r">
              <p><span class="ttl">沿革・特徴</span><br />
                  <?php echo get_post_meta(get_the_ID(), '沿革・特徴', true); ?></p>
              <p><span class="ttl">所在地</span><br />
                  〒<?php echo get_post_meta(get_the_ID(), '郵便番号', true); ?> <?php echo get_post_meta(get_the_ID(), '住所', true); ?><br />
                  電話：<?php echo get_post_meta(get_the_ID(), '電話番号', true); ?></p>
          </div>
          <div class="txt_box_under">
              <p><span class="ttl">学区（平成25年9月1日現在）</span></p>
              <div class="txt_box_under_01 clearfix">
                  <div class="txt_box_01">
                      <p><?php echo get_post_meta(get_the_ID(), '通学区域1', true); ?></p>
                  </div>
                  <div class="txt_box_02">
                      <p><?php echo get_post_meta(get_the_ID(), '通学区域2', true); ?></p>
                  </div>
                  <div class="txt_box_03">
                      <p><?php echo get_post_meta(get_the_ID(), '通学区域3', true); ?></p>
                  </div>
              </div>
              <div class="link_btn_box clearfix">
                  <p class="link_btn back02 sp_only"><a href="../?bukken=jsearch&shub=1&ksh1%5B%5D=<?php echo $sch_id; ?>&tik=0&kalb=0&kahb=0&mel=0&meh=0">通学区域に該当する<br>物件一覧を見る</a></p>
                  <p class="link_btn back01"><a href="<?php echo $ref; ?>">BACK</a></p>
                  <p class="link_btn back02 pc_only"><a href="../?bukken=jsearch&shub=1&ksh1%5B%5D=<?php echo $sch_id; ?>&tik=0&kalb=0&kahb=0&mel=0&meh=0">通学区域に該当する物件一覧を見る</a></p>
              </div>
          </div>
      </section>
		<?php
			// the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
 </div><!-- .under_contents_wrap -->
	</div><!-- .entry-content -->

</article><!-- #post-## -->
