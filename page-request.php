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
            <h2 class="ttl">REQUEST<span>資料請求</span></h2>
        </div>
    </div>
    <div class="under_contents_wrap">

<div class="entry-content">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout_lineup.css" type="text/css" media="all">
<link rel="stylesheet" media="(max-width: 768px)" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile_lineup.css">
<div class="form-layout">
<h3 class="form_title">資料請求</h3>

  
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php the_content(); ?>

      <?php endwhile; else: ?>
      <?php endif; ?>

</div>
	</div>
</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
