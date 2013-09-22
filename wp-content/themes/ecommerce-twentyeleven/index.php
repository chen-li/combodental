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

                <section class="home-info">
                    <div class="home-about">
                        <h2><a class="more" href="/about-us">More <i class="icon-placeholder"></i></a>About Us</h2>
                        <article>
                            <h3>Welcome to <?php bloginfo( 'name' ); ?></h3>
                            Dui nisi bibendum lectus, ac rutrum neque elit et turpis. Etiam at tortor enim. Nulla pretium euismod mattis. Donec vel condimentum sem, vel euismod eros. Morbi adipiscing justo ut magna vestibulum fringilla. Praesent pellentesque ullamcorper imperdiet. Pellentesque et turpis ut nunc pulvinar ornare nec et lectus. Aliquam fermentum faucibus arcu, eget aliquam nunc bibendum et.
                        </article>
                    </div>

                    <div class="home-news">
                        <h2><a class="more" href="/news">Read All <i class="icon-placeholder"></i></a>Latest News</h2>
                        <article>
                            <?php
                            $args = array( 'numberposts' => 1 );
                            $lastposts = get_posts( $args );
                            foreach($lastposts as $post) : setup_postdata($post); ?>
                                <h3><?php the_title(); ?></h3>
                                <?php
                                    $content = get_the_content( $more_link_text, $strip_teaser );
                                    $content = apply_filters( 'the_content', $content );
                                    $content = str_replace( ']]>', ']]&gt;', $content );
                                    $content = strip_tags($content);
                                    $max = 400;
                                    echo (strlen($content) > $max) ? substr($content, 0, $max) . ' ...' : $content;
                                ?>
                            <?php endforeach; ?>
                        </article>
                    </div>

                    <div style="clear: both;"></div>
                </section>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>