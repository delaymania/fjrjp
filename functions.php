<?php

/*================================================================================================================================
 イベントのテンプレートファイル
 ※page-hello_商品名.phpファイルを複製する際には下記の設定もコピペで増やす
================================================================================================================================*/

add_filter( 'template_include', 'load_custom_template_for_specific_slugs', 99 );

function load_custom_template_for_specific_slugs( $template ) {
    if ( is_singular('event') ) {
        $post_slug = get_post()->post_name;

        switch ($post_slug) {
            case 'hello_zero-cube-freaks':
                $new_template = locate_template( array( 'single-hello_zero-cube-freaks.php' ) );
                break;
            case 'hello_freaks-house':
                $new_template = locate_template( array( 'single-hello_freaks-house.php' ) );
                break;
            case 'hello_zero-cube':
                $new_template = locate_template( array( 'single-hello_zero-cube.php' ) );
                break;
            case 'hello_zero-cube-malibu':/* 元ページのURLが違っているためテンプレートの作り直し */
                $new_template = locate_template( array( 'single-hello_zero-cube-malibu.php' ) );
                break;
            case 'hello_zero-cube-stepfloor':
                $new_template = locate_template( array( 'single-hello_zero-cube-stepfloor.php' ) );
                break;
            case 'hello_the-house-garage-project':
                $new_template = locate_template( array( 'single-hello_the-house-garage-project.php' ) );
                break;
            case 'hello_wtwhouseproject':
                $new_template = locate_template( array( 'single-hello_wtwhouseproject.php' ) );
                break;
            case 'hello_zero-cube-kai':
                $new_template = locate_template( array( 'single-hello_zero-cube-kai.php' ) );
                break;
            case 'hello_zero-cube-mini':
                $new_template = locate_template( array( 'single-hello_zero-cube-mini.php' ) );
                break;
            case 'hello_hyva-and-style':
                $new_template = locate_template( array( 'single-hello_hyva-and-style.php' ) );
                break;
            case 'hello_nordic-house':
                $new_template = locate_template( array( 'single-hello_nordic-house.php' ) );
                break;
            case 'hello_blanc-ange':
                $new_template = locate_template( array( 'single-hello_blanc-ange.php' ) );
                break;
            case 'hello_structure':
                $new_template = locate_template( array( 'single-hello_structure.php' ) );
                break;
            case 'hello_sunny-track-house':
                $new_template = locate_template( array( 'single-hello_sunny-track-house.php' ) );
                break;
            default:
                $new_template = '';
        }

        if ( !empty($new_template) ) {
            return $new_template;
        }
    }

    return $template;
}

/*================================================================================================================================
 Google タグ（gtag.js）イベントを GTM4WP 出力直後に挿入
================================================================================================================================*/
// ------------------------------
// 1. GTM4WP の出力位置を <head> の終わりに移動
// ------------------------------
add_action( 'plugins_loaded', function(){
    // gtm4wp_wp_header_begin: priority=1 → 9999
    if ( has_action( 'wp_head', 'gtm4wp_wp_header_begin' ) ) {
        remove_action( 'wp_head', 'gtm4wp_wp_header_begin', 1 );
        add_action(    'wp_head', 'gtm4wp_wp_header_begin', 9999 );
    }
    // gtm4wp_wp_header_end:   priority=100 → 10000
    if ( has_action( 'wp_head', 'gtm4wp_wp_header_end' ) ) {
        remove_action( 'wp_head', 'gtm4wp_wp_header_end', 100 );
        add_action(    'wp_head', 'gtm4wp_wp_header_end', 10000 );
    }
}, 20 );

