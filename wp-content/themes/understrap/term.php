<?php
/**
* Template Name: Term
*/
// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de página de inicio -->
<div class="pages-contact">
    <div class="container h-100">
      <div class="row h-100  align-items-center">
        <div class="col-12 text-center">
          <h3 class="title-portafolio"><?php the_title(); ?></h3>

        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
        </div>
    </div>
      <div class="row div-datos">
        <div class="col-sm-12 col-md-6">
          <img src="/wp-content/uploads/2019/07/esoes_submark.png" alt="">
        </div>
        <div class="col-sm-12 col-md-6 div-name">
          <p>Lucie Bühlmann <br>
            Founder & Creative Designer <br><br>
            +41 78 606 82 03<br>
            lucie@esoes-design.com
          </p>
        </div>
      </div>
</div>

<a id="button"><img src="/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
