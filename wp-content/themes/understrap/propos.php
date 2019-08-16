<?php
/**
* Template Name: PROPOS
*/
// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de página de inicio -->
  <section id="pag-propos">
    <div class="content-propos-1">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12">
            <h3 class="title-portafolio"><?php the_title(); ?></h3>
            <p><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'text_propos_1' ); ?>
             <?php endwhile; endif; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="pag-propos-1">
    <div class="content-propos-1">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="http://localhost/esoes/wp-content/uploads/2019/07/about2.png" alt="">
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 content-propos-2">
            <h3 class="title-propos-2"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'title_propos_2' ); ?>
             <?php endwhile; endif; ?></h3>
            <p>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'text_propos_2' ); ?>
               <?php endwhile; endif; ?></h3>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="pag-propos-3">
    <div class="content-propos-1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 content-propos-3">
            <h3 class="title-propos-2"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'title_propos_3' ); ?>
             <?php endwhile; endif; ?></h3>
            <p>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'text_propos_3' ); ?>
               <?php endwhile; endif; ?></h3>
            </p>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6 align-items-center">
            <img src="http://localhost/esoes/wp-content/uploads/2019/07/about3.png" alt="">
          </div>
        </div>
      </div>
    </div>

  </section>


<a id="button"><img src="http://localhost/esoes/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
