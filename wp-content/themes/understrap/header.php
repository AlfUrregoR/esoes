<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite" class="masthead">
			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

			<nav class="navbar navbar-expand-md navbar-dark">
				<?php if ('container' == $container) : ?>
					<div class="container-fluid div-menu">
					<?php endif; ?>

					<!-- Your site title as branding in the menu -->
						<div class="cont-logo">
								<a class="fb-in" role="button" href="https://www.instagram.com/esoes_design/" target="_blank"></a>
								<a class="fb-fb" role="button" href="https://www.facebook.com/esoes.design" target="_blank"></a>
								<a class="fb-ic" role="button" href="https://www.pinterest.ch/esoes_design/" target="_blank"></a>
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
				<?php //if ( 'container' == $container ) : 
				?>


					</div><!-- .container -->
					<?php //endif; 
					?>


			</nav><!-- .site-navigation -->

			<div class="content-title">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12 text-center">
							<div class="logo-esoes"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row coordinate">
					<div class="vl-izq"></div>
					<div class="col-md-5 coordinate-izq">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<a href="https://www.google.com/maps/place/<?php the_field('coordenada'); ?>" target="_blank"><?php the_field('coordenada'); ?></a>
								<p>My mind is here</p>
						<?php endwhile;
						endif; ?>
					</div>
					<div class="col-md-5 coordinate-der">
						<a href="https://www.google.com/maps/place/46%C2%B052'50.163%22N%207%C2%B02'33.747%22E" target="_blank">46°52'50.163"N 7°2'33.747"E</a>
						<p>My soual is there</p>
					</div>
					<div class="vl-der"></div>
				</div>
			</div>
			<div class="vl"></div>

		</div><!-- #wrapper-navbar end -->