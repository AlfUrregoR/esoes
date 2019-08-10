<?php
/**
* Template Name: PORTFOLIO
*/
// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de portfolio -->
<div id="pages-portfolio">
  <div class="row cont">
    <div class="col-5 content cont-img">
      <?php $image_portfolio_1 = get_field( 'image_portfolio_1' ); ?>
        <?php if ( $image_portfolio_1 ) { ?>
        	<img src="<?php echo $image_portfolio_1['url']; ?>" alt="<?php echo $image_portfolio_1['alt']; ?>" />
      <?php } ?>
      <?php $image_portfolio_2 = get_field( 'image_portfolio_2' ); ?>
      <?php if ( $image_portfolio_2 ) { ?>
      	<img src="<?php echo $image_portfolio_2['url']; ?>" alt="<?php echo $image_portfolio_2['alt']; ?>" />
      <?php } ?>
      <?php $image_portfolio_3 = get_field( 'image_portfolio_3' ); ?>
      <?php if ( $image_portfolio_3 ) { ?>
      	<img src="<?php echo $image_portfolio_3['url']; ?>" alt="<?php echo $image_portfolio_3['alt']; ?>" />
      <?php } ?>
      <?php $image_portfolio_4 = get_field( 'image_portfolio_4' ); ?>
      <?php if ( $image_portfolio_4 ) { ?>
      	<img src="<?php echo $image_portfolio_4['url']; ?>" alt="<?php echo $image_portfolio_4['alt']; ?>" />
      <?php } ?>
      <?php $image_portfolio_5 = get_field( 'image_portfolio_5' ); ?>
      <?php if ( $image_portfolio_5 ) { ?>
      	<img src="<?php echo $image_portfolio_5['url']; ?>" alt="<?php echo $image_portfolio_5['alt']; ?>" />
      <?php } ?>
      <?php $image_portfolio_6 = get_field( 'image_portfolio_6' ); ?>
      <?php if ( $image_portfolio_6 ) { ?>
      	<img src="<?php echo $image_portfolio_6['url']; ?>" alt="<?php echo $image_portfolio_6['alt']; ?>" />
      <?php } ?>
      <?php $image_portfolio_7 = get_field( 'image_portfolio_7' ); ?>
      <?php if ( $image_portfolio_7 ) { ?>
      	<img src="<?php echo $image_portfolio_7['url']; ?>" alt="<?php echo $image_portfolio_7['alt']; ?>" />
      <?php } ?>

    </div>
    <div class="col-7  cont-text">
      <div class="sticky">
        <h6 class="tag"><?php the_field( 'tag' ); ?></h6>
        <h3><?php the_field( 'title' ); ?></h3>
        <h6 class="tag_space"><?php the_field( 'tag2' ); ?></h6>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
 </div>
</div>


<a id="button"><img src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
