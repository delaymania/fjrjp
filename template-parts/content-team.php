<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_SixteenstaffPhoto
 * @since Twenty Sixteen 1.0
 */
/*
$member = basename(get_permalink());
$rss = simplexml_load_file('https://blog.next-at.co.jp/author/'.$member.'/feed/');

$cnt_post=0;
foreach($rss->channel->item as $item){
    $cnt_post++;
}
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="team_detail">
    <div class="staffSubWrap">
        <table class="staffDetailBox clearfix">
                <tr>
                    <td class="staffPhoto">
                        <div class="bg_profile_img" style="background: url(<?php the_field('正面画像'); ?>) no-repeat center center; background-size: cover;"></div>
                    </td>
                    <td class="staffTextBox">
                        <div class="staffText">
                        <p class="ttl"><?php echo get_post_meta(get_the_ID(), '役職', true); ?></p>
                        <!-- <p class="name"><?php echo get_post_meta(get_the_ID(), '氏名', true); ?></p> -->
                        <?php the_title('<h3 class="name">','</h3>') ?>
                        <p class="sub"><?php echo get_post_meta(get_the_ID(), '氏名（アルファベット）', true); ?></p>
                        <dl class="clearfix">
                        <?php if(get_post_meta(get_the_ID(), '資格', true)): ?>
                            <dt class="license">資格</dt>
                            <dd class="license_text"><?php echo get_post_meta(get_the_ID(), '資格', true); ?></dd>
                        <?php endif; ?>
                        <?php if(get_post_meta(get_the_ID(), '出身地', true)!="null"): ?>
                            <dt class="birthplace">出身地</dt>
                            <dd class="city"><?php echo get_post_meta(get_the_ID(), '出身地', true); ?></dd>
                        <?php endif; ?>
                        </dl>
                        </div>
                    </td>
                </tr>
        </table>
    </div>
</section>
<div class="under_contents">
    <section>
        <article class="staffPlofile">
            <div class="staffPlofileBox clearfix">
                <h4><span>お客様へのメッセージ</span><p class="pc_only">MESSAGE</p></h4>
                <div class="staffCommentWrapper">
                <p class="staffComment">
                    <?php echo get_post_meta(get_the_ID(), 'お客様へのメッセージ', true); ?>
                </p>
                </div>
            </div>
            <div class="border"></div>
            <div class="staffPlofileBox clearfix">
                <h4><span>仕事をする上で大切にしていること</span><p class="pc_only">ATTITUDE TO WORK</p></h4>
                <div class="staffCommentWrapper">
                <p class="staffComment">
                    <?php echo get_post_meta(get_the_ID(), '仕事をする上で大切にしていること', true); ?>
                </p>
                </div>
            </div>
            <div class="border"></div>
            <div class="staffPlofileBox clearfix">
                <h4><span>好きなモノ・コト</span><p class="pc_only">LIKE</p></h4>
                <div class="staffCommentWrapper">
                <div class="staffComment">
                    <?php echo get_post_meta(get_the_ID(), '好きなモノ・コト', true); ?>
                </div>
                </div>
            </div>
            <ul class="staff_profile_photo clearfix">
                <li><div class="li_wrapper"><img src="<?php the_field('画像1'); ?>" alt=""/></div></li>
                <?php if(get_post_meta(get_the_ID(), '画像2', true)): ?>
                <li><div class="li_wrapper"><img src="<?php the_field('画像2'); ?>" alt=""/></div></li>
                <?php endif; ?>
                <?php if(get_post_meta(get_the_ID(), '画像3', true)): ?>
                <li><div class="li_wrapper"><img src="<?php the_field('画像3'); ?>" alt=""/></div></li>
                <?php endif; ?>
                <?php if(get_post_meta(get_the_ID(), '画像4', true)): ?>
                <li><div class="li_wrapper"><img src="<?php the_field('画像4'); ?>" alt=""/></div></li>
                <?php endif; ?>
            </ul>
        </article>
      
      

        <aside class="staff_blog">
            <?php if($cnt_post): ?>
            <h2>最近書いたブログ<span></span></h2>
            <ul class="staff_blog_list clearfix pc_only">

                <?php
                $i=0;
                foreach($rss->channel->item as $item):
                if($i>4) break;
                ?>
                <li>
                <div class="li_wrapper">
                <a href="<?php echo $item->link; ?>">
                <p class="ph">
                <?php if(catch_that_image($item->description)): ?>
                <img src="<?php echo catch_that_image($item->description); ?>"/>
                <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/noimage.jpg">
                <?php endif; ?>
                </p>
                <h4 class="ttl"><?php echo $item->title; ?></h4>
                <p class="date"><?php echo date("Y.n.j", strtotime($item->pubDate)); ?></p>
                </a>
                </div>
                </li>
                <?php
                $i++;
                endforeach; ?>

            </ul>
            <ul class="staff_blog_list clearfix sp_only">

            <?php
                $i=0;
                foreach($rss->channel->item as $item):
                if($i>4) break;
                ?>
                <li>
                <div class="li_wrapper">
                <a href="<?php echo $item->link; ?>">
                <p class="ph">
                <?php if(catch_that_image($item->description)): ?>
                <img src="<?php echo catch_that_image($item->description); ?>"/>
                <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/noimage.jpg">
                <?php endif; ?>
                </p>
                <h4 class="ttl"><?php echo $item->title; ?></h4>
                </a>
                </div>
                </li>
                <?php
                $i++;
                endforeach; ?>
            </ul>
            <?php endif; ?>
            <p class="back_btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>team">BACK</a></p>
        </aside>
      
      
      
      
      
    </section>
</div>
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
