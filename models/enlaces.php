<?php

class EnlacesModels{

  static public function enlacesModel($enlace){

    if ($enlace == "about" ||
        $enlace == "contact" ||
        $enlace == "frontEnd" ||
        $enlace == "sistemas" ||
        $enlace == "single" ||
        $enlace == "experiments") {

        $module = "views/modules/".$enlace.".php";
    }elseif ($enlace == "index") {

        $module = "views/modules/inicio.php";

    }elseif ($enlace == "blankliving" ||
             $enlace == "muraldelpoblano" ||
             $enlace == "omnes" ||
             $enlace == "telasrafa" ||
             $enlace == "impulso" ||
             $enlace == "casabarroca" ||
             $enlace == "pisa" ||
             $enlace == "romers" ||
             $enlace == "casadelmendrugo" ||
             $enlace == "mekadesign" ||
             $enlace == "propeninsular") {

        $module = "single/".$enlace.".php";

    }elseif ($enlace == "propeninsularSistema" ||
             $enlace == "muraldelpoblanoSistema" ||
             $enlace == "omnesSistema" ||
             $enlace == "pisaSistema" ||
             $enlace == "impulsoSistema") {

        $module = "single/backend/".$enlace.".php";

    }else {
        $module = "views/modules/inicio.php";
    }

    return $module;

  }


}
