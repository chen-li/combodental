<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if(wpsc_display_categories()): ?>

				<aside id="product_categories">
					<h3 class="widget-title">Products</h3>
                    <ul class="wpsc_categories">
                        <?php wpsc_start_category_query(array('category_group'=>get_option('wpsc_default_category'), 'show_thumbnails'=> get_option('show_category_thumbnails'))); ?>
                            <li>
                                <a href="<?php wpsc_print_category_url();?>" class="wpsc_category_link <?php wpsc_print_category_classes_section(); ?>" title="<?php wpsc_print_category_name(); ?>"><?php wpsc_print_category_name(); ?></a>
                                <?php wpsc_print_subcategory("<ul>", "</ul>"); ?>
                            </li>
                        <?php wpsc_end_category_query(); ?>
                    </ul>
				</aside>

				<aside class="contact-us">
					<h3 class="widget-title">Contact Us</h3>
                    <dl>
                        <dt>Email:</dt>
                        <dd>puxia2011@gmail.com</dd>
                    </dl>
                    <dl>
                        <dt>Phone:</dt>
                        <dd>0575-82097708</dd>
                    </dl>
                    <dl>
                        <dt>Address:</dt>
                        <dd>Shangyu City <br /> Chapter Town <br /> Industrial Park</dd>
                    </dl>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>