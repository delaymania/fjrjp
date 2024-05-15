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

<div class="under_contents_wrap">

<div class="under_contents">
<section class="loan">
<article>
<div class="loan_box_list_wrap">
<table class="loan_box_list">
<tbody><tr>
<td class="loan_box assurance_box">
<h2 class="ttl">
<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_assurance_logo_01.png" alt="JHS 地盤保証"></span><br>
<span>JHS 地盤保証</span><br>
</h2>
<p class="name"><a href="https://service.j-shield.co.jp/jiban/ground_support_system" target="_blank">JHS 地盤保証</a></p>
<p class="lead">地盤調査から品質保証までワンストップで徹底サポート。 </p>
</td>

<td class="loan_box assurance_box">
<h2 class="ttl">
<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_assurance_logo_02.png" alt="住宅設備保証"></span><br>
<span>住宅設備保証</span><br>
</h2>
<p class="name"><a href="https://service.j-shield.co.jp/service/household-equipment-warranty" target="_blank">住宅設備保証</a></p>
<p class="lead">建物や地盤にプラスして「設備」にも安心を。</p>
</td>
</tr>
<tr>
<td class="loan_box assurance_box">
<h2 class="ttl">
<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_assurance_logo_03.png" alt="アフターサポート"></span><br>
<span>アフターサポート</span><br>
</h2>
<p class="name"><a href="https://service.j-shield.co.jp/housing/aftersupport" target="_blank">アフターサポート</a></p>
<p class="lead">JHSは、幅広いアフターサービスに対応しています。</p>
</td>
<td class="loan_box assurance_box">
</td>
</tr>
</tbody></table>
</div>
</article>
</section>
</div>
</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
