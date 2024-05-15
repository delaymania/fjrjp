<?php
/**
 * ヘッダーテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php ys_the_head_attr(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no"/>
	<?php wp_head(); ?>
  
<?php if ( is_single('hello_zero-cube-malibu') ): ?>

<!-- Stylesheet -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/flexslider.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/style-base.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/style-responsive.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/staff_img.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/lightbox.css" rel="stylesheet"><!-- desktop gallery slider -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/slider-pro.min.css" rel="stylesheet"><!-- mobile gallery slider -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/lity.css"><!-- mobile用youbue動画lightbox -->

<!-- Javascript -->
  


  

  <!--
<script type="text/javascript" id="mierucajs">
window.__fid = window.__fid || [];__fid.push([618910028]);
(function() {
function mieruca(){if(typeof window.__fjsld != "undefined") return; window.__fjsld = 1; var fjs = document.createElement('script'); fjs.type = 'text/javascript'; fjs.async = true; fjs.id = "fjssync"; var timestamp = new Date;fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v='+ timestamp.getTime(); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(fjs, x); };
setTimeout(mieruca, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
})();
</script>

		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.next-at.co.jp\/zerocube\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
  
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var rlArgs = {"script":"fancybox","selector":"lightbox","customEvents":"","activeGalleries":"1","modal":"0","showOverlay":"1","showCloseButton":"1","enableEscapeButton":"1","hideOnOverlayClick":"1","hideOnContentClick":"0","cyclic":"0","showNavArrows":"1","autoScale":"1","scrolling":"yes","centerOnScroll":"1","opacity":"1","overlayOpacity":"70","overlayColor":"#666","titleShow":"1","titlePosition":"outside","transitions":"fade","easings":"swing","speeds":"300","changeSpeed":"300","changeFade":"100","padding":"5","margin":"5","videoWidth":"1080","videoHeight":"720"};
/* ]]> */
</script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/front.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/ajaxzip3.js" charset="UTF-8"></script>
    <script type="text/javascript">
    jQuery(function($){
    $("#zip").attr('onKeyUp', 'AjaxZip3.zip2addr(this,\'\',\'address\',\'address\');');
    $("#zip2").attr('onKeyUp', 'AjaxZip3.zip2addr(\'zip1\',\'zip2\',\'prefecture\',\'city\',\'street\');');
});</script>
  
  <script type="text/javascript" async="" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/99ef3918-e41d-4be8-9e63-8aa49429050e.js"></script>
  <script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/common.js"></script><script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/util.js"></script><script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/map.js"></script><script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/marker.js"></script><script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/common.js"></script><script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/util.js"></script><script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/common.js"></script><script type="text/javascript" charset="UTF-8" src="<?php echo get_stylesheet_directory_uri(); ?>/lp/malibu/util.js"></script>
  -->
<?php endif; ?>
  
</head>
<body <?php body_class(); ?> <?php if ( is_page('zero-cube-malibu') ): ?>id="malibu" data-spy="scroll" data-target=".navbar" data-offset="75" onload="initialize();" oncontextmenu="return false;"<?php endif; ?>>
  
  
<?php wp_body_open(); ?>
<?php do_action( 'ys_body_prepend' ); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ystandard' ); ?></a>
	<?php ys_get_template_part( 'template-parts/header/site-header' ); ?>
	<?php do_action( 'ys_after_site_header' ); ?>
	<div id="content" class="site-content">
