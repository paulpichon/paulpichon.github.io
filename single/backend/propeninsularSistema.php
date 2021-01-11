<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PICHON.SPACE | BackEnd | Pro-Peninsular</title>
		<link rel="icon" href="views/img/icono.jpg" alt="logo-pichonspace.com">
		<meta name="description" content="Una página web personal enfocada al desarrollo y diseño web en Tlaxcala y puebla." />
		<meta name="keywords" content="desarrollo, web, diseño, desing, portafolio,  efectos, animacion, css, javascript, php, tlaxcala, puebla" />
		<meta name="author" content="Paul Pichon Fabian" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="views/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="views/css/demoPortafolio.css" />
		<link rel="stylesheet" type="text/css" href="views/css/component.css" />
		<link rel="stylesheet" type="text/css" href="views/css/styles.css" />
		<script src="views/js/modernizr.custom.js"></script>
	</head>
	<body class="">
		<main>
			<header class="codrops-header">
				<h1><a href="inicio">Pichon.space</a></h1>
				<p class="float-left">Pro-Peninsular<p>

						<p class="float-right" style="margin-right: 10px;"><a style="color: white!important;" href="sistemas">Regresar al portafolio de BackEnd</a><p>
			</header>

			<section class="seccion section--intro">
				<div class="container">
					<img src="views/img/single/propeninsular.jpg" alt=""  style="margin-top: 100px; width: 100%;">
				</div>
			</section><!--/intro-->
			<section class="interval">
				<p class="interval__text"><em>Proyecto:</em> propeninsular.com - BackEnd</p>
				<p class="interval__text"><em>Cliente:</em> Pro-Peninsular</p>
				<p class="interval__text"><em>Trabajo Realizado:</em> Construcción de sistema para administrar el sitio web (CMS).</p>
				<p class="interval__text"><em>Año:</em> 2017</p>
				<a href="http://www.propeninsular.com" target="blank" class="btn_visitar">Visitar Sitio</a>

			</section>
			<section class="section section--right section--portraits">
				<h2 class="section__heading">Otros <em>Proyectos</em></h2>
				<p class="section__subtitle">Aquí hay más proyectos relacionados al BackEnd.</p>
				<div class="isolayer isolayer--deco2">
					<ul class="grid">
						<li class="grid__item">
							<a class="grid__link" href="pisaSistema">
								<img class="grid__img layer" src="views/img/single/pisa.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/pisa.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/pisa.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/pisa.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/pisa.jpg" alt="01" />
							</a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="omnesSistema">
								<img class="grid__img layer" src="views/img/single/omnes.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/omnes.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/omnes.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/omnes.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/omnes.jpg" alt="01" />
							</a>
						</li>

						<li class="grid__item">
							<a class="grid__link" href="impulsoSistema">
								<img class="grid__img layer" src="views/img/single/impulso.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/impulso.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/impulso.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/impulso.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/impulso.jpg" alt="01" />
							</a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="muraldelpoblanoSistema">
								<img class="grid__img layer" src="views/img/single/muralpoblanos.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/muralpoblanos.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/muralpoblanos.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/muralpoblanos.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/muralpoblanos.jpg" alt="01" />
							</a>
						</li>
						<li class="grid__item">
							<a class="grid__link" href="propeninsularSistema">
								<img class="grid__img layer" src="views/img/single/propeninsular.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/propeninsular.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/propeninsular.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/propeninsular.jpg" alt="01" />
								<img class="grid__img layer" src="views/img/single/propeninsular.jpg" alt="01" />
							</a>
						</li>

					</ul>
				</div>
			</section><!--/portraits-->

		</main>
		<script src="views/js/imagesloaded.pkgd.min.js"></script>
		<script src="views/js/masonry.pkgd.min.js"></script>
		<script src="views/js/dynamics.min.js"></script>
		<script src="views/js/classie.js"></script>
		<script src="views/js/mainPortafolio.js"></script>
		<script>
		(function() {
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			// cargar el loader hasta que haya cargado todo el isometric de las imagenes
			new IsoGrid(document.querySelector('.isolayer--deco2'), {
				perspective: 3000,
				transform : 'translateY(-150px) rotateX(55deg) rotateZ(-45deg)',
				stackItemsAnimation : {
					properties : function(pos) {
						return {
							translateX: getRandomInt(-60, 60),
							translateY: getRandomInt(-60, 60),
							rotateZ: getRandomInt(-10, 10)
						};
					},
					options : function(pos, itemstotal) {
						return {
							type: dynamics.bezier,
							duration: 800,
							points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
							delay: (itemstotal-pos-1)*20
						};
					}
				},
				// funcion que detiene el loader
				onGridLoaded : function() {
					classie.add(document.body, 'grid-loaded');
				}
			});

		})();
		</script>
	</body>
</html>
