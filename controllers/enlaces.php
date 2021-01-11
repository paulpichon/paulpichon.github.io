<?php

class Enlaces{

   public function enlacesController(){
      if (isset($_GET['action'])) {

        $enlace = $_GET['action'];

      }else {
        $enlace = "index.php";
      }

      $respuesta = EnlacesModels::enlacesModel($enlace);

      include $respuesta;


  }

}
