<?php
/**
* Template Name: SERVICES
*/
// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de Services -->
<section id="pag-services">
    <div class="content-services">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-sm-12 col-md-5">
            <h3 class="title-services"><?php the_title(); ?></h3>
          <p><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'text_content_section_1' ); ?>
            <?php endwhile; endif; ?></p>
          </div>
          <div class="col-sm-12 col-md-6 list-services">
            <ul>
              <li><i class="fas fa-circle"></i>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'item_1' ); ?>
              <?php endwhile; endif; ?></li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_2' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_3' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_4' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_5' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_6' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_7' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_8' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_9' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_10' ); ?>
                <?php endwhile; endif; ?>
              </li>
              <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_11' ); ?>
                <?php endwhile; endif; ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="processus">
  <div class="content-title-processus">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 text-center">
          <h3 class="title-services">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'title_process' ); ?>
            <?php endwhile; endif; ?></h4>
          </h3>
        </div>
      </div>
    </div>
  </div>

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
              <h4 class="title-services"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'subtitle_1' ); ?>
              <?php endwhile; endif; ?></h4>
              <p>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'content_slider_1' ); ?>
                <?php endwhile; endif; ?>
              </p>
              <ul>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_1_content_1' ); ?>
                  <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_2_content_1' ); ?>
                  <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_3_content_1' ); ?>
                  <?php endwhile; endif; ?>
                </li>
              </ul>
            </div>
            <div class="col-sm-12 col-md-6">
              <h4 class="title-services"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'subtitle_2' ); ?>
              <?php endwhile; endif; ?></h4>
              <p>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'content_slider_2' ); ?>
                <?php endwhile; endif; ?>
              </p>
              <ul>
                <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_1_content_2' ); ?>
                <?php endwhile; endif; ?></li>
                <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_2_content_1' ); ?>
                <?php endwhile; endif; ?></li>
                <li><i class="fas fa-circle"></i>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_3_content_2' ); ?>
                <?php endwhile; endif; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
              <h4 class="title-services">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'subtitle_3' ); ?>
                <?php endwhile; endif; ?>
              </h4>
              <p>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'content_slider_3' ); ?>
                <?php endwhile; endif; ?>
              </p>
              <ul class="list-services">
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_1_content_3' ); ?>
                  <?php endwhile; endif; ?></li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_2_content_3' ); ?>
                  <?php endwhile; endif; ?></li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_3_content_3' ); ?>
                  <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_4_content_3' ); ?>
                  <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_5_content_3' ); ?>
                  <?php endwhile; endif; ?></li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_6_content_3' ); ?>
                  <?php endwhile; endif; ?></li>
                <li><i class="fas fa-circle"></i><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'item_7_content_3' ); ?>
                <?php endwhile; endif; ?></li>
              </ul>
            </div>
            <div class="col-sm-12 col-md-6 div-phase">
              <h4 class="title-services"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'subtitle_4' ); ?>
              <?php endwhile; endif; ?></h4>
              <p>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'content_slider_4' ); ?>
                <?php endwhile; endif; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 div-livrable">
              <h4 class="title-services">  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'subtitle_6' ); ?>
                <?php endwhile; endif; ?></h4>
              <p>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'content_slider_6' ); ?>
                 <?php endwhile; endif; ?>
              </p>
            </div>
            <div class="col-sm-12 col-md-6">
              <h4 class="title-services">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'subtitle_5' ); ?>
                 <?php endwhile; endif; ?></h4>
              <p>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php the_field( 'content_slider_5' ); ?>
                 <?php endwhile; endif; ?>

              </p>
              <ul>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_1_content_5' ); ?>
                   <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_2_content_5' ); ?>
                   <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_3_content_5' ); ?>
                   <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_4_content_5' ); ?>
                   <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_5_content_5' ); ?>
                   <?php endwhile; endif; ?>
                </li>
                <li><i class="fas fa-circle"></i>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_field( 'item_6_content_5' ); ?>
                   <?php endwhile; endif; ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <img src="http://localhost/esoes/wp-content/uploads/2019/08/flecha.png" alt="">
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <img src="http://localhost/esoes/wp-content/uploads/2019/08/flecha.png" alt="">
    </a>
  </div>
</section>
<section id="services-collaborations">
  <div class="content-collaborations">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6 contact-image text-center">
          <img src="http://esoes-design.com/wp-content/uploads/2019/07/esoes_submark.png" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 text-contact">
          <h3 class="title-contact">  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'subtitle_services_collaboration' ); ?>
            <?php endwhile; endif; ?>
          </h3>
          <p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'content__services_collaboration' ); ?>
              <?php endwhile; endif; ?>
          </p>
          <a href="#" class="btn-contact"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'button_services_collaboration' ); ?>
            <?php endwhile; endif; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="pourquoi">
  <div class="content-title-processus">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 text-center">
          <h3 class="title-pourquoi"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'title_pourquoi' ); ?>
            <?php endwhile; endif; ?></h3>
        </div>
      </div>
    </div>
  </div>

  <div class="content-pourquoi">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-4 text-center text-pourquoi">
          <h4 class="title-contact"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'subtitle_pourquoi' ); ?>
            <?php endwhile; endif; ?></h4>
          <p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'content__pourquoi_1' ); ?>
              <?php endwhile; endif; ?>
          </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 text-center text-pourquoi">
          <h4 class="title-contact"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'subtitle_pourquoi_2' ); ?>
            <?php endwhile; endif; ?></h4>
          <p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_field( 'content__pourquoi_2' ); ?>
              <?php endwhile; endif; ?>
          </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 text-center text-pourquoi-unique">
          <h4 class="title-contact"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'subtitle_pourquoi_3' ); ?>
            <?php endwhile; endif; ?></h4>
          <p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_field( 'content__pourquoi_3' ); ?>
              <?php endwhile; endif; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<a id="button"><img src="http://localhost/esoes/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