// ------------------------------
// 2. 特定ページでだけ、最後の2箇所目の直後に gtag イベントを出力（バッファ方式）
// ------------------------------
add_action( 'template_redirect', function(){
    // 「transmission-complete」固定ページ以外は何もしない
    if ( ! is_page( 'transmission-complete' ) ) {
        return;
    }
    ob_start( function( $buffer ){
        $needle  = '<!-- End Google Tag Manager for WordPress by gtm4wp.com -->';
        // 差し込むスクリプト本体（マーカーは含めない）
        $insert  = "\n" . '<script>
  gtag(\'event\', \'conversion_event_purchase_2\', {
    // <event_parameters>
  });
</script>';

        // 末尾マーカーの位置を取得
        $pos = strrpos( $buffer, $needle );
        if ( $pos === false ) {
            // マーカーが見つからなければそのまま返す
            return $buffer;
        }
        // マーカーの直後オフセットを計算
        $pos_end = $pos + strlen( $needle );
        // マーカー末尾にだけスクリプトを挿入
        return substr( $buffer, 0, $pos_end )
             . $insert
             . substr( $buffer, $pos_end );
    } );
} );


/*================================================================================================================================
 ウィジェット
================================================================================================================================*/
/* ウィジェットの外側のdivを削除 */
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets() {
	register_widget( 'My_Text_Widget' );
}

class My_Text_Widget extends WP_Widget_Text {
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$text  = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
		echo $before_widget;
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		} ?>
		<?php echo ! empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?>
		<?php
		echo $after_widget;
	}
}

/*
 * ウィジェット ------------------------------------------------------------------------------------------------------
 */

if ( function_exists( 'register_sidebar' ) ) {
	  register_sidebar( [
		  'id'            => 'kaisaibi',
		  'name'          => '開催日',
		  'description'   => '',
		  'before_widget' => '',
		  'after_widget'  => '',
		  'before_title'  => '',
		  'after_title'   => '',
	  ] );
	  register_sidebar( [
		  'id'            => 'top-event-list',
		  'name'          => 'トップページ イベントの投稿一覧',
		  'description'   => '',
		  'before_widget' => '<div class="event-list">',
		  'after_widget'  => '</div>',
		  'before_title'  => '',
		  'after_title'   => '',
	  ] );
}


/*================================================================================================================================
 イベントのカスタム投稿タイプをショートコード化
================================================================================================================================*/
function display_events_shortcode($atts) {
    // ショートコードの属性（atts）を解析
    $atts = shortcode_atts(array(
        'ids' => '', // デフォルトは空
    ), $atts, 'events');

    $output = '';

    // IDsを配列に変換
    $ids = explode(',', $atts['ids']);

    foreach ($ids as $id) {
        $id = trim($id); // 余分なスペースを削除
        $post = get_post($id);

        // 投稿が存在し、カスタム投稿タイプが 'event' である場合に表示
        if ($post && $post->post_type === 'event') {
            $output .= '<div class="event-box">';
            $output .= '<a href="' . esc_url(get_permalink($post)) . '">';
            
            if (has_post_thumbnail($post)) {
                $output .= '<p class="ph_flame">' . get_the_post_thumbnail($post, 'full', array('alt' => esc_attr(get_the_title($post)))) . '</p>';
            }

            $output .= '<div class="link_box">';
            $output .= '<h3 class="ttl">' . esc_html(get_the_title($post)) . '</h3>';
            $output .= '</div>'; // link_box end
            $output .= '</a>';
            $output .= '</div>';
        }
    }

    return $output;
}
add_shortcode('events', 'display_events_shortcode');




/*================================================================================================================================
 諸々の機能追加
================================================================================================================================*/
/*
 * ACFがカスタムフィールドを出力しないようにしているためそれを修正 ------------------------------------------------------
 */
add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );

/*
 * headタグ内に出力 ------------------------------------------------------
 */
