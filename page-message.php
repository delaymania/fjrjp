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
            <h2 class="ttl"><?php echo esc_html(get_field('sub_title')); ?><span><?php the_title(); ?></span></h2>
        </div>
    </div>
    
    <div class="under_contents_wrap">
<section class="message">
<article>
<div class="message_box">
<div class="message_box_under">
<div class="message_boxr_wrap clearfix">
<div class="message_boxr">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <div class="photo">
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
      </div>

      <?php the_content(); ?>

      <?php endwhile; else: ?>
      <?php endif; ?>


</div>
</div>
</div>
</div>
</article>
</section>
</div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
