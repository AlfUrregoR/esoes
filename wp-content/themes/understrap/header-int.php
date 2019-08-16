<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onscroll="controlScroll(event)">
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<div class="cabecera">

		<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite" class="masthead_int">

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>


			<nav class="navbar navbar-expand-md navbar-dark">

			<?php if ( 'container' == $container ) : ?>
			<?php endif; ?>

						<!-- Your site title as branding in the menu-->

						<div class="row cont-logo">
							<a class="fb-in" role="button" href="https://www.instagram.com/esoes_design/" target="_blank"><img src="esoes/wp-content/uploads/2019/08/Instagram.png" alt=""></a>
							<a class="fb-fb" role="button" href="https://www.facebook.com/esoes.design" target="_blank"><img src="esoes/wp-content/uploads/2019/08/facebook.png" alt=""></a>
							<a class="fb-ic" role="button" href="https://www.pinterest.ch/esoes_design/" target="_blank"><img src="esoes/wp-content/uploads/2019/08/Pinteres.png" alt=""></a>
							<div class="col-12 text-center">
										<a class="content-logo" href="/"><img src="/wp-content/uploads/2019/07/logo_esoes_beige.png" alt=""></a>
									</div>
						</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>



			</nav><!-- .site-navigation -->
		</div><!-- #wrapper-navbar end -->
</div>