add_action( 'wp_enqueue_scripts', function () {

	// 追加したいcssのファイルをheadタグ内に出力
	wp_enqueue_style( 'notosansjapanese', '//fonts.googleapis.com/earlyaccess/notosansjapanese.css', '', '' );
	wp_enqueue_style( 'oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,700', '', '' );
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '', '' );
  wp_enqueue_style( 'child-theme-common', get_stylesheet_directory_uri() . '/css/common.css', array(), '' );
  wp_enqueue_style( 'child-theme-layout_lineup', get_stylesheet_directory_uri() . '/css/layout_lineup.css', array(), '' );
  wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '' );

	// 固定ページのスラッグが「contact」のページにのみcontact form 7のcssファイルを読み込む
	if ( is_page( 'contact' ) ) {
		wp_enqueue_style( 'contactform7_css', plugins_url() . '/contact-form-7/includes/css/styles.css', '', '', false );
	}
  
}, 11 );

/*
 * body閉じタグ直前にpinterestのjsを出力 ------------------------------------------------------
 */
function add_pinterest_script() {
    echo '<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>';
}
add_action('wp_footer', 'add_pinterest_script');

/*
 * サイドバーのウィジェットをブロックエディタではないものに戻す ------------------------------------------------------
 */
function keyrole_widgets_block_editor() {
	remove_theme_support( 'widgets-block-editor' );
}

add_action( 'after_setup_theme', 'keyrole_widgets_block_editor' );


/*================================================================================================================================
 管理画面に関すること
================================================================================================================================*/
/* WordPress の投稿スラッグを自動的に生成する ------------------------------------------------------ */
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

/* 更新日の追加 ------------------------------------------------------ */
function get_mtime( $format ) {
	$mtime = get_the_modified_time( 'Ymd' );
	$ptime = get_the_time( 'Ymd' );
	if ( $ptime > $mtime ) {
		return get_the_time( $format );
	} elseif ( $ptime === $mtime ) {
		return null;
	} else {
		return get_the_modified_time( $format );
	}
}

/* 管理画面の投稿一覧にサムネイルとスラッグを表示 */
function add_posts_columns($columns) {
    $columns['thumbnail'] = 'サムネイル';
    $columns['slug'] = "スラッグ";
    return $columns;
}
function add_posts_columns_row($column_name, $post_id) {
    if ('thumbnail' == $column_name) {
        $thumb = get_the_post_thumbnail($post_id, array(120, 120), 'thumbnail');
        echo ($thumb) ? $thumb : '－';
    }
    if ($column_name == 'slug') {
        $post = get_post($post_id);
        $slug = $post->post_name;
        echo esc_attr($slug);
    }
}
add_filter('manage_posts_columns', 'add_posts_columns');
add_action('manage_posts_custom_column', 'add_posts_columns_row', 10, 2);

/* 管理画面の固定ページ一覧にサムネイルとスラッグを表示 ------------------------------------------------------ */
function add_page_columns($columns) {
	$columns['thumbnail'] = 'サムネイル';
	$columns['slug'] = "スラッグ";
	return $columns;
}
function add_page_column_row($column_name, $post_id) {
	if ( 'thumbnail' == $column_name ) {
		$thumb = get_the_post_thumbnail($post_id, array(120,120), 'thumbnail');
		echo ( $thumb ) ? $thumb : '－';
	}
	if( $column_name == 'slug' ) {
		$post = get_post($post_id);
		$slug = $post->post_name;
		echo esc_attr($slug);
	}
}
add_filter( 'manage_pages_columns', 'add_page_columns');
add_action( 'manage_pages_custom_column', 'add_page_column_row', 10, 2);


/*================================================================================================================================
 アイキャッチ・サムネイルのサイズ指定
================================================================================================================================*/
add_theme_support('post-thumbnails');
add_image_size( 'thumb', 400, 400, true );

/*================================================================================================================================
 コメントを非表示に
================================================================================================================================*/
add_filter( 'comments_open', '__return_false' );

