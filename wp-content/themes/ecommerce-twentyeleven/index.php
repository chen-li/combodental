<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

                <?php
                    // Check to see if the header image has been removed
                    $header_image = get_header_image();
                    if (!empty( $header_image ) ) :
                ?>
                        <img src="<?php header_image(); ?>" class="header-image" />
                <?php endif; // end check for removed header image ?>

                <div class="home-about">

                </div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>