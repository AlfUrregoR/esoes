<?php
$rutingHost = $_SERVER['SERVER_NAME'];

if ($rutingHost == "localhost") {
  $rutingHost = "/esoes";
} else {
  $rutingHost = "";
}

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
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Contenido Seccion portafolio galeria-->
<section id="portafolio-galeria">
  <div class="container">
    <section id="galeria">
      <?php
      $args = array(
        'post_type' => 'portafolio',
        'category_name'  => 'Home FR',
        'order' => 'asc'
      );
      $category_posts = new WP_Query($args);
      if ($category_posts->have_posts()) :
        while ($category_posts->have_posts()) :
          $category_posts->the_post();
          ?>

          <article>

            <a href="<?php the_field('url_portfolio_pages'); ?>">
              <div class="rings">
                <figure>
                  <?php $imagen_portafolio = get_field('imagen_portafolio'); ?>
                  <?php if ($imagen_portafolio) { ?>
                    <img src="<?php echo $imagen_portafolio['url']; ?>" alt="<?php echo $imagen_portafolio['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </figure>

              </div>
            </a>
          </article>

          <!-- [...] Aquí se irían repitiendo más elementos <article> con cursos-->


          <!--<div class="grid-item">
              <div class="rings">
                <a href="<?php the_field('url_portfolio_pages'); ?>">
                  <?php $imagen_portafolio = get_field('imagen_portafolio'); ?>
                  <?php if ($imagen_portafolio) { ?>
                  	<img src="<?php echo $imagen_portafolio['url']; ?>" alt="<?php echo $imagen_portafolio['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </a>
              </div>
            </div>-->
        <?php
          endwhile;
        else :
          ?>

      <?php
      endif;
      ?>
      <?php
      $args = array(
        'post_type' => 'portafolio',
        'category_name'  => 'Ver FR',
        'order' => 'asc'
      );
      $category_posts = new WP_Query($args);
      if ($category_posts->have_posts()) :
        while ($category_posts->have_posts()) :
          $category_posts->the_post();
          ?>

          <article class="prueba">
            <div class="rings">
              <a href="<?php the_field('url_portfolio_pages'); ?>">
                <figure>
                  <?php $imagen_portafolio = get_field('imagen_portafolio'); ?>
                  <?php if ($imagen_portafolio) { ?>
                    <img src="<?php echo $imagen_portafolio['url']; ?>" alt="<?php echo $imagen_portafolio['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </figure>
              </a>
            </div>
          </article>
        <?php
          endwhile;
        else :
          ?>
      <?php
      endif;
      ?>
      <?php
      $args = array(
        'post_type' => 'portafolio',
        'category_name'  => 'Home EN',
        'order' => 'asc'
      );
      $category_posts = new WP_Query($args);
      if ($category_posts->have_posts()) :
        while ($category_posts->have_posts()) :
          $category_posts->the_post();
          ?>

          <article>

            <a href="<?php the_field('url_portfolio_pages'); ?>">
              <div class="rings">
                <figure>
                  <?php $imagen_portafolio = get_field('imagen_portafolio'); ?>
                  <?php if ($imagen_portafolio) { ?>
                    <img src="<?php echo $imagen_portafolio['url']; ?>" alt="<?php echo $imagen_portafolio['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </figure>

              </div>
            </a>
          </article>
        <?php
          endwhile;
        else :
          ?>

      <?php
      endif;
      ?>
      <?php
      $args = array(
        'post_type' => 'portafolio',
        'category_name'  => 'Ver EN',
        'order' => 'asc'
      );
      $category_posts = new WP_Query($args);
      if ($category_posts->have_posts()) :
        while ($category_posts->have_posts()) :
          $category_posts->the_post();
          ?>

          <article class="prueba">
            <div class="rings">
              <a href="<?php the_field('url_portfolio_pages'); ?>">
                <figure>
                  <?php $imagen_portafolio = get_field('imagen_portafolio'); ?>
                  <?php if ($imagen_portafolio) { ?>
                    <img src="<?php echo $imagen_portafolio['url']; ?>" alt="<?php echo $imagen_portafolio['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </figure>
              </a>
            </div>
          </article>
        <?php
          endwhile;
        else :
          ?>
      <?php
      endif;
      ?>
      <?php
      $args = array(
        'post_type' => 'portafolio',
        'category_name'  => 'Home ES',
        'order' => 'asc'
      );
      $category_posts = new WP_Query($args);
      if ($category_posts->have_posts()) :
        while ($category_posts->have_posts()) :
          $category_posts->the_post();
          ?>

          <article>

            <a href="<?php the_field('url_portfolio_pages'); ?>">
              <div class="rings">
                <figure>
                  <?php $imagen_portafolio = get_field('imagen_portafolio'); ?>
                  <?php if ($imagen_portafolio) { ?>
                    <img src="<?php echo $imagen_portafolio['url']; ?>" alt="<?php echo $imagen_portafolio['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </figure>

              </div>
            </a>
          </article>
        <?php
          endwhile;
        else :
          ?>

      <?php
      endif;
      ?>
      <?php
      $args = array(
        'post_type' => 'portafolio',
        'category_name'  => 'Ver ES',
        'order' => 'asc'
      );
      $category_posts = new WP_Query($args);
      if ($category_posts->have_posts()) :
        while ($category_posts->have_posts()) :
          $category_posts->the_post();
          ?>

          <article class="prueba">
            <div class="rings">
              <a href="<?php the_field('url_portfolio_pages'); ?>">
                <figure>
                  <?php $imagen_portafolio = get_field('imagen_portafolio'); ?>
                  <?php if ($imagen_portafolio) { ?>
                    <img src="<?php echo $imagen_portafolio['url']; ?>" alt="<?php echo $imagen_portafolio['alt']; ?>" />
                  <?php } ?>
                  <span><?php the_field('title_portafolio_1'); ?></span>
                </figure>
              </a>
            </div>
          </article>
        <?php
          endwhile;
        else :
          ?>
      <?php
      endif;
      ?>
    </section>
  </div>
  <div id="div-mostrar" class="div-mostrar text-center">
    <a id="mostrar"><img id="mostrar-img" src="<?php echo $rutingHost ?>/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
  </div>


</section>

<!-- Contenido Seccion Servicio-->
<section id="services" class="services">
  <div class="container">
    <div class="content-title-services">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center">
            <h3 class="title-services"> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('title_services'); ?>
              <?php endwhile;
              endif; ?></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row file-services">
      <div class="col-sm-12 col-md-6 list-izq">
        <ul>
          <a href="/services/">
            <li> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_1'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
          <a href="/services/">
            <li> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_2'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
          <a href="/services/">
            <li> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_3'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
          <a href="/services/">
            <li> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_4'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
        </ul>
      </div>
      <div class="col-sm-12 col-md-6 list-der">
        <ul>
          <a href="/services/">
            <li> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_5'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
          <a href="/services/">
            <li> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_6'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
          <a href="/services/">
            <li> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_7'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
          <a href="/services/">
            <li>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('services_8'); ?>
              <?php endwhile;
              endif; ?></li>
          </a>
        </ul>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="container div-btn-services">
        <div class="col-12 text-center">
          <a href="/services/" class="btn-services"><?php the_field('text_boton'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="propos" class="propos">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6 propos-izq"></div>
      <div class="col-sm-12 col-md-6 propos-der"> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h3><?php the_field('title_propos'); ?></h3>
            <h6><?php the_field('tag_propos'); ?></h6>
            <p><?php the_field('text_propos'); ?></p>
        <?php endwhile;
        endif; ?>
        <div class="row">
          <div class="col-12 div-btn-propos">
            <a href="/a-propos/" class="btn-propos">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field('text_button'); ?>
              <?php endwhile;
              endif; ?>
            </a>
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
        <h3><?php the_field('title_partenaires'); ?></h3>
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
        <?php
        $args = array(
          'post_type' => 'collaborations',
          'category_name'  => 'Home FR',
          'order' => 'asc'
        );
        $category_posts = new WP_Query($args);
        if ($category_posts->have_posts()) :
          $i = 1;
          while ($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>
            <div class="carousel-item <?php if ($i == 1) echo "active"; ?>">
              <div class="align-items-center div-text-collaborations">
                <div id="text-collaborations" class="col-12 text-center text-collaborations">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <h3><?php the_field('title_collaborations_1'); ?></h3>
                      <p><?php the_field('content_collaborations_1'); ?>
                      </p>
                  <?php endwhile;
                      endif; ?>
                  <p class="collaborations-name"><?php the_field('tag_collaborations_1'); ?></p>
                </div>
              </div>
            </div>
          <?php $i++;
            endwhile;
            wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php
        $args = array(
          'post_type' => 'collaborations',
          'category_name'  => 'Home EN',
          'order' => 'asc'
        );
        $category_posts = new WP_Query($args);
        if ($category_posts->have_posts()) :
          $i = 1;
          while ($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>
            <div class="carousel-item <?php if ($i == 1) echo "active"; ?>">
              <div class="align-items-center div-text-collaborations">
                <div id="text-collaborations" class="col-12 text-center text-collaborations">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <h3><?php the_field('title_collaborations_1'); ?></h3>
                      <p><?php the_field('content_collaborations_1'); ?>
                      </p>
                  <?php endwhile;
                      endif; ?>
                  <p class="collaborations-name"><?php the_field('tag_collaborations_1'); ?></p>
                </div>
              </div>
            </div>
          <?php $i++;
            endwhile;
            wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php
        $args = array(
          'post_type' => 'collaborations',
          'category_name'  => 'Home ES',
          'order' => 'asc'
        );
        $category_posts = new WP_Query($args);
        if ($category_posts->have_posts()) :
          $i = 1;
          while ($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>
            <div class="carousel-item <?php if ($i == 1) echo "active"; ?>">
              <div class="align-items-center div-text-collaborations">
                <div id="text-collaborations" class="col-12 text-center text-collaborations">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <h3><?php the_field('title_collaborations_1'); ?></h3>
                      <p><?php the_field('content_collaborations_1'); ?>
                      </p>
                  <?php endwhile;
                      endif; ?>
                  <p class="collaborations-name"><?php the_field('tag_collaborations_1'); ?></p>
                </div>
              </div>
            </div>
          <?php $i++;
            endwhile;
            wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <img src="<?php echo $rutingHost ?>/wp-content/uploads/2019/08/flecha.png" alt="">
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <img src="<?php echo $rutingHost ?>/wp-content/uploads/2019/08/flecha.png" alt="">
      </a>
    </div>
  </div>
</section>

<section id="contact" class="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center text-contact">
        <p><?php the_field('text_contact'); ?>
        </p>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="container div-btn-propos text-center">
        <div class="col-12">
          <a href="/contact/" class="btn-contact"><?php the_field('text_button_contact'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog" class="blog">
<div class="container">
    <div id="demo-blog" class="carousel slide" data-ride="carousel">

      <!-- The slideshow -->
      <div class="carousel-inner">
        <?php
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Home FR',
          'order' => 'asc'
        );
        $category_posts = new WP_Query($args);
        if ($category_posts->have_posts()) :
        $i=1;
          while ($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>
        <div class="carousel-item <?php if($i==1) echo "active"; ?>">
          <div class="row align-items-center blog-izq">
              <div class=" col-12 text-center">
                <div class="efecto-blog">
                  <a href="<?php the_permalink(); ?>" class="tag">
                    <?php $imagen_blog_1 = get_field('imagen_blog_1'); ?>
                    <?php if ($imagen_blog_1) { ?>
                      <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                    <?php } ?>
                    <span>VOYAGE</span>
                  </a>
                  <div class="contenido-blog text-center">
                    <h4 class="paragraph"><?php the_title(); ?></h4>
                    <p class="subtitle"><?php the_field( 'subtitle_home' ); ?></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php $i++; endwhile; wp_reset_postdata();?>
      <?php endif;?>
      <?php
      $args = array(
        'post_type' => 'post',
        'category_name'  => 'Home EN',
        'order' => 'asc'
      );
      $category_posts = new WP_Query($args);
      if ($category_posts->have_posts()) :
      $i=1;
        while ($category_posts->have_posts()) :
          $category_posts->the_post();
          ?>
      <div class="carousel-item <?php if($i==1) echo "active"; ?>">
      <div class="row align-items-center blog-izq">
              <div class=" col-12 text-center">
                <div class="efecto-blog">
                  <a href="<?php the_permalink(); ?>" class="tag">
                    <?php $imagen_blog_1 = get_field('imagen_blog_1'); ?>
                    <?php if ($imagen_blog_1) { ?>
                      <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                    <?php } ?>
                    <span>VOYAGE</span>
                  </a>
                  <div class="contenido-blog text-center">
                    <h4 class="paragraph"><?php the_title(); ?></h4>
                    <p class="subtitle"><?php the_field('subtitle_home'); ?></p>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <?php $i++; endwhile; wp_reset_postdata();?>
    <?php endif;?>
    <?php
    $args = array(
      'post_type' => 'post',
      'category_name'  => 'Home ES',
      'order' => 'asc'
    );
    $category_posts = new WP_Query($args);
    if ($category_posts->have_posts()) :
    $i=1;
      while ($category_posts->have_posts()) :
        $category_posts->the_post();
        ?>
    <div class="carousel-item <?php if($i==1) echo "active"; ?>">
    <div class="row align-items-center blog-izq">
              <div class=" col-12 text-center">
                <div class="efecto-blog">
                  <a href="<?php the_permalink(); ?>" class="tag">
                    <?php $imagen_blog_1 = get_field('imagen_blog_1'); ?>
                    <?php if ($imagen_blog_1) { ?>
                      <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                    <?php } ?>
                    <span>VOYAGE</span>
                  </a>
                  <div class="contenido-blog text-center">
                    <h4 class="paragraph"><?php the_title(); ?></h4>
                    <p class="subtitle"><?php the_field( 'subtitle_home' ); ?></p>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <?php $i++; endwhile; wp_reset_postdata();?>
  <?php endif;?>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo-blog" data-slide="prev">
        <img src="<?php echo $rutingHost ?>/wp-content/uploads/2019/08/flecha.png" alt="">  
      </a>
      <a class="carousel-control-next" href="#demo-blog" data-slide="next">
       <img src="<?php echo $rutingHost ?>/wp-content/uploads/2019/08/flecha.png" alt="">
      </a>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="container div-btn-blog">
        <div class="col-12 text-center">
          <a href="/blog/" class="btn-blog"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field('text_button_home'); ?></a>
      <?php endwhile;
      endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<a id="button"><img src="<?php echo $rutingHost ?>/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>