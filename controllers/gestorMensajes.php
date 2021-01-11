<?php

class MensajesController{

  public function registroMensajesController(){

    if (isset($_POST['nombre'])) {
              // acepta tildes áéíóúÁÉÍÓÚñÑ
      if (preg_match('/^[a-zA-Z\s áéíóúÁÉÍÓÚñÑ]+$/',$_POST['nombre']) &&
          preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST['email']) &&
          preg_match('/^[a-zA-Z0-9 áéíóúÁÉÍÓÚñÑ\s\.,]+$/', $_POST['mensaje'])) {

            // ENVIAR CORREO ELECTRONICO CON TEXTO PLANO
            // ------------------------------------
            // mail(correo de destino, asunto del mensaje, mensaje, cabecera del correo);
            $correoDestino = "contacto@aquiestoy.mx";
            $asunto = "Mensajes desde la Web";
            $mensaje = "Nombre: " . $_POST['nombre'] ."\n"."\n".
                       "Email: ". $_POST['email']."\n"."\n".
                       "Telefono: ". $_POST['telefono']."\n"."\n".
                       "Mensaje: " .$_POST['mensaje']."\n";
            $cabecera = "From: Sitio Web". "\r\n" . "CC: " . $_POST['email'];
            $envio = mail($correoDestino, $asunto, $mensaje, $cabecera);

            $datosController = array("nombre" => $_POST['nombre'],
                                     "email" => $_POST['email'],
                                     "telefono" => $_POST['telefono'],
                                     "mensaje" => $_POST['mensaje']);

            // ALMACENAR EN BASE DE DATOS A LOS SUSCRIPTORES
            // ------------------------------------
            // variable para identificar si el suscriptor ya existe en la base de datos con el email
            //$datosSuscriptor = $_POST['email'];
            // funcion para revisar si ya esta registrado el email en la base de datos
            //$revisarSuscriptor = MensajesModel::revisarSuscriptoresModel($datosSuscriptor, "suscriptores");
            // echo $revisarSuscriptor;
            /*if (count($revisarSuscriptor['email']) == 0) {

              MensajesModel::registroSuscriptoresModel($datosController, "suscriptores");

            }*/


            // ALMACENAR EN BASE DE DATOS EL MENSAJE
            // ------------------------------------

            //$respuesta = MensajesModel::registroMensajesModel($datosController, "mensajes");

            if ($envio == true) {

              echo '<script>swal({
                        title: "¡Mensaje Enviado!",
                        text: "¡Dentro de poco me estare contactando contigo!",
                        type: "success",
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                      },
                      function(isConfirm){
                          if (isConfirm) {
                            window.location = "contact";
                          }
                       });
                   </script>';

            }



      }else {
        echo '<div class="alert alert-warning">No se pudo enviar el mensaje, no se permiten caracteres especiales.</div>';
      }

    }


  }

}