/*================================================================================================================================
 条件分岐
================================================================================================================================*/
/* スマホやタブレットの表示を条件分岐できるようにする記述 ------------------------------------------------------ */
function is_mobile() {
	$useragents = [
		'iPhone',
		'iPod',
		'Android.*Mobile',
		'Windows.*Phone',
		'dream',
		'CUPCAKE',
		'blackberry9500',
		'blackberry9530',
		'blackberry9520',
		'blackberry9550',
		'blackberry9800',
		'webOS',
		'incognito',
		'webmate',
	];
	$pattern    = '/' . implode( '|', $useragents ) . '/i';

	return preg_match( $pattern, $_SERVER['HTTP_USER_AGENT'] );
}
/*================================================================================================================================
 イベントの開催日の土日自動出力
 ・range_start / range_end：連休モード
 ・single_sat / single_sun：事前入力できる単発日（12/27, 1/5 など）
 ・single_buffer_days     ：「何日前〜当日まで」単発日を有効にするか（デフォルト7日）
================================================================================================================================*/
function get_next_weekend_dates($atts) {
    // デフォルト含め、7つの属性を受け取る
    $atts = shortcode_atts(
        array(
            'shtdn_sat'          => '',    // 臨時休業（土曜）
            'shtdn_sun'          => '',    // 臨時休業（日曜）
            'range_start'        => '',    // 連休開始 (n/j)
            'range_end'          => '',    // 連休終了 (n/j)
            'single_sat'         => '',    // 単発開催（土曜のみ） "12/27"
            'single_sun'         => '',    // 単発開催（日曜のみ） "1/5"
            'single_buffer_days' => '7',   // 何日前から単発日を有効にするか（0以上の整数）
        ),
        $atts
    );

    // 日本語曜日配列
    $weekday_jp = array('日','月','火','水','木','金','土');

    // ----------------------------------------------------------------
    // 1) 連休モード（range_start / range_end が両方入っているとき最優先）
    // ----------------------------------------------------------------
    if (isset($atts['range_start'], $atts['range_end'])
        && $atts['range_start'] !== ''
        && $atts['range_end']   !== ''
    ) {
        // 開始日と終了日を n/j でパース（今年の日付として解釈）
        $start = DateTime::createFromFormat('n/j', $atts['range_start']);
        $end   = DateTime::createFromFormat('n/j', $atts['range_end']);

        if (!$start) return '<p>無効な開始日: ' . esc_html($atts['range_start']) . '</p>';
        if (!$end)   return '<p>無効な終了日: ' . esc_html($atts['range_end']) . '</p>';

        // 曜日を付与
        $fmt_start = $start->format('n/j') . '(' . $weekday_jp[(int)$start->format('w')] . ')';
        $fmt_end   = $end  ->format('n/j') . '(' . $weekday_jp[(int)$end  ->format('w')] . ')';

        return sprintf(
            '<div class="textwidget custom-html-widget"><span class="ffb">'
            . '<span class="weekend-range-start">%s</span>'
            . '<span class="weekend-range-separator">〜</span>'
            . '<span class="weekend-range-end">%s</span>'
            . '</span></div>',
            esc_html($fmt_start),
            esc_html($fmt_end)
        );
    }

    // ----------------------------------------------------------------
    // 2) 単発開催モード（single_* が指定されている場合）
    //    → 「0日以上 & buffer日以内」の未来日だけを有効にする
    // ----------------------------------------------------------------
    $today   = new DateTime();
    $todayY  = (int)$today->format('Y');
    $todayM  = (int)$today->format('n');
    $todayD  = (int)$today->format('j');

    // バッファ日数（整数でなければ 7 にフォールバック）
    $buffer_days = (int)$atts['single_buffer_days'];
    if ($buffer_days < 0) {
        $buffer_days = 0;
    }
    if ($buffer_days === 0 && $atts['single_buffer_days'] === '') {
        // 未指定の場合は 7日に
        $buffer_days = 7;
    }

    // 「m/d」を「今年または来年の日付」に解釈するヘルパー
    $parse_single_date = function ($md) use ($todayY, $todayM, $todayD) {
        $md = trim($md);
        if ($md === '') return null;

        // "12/27" や "12-27" を許容
        $parts = preg_split('#[/-]#', $md);
        if (count($parts) !== 2) return null;

        $m = (int)$parts[0];
        $d = (int)$parts[1];
        if ($m < 1 || $m > 12 || $d < 1 || $d > 31) {
            return null;
        }

        $year = $todayY;
        // すでに今年は過ぎている日付の場合は「来年」とみなす
        if ($m < $todayM || ($m === $todayM && $d < $todayD)) {
            $year++;
        }

        $dt = DateTime::createFromFormat('Y-n-j', sprintf('%d-%d-%d', $year, $m, $d));
        return $dt ?: null;
    };

    $single_events = array();

    // 土曜単発
    if (isset($atts['single_sat']) && trim($atts['single_sat']) !== '') {
        $dt = $parse_single_date($atts['single_sat']);
        if (!$dt) {
            return '<p>無効な日付（土曜のみ開催 single_sat）: ' . esc_html($atts['single_sat']) . '</p>';
        }
        $diff_days = (int)$today->diff($dt)->format('%r%a'); // 0, 1, 2... / -1, -2...
        $single_events[] = array(
            'type' => 'sat',
            'date' => $dt,
            'diff' => $diff_days,
        );
    }

    // 日曜単発
    if (isset($atts['single_sun']) && trim($atts['single_sun']) !== '') {
        $dt = $parse_single_date($atts['single_sun']);
        if (!$dt) {
            return '<p>無効な日付（日曜のみ開催 single_sun）: ' . esc_html($atts['single_sun']) . '</p>';
        }
        $diff_days = (int)$today->diff($dt)->format('%r%a');
        $single_events[] = array(
            'type' => 'sun',
            'date' => $dt,
            'diff' => $diff_days,
        );
    }

    // 「0日以上 & buffer日以内」のイベントだけを有効候補とする
    $valid_events = array();
    foreach ($single_events as $ev) {
        if ($ev['diff'] >= 0 && $ev['diff'] <= $buffer_days) {
            $valid_events[] = $ev;
        }
    }

    if (!empty($valid_events)) {
        // 一番近い日付（diff が最小）のイベント日を採用
        usort($valid_events, function($a, $b) {
            return $a['diff'] <=> $b['diff'];
        });
        $target_date = $valid_events[0]['date'];

        $parts_html = array();

        // 同じ日付のもの（sat / sun 両方が同じ日なら両方）を出力
        foreach ($valid_events as $ev) {
            if ($ev['date']->format('Y-m-d') !== $target_date->format('Y-m-d')) {
                continue;
            }
            $w = (int)$ev['date']->format('w');
            $fmt = $ev['date']->format('n/j') . '(' . $weekday_jp[$w] . ')';

            if ($ev['type'] === 'sat') {
                $parts_html[] = '<span class="sat">'  . esc_html($fmt) . '</span>';
            } else {
                $parts_html[] = '<span class="holi">' . esc_html($fmt) . '</span>';
            }
        }

        if (!empty($parts_html)) {
            return '<div class="textwidget custom-html-widget"><span class="ffb">'
                 . implode(' ', $parts_html)
                 . '</span></div>';
        }
        // 万一ここに来たら、このあと通常モードへフォールバック
    }

    // ----------------------------------------------------------------
    // 3) 従来の「次の土日」モード（単発や連休の対象でないとき）
    // ----------------------------------------------------------------
    $dow = (int)$today->format('w'); // 0=日曜...6=土曜

    // 次の土曜・日曜を取得
    $saturday = ($dow === 6)
        ? clone $today
        : (clone $today)->modify('next Saturday');
    $sunday   = (clone $saturday)->modify('+1 day');

    // 臨時休業上書き（属性が「存在かつ空欄でない」場合のみ）
    if (isset($atts['shtdn_sat']) && trim($atts['shtdn_sat']) !== '') {
        $tmp = DateTime::createFromFormat('n/j', $atts['shtdn_sat']);
        if (!$tmp) {
            return '<p>無効な臨時休業（土曜）: ' . esc_html($atts['shtdn_sat']) . '</p>';
        }
        $saturday = $tmp;
    }
    if (isset($atts['shtdn_sun']) && trim($atts['shtdn_sun']) !== '') {
        $tmp = DateTime::createFromFormat('n/j', $atts['shtdn_sun']);
        if (!$tmp) {
            return '<p>無効な臨時休業（日曜）: ' . esc_html($atts['shtdn_sun']) . '</p>';
        }
        $sunday = $tmp;
    }

    // フォーマットして返す
    $fmt_sat = $saturday->format('n/j') . '(' . $weekday_jp[(int)$saturday->format('w')] . ')';
    $fmt_sun = $sunday  ->format('n/j') . '(' . $weekday_jp[(int)$sunday->format('w')] . ')';

    return sprintf(
        '<div class="textwidget custom-html-widget"><span class="ffb">'
        . '<span class="sat">%s </span>'
        . '<span class="holi">%s</span>'
        . '</span></div>',
        esc_html($fmt_sat),
        esc_html($fmt_sun)
    );
}
add_shortcode('next_weekend_dates', 'get_next_weekend_dates');


