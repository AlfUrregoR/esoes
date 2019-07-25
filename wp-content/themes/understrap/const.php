<?php
/**
* Template Name: const
*/


// Archivo de header de Wordpress
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

  <style media="screen">
  #body-const{
      width: auto;
      min-height: 500px;
      background-image: url('http://esoes-design.com/wp-content/uploads/2019/07/WhatsApp-Image-2019-07-23-at-2.51.49-PM.jpeg');
      background-attachment: fixed;
      background-size: 100%;
      background-position: center;
      background-repeat: no-repeat;
  }
  </style>
</head>
<body id="body-const">
</body>
</html>
