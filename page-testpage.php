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

<div class="under_contents_wrap entry-content">
<div class="under_contents form-layout">

<h2 class="form_title">テストページ</h2>
  
<script src="https://sdk.form.run/js/v2/embed.js"></script>
<div
  class="formrun-embed"
  data-formrun-form="@arc-form"
  data-formrun-redirect="true"
  data-formrun-host="https://forms.shonan-no-koumuten.jp"
>
</div>
  
  <!--
<div class="iframe-container">
<iframe id="iframeContact" src="https://info.shonan-no-koumuten.jp/l/1063212/2024-04-17/dyr8nm" width="100%" height="1500px" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
</div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
      <?php the_content(); ?>
      <?php endwhile; else: ?>
      <?php endif; ?>
  -->
	
  
</div>
</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
