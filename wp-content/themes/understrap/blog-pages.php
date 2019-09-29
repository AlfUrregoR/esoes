<?php
session_start();
/**
* Template Name: BLOG PAGES
*/
// Archivo de header de Wordpress
get_header('int');
?>

<div class="blog-int">
  <div class="container-fluid">
      <?php
      $args = array(
                'post' => '298',
                'category_name'  => 'Blog FR',
                'order' => 'asc'
            );
       $category_posts = new WP_Query($args);
       if($category_posts->have_posts()) :
          while($category_posts->have_posts()) :
             $category_posts->the_post();
      ?>

      <div class="row section_blog">
        <div class="col-sm-12 col-md-5 blog_fondo">
          <p>Voyage</p>
          <h2 class="title"><?php the_title(); ?></h2>
          <div class="sep-vert">
          </div>
          <p class="subtitle"><?php the_field( 'content_blog_1' ); ?></p>
          <div class="container div-btn-blog">
            <div class="col-12">
              <a href="<?php the_permalink(); ?>">
                Lire l'article
              </a>
            </div>
          </div>
        </div>
        <div class="blog_text col-sm-12 col-md-6" >
          <?php $imagen_blog_3 = get_field( 'imagen_blog_3' ); ?>
          <?php if ( $imagen_blog_3 ) { ?>
            <img src="<?php echo $imagen_blog_3['url']; ?>" alt="<?php echo $imagen_blog_3['alt']; ?>" />
          <?php } ?>
        </div>
      </div>

        <?php endwhile; ?>
      <?php endif; ?>
      <?php
      $args = array(
                'post' => '298',
                'category_name'  => 'Blog EN',
                'order' => 'asc'
            );
       $category_posts = new WP_Query($args);
       if($category_posts->have_posts()) :
          while($category_posts->have_posts()) :
             $category_posts->the_post();
      ?>

      <div class="row section_blog">
        <div class="col-sm-12 col-md-6 blog_fondo">
          <p>Voyage</p>
          <h2 class="title"><?php the_title(); ?></h2>
          <div class="sep-vert">
          </div>
          <p class="subtitle"><?php the_field( 'content_blog_1' ); ?></p>
          <div class="container div-btn-blog">
            <div class="col-12">
              <a href="<?php the_permalink(); ?>">
                Read the article
              </a>
            </div>
          </div>
        </div>
        <div class="blog_text col-sm-12 col-md-6">
          <?php $imagen_blog_3 = get_field( 'imagen_blog_3' ); ?>
          <?php if ( $imagen_blog_3 ) { ?>
            <img src="<?php echo $imagen_blog_3['url']; ?>" alt="<?php echo $imagen_blog_3['alt']; ?>" />
          <?php } ?>
        </div>
      </div>

        <?php endwhile; ?>
      <?php endif; ?>
      <?php
      $args = array(
                'post' => '298',
                'category_name'  => 'Blog ES',
                'order' => 'asc'
            );
       $category_posts = new WP_Query($args);
       if($category_posts->have_posts()) :
          while($category_posts->have_posts()) :
             $category_posts->the_post();
      ?>

      <div class="row section_blog">
        <div class="col-sm-12 col-md-6 blog_fondo">
          <p>Voyage</p>
          <h2 class="title"><?php the_title(); ?></h2>
          <div class="sep-vert">
          </div>
          <p class="subtitle"><?php the_field( 'content_blog_1' ); ?></p>
          <div class="container div-btn-blog">
            <div class="col-12">
              <a href="<?php the_permalink(); ?>">
                Lee el articulo
              </a>
            </div>
          </div>
        </div>
        <div class="blog_text col-sm-12 col-md-6">
          <?php $imagen_blog_3 = get_field( 'imagen_blog_3' ); ?>
          <?php if ( $imagen_blog_3 ) { ?>
            <img src="<?php echo $imagen_blog_3['url']; ?>" alt="<?php echo $imagen_blog_3['alt']; ?>" />
          <?php } ?>
        </div>
      </div>

        <?php endwhile; ?>
      <?php endif; ?>
  </div>
</div>

<a id="button"><img src="<?php echo $_SESSION["rutingHost"] ?>/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
