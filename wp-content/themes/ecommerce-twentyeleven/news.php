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

                    <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
                    <?php if ( have_posts() ) : ?>

                        <?php twentyeleven_content_nav( 'nav-above' ); ?>

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'content', get_post_format() ); ?>

                        <?php endwhile; ?>

                        <?php twentyeleven_content_nav( 'nav-below' ); ?>

                    <?php else : ?>
                        <div class="entry-content">
                            <p><?php _e( 'Sorry, but no news was found available.' ); ?></p>
                            <?php // get_search_form(); ?>
                        </div><!-- .entry-content -->
                    <?php endif; ?>
				</article><!-- #post-0 -->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>