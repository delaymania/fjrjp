<?php
/**
 * The template used for displaying page content
 *
 * @package WordPressbreadcrumb
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
$slug = $post->post_name;
$parent_id = $post->post_parent;
if($parent_id){
  $p_post = get_post($parent_id);
  $slug = $p_post->post_name;
  $title = $p_post->post_title;
}
if($slug=="privacypolicy"){
  $slug = "PRIVACY POLICY";
}
if($slug=="school_information"){
  $slug = "SCHOOL";
}
$slug = str_replace("_", " ", $slug);
?>
	<header class="entry-header">
     <h2 class="entry-title bg-none<?php if (is_page('weekday_campaign')): ?> weekday_campaign<?php endif; ?>">
     	<?php echo esc_html($slug); ?>
		<span><?php echo(is_page('form'))? esc_html($title) : esc_html(get_the_title()) ; ?></span>
	<?php if (is_page('freaks-house')): ?><i>’</i><?php endif; ?>
	</h2>
	</header><!-- .entry-header -->

	<?php // twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
  <div class="breadcrumb">
    <ul class="clearfix">
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
    <?php if($parent_id): ?>
    <li>
	<?php if (is_parent_slug() === 'campaign'):?>
    	<?php echo esc_html($title); ?>
	<?php else: ?>
    	<a href="<?php the_permalink($parent_id); ?>"><?php echo esc_html($title); ?></a>
	<?php endif; ?>
    </li>
    <?php endif; ?>
    <li><?php the_title(); ?></li>
    </ul>
  </div>
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
