<?php

/**
 * Template Name: HOME
 */
// Archivo de header de Wordpress
get_header();
?>

<!-- Contenido de página de inicio -->
<section id="portafolio">
  <div class="content-title-portafolio">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h3 class="title-portafolio"><?php the_title(); ?></h3>
          <p>Esoes est une agence de design itinérante <br> spécialisée dans les solutions de communications visuelles</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Contenido Seccion portafolio galeria-->
<section id="portafolio-galeria">
  <div class="container">
    <div class="row">
      <div class="grid">
        <?php
        $args = array(
          'post_type' => 'portafolio',
          'category_name'  => 'Home',
          'order' => 'asc'
        );
        $category_posts = new WP_Query($args);
        if ($category_posts->have_posts()) :
          while ($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>

            <div class="grid-item">
              <div class="rings">
                <a href="#">
                  <?php $imagen_portafolio_1 = get_field('imagen_portafolio_1'); ?>
                  <?php if ($imagen_portafolio_1) { ?>
                    <img src="<?php echo $imagen_portafolio_1['url']; ?>" alt="<?php echo $imagen_portafolio_1['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </a>
              </div>
            </div>
          <?php
          endwhile;
        else :
          ?>
          Vaya, no hay entradas.
        <?php
        endif;
        ?>
        <?php
        $args = array(
          'post_type' => 'portafolio',
          'category_name'  => 'Ver mas',
          'order' => 'asc'
        );
        $category_posts = new WP_Query($args);
        if ($category_posts->have_posts()) :
          while ($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>

            <div class="grid-item">

              <div class="rings">
                <a href="#">
                  <div class="prueba">
                    <?php $imagen_portafolio_1 = get_field('imagen_portafolio_1'); ?>
                    <?php if ($imagen_portafolio_1) { ?>
                      <img src="<?php echo $imagen_portafolio_1['url']; ?>" alt="<?php echo $imagen_portafolio_1['alt']; ?>" />
                    <?php } ?>
                    <span><?php the_field('title_portafolio_1'); ?></span>
                </a>
              </div>
            </div>
          </div>

        <?php
        endwhile;
      else :
        ?>
        Vaya, no hay entradas.
      <?php
      endif;
      ?>

    </div>
  </div>
  <div id="div-mostrar" class="div-mostrar text-center">
    <a id="mostrar"><img id="mostrar-img" src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt=""> </a>
  </div>


</section>

<!-- Contenido Seccion Servicio-->
<section id="services" class="services">
  <div class="container">
    <div class="content-title-services">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center">
            <h3 class="title-services">Services</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row file-services">
      <div class="col-sm-12 col-md-6 list-izq">
        <ul>
          <a href="http://localhost/esoes/services/#">
            <li>Consultation et solution visuelle</li>
          </a>
          <a href="http://localhost/esoes/services/">
            <li>Design graphique</li>
          </a>
          <a href="http://localhost/esoes/services/">
            <li>Développement de concept</li>
          </a>
          <a href="http://localhost/esoes/services/">
            <li>Identité visuelle</li>
          </a>
        </ul>
      </div>
      <div class="col-sm-12 col-md-6 list-der">
        <ul>
          <a href="http://localhost/esoes/services/">
            <li>Direction artistique</li>
          </a>
          <a href="http://localhost/esoes/services/">
            <li>Storytelling médias sociaux</li>
          </a>
          <a href="http://localhost/esoes/services/">
            <li>Merchandising et concept vitrine</li>
          </a>
          <a href="http://localhost/esoes/services/">
            <li>Recherche et inspiration</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="container div-btn-services">
        <div class="col-12 text-center">
          <a href="http://localhost/esoes/services/" class="btn-services">Le processus</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="propos" class="propos">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6 propos-izq"></div>
      <div class="col-sm-12 col-md-6 propos-der">
        <h3>À propos</h3>
        <h6>Esoes, une agence itinérante.</h6>
        <p>Bien que ses racines se trouvent en Suisse, Lucie à<br> pour mission personnelle de
          découvrir le monde et ses<br> différentes cultures. Digitale nomade et exploratrice<br>
          à pleins temps, sa vision d'un monde éclectique lui<br> permet d'apporter à ses travaux,
          à travers Esoes, des<br> influences internationales et novatrices.</p>
        <div class="row">
          <div class="col-12 div-btn-propos">
            <a href="http://localhost/esoes/a-propos/" class="btn-propos">Lire</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="partenaires" class="partenaires">
  <div class="container content-partenaires">
    <div class="row align-items-center text-partenaires">
      <div class="col-12 text-center">
        <h3>Partenaires</h3>
      </div>
    </div>

    <div class="row align-items-center">

      <div class="col-12 col-md-2 text-center log-partenaires">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $imagen_partenaires_1 = get_field('imagen_partenaires_1'); ?>
            <?php if ($imagen_partenaires_1) { ?>
              <a href="<?php the_field('url_partenaires_1'); ?>"></a> <img src="<?php echo $imagen_partenaires_1['url']; ?>" alt="<?php echo $imagen_partenaires_1['alt']; ?>" />
            <?php } ?>
          <?php endwhile;
        endif; ?>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $imagen_partenaires_2 = get_field('imagen_partenaires_2'); ?>
            <?php if ($imagen_partenaires_2) { ?>
              <a href="<?php the_field('url_partenaires_2'); ?>"></a> <img src="<?php echo $imagen_partenaires_2['url']; ?>" alt="<?php echo $imagen_partenaires_1['alt']; ?>" />
            <?php } ?>
          <?php endwhile;
        endif; ?>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $imagen_partenaires_3 = get_field('imagen_partenaires_3'); ?>
            <?php if ($imagen_partenaires_3) { ?>
              <a href="<?php the_field('url_partenaires_3'); ?>"></a> <img src="<?php echo $imagen_partenaires_3['url']; ?>" alt="<?php echo $imagen_partenaires_1['alt']; ?>" />
            <?php } ?>
          <?php endwhile;
        endif; ?>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $imagen_partenaires_4 = get_field('imagen_partenaires_4'); ?>
            <?php if ($imagen_partenaires_4) { ?>
              <a href="<?php the_field('url_partenaires_4'); ?>"></a> <img src="<?php echo $imagen_partenaires_4['url']; ?>" alt="<?php echo $imagen_partenaires_1['alt']; ?>" />
            <?php } ?>
          <?php endwhile;
        endif; ?>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $imagen_partenaires_5 = get_field('imagen_partenaires_5'); ?>
            <?php if ($imagen_partenaires_5) { ?>
              <a href="<?php the_field('url_partenaires_5'); ?>"></a> <img src="<?php echo $imagen_partenaires_5['url']; ?>" alt="<?php echo $imagen_partenaires_1['alt']; ?>" />
            <?php } ?>
          <?php endwhile;
        endif; ?>
      </div>
      <div class=" col-12 col-md-2 text-center log-partenaires">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $imagen_partenaires_6 = get_field('imagen_partenaires_6'); ?>
            <?php if ($imagen_partenaires_6) { ?>
              <a href="<?php the_field('url_partenaires_6'); ?>"></a> <img src="<?php echo $imagen_partenaires_6['url']; ?>" alt="<?php echo $imagen_partenaires_1['alt']; ?>" />
            <?php } ?>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>

<section id="collaborations" class="collaborations">
  <div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="align-items-center div-text-collaborations">
            <div id="text-collaborations" class="col-12 text-center text-collaborations">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <h3><?php the_field('title_collaborations'); ?></h3>
                  <p><?php the_field('content_collaborations'); ?>
                  </p>
                <?php endwhile;
              endif; ?>
              <p class="collaborations-name"><?php the_field('tag'); ?></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="align-items-center div-text-collaborations">
            <div id="text-collaborations" class="col-12 text-center text-collaborations">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <h3><?php the_field('title_collaborations'); ?></h3>
                  <p><?php the_field('content_collaborations'); ?>
                  </p>
                <?php endwhile;
              endif; ?>
              <p class="collaborations-name"><?php the_field('tag'); ?></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="align-items-center div-text-collaborations">
            <div id="text-collaborations" class="col-12 text-center text-collaborations">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <h3><?php the_field('title_collaborations'); ?></h3>
                  <p><?php the_field('content_collaborations'); ?>
                  </p>
                <?php endwhile;
              endif; ?>
              <p class="collaborations-name"><?php the_field('tag'); ?></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <img src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt="">
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <img src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt="">
      </a>
    </div>
  </div>
</section>

<section id="contact" class="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center text-contact">
        <p>Vous pensez à une collaboration ?<br>
          Esoes se réjouit d'en apprendre plus sur vos
          différents projets,<br> envies et inspirations !
        </p>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="container div-btn-propos text-center">
        <div class="col-12">
          <a href="http://localhost/esoes/contact/" class="btn-contact">Contact</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog" class="blog">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row align-items-center blog-izq">
          <?php
          $args = array(
            'post' => '298',
            'category_name'  => 'Home',
            'order' => 'asc'
          );
          $category_posts = new WP_Query($args);
          if ($category_posts->have_posts()) :
            while ($category_posts->have_posts()) :
              $category_posts->the_post();
              ?>

              <div class="col-sm-12 col-md-5 text-center">
                <div class="efecto-blog">
                  <a href="#" class="tag">
                    <?php // En este ejemplo tendríamos el  
                    ?>
                    <?php $imagen_blog_1 = get_field('imagen_blog_1'); ?>
                    <?php if ($imagen_blog_1) { ?>
                      <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                    <?php } ?>
                    <span>VOYAGE</span>
                  </a>
                  <div class="contenido-blog text-center">
                    <p><strong><?php the_title(); ?></strong></p>
                    <h5><strong><?php the_field('content_blog_1'); ?></strong></h5>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
      <div class="carousel-item">
        <div class="row align-items-center blog-izq">
          <?php
          $args = array(
            'post' => '298',
            'category_name'  => 'Home',
            'order' => 'asc'
          );
          $category_posts = new WP_Query($args);
          if ($category_posts->have_posts()) :
            while ($category_posts->have_posts()) :
              $category_posts->the_post();
              ?>

              <div class="col-sm-12 col-md-5 text-center">
                <div class="efecto-blog">
                  <a href="#" class="tag">
                    <?php // En este ejemplo tendríamos el  
                    ?>
                    <?php $imagen_blog_1 = get_field('imagen_blog_1'); ?>
                    <?php if ($imagen_blog_1) { ?>
                      <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                    <?php } ?>
                    <span>VOYAGE</span>
                  </a>
                  <div class="contenido-blog text-center">
                    <p><strong><?php the_title(); ?></strong></p>
                    <h5><strong><?php the_field('content_blog_1'); ?></strong></h5>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
      <div class="carousel-item">
        <div class="row align-items-center blog-izq">
          <?php
          $args = array(
            'post' => '298',
            'category_name'  => 'Home',
            'order' => 'asc'
          );
          $category_posts = new WP_Query($args);
          if ($category_posts->have_posts()) :
            while ($category_posts->have_posts()) :
              $category_posts->the_post();
              ?>

              <div class="col-sm-12 col-md-5 text-center">
                <div class="efecto-blog">
                  <a href="#" class="tag">
                    <?php // En este ejemplo tendríamos el  
                    ?>
                    <?php $imagen_blog_1 = get_field('imagen_blog_1'); ?>
                    <?php if ($imagen_blog_1) { ?>
                      <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                    <?php } ?>
                    <span>VOYAGE</span>
                  </a>
                  <div class="contenido-blog text-center">
                    <p><strong><?php the_title(); ?></strong></p>
                    <h5><strong><?php the_field('content_blog_1'); ?></strong></h5>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <img class="img-prev" src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt="">
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <img class="img-prev" src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt="">
    </a>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="container div-btn-blog">
        <div class="col-12 text-center">
          <a href="#" class="btn-blog">Lire le Blog</a>
        </div>
      </div>
    </div>
  </div>
</section>


<a id="button"><img src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>