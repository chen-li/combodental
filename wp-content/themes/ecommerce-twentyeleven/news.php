<?php
/*
Template Name: News
*/

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<article class="post">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'News' ); ?></h1>
					</header><!-- .entry-header -->

                    <?php query_posts('post_type=post&post_status=publish&posts_per_page=2&paged='. get_query_var('paged')); ?>
                    <div class="entry-content">
                        <?php wpbeginner_numeric_posts_nav(); ?>
                        <?php if ( have_posts() ) : ?>

                            <?php // twentyeleven_content_nav( 'nav-above' ); ?>
                            <?php if (false) : ?>
                            <div class="navigation">
                                <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                            </div>
                            <?php endif; ?>

                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
                                    <?php // the_permalink(); ?><?php // the_post_thumbnail( array(148,148) ); ?>
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <p><strong><?php the_time('F jS, Y'); ?></strong></p>
                                </div><!-- /#post-<?php get_the_ID(); ?> -->

                                <?php // get_template_part( 'content', get_post_format() ); ?>

                            <?php endwhile; ?>

                            <?php // twentyeleven_content_nav( 'nav-below' ); ?>

                        <?php else : ?>
                            <div class="entry-content">
                                <p><?php _e( 'Sorry, but no news was found available.' ); ?></p>
                                <?php // get_search_form(); ?>
                            </div><!-- .entry-content -->
                        <?php endif; ?>
                        <?php wpbeginner_numeric_posts_nav(); ?>
                        <?php wp_reset_query(); ?>
                    </div>
				</article><!-- #post-0 -->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>