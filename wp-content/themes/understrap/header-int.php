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

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<div class="cabecera">
		<div class="content-logo">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12 text-center">
						<img src="http://localhost/esoes/wp-content/uploads/2019/07/logo_esoes_beige.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite" class="masthead_int">

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>


			<nav class="navbar navbar-expand-md navbar-dark">

			<?php if ( 'container' == $container ) : ?>
				<div class="container-fluid div-menu">
			<?php endif; ?>

						<!-- Your site title as branding in the menu -->


								<a class="fb-ic mr-3" role="button" href="https://www.instagram.com/esoes_design/" target="_blank"><img src="http://esoes-design.com/wp-content/uploads/2019/07/Instagram.png" alt=""></a>
								<a class="fb-fb mr-3" role="button" href="https://www.facebook.com/esoes.design" target="_blank"><img src="http://esoes-design.com/wp-content/uploads/2019/07/facebook.png" alt=""></a>
								<a class="fb-ic mr-3" role="button" href="https://www.pinterest.ch/esoes_design/" target="_blank"><img src="http://esoes-design.com/wp-content/uploads/2019/07/Pinteres.png" alt=""></a>



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
