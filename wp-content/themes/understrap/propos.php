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
            <p>
              Esoes est une agence de design itinérante spécialisée dans les solutions<br>
              de communication visuelle et stratégies d’identité graphique. <br><br>
              Par ses passions pour le design et la photographie, aussi grâce à ses<br>
              études supérieures en communication visuelle, sa créatrice <br>
              Lucie Bühlmann applique la même approche minimaliste et émotionnelle<br>
              à travers chacun de ses travaux. <br><br>
              En travaillant comme Visual Merchandising Designer pendant plus de trois ans<br>
              dans l'horlogerie de prestige en Suisse, elle a pu acquérir une véritable<br>
              compréhension du design de luxe et des méthodes de conceptualisation, lui permet-<br>
              tant ainsi d’affiner et de développer son style et ses compétences. Elle tra-<br>
              vaille aujourd'hui en tant que graphique designer freelance pour différentes agences<br>
              de communication suisses et aide ses clients à créer une continuité vi-<br>
              suelle cohérente et développer leur présence sur le marché à travers<br>
              des contenus réfléchis.
              <?php $imagen_partenaires = get_field( 'imagen_partenaires' ); ?>
              <?php if ( $imagen_partenaires ) { ?>
              	<img src="<?php echo $imagen_partenaires['url']; ?>" alt="<?php echo $imagen_partenaires['alt']; ?>" />
              <?php } ?>
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
            <h3 class="title-propos-2">Une agence nomade</h3>
            <p>
              Bien que ses racines se trouvent en Suisse, Lucie a pour mission <br>
              personnelle de découvrir le monde et ses différentes cultures. <br>
              Digitale nomade et exploratrice à pleins temps, sa vision <br>
              d'un monde éclectique lui permet d'apporter à ses travaux, à travers  <br>
              Esoes, des influences internationales novatrices.<br><br>
              Les créations d'Esoes reflètent les environnements en mutation et les <br>
              nouvelles cultures dans lesquels se retrouve plongée sa créatrice. <br>
              Cette façon de vivre permet à l’agence de proposer à ses clients <br>des concepts plus qu’inspirants.<br><br>
              avantages sur le coût de ses prestations, ainsi que sur les délais de<br> réalisation.
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
            <h3 class="title-propos-2">Valeurs fondamentales</h3>
            <p>
              Les inspirations quotidiennes d'autres mondes per- <br>
              mettent à Esoes de lier authenticité, simplicité et mémo- <br>
              rabilité, offrant à ses clients un point de vue singulier sur <br>
              l’esthétisme. <br><br>
              En regardant toujours plus loin que les yeux peuvent voir<br>
              et en se concentrant davantage sur ce que le cœur peut<br>
              ressentir, Esoes reflète les qualités émotionnelles de <br>
              chacun à travers une perspective authentique et ration-<br>
              nelle où l’art de l’image est imprégné par une beauté <br>
              honnête et profondément personnelle.
            </p>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6 align-items-center">
            <img src="http://localhost/esoes/wp-content/uploads/2019/07/about3.png" alt="">
          </div>
        </div>
      </div>
    </div>

  </section>


<a id="button"><img src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
