<?php
/**
* Template Name: BLOG PAGES
*/
// Archivo de header de Wordpress
get_header('int');
?>

<div class="blog-int">
  <div class="container">
    <div class="row align-items-center blog-izq">
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

          <div class="col-sm-12 col-md-6 text-center">
            <div class="efecto-blog">

                <?php $imagen_blog_1 = get_field( 'imagen_blog_1' ); ?>
                <?php if ( $imagen_blog_1 ) { ?>
                  <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                <?php } ?>
              <div class="contenido-blog text-center">
                <h6 class="paragraph"><?php the_title(); ?></h6>
                <h4 class="subtitle"><?php the_field( 'subtitle' ); ?></h4>
                <div class="container div-btn-blog">
                  <div class="col-12 text-center">
                    <a href="<?php the_permalink(); ?>" class="btn-blog">Lire</a>
                  </div>
                </div>
              </div>
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

          <div class="col-sm-12 col-md-6 text-center">
            <div class="efecto-blog">

                <?php $imagen_blog_1 = get_field( 'imagen_blog_1' ); ?>
                <?php if ( $imagen_blog_1 ) { ?>
                  <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                <?php } ?>
              <div class="contenido-blog text-center">
                <h6 class="paragraph"><?php the_title(); ?></h6>
                <h4 class="subtitle"><?php the_field( 'subtitle' ); ?></h4>
                <div class="container div-btn-blog">
                  <div class="col-12 text-center">
                    <a href="<?php the_permalink(); ?>" class="btn-blog">Lire</a>
                  </div>
                </div>
              </div>
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

          <div class="col-sm-12 col-md-6 text-center">
            <div class="efecto-blog">

                <?php $imagen_blog_1 = get_field( 'imagen_blog_1' ); ?>
                <?php if ( $imagen_blog_1 ) { ?>
                  <img src="<?php echo $imagen_blog_1['url']; ?>" alt="<?php echo $imagen_blog_1['alt']; ?>" />
                <?php } ?>
              <div class="contenido-blog text-center">
                <h6 class="paragraph"><?php the_title(); ?></h6>
                <h4 class="subtitle"><?php the_field( 'subtitle' ); ?></h4>
                <div class="container div-btn-blog">
                  <div class="col-12 text-center">
                    <a href="<?php the_permalink(); ?>" class="btn-blog">Lire</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    </div>
  </div>

</div>
<a id="button"><img src="esoes/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
