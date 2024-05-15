<?php
/**
 * 固定ページ・投稿詳細ヘッダーテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

defined( 'ABSPATH' ) || die();

if ( ! ys_is_active_post_header() ) {
	return;
}
?>

    <header class="kiji-header">
            <h1 class="kiji-title"><?php the_title(); ?></h1>
    </header>
