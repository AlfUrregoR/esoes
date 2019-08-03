<?php
/**
* Template Name: Contact
*/
// Archivo de header de Wordpress
get_header('int');
?>

<!-- Contenido de página de inicio -->
  <div class="pages-contact">
    <div class="container h-100">
      <div class="row h-100  align-items-center">
        <div class="col-12 text-center">
          <h3 class="title-portafolio"><?php the_title(); ?></h3>
          <p>
            Vous pensez à une collaboration ? <br>
            Esoes se réjouit d'en apprendre plus sur vos différents projets, <br>
            envies et inspirations !<br><br>
            L’agence saura vous proposer des solutions sur mesure adaptées à vos besoins, pour que<br>
            vous puissiez mener à bien les différents projets<br>
            qui vous tiennent à coeur.
          </p>
          </div>
        </div>

    <?php
      if ( isset($_GET['sent']) ){
      	if ( $_GET['sent'] == '1'){
      		echo "<p> ✔ Formulario enviado correctamente</p><br>";
      	}
      	else {
      		echo "<p> Hubo un error al enviar</p><br>";
      	}
      }
    ?>

    <div class="form-contact">
        <form method="post" action="<?php echo admin_url( 'admin-post.php' ) ?>">
          <div class="fondo">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group group-izq">
                    <input type="text" class="form-control" id="name" placeholder="Nom/Prénom">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-der">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-izq">
                  <input type="tel" class="form-control" id="phone" placeholder="Téléphone">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-der">
                  <input type="text" class="form-control" id="site" placeholder="Site web">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-izq">
                  <input type="tel" class="form-control" id="sujet" placeholder="Sujet">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-der">
                  <input type="tel" class="form-control" id="pays" placeholder="Pays de résidence">
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-12 col-md-12 div-message">
              <div class="form-group">
                <label for="comment">Message</label>
                <textarea class="form-control" rows="7" id="message"></textarea>
              </div>
            </div>
          </div>
          </div>
          <button type="submit" class="btn btn-form">Envoyer</button>
        </form>
    </div>

    <div class="row div-datos">
      <div class="col-sm-12 col-md-7">
        <img src="http://localhost/esoes/wp-content/uploads/2019/07/esoes_submark.png" alt="">
      </div>
      <div class="col-sm-12 col-md-3 div-name">
        <p>Lucie <br>
          Graphique Designer Freelance <br><br>
          +41 78 606 82 03<br>
          desing.esoes@gmail.com
        </p>

      </div>

    </div>
  </div>

</div>



<a id="button"><img src="http://esoes-design.com/wp-content/uploads/2019/07/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
