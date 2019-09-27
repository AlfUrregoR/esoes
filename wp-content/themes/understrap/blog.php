<?php
/*
Template Name: BLOG
Template Post Type: post
*/

// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de Blog-->


<div class="container-fluid pages-blog">
  <div class="row section1">
    <div class="col-md-8">
      <?php $imagen_blog_1 = get_field( 'imagen_blog_1' ); ?>
      <?php if ( $imagen_blog_1 ) { ?>
      	<img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
      <?php } ?>
    </div>
    <div class="col-md-4">
      <h2 class="title"><?php the_title(); ?></h2>
      <div class="sep-vert">
      </div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_field( 'content_blog_1' ); ?></p>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<div class="container">
  <div class=" row section2">
    <div class="col-sm-12 col-md-6 sep-der">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_field( 'content_blog_2' ); ?></p>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-sm-12 col-md-6 sep-izq">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_field( 'content_blog_3' ); ?></p>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<div class="container-fluid section3">
  <div class="row">
    <div class="col-md-5 content-text">
      <div class="sep-der">
      </div>
      <?php the_field( 'content_blog_4' ); ?>
    </div>
    <div class="col-md-7">
      <?php $imagen_blog_2 = get_field( 'imagen_blog_2' ); ?>
      <?php if ( $imagen_blog_2 ) { ?>
      	<img src="<?php echo $imagen_blog_2['url']; ?>" alt="<?php echo $imagen_blog_2['alt']; ?>" />
      <?php } ?>
    </div>
  </div>

</div>
<div class="container-fluid section4">
  <div class="row">
    <div class="col-md-7 img_izq">
      <?php $imagen_blog_5 = get_field( 'imagen_blog_5' ); ?>
      <?php if ( $imagen_blog_5 ) { ?>
      	<img src="<?php echo $imagen_blog_5['url']; ?>" alt="<?php echo $imagen_blog_5['alt']; ?>" />
      <?php } ?>
    </div>
    <div class="col-md-5 img_der">
      <?php the_field( 'content_blog_5' ); ?>
    </div>
  </div>
</div>
<div class="container-fluid section5">
  <div class="row">
    <div class="col-md-5 img_izq">
        <?php the_field( 'content_blog_5' ); ?>
    </div>
    <div class="col-md-7 img_der">
      <?php $imagen_blog_4 = get_field( 'imagen_blog_4' ); ?>
      <?php if ( $imagen_blog_4 ) { ?>
      	<img src="<?php echo $imagen_blog_4['url']; ?>" alt="<?php echo $imagen_blog_4['alt']; ?>" />
      <?php } ?>
    </div>
  </div>
</div>
<a id="button"><img src="/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
