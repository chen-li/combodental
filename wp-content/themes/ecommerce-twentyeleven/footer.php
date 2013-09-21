<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

            <?php get_sidebar(); ?>

        </div><!-- #main -->
    </div><!-- #contentwrap -->

	<footer id="footer-wrap" role="contentinfo">
        <div id="footer">
			<div id="site-generator">
                Copyright &copy; <?php echo date('Y'); ?>. All Rights Reserved. Powered by <?php bloginfo( 'name' ); ?>
			</div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>