<?php
/*
Template Name: BLOG PAGES
*/

// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de Blog-->


<section id="blog" class="blog">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 offset-md-1 blog-izq text-center">
        <div class="efecto-blog">
          <a href="#">
            <img src="http://localhost/esoes/wp-content/uploads/2019/07/Medellin.png" alt="">
            <span>VOYAGE</span>
          </a>
          <div class="contenido-blog text-center">
            <p><strong>MEDELLIN</strong></p>
            <h6><strong>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit</strong></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 blog-der text-center">
        <div class="efecto-blog">
          <a href="#">
            <img src="http://localhost/esoes/wp-content/uploads/2019/07/panama_city.png" alt="">
            <span>VOYAGE</span>
          </a>
          <div class="contenido-blog text-center">
            <p><strong>PANAMA CITY</strong></p>
            <h6><strong>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit</strong></h6>
          </div>
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


<a id="button"><img src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