/*================================================================================================================================
 wp_is_mobileからタブレットを省いて、スマホorタブレット・PCの分岐に改変する記述
================================================================================================================================*/
function is_smartphone() {
    // まず WP 標準でモバイル判定
    if ( ! wp_is_mobile() ) {
        return false;
    }

    $ua = isset( $_SERVER['HTTP_USER_AGENT'] ) ? $_SERVER['HTTP_USER_AGENT'] : '';

    // iPad を PC 扱い（スマホではない）
    if ( strpos( $ua, 'iPad' ) !== false ) {
        return false;
    }
    // Android タブレットを PC 扱い（Mobile トークンがなければタブレット）
    if ( strpos( $ua, 'Android' ) !== false
         && strpos( $ua, 'Mobile' ) === false ) {
        return false;
    }

    // 上記以外はスマホとみなす
    return true;
}

/*================================================================================================================================
 メール送信したページのタイトルとURLを取得する機能が動かなかった時用のコード
 https://wordpress.org/support/topic/%E7%89%B9%E6%AE%8A%E3%83%A1%E3%83%BC%E3%83%AB%E3%82%BF%E3%82%B0-_post_title-%E3%81%8C%E5%8A%B9%E3%81%8B%E3%81%AA%E3%81%84/
================================================================================================================================*/
add_filter( 'wpcf7_special_mail_tags', 'my_cf7_get_post_title', 10, 3 );
function my_cf7_get_post_title( $output, $name, $html ) {
    if ( '_post_title' !== $name ) {
        return $output;
    }

    // 1) 通常の global $post
    global $post;
    if ( isset( $post->ID ) && $post->ID ) {
        return get_the_title( $post->ID );
    }

    // 2) フォームに hidden で post_id を入れている場合のフォールバック
    if ( ! empty( $_POST['post_id'] ) ) {
        $id = intval( wp_unslash( $_POST['post_id'] ) );
        if ( $id ) return get_the_title( $id );
    }

    // 3) 参照元 URL から post_id を取得（Ajax送信時によく効く）
    if ( ! empty( $_SERVER['HTTP_REFERER'] ) ) {
        $ref = wp_unslash( $_SERVER['HTTP_REFERER'] );
        $id = url_to_postid( $ref );
        if ( $id ) return get_the_title( $id );
    }

    // 4) CF7 の Submission オブジェクトにページ URL がある場合のフォールバック
    if ( class_exists( 'WPCF7_Submission' ) ) {
        $submission = WPCF7_Submission::get_instance();
        if ( $submission ) {
            $meta_url = $submission->get_meta( 'url' );
            if ( $meta_url ) {
                $id2 = url_to_postid( $meta_url );
                if ( $id2 ) return get_the_title( $id2 );
            }
        }
    }

    // 最後に何も取れなければ空のまま
    return $output;
}

