<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<title>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( ! function_exists( 'is_plugin_active' ) ) require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
        if ( ! is_plugin_active( 'wordpress-seo/wp-seo.php' ) )  : ?>
				<?php
                /*
                 * Print the <title> tag based on what is being viewed.
                 */
                global $page, $paged;

                wp_title( '|', true, 'right' );

                // Add the blog name.
                bloginfo( 'name' );

                // Add the blog description for the home/front page.
                $site_description = get_bloginfo( 'description', 'display' );
                if ( $site_description && ( is_home() || is_front_page() ) )
                    echo " | $site_description";

                // Add a page number if necessary:
                if ( $paged >= 2 || $page >= 2 )
                    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
                 ?>
        <?php else : ?>

			<?php wp_title(''); ?>

        <?php endif; ?>

</title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".trigger").click(function(){
		jQuery(".panel").toggle("fast");
		jQuery(this).toggleClass("active");
		return false;
	});

	jQuery(".news").on('click', '.post footer', function() {
        var $this = jQuery(this),
            $details = $this.siblings('.post-content'),
            height = $details.height(),
            newHeight;

        if ($details.css('max-height') != 'none') {
            $details.data('old-height', height);
            newHeight = $details.css('max-height', 'none').height();
            $details.css('height', height);
            $details.animate({
                height : newHeight
            }, 500, function (){
                $details.addClass('no-shadow');
                $this.addClass('expanded');
            });
        } else {
            $details.animate({
                height: $details.data('old-height')
            }, 500, function (){
                $details.css({
                    'max-height': $details.data('old-height'),
                    height : 'auto'
                }).removeClass('no-shadow');
                $this.removeClass('expanded');
            });
        }
	});

	jQuery(".contact-form").on({
        focusin: function() {
            jQuery(this).addClass('no-text-indent').siblings('label').hide();
        },
        focusout: function() {
            var $this = jQuery(this);
            if ($this.val() == null || $this.val() == '') {
                $this.removeClass('no-text-indent').siblings('label').show();
            }
        }
    }, "input, textarea");
});
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="header-wrap" role="banner">
        <div id="header">

			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="tcpt-logo"><?php // bloginfo( 'name' ); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" /></span></a></span></h1>

                <div class="contact">
                    <p>
                        Call Us: 0575-82097708 <br />
                        <span>Monday-Saturday 9am-5pm</span>
                    </p>
                </div>
			</hgroup>

			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
        </div>
	</header><!-- #branding -->

    <div id="content-wrap">
        <div id="main">