<?php
/*
Template Name: News
*/

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<article class="post news">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'News' ); ?></h1>
					</header><!-- .entry-header -->

                    <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
                    <div class="entry-content">

                        <div class="page_numbers_top">
                            <?php wpbeginner_numeric_posts_nav(); ?>
                        </div>
                        <?php if ( have_posts() ) : ?>

                            <?php // twentyeleven_content_nav( 'nav-above' ); ?>
                            <?php if (false) : ?>
                            <div class="navigation">
                                <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                            </div>
                            <?php endif; ?>

                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <div <?php post_class(); ?>>
                                    <?php // the_permalink(); ?><?php // the_post_thumbnail( array(148,148) ); ?>
                                    <header>
                                        <h2><?php the_title(); ?></h2>
                                    </header>
                                    <div class="post-content">
                                        <?php the_content(); ?>
                                    </div>
                                    <footer>
                                        <p class="toggle"><i class="icon-placeholder"></i></p>
                                        <p class="publish-date"><strong><?php the_time('F jS, Y'); ?></strong></p>
                                    </footer>
                                </div>

                                <?php // get_template_part( 'content', get_post_format() ); ?>

                            <?php endwhile; ?>

                            <?php // twentyeleven_content_nav( 'nav-below' ); ?>

                        <?php else : ?>
                            <div class="entry-content">
                                <p><?php _e( 'Sorry, but no news was found available.' ); ?></p>
                                <?php // get_search_form(); ?>
                            </div><!-- .entry-content -->
                        <?php endif; ?>

                        <div class="page_numbers_bottom">
                            <?php wpbeginner_numeric_posts_nav(); ?>
                        </div>
                        <?php wp_reset_query(); ?>
                    </div>
				</article><!-- #post-0 -->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>