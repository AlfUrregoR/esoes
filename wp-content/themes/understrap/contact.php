<?php
session_start();
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
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
    </div>

      <div  class="container form-contact form-label">
        <form id="contact-form" name="contact-form" action="<?php echo get_permalink();?>#contact-form" method="post">
          <?php //Comprobamos si el formulario ha sido enviado
          if (isset( $_POST['btn-submit'] )) {
            //Creamos una variable para almacenar los errores
            global $reg_errors;
            $reg_errors = new WP_Error;

            //Recogemos en variables los datos enviados en el formulario y los sanitizamos.
            //Si detectamos algún error, podremos más abajo rellenar los campos del formulario con los datos enviados para no tener que empezar el formulario de cero
            $f_name = sanitize_text_field($_POST['f_name']);
            $f_email = sanitize_email($_POST['f_email']);
            $f_phone = sanitize_text_field($_POST['phone']);
            $f_site = sanitize_text_field($_POST['site']);
            $f_sujet = sanitize_text_field($_POST['sujet']);
            $f_pays = sanitize_text_field($_POST['pays']);
            $f_message = sanitize_text_field($_POST['f_message']);

            //El campo Nombre es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
            if ( empty( $f_name ) ) {
              $reg_errors->add("empty-name", "El campo nombre es obligatorio");
            }
            //El campo Email es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
            if ( empty( $f_email ) ) {
              $reg_errors->add("empty-email", "El campo e-mail es obligatorio");
            }
            //Comprobamos que el dato tenga formato de e-mail con la función de WordPress "is_email" y en caso contrario creamos un registro de error
            if ( !is_email( $f_email ) ) {
              $reg_errors->add( "invalid-email", "El e-mail no tiene un formato válido" );
            }
            //El campo Mensaje es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
            if ( empty( $f_message ) ) {
              $reg_errors->add("empty-message", "El campo consulta es obligatorio");
            }

            //Si no hay errores enviamos el formulario
            if (count($reg_errors->get_error_messages()) == 0) {
              //Destinatario
              $recipient = "destinatario@email.com";

              //Asunto del email
              $subject = 'Formulario de contacto ' . get_bloginfo( 'name' );

              //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original
              $headers = "Reply-to: " . $f_name . " <" . $f_email . ">\r\n";

              //Montamos el cuerpo de nuestro e-mail
              $message = "Nom/Prénom: " . $f_name . "<br>";
              $message .= "E-mail: " . $f_email . "<br>";
              $message .= "Téléphone: " . $f_phone . "<br>";
              $message .= "Site web: " . $f_site . "<br>";
              $message .= "Sujet: " . $f_sujet . "<br>";
              $message .= "Pays de résidence: " . $f_pays . "<br>";
              $message .= "Mensaje: " . nl2br($f_message) . "<br>";

              //Filtro para indicar que email debe ser enviado en modo HTML
              add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));

              //Por último enviamos el email
              $envio = wp_mail( $recipient, $subject, $message, $headers, $attachments);

              //Si el e-mail se envía correctamente mostramos un mensaje y vaciamos las variables con los datos. En caso contrario mostramos un mensaje de error
              if ($envio) {
                unset($f_name);
                unset($f_email);
                unset($f_phone);
                unset($f_site);
                unset($f_sujet);
                unset($f_pays);
                unset($f_message);?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  El formulario ha sido enviado correctamente.
                </div>
              <?php }else {?>
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Se ha producido un error enviando el formulario. Puede intentarlo más tarde o ponerse en contacto con nosotros escribiendo un mail a "destinatario@email.com"
                </div>
              <?php }
            }
          }?>
          <div class="fondo">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-izq field-container">
                  <label for="f_name" class="floating-label">Nom/Prénom</label>
                  <input type="text" id="f_name" name="f_name" class="form-control field" value="<?php echo $f_name;?>" placeholder="Nom/Prénom" required aria-required="true">

                  <?php //Comprobamos si hay errores en la validación del campo Nombre
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-name")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-name");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-der field-container">
                  <label for="f_email" class="floating-label">Email</label>
                  <input type="email" id="f_email" name="f_email" class="form-control field" value="<?php echo $f_email;?>"  placeholder="Email" required aria-required="true">

                  <?php //Comprobamos si hay errores en la validación del campo E-mail
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-email")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-email");?></p>
                    </div>
                    <?php }
                  }

                  //Comprobamos si hay errores en el formato del campo E-mail
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("invalid-email")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-warning alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("invalid-email");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-izq field-container">
                  <label for="f_phone" class="floating-label">Téléphone</label>
                  <input type="tel" id="f_phone" name="f_phone" class="form-control field" value="<?php echo $f_phone;?>" placeholder="Téléphone">

                  <?php //Comprobamos si hay errores en la validación del campo Nombre
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-phone")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-phone");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-der field-container">
                  <label for="f_site" class="floating-label">Site web</label>
                  <input type="text" id="f_site" name="f_site" class="form-control field" value="<?php echo $f_site;?>"  placeholder="Site web"   required aria-required="true">

                  <?php //Comprobamos si hay errores en la validación del campo Nombre
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-site")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-site");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-izq field-container">
                  <label for="f_sujet" class="floating-label">Sujet</label>
                  <input type="text" id="f_sujet" name="f_sujet" class="form-control field" value="<?php echo $f_sujet;?>" placeholder="Sujet">

                  <?php //Comprobamos si hay errores en la validación del campo Nombre
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-sujet")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-sujet");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="form-group group-der field-container">
                  <label for="f_pays" class="floating-label">Site web</label>
                  <input type="text" id="f_pays" name="f_pays" class="form-control field" value="<?php echo $f_pays;?>"  placeholder="Pays de résidence"   required aria-required="true">

                  <?php //Comprobamos si hay errores en la validación del campo Nombre
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-pays")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-pays");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-12 div-message">
                <div class="form-group">
                  <label for="f_message">Message</span></label>
                  <textarea id="f_message" name="f_message" rows="7" class="form-control" required aria-required="true"><?php echo $f_message;?></textarea>

                  <?php //Comprobamos si hay errores en la validación del campo Mensaje
                  if ( is_wp_error( $reg_errors ) ) {
                    if ($reg_errors->get_error_message("empty-message")) {?>
                    <br class="clearfix" />
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <p><?php echo $reg_errors->get_error_message("empty-message");?></p>
                    </div>
                    <?php }
                  }?>
                </div>
              </div>
            </div>
            <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-form">Envoyer</button>
          </div>

        </form>
      </div>
      <div class="row div-datos">
        <div class="col-sm-12 col-md-6">
          <img src="<?php echo $_SESSION["rutingHost"] ?>/wp-content/uploads/2019/07/esoes_submark.png" alt="">
        </div>
        <div class="col-sm-12 col-md-6 div-name">
          <p>Lucie Bühlmann <br>
            Founder & Creative Designer <br><br>
            +41 78 606 82 03<br>
            lucie@esoes-design.com
          </p>
        </div>
      </div>
</div>

<a id="button"><img src="<?php echo $_SESSION["rutingHost"] ?>/wp-content/uploads/2019/08/flecha.png" alt=""> </a>
<!-- Archivo de footer de Wordpress -->
<?php get_footer(); ?>
