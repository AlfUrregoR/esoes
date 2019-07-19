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

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite" class="masthead">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page()) : ?>
							<a class="fb-ic mr-3" role="button" href="https://www.instagram.com/esoes_design/" target="_blank"><i class="icono fab fa-instagram"></i></a>
							<a class="fb-ic mr-3" role="button" href="https://www.facebook.com/esoes.design" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a class="fb-ic mr-3" role="button" href="https://www.pinterest.ch/esoes_design/" target="_blank"><i class="fab fa-pinterest"></i></a>
						<?php else : ?>
							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

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
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

			<div class="content-lenguaje" id="idioma" >
				<div class="container">
					<a href="#" id="enlace-idioma">Lenguaje</a>
				</div>
			</div>
		</nav><!-- .site-navigation -->

<div class="content-title">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <img src="http://localhost/esoes/wp-content/uploads/2019/07/logo_esoes.png" alt="">
      </div>
    </div>
  </div>
</div>

<div class="container">
	<div class="row coordinate">
		<div class="col-sm-1 col-md-1 vl-izq"></div>
		<div class="col-md-4 coordinate-izq">
				<a href="https://www.google.com/maps/place/<?php the_field( 'coordenada' ); ?>" target="_blank"><?php the_field( 'coordenada' ); ?></a>
				<p>My mind is here</p>
		</div>
		<div class="col-md-4 coordinate-der">
				<a href="https://www.google.com/maps/place/46%C2%B052'50.163%22N%207%C2%B02'33.747%22E" target="_blank">46°52'50.163"N 7°2'33.747"E</a>
				<p>My soual is there</p>
		</div>
		<div class="col-sm-1 col-md-1 vl-der"></div>
	</div>
</div>


	<div class="vl"></div>

</div><!-- #wrapper-navbar end -->
