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

<h2 class="form_title">お問い合わせフォーム</h2>
<div class="form_sub_title">メールアドレスについてのご注意</div>
<p>フリーメール(Yahoo!メール、Gmail、など)をご利用の場合、弊社からのメールが届かないことや、「迷惑メール用フォルダ」などに振り分けられる場合があ ることが確認されています。ご入カいただくメールアドレスは、できるだけ<span class="form_notice">『フリーメールではないメー ルアドレス』のご利用をお勧めいたします。 </span></p>
<p>また、弊社からのメールが届かない場合や、返信が遅い場合には、念のためお使いのメールソフトの「迷惑メール用フォルダ」などをご確認いただけますよう、併せてお願いいたします。</p>
  
		
<form accept-charset="UTF-8" method="post" action="https://info.fuji-realty.com/l/1063212/2024-04-17/dyr8nm" class="form" id="pardot-form">
<table class="form_register">
<tbody>
<tr>
  <th><span class="required">必須</span>お名前</th>
  <td>
    <div class="form-address-side-frame">
      <div class="form-address-side">
        <label class="field-label" for="1063212_302343pi_1063212_302343">姓</label>
        <input type="text" name="1063212_302343pi_1063212_302343" id="1063212_302343pi_1063212_302343" value="" class="text" size="30" maxlength="80" onchange="" onfocus="" />
        <div id="error_for_1063212_302343pi_1063212_302343" style="display:none"></div>
      </div>
      <div class="form-address-side">
        <label class="field-label" for="1063212_302346pi_1063212_302346">名</label>
        <input type="text" name="1063212_302346pi_1063212_302346" id="1063212_302346pi_1063212_302346" value="" class="text" size="30" maxlength="40" onchange="" onfocus="" />
        <div id="error_for_1063212_302346pi_1063212_302346" style="display:none"></div>
      </div>
    </div>
  </td>
</tr>
<tr>
  <th><span class="required">必須</span><label class="field-label" for="1063212_302349pi_1063212_302349">ふりがな</label></th>
  <td>
    <input type="text" name="1063212_302349pi_1063212_302349" id="1063212_302349pi_1063212_302349" value="" class="text" size="30" maxlength="65535" onchange="" onfocus="" />
    <div id="error_for_1063212_302349pi_1063212_302349" style="display:none"></div>
  </td>
</tr>
<tr>
  <th><span class="required">必須</span><label class="field-label" for="1063212_302352pi_1063212_302352">メールアドレス</label></th>
  <td>
    <input type="text" name="1063212_302352pi_1063212_302352" id="1063212_302352pi_1063212_302352" value="" class="text" size="30" maxlength="255" onchange="" onfocus="" />
    <div id="error_for_1063212_302352pi_1063212_302352" style="display:none"></div>
  </td>
</tr>
<tr>
  <th><span class="required any">任意</span><label class="field-label" for="1063212_302355pi_1063212_302355">電話番号</label></th>
  <td>
    <input type="text" name="1063212_302355pi_1063212_302355" id="1063212_302355pi_1063212_302355" value="" class="text" size="30" maxlength="40" onchange="" onfocus="" />
    <div id="error_for_1063212_302355pi_1063212_302355" style="display:none"></div>
  </td>
</tr>
<tr>
<th><span class="required any">任意</span>ご住所</th>
<td>
  <div class="form-address-box">
  <label class="field-label" for="1063212_302358pi_1063212_302358">郵便番号</label>
  <input type="text" name="1063212_302358pi_1063212_302358" id="1063212_302358pi_1063212_302358" value="" class="text" size="30" maxlength="32" onchange="" onfocus="" />
  <div id="error_for_1063212_302358pi_1063212_302358" style="display:none"></div>
  </div>
  <div class="form-address-box">
  <label class="field-label" for="1063212_302373pi_1063212_302373">都道府県</label>
  <input type="text" name="1063212_302373pi_1063212_302373" id="1063212_302373pi_1063212_302373" value="" class="text" size="30" maxlength="80" onchange="" onfocus="" />
  <div id="error_for_1063212_302373pi_1063212_302373" style="display:none"></div>
  </div>
  <div class="form-address-box">
  <label class="field-label" for="1063212_302361pi_1063212_302361">市区町村・番地</label>
  <input type="text" name="1063212_302361pi_1063212_302361" id="1063212_302361pi_1063212_302361" value="" class="text" size="30" maxlength="255" onchange="" onfocus="" />
  <div id="error_for_1063212_302361pi_1063212_302361" style="display:none"></div>
  </div>

  <div class="form-address-box">
  <label class="field-label" for="1063212_302364pi_1063212_302364">建物名</label>
  <input type="text" name="1063212_302364pi_1063212_302364" id="1063212_302364pi_1063212_302364" value="" class="text" size="30" maxlength="255" onchange="" onfocus="" />
  <div id="error_for_1063212_302364pi_1063212_302364" style="display:none"></div>
  </div>

</td>
</tr>
<tr>
  <th><span class="required">必須</span><label class="field-label" for="1063212_302367pi_1063212_302367">お問い合わせの内容</label></th>
  <td>
  <textarea name="1063212_302367pi_1063212_302367" id="1063212_302367pi_1063212_302367" onchange="" cols="40" rows="10" class="standard"></textarea>
  <div id="error_for_1063212_302367pi_1063212_302367" style="display:none"></div>
  </td>
</tr>
<tr>
  <th><span class="required">必須</span><label class="field-label" for="1063212_302370pi_1063212_302370">当サイトを何でお知りになりましたか？(複数可)</label></th>
  <td>
    <div class="form-address-box">
      <span class="value"><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58107" id="1063212_302370pi_1063212_302370_58107" value="58107" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58107">Instagram</label></span><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58110" id="1063212_302370pi_1063212_302370_58110" value="58110" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58110">Pinterest</label></span><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58113" id="1063212_302370pi_1063212_302370_58113" value="58113" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58113">Google</label></span><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58116" id="1063212_302370pi_1063212_302370_58116" value="58116" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58116">Yahoo!検索</label></span><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58119" id="1063212_302370pi_1063212_302370_58119" value="58119" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58119">Facebook</label></span><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58122" id="1063212_302370pi_1063212_302370_58122" value="58122" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58122">Twitter</label></span><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58125" id="1063212_302370pi_1063212_302370_58125" value="58125" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58125">友人の紹介</label></span><span><input type="checkbox" name="1063212_302370pi_1063212_302370_58128" id="1063212_302370pi_1063212_302370_58128" value="58128" onchange="" /><label class="inline" for="1063212_302370pi_1063212_302370_58128">チラシ</label></span></span>
      <div id="error_for_1063212_302370pi_1063212_302370" style="display:none"></div>
    </div>
  
    <div class="form-address-box">
      <label class="field-label" for="1063212_302376pi_1063212_302376"></label>
  		<input type="text" name="1063212_302376pi_1063212_302376" id="1063212_302376pi_1063212_302376" value="" class="text" size="30" maxlength="65535" onchange="" onfocus="" />
			<div id="error_for_1063212_302376pi_1063212_302376" style="display:none"></div>
    </div>
  </td>
</tr>

</tbody>
</table>

<div class="box_privacy"><p><span class="required">必須</span>当社の個人情報保護方針を、<a href="/privacy/" target="_blank" rel="noopener">こちらから</a>ご確認いただけます。</p><p>[checkbox* kiyaku use_label_element class:check "個人情報の取扱いについて同意する"]</p></div>



<p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
  <label for="pi_extra_field">Comments</label>
  <input type="text" name="pi_extra_field" id="pi_extra_field"/>
</p>
<div class="input_button">
  <div class="wpcf7-form-control wpcf7-confirm wpcf7c-btn-confirm">
    <input name="_utf8" type="hidden" value="&#9731;" />
    <input type="submit" accesskey="s" value="送信する" />
  </div>
</div>

  
<script type="text/javascript">
//<![CDATA[

	var anchors = document.getElementsByTagName("a");
	for (var i=0; i<anchors.length; i++) {
		var anchor = anchors[i];
		if(anchor.getAttribute("href")&&!anchor.getAttribute("target")) {
			anchor.target = "_top";
		}
	}
		
//]]>
</script>
<input type="hidden" name="hiddenDependentFields" id="hiddenDependentFields" value="" />
</form>
  
  
  
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <?php the_content(); ?>

      <?php endwhile; else: ?>
      <?php endif; ?>

  
  
  
  
  
</div>
</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
