<?php
/*
Template Name: Contact Us
*/

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<article>
                    <header class="entry-header">
                        <h1 class="entry-title">Contact Us</h1>
                    </header>
                    <div class="entry-content">
                        <?php comments_template( '', true ); ?>
                    </div>
				</article>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>