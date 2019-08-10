<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="instagram" class="instagram">
  <div class="container-fluid align-items-center">
    <div class="row text-center">
      <a class="btn-instagram" href="#">INSTAGRAM</a>
			<?php echo do_shortcode( '[enjoyinstagram_mb_grid]' ); ?>
    </div>
  </div>
</section>

	<footer class="footer ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 div-item-footer">
					<div class="row">
						<div class="col-md-3 item-footer">
	            <a href="#">C O N T A C T</a>
	          </div>
						<div class="col-md-3 item-footer2">
	            <a href="#">S P O N S O R S H I P</a>
	          </div>
	          <div class="col-md-3 item-footer3">
	            <a href="#">T E R M S</a>
	          </div>
	          <div class="col-md-3 item-footer4">
	           <a href="#">P R I V A C Y P O L I C Y</a>
	          </div>
					</div>
				</div>
				<div class="col-md-4 div-item-der-footer">
					<div class="row">
		        <div class="col-md-6 div-item-rs">
		         <a class="fb-ic mr-3" role="button" href="https://www.instagram.com/esoes_design/" target="_blank"><i class="icono fab fa-instagram"></i></a>
		         <a class="fb-ic mr-3" role="button" href="https://www.facebook.com/esoes.design" target="_blank"><i class="fab fa-facebook-f"></i></a>
		         <a class="fb-ic mr-3" role="button" href="https://www.pinterest.ch/esoes_design/" target="_blank"><i class="fab fa-pinterest"></i></a>
		        </div>
		        <div class="col-md-6 div-item-copy ">
		          <p>(c) C O P Y R I G H T 2 0 1 9 | E S O E S </p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</footer>


</div><!-- container end -->


</div><!-- #page we need this extra closing tag here -->


<?php wp_footer(); ?>
<script type="text/javascript">
(function($) {
  var action = 1;

  $("#mostrar").on("click", viewSomething);

  function viewSomething() {
      if ( action == 1 ) {
        $('.prueba').toggle();
        $("#mostrar-img").css("transform", "rotate(270deg)");
        $("#div-mostrar").css("padding-top", "40vh");
        $("#div-mostrar").css("padding-bottom", "10vh");
          action = 2;
      } else {
        $('.prueba').toggle();
        $("#div-mostrar").css("padding-top", "10vh");
        $("#mostrar-img").css("transform", "rotate(90deg)");
          action = 1;
      }
  }
})( jQuery );
(function($) {
  var btn = $('#button');
  $(window).on('scroll',function() {
    if ($(window).scrollTop() > 500) {
      btn.show();
    } else {
      btn.hide();
    }
  });
  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '100');
  });
	$('.search-icon').replaceWith("<img class='img-lupe' src='http://esoes-design.com/wp-content/uploads/2019/07/loupe.png'>");
})( jQuery );

  var heightImages = 0;

  window.onload = function(){
      heightImages = document.querySelector('.cont-img').scrollHeight;
  }

  function controlScroll($event) {
      console.log(pageYOffset);
     var scrollY = window.innerHeight + pageYOffset;
     var texto = document.querySelector('.cont-text');
     if(scrollY > heightImages) {
          texto.classList.add('quieto')
     } else {
         texto.classList.remove('quieto');
     }
  }

</script>
</body>

</html>
