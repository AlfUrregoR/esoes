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
            <p>Esoes est une agence de design itinérante <br> spécialisée dans les solutions de communications visuelles</p>
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
        <?php
        $args = array(
                  'post_type' => 'portafolio',
                  'category_name'  => 'Home',
                  'order' => 'asc'
              );
         $category_posts = new WP_Query($args);

         if($category_posts->have_posts()) :
            while($category_posts->have_posts()) :
               $category_posts->the_post();
        ?>
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
      <?php
            endwhile;
         else:
      ?>
            Vaya, no hay entradas.
      <?php
         endif;
      ?>
    </div>
  </div>
    <div class="div-mostrar text-center">
        <a id="mostrar">Ver más</a>
    </div>
<div class="container" id="prueba">
  <div class="row">

    <?php
    $args = array(
              'post_type' => 'portafolio',
              'cat' => '5',
              'order' => 'asc'
          );
     $category_posts = new WP_Query($args);

     if($category_posts->have_posts()) :
        while($category_posts->have_posts()) :
           $category_posts->the_post();
    ?>
      <div class="col-sm-12 col-md-4">
         <div class="rings" >
           <a href="#">
             <?php $imagen_portafolio_1 = get_field( 'imagen_portafolio_1' ); ?>
             <?php if ( $imagen_portafolio_1 ) { ?>
               <img src="<?php echo $imagen_portafolio_1['url']; ?>" alt="<?php echo $imagen_portafolio_1['alt']; ?>" />
             <?php } ?>
           <span><?php the_field( 'title_portafolio_1' ); ?></span>
           </a>
         </div>
       </div>
  <?php
        endwhile;
     else:
  ?>
        Vaya, no hay entradas.
  <?php
     endif;
  ?>
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
                <div class="col-12 div-btn-propos">
                  <a href="#" class="btn-propos">Lire</a>
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
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/exception_logo.png" alt=""></a>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/manor-logo.png" alt=""></a>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/Vaucher_logo.png" alt=""></a>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/Kramer_Krieg_logo.png" alt=""></a>
      </div>
      <div class="col-12 col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/Kambly_logo.png" alt=""></a>
      </div>
      <div class=" col-12 col-md-2 text-center log-partenaires">
          <a href="#"><img src="http://localhost/esoes/wp-content/uploads/2019/07/spurring_logo.png" alt=""></a>
      </div>
    </div>
  </div>
</section>

<section id="collaborations" class="collaborations">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center text-collaborations">
          <h3>Dernieres Collaborations</h3>
          <p>Nous remercions Esoes pour l’exceptionnelle réalisation de notre identité visuelle.<br>
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
          <p>Vous pensez à une collaboration ?<br>
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
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 offset-md-1 blog-izq text-center">
        <img src="http://localhost/esoes/wp-content/uploads/2019/07/Medellin.png" alt="">
        <div class="contenido-blog text-center">
          <p>MEDELLIN</p>
          <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
        </div>
      </div>
      <div class="col-md-5 blog-der text-center">
        <img src="http://localhost/esoes/wp-content/uploads/2019/07/panama_city.png" alt="">
        <div class="contenido-blog text-center">
          <p>PANAMA CITY</p>
          <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="container div-btn-blog">
        <div class="col-12 text-center">
          <a href="#" class="btn-blog">Lire le Blog</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="instagram" class="instagram">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-2 text-center img-instagram">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/298f469976e223be19dc43e796b056a8/5DE9D820/t51.2885-15/e35/64761000_463004221194158_6090328618335708565_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/298f469976e223be19dc43e796b056a8/5DE9D820/t51.2885-15/e35/64761000_463004221194158_6090328618335708565_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
      </div>
      <div class=" col-md-2 text-center img-instagram">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/4ded949f0a8d713b11470d2b3923a4fa/5DB17BB7/t51.2885-15/e35/64599493_355854855060433_1169383598495404316_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/4ded949f0a8d713b11470d2b3923a4fa/5DB17BB7/t51.2885-15/e35/64599493_355854855060433_1169383598495404316_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
      </div>
      <div class="col-md-2 text-center img-instagram">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/3e257abed46eeeaef5082f92925dfc25/5DAAA5C4/t51.2885-15/e35/66082124_446256732603107_4676076048704848720_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/3e257abed46eeeaef5082f92925dfc25/5DAAA5C4/t51.2885-15/e35/66082124_446256732603107_4676076048704848720_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
      </div>
      <div class="col-md-2 text-center img-instagram">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/298f469976e223be19dc43e796b056a8/5DE9D820/t51.2885-15/e35/64761000_463004221194158_6090328618335708565_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/298f469976e223be19dc43e796b056a8/5DE9D820/t51.2885-15/e35/64761000_463004221194158_6090328618335708565_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
      </div>
      <div class="col-md-2 text-center img-instagram">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/4ded949f0a8d713b11470d2b3923a4fa/5DB17BB7/t51.2885-15/e35/64599493_355854855060433_1169383598495404316_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/4ded949f0a8d713b11470d2b3923a4fa/5DB17BB7/t51.2885-15/e35/64599493_355854855060433_1169383598495404316_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
      </div>
      <div class="col-md-2 text-center img-instagram">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/3e257abed46eeeaef5082f92925dfc25/5DAAA5C4/t51.2885-15/e35/66082124_446256732603107_4676076048704848720_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
          <img src="https://scontent-iad3-1.cdninstagram.com/vp/3e257abed46eeeaef5082f92925dfc25/5DAAA5C4/t51.2885-15/e35/66082124_446256732603107_4676076048704848720_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com" alt="">
      </div>
    </div>

  </div>
</section>


<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
