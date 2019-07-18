<?php
/**
* Template Name: HOME
*/


// Archivo de header de Wordpress
 get_header();
?>

<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <section id="portafolio">
    <div class="content-title-portafolio">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="title-portafolio"><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Contenido Seccion portafolio galeria-->
<section id="portafolio-galeria">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="rings">
          <a href="#">
            <?php $imagen_portafolio_1 = get_field( 'imagen_portafolio_1' ); ?>
            <?php if ( $imagen_portafolio_1 ) { ?>
              <img src="<?php echo $imagen_portafolio_1['url']; ?>" alt="<?php echo $imagen_portafolio_1['alt']; ?>" />
            <?php } ?>
          <span><?php the_field( 'title_portafolio_1' ); ?></span>
          </a>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="rings">
          <a href="#">
            <?php $imagen_portafolio_2 = get_field( 'imagen_portafolio_2' ); ?>
            <?php if ( $imagen_portafolio_1 ) { ?>
              <img src="<?php echo $imagen_portafolio_2['url']; ?>" alt="<?php echo $imagen_portafolio_2['alt']; ?>" />
            <?php } ?>
          <span><?php the_field( 'title_portafolio_2' ); ?></span>
          </a>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="rings">
          <a href="#">
            <?php $imagen_portafolio_3 = get_field( 'imagen_portafolio_3' ); ?>
            <?php if ( $imagen_portafolio_3 ) { ?>
              <img src="<?php echo $imagen_portafolio_3['url']; ?>" alt="<?php echo $imagen_portafolio_3['alt']; ?>" />
            <?php } ?>
          <span><?php the_field( 'title_portafolio_3' ); ?></span>
          </a>
        </div>
      </div>
    </div>
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
    <div class="row">
      <div class="col-sm-12 col-md-6 list-izq">
        <ul>
          <a href="#"><li>Consultation et solution visuelle</li></a>
          <a href="#"><li>Design graphique</li></a>
          <a href="#"><li>Développement de concept</li></a>
          <a href="#"><li>Identité visuelle</li></a>
        </ul>
      </div>
      <div class="col-sm-12 col-md-6 list-der">
        <ul>
          <a href="#"><li>Direction artistique</li></a>
          <a href="#"><li>Storytelling médias sociaux</li></a>
          <a href="#"><li>Merchandising et concept vitrine</li></a>
          <a href="#"><li>Recherche et inspiration</li></a>
        </ul>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="container div-btn-services">
        <div class="col-12 text-center">
          <a href="#" class="btn-services">Le processus</a>
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
          <h4>Esoes, une agence itinérante.</h4>
          <p>Bien que ses racines se trouvent en Suisse, Lucie à pour mission personnelle de
            découvrir le monde et ses différentes cultures. Digitale nomade et exploratrice
            à pleins temps, sa vision d'un monde éclectique lui permet d'apporter à ses travaux,
            à travers Esoes, des influences internationales et novatrices.</p>
            <div class="row">
              <div class="container div-btn-propos">
                <div class="col-12">
                  <a href="#" class="btn-propos">Lire</a>
                </div>
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
      <div class="col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/exception_logo.png" alt=""></a>
      </div>
      <div class=" col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/manor-logo.png" alt=""></a>
      </div>
      <div class="col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/Vaucher_logo.png" alt=""></a>
      </div>
      <div class="col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/Kramer_Krieg_logo.png" alt=""></a>
      </div>
      <div class="col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/Kambly_logo.png" alt=""></a>
      </div>
      <div class="col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/Kambly_logo.png" alt=""></a>
      </div>
    </div>
  </div>
</section>

<section id="collaborations" class="collaborations">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center text-collaborations">
          <h3>Dernieres Collaborations</h3>
          <p>Nous remercions Esoes pour l’exceptionnelle réalisation de notre identité visuelle.
            Esoes a tout de suite su cerner notre univers et le retranscrire à travers un design élégant et percutant.
          </p>
          <p>Lucien Meylan | Spurring</p>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center text-contact">
          <p>Vous pensez à une collaboration ?
            Esoes se réjouit d'en apprendre plus sur vos
            différents projets, envies et inspirations !
          </p>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="container div-btn-propos text-center">
        <div class="col-12">
          <a href="#" class="btn-contact">Contact</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog" class="blog">

</section>


<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
