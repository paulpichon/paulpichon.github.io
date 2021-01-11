/*=============================================
VALIDAR MENSAJES
=============================================*/

function validarFormulario(){

  var nombre = $("#nombre").val();
  var mensaje = $("#mensaje").val();
  var telefono = $("#telefono").val();
  var email = $("#email").val();


  if (email == "") {

      $("#email").after('<div class="alert alert-danger vacio" role="alert">* El email es obligatorio</div>');

    return false;

  }else if (email != "") {

      $(".vacio").remove();

      var exprecionEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (!exprecionEmail.test(email)) {


        $("#email").after('<div class="alert alert-danger" role="alert">* Debe ser un email valido.</div>');

        return false;

      }
  }

  if (telefono != "") {

      if(isNaN(telefono)) {

          $("#telefono").after('<div class="alert alert-danger numeros" role="alert">* Debe ingresar solo números</div>');

          return false;

      }else if (telefono.length < 10 || telefono.length > 10) {

        $(".numeros").remove();

        $("#telefono").after('<div class="alert alert-danger" role="alert">* Debe ingresar  solo 10 digitos.</div>');

        return false;

      }
  }

  if (mensaje != "") {

    var caracteres = nombre.lenght;
    // slash invetido \ y la s = \s -> son para permitir espacios en blanco acepta tildes
    var expresion = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

    if (!expresion.test(nombre)) {
      $("#nombre").after('<div class="alert alert-danger" role="alert">No se permiten números ni caracteres especiales</div>');

      return false;

    }else if (mensaje != "") {

      var caracteres = mensaje.lenght;
      // slash invetido \ y la s = \s -> son para permitir espacios en blanco acepta tildes
      var expresion = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

      if (!expresion.test(mensaje)) {
        $("#mensaje").after('<div class="alert alert-danger" role="alert">El mensaje no puede llevar caracteres especiales.</div>');

        return false;
      }
    }

  }

  return true;
}
