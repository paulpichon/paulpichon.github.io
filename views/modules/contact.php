<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		<title>PICHON.SPACE | Contacto | Desarrollo y Diseño Web</title>

		<link rel="icon" href="views/img/icono.jpg" alt="logo-pichonspace.com">
		<meta name="description" content="Una página web personal enfocada al desarrollo y diseño web en Tlaxcala y puebla." />
		<meta name="keywords" content="contacetenos, desarrollo, web, diseño, desing, portafolio,  efectos, animacion, css, javascript, php, tlaxcala, puebla" />
		<meta name="author" content="Paul Pichon Fabian" />

		<!-- bootstrap v4.3 solo en esta página-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Roboto+Mono" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="views/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="views/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="views/css/pieces.css" />
		<link rel="stylesheet" type="text/css" href="views/css/styles.css" />
		<!-- SWEETALERT (deben ir dentro del <head> para que funcione)-->
		<link rel="stylesheet" href="views/css/sweetalert.css">
		<script src="views/js/sweetalert.min.js"></script>



	</head>
	<body>

		<main>
			<div class="pieces" style="background-image: url(views/img/img_inicio/normal.jpg)" data-img-alt="url(views/img/img_inicio/alt.jpg)" data-img-code="url(views/img/img_inicio/code.jpg)"></div>
			<div class="overlay overlay--hidden"></div>
			<div class="content">
				<div class="content__inner">
					<div class="content__top">
						<h2 class="title">
							<span class="title__inner mode mode--design" data-glitch>pichon.space</span>
						</h2>

					</div>

					<div class="menu menu--code">
						<div class="container" style="color: white;">
							<div class="row contenedor_uno">
								<div class="col-md-12">
									<h1 class="text-center" style="letter-spacing: 5px;" data-glitch >Contacto</h1>
									<p>Puedes contactar conmigo en la forma que prefieras, bien directamente por teléfono o email, bien solicitando que sea yo quien te llame gratuitamente, o rellenando el formulario de contacto.
									Una vez haya conocido tus necesidades, podré asesorarte y enviarte un presupuesto sin ningún tipo de compromiso.

								</p>
								</div>
								<div class="col-md-6">

									<p>Teléfono: (+52) 22-25-21-46-96</p>
									<p>Mandar mensaje a través de : <a href="https://api.whatsapp.com/send?phone=522225214696&text=Hola!%20Quiero%20recibir%20más%20información!" target="_blank">WhatsApp</a></p>
									<p>Si te gusta mi trabajo, no dudes en ponerte en contacto conmigo. Estoy aquí para ayudarte.</p>
								</div>

								<div class="col-md-6">
									<form class="form_background" method="post" onsubmit="return validarFormulario()">
											<div class="form-group">
												<input type="text" class=" no_borders" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese su nombre (*Obligatorio)" maxlength="50" required>
											</div>

											<div class="form-group">
												<input type="text" class=" no_borders" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico (*Obligatorio)" required>
											</div>

											<div class="form-group">
												<input type="text" class=" no_borders" id="telefono" name="telefono" placeholder="Ingrese su número telefónico (*Opcional)">
											</div>

											<div class="form-group">
												<textarea class="no_borders" id="mensaje" name="mensaje" placeholder="Ingrese un comentario o consulta (*Obligatorio)" style="width: 100%; height: 100px;" required></textarea>
											</div>

											<button type="submit" class="btn my_btn" data-glitch >Enviar</button>
											</form>

											<?php

													$mensaje = new MensajesController();
													$mensaje -> registroMensajesController();

											?>
								</div>
							</div>
						</div>
					</div>
					<div class="content__bottom">
						<div class="switch mode mode--design">
						</div>
						<div class="link-wrap">
							<a class="contact-link mode mode--design" href="inicio">Regresar</a>
						</div>
					</div>

				</div><!-- /content__inner-->
			</div><!-- /content -->
			<div class="loading"></div>
			<!-- <img class="hidden" src="views/img/img_inicio/code.jpg"/>
			<img class="hidden" src="views/img/img_inicio/alt.jpg"/> -->
		</main>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="views/js/imagesloaded.pkgd.min.js"></script>
		<script src="views/js/anime.min.js"></script>
		<script src="views/js/main.js"></script>
		<script src="views/js/validarFormulario.js"></script>

	</body>
</html>
