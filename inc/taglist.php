			<?php if ( is_mobile() ) : ?>
				<div class="tagCont">
					<div class="dropBox">
					<?php // ターム一覧をプルダウンメニューで表示
					  $taxonomy_slug = 'label'; // タクソノミーのスラッグを指定
					  $terms = get_terms($taxonomy_slug); // タームの取得
					  if( $terms && !is_wp_error($terms) ){ // タームがあれば表示
						echo '<select name="select" onChange="location.href=value;">'; // option の value 値を URL とする
						echo '<option>タグから探せます</option>'; 
						foreach ( $terms as $value ) {
						  echo '<option value="'.get_term_link($value->slug,$taxonomy_slug).'">'.esc_html($value->name).'</option>'; // タームのURLとタイトルを表示
						}
						echo '</select>';
					  }
					?>
					</div>
				</div>
			<?php else: ?>
				<div class="tagCont">
					<div class="taglink"><span>全てのタグをみる</span></div>
					<ul class="tagList">
						<?php wp_list_categories(array('title_li'=>'', 'taxonomy'=>'label')); ?>
					</ul>
				</div>
			<?php endif; ?>