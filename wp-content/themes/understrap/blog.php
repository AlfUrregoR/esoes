<?php
/*
Template Name: BLOG
Template Post Type: post
*/

// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de Blog-->


<div class="container pages-blog h-300">
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center img-principal">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_1 = get_field( 'imagen_blog_1' ); ?>
        <?php if ( $imagen_blog_1 ) { ?>
        	<img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center conten-section-1">
    <div class="col-12 text-center">
      <h3 class="title"><?php the_title(); ?></h3>
    </div>
    <div class="col-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_field( 'content_blog_1' ); ?></p>
      <?php endwhile; endif; ?>
    </div>
  </div>

  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_2 = get_field( 'imagen_blog_2' ); ?>
        <?php if ( $imagen_blog_2 ) { ?>
        	<img src="<?php echo $imagen_blog_2['url']; ?>" alt="<?php echo $imagen_blog_2['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>

  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_3 = get_field( 'imagen_blog_3' ); ?>
        <?php if ( $imagen_blog_3 ) { ?>
        	<img src="<?php echo $imagen_blog_3['url']; ?>" alt="<?php echo $imagen_blog_3['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_field( 'content_blog_2' ); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_4 = get_field( 'imagen_blog_4' ); ?>
        <?php if ( $imagen_blog_4 ) { ?>
        	<img src="<?php echo $imagen_blog_4['url']; ?>" alt="<?php echo $imagen_blog_4['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_5 = get_field( 'imagen_blog_5' ); ?>
        <?php if ( $imagen_blog_5 ) { ?>
        	<img src="<?php echo $imagen_blog_5['url']; ?>" alt="<?php echo $imagen_blog_5['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_6 = get_field( 'imagen_blog_6' ); ?>
        <?php if ( $imagen_blog_6 ) { ?>
        	<img src="<?php echo $imagen_blog_6['url']; ?>" alt="<?php echo $imagen_blog_6['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_field( 'content_blog_3' ); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_7 = get_field( 'imagen_blog_7' ); ?>
        <?php if ( $imagen_blog_7 ) { ?>
        	<img src="<?php echo $imagen_blog_7['url']; ?>" alt="<?php echo $imagen_blog_7['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_8 = get_field( 'imagen_blog_8' ); ?>
        <?php if ( $imagen_blog_8 ) { ?>
        	<img src="<?php echo $imagen_blog_8['url']; ?>" alt="<?php echo $imagen_blog_8['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_9 = get_field( 'imagen_blog_9' ); ?>
        <?php if ( $imagen_blog_9 ) { ?>
        	<img src="<?php echo $imagen_blog_9['url']; ?>" alt="<?php echo $imagen_blog_9['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row h-100  align-items-center">
    <div class="col-12 text-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $imagen_blog_10 = get_field( 'imagen_blog_10' ); ?>
        <?php if ( $imagen_blog_10 ) { ?>
        	<img src="<?php echo $imagen_blog_10['url']; ?>" alt="<?php echo $imagen_blog_10['alt']; ?>" />
        <?php } ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>


<a id="button"><img src="/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
