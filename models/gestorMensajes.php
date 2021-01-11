<?php


require_once "backend/models/conexion.php";

class MensajesModel{

  // REGISTRO MENSAJES
  // ----------------------------------
  static public function registroMensajesModel($datos, $tabla){
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, telefono, mensaje) VALUES(:nombre, :email, :telefono, :mensaje)");

    $stmt -> bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
    $stmt -> bindParam(":email", $datos['email'], PDO::PARAM_STR);
    $stmt -> bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
    $stmt -> bindParam(":mensaje", $datos['mensaje'], PDO::PARAM_STR);

    if ($stmt -> execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt -> close();

  }

  // REGISTRO SUSCRIPTORES
  // ----------------------------------
  static public function registroSuscriptoresModel($datos, $tabla){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email) VALUES(:nombre, :email)");

    $stmt -> bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
    $stmt -> bindParam(":email", $datos['email'], PDO::PARAM_STR);

    if ($stmt -> execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt -> close();
  }

  // VALIDAR SUSCRIPTOR EXISTENTE
  // ----------------------------------
  static public function revisarSuscriptoresModel($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("SELECT email FROM $tabla WHERE email = :email");

    $stmt -> bindParam(":email", $datosModel, PDO::PARAM_STR);

    $stmt -> execute();

    return $stmt -> fetch();

    $stmt -> close();
  }


}
