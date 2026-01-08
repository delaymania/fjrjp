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
	<div class="under_contents_wrap entry-content">
		<div class="under_contents form-layout">

			<h2 class="form_title">資料請求</h2>

<script src="https://sdk.form.run/js/v2/embed.js"></script>
<div
  class="formrun-embed"
  data-formrun-form="@arc-form"
  data-formrun-redirect="true"
  data-formrun-host="https://forms.shonan-no-koumuten.jp"
>
</div>


    </div>
	</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
