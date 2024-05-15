<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main" style="background-color: #a8d2c8;">
    <div class="mv_under_contents" style="position: relative; z-index: 2;">
        <div class='upper'>
            <h2 class="ttl">EVENT<span>イベント一覧</span></h2>
        </div>
    </div>
    
    <div class="under_contents">
      <section id="event">
        <div class="event-frame">
          <article class="event">
            <div class="contents">
              <div class="ttl_wrap">
                <div class="event-icon">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_event.png" alt="event">
                </div>
                <h2>EVENT
                  <span>イベント情報</span>
                </h2>

                <div class="eventday">
                  <?php if ( is_active_sidebar('kaisaibi') ) : ?>
                    <?php dynamic_sidebar('kaisaibi'); ?>
                  <?php endif; ?>
                </div>

              </div>

              <?php if ( is_active_sidebar('top-event-list') ) : ?>
                <?php dynamic_sidebar('top-event-list'); ?>
              <?php endif; ?>

            </div>
          </article>
        </div>
      </section>
      
  </div>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
