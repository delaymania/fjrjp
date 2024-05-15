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
