<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		<title>PICHON.SPACE  | Portafolio - BackEnd | Desarrollo y Diseño Web</title>
		<link rel="icon" href="views/img/icono.jpg" alt="logo-pichonspace.com">
		<meta name="description" content="Una página web personal enfocada al desarrollo y diseño web en Tlaxcala y puebla." />
		<meta name="keywords" content="desarrollo, web, diseño, desing, portafolio,  efectos, animacion, css, javascript, php, tlaxcala, puebla" />
		<meta name="author" content="Paul Pichon Fabian" />

		<link rel="stylesheet" type="text/css" href="views/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="views/css/demoPortafolio.css" />
		<link rel="stylesheet" type="text/css" href="views/css/component.css" />
		<script src="views/js/modernizr.custom.js"></script>
	</head>
	<body class="demo-1">
		<main>
			<header class="codrops-header">
				<h1>pichon.space</h1>
				<p>Portafolio de proyectos realizados<p>
				<nav class="codrops-demos">
					<a>Sistemas(BackEnd)</a>
					<a style="color: white;" href="inicio">Regresar al inicio</a>
				</nav>
			</header>
			<div class="isolayer isolayer--scroll1 isolayer--shadow">
				<ul class="grid grid--effect-flip">
					<!--<li class="grid__item">
						<a class="grid__link" href="propeninsularSistema">
							<img class="grid__img layer" src="views/img/portafolio/wireframenew.png" alt="canvas" />
							<img class="grid__img layer" src="views/img/portafolio/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="views/img/portafolio/propeninsularPortafolio.jpg" alt="propeninsular" />
							<span class="grid__title">Pro-Peninsular</span>
						</a>
					</li>-->

					<li class="grid__item">
						<a class="grid__link" href="muraldelpoblanoSistema">
							<img class="grid__img layer" src="views/img/portafolio/wireframenew.png" alt="canvas" />
							<img class="grid__img layer" src="views/img/portafolio/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="views/img/portafolio/muralPoblanosPortafolio.jpg" alt="mural Poblanos" />
							<span class="grid__title">El mural del poblano</span>
						</a>
					</li>

					<li class="grid__item">
						<a class="grid__link" href="omnesSistema">
							<img class="grid__img layer" src="views/img/portafolio/wireframenew.png" alt="canvas" />
							<img class="grid__img layer" src="views/img/portafolio/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="views/img/portafolio/omnesPortafolio.jpg" alt="omnes" />
							<span class="grid__title">OMNES Business Center</span>
						</a>
					</li>

					<li class="grid__item">
						<a class="grid__link" href="pisaSistema">
							<img class="grid__img layer" src="views/img/portafolio/wireframenew.png" alt="canvas" />
							<img class="grid__img layer" src="views/img/portafolio/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="views/img/portafolio/pisaPortafolio.jpg" alt="pisa" />
							<span class="grid__title">PISA Desarrolladora Inmobiliaria</span>
						</a>
					</li>

					<li class="grid__item">
						<a class="grid__link" href="impulsoSistema">
							<img class="grid__img layer" src="views/img/portafolio/wireframenew.png" alt="canvas" />
							<img class="grid__img layer" src="views/img/portafolio/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="views/img/portafolio/impulsoPortafolio.jpg" alt="impulso" />
							<span class="grid__title">Impulso</span>
						</a>
					</li>

				</ul>
			</div>
		</main>

		<script src="views/js/imagesloaded.pkgd.min.js"></script>
		<script src="views/js/masonry.pkgd.min.js"></script>
		<script src="views/js/dynamics.min.js"></script>
		<script src="views/js/classie.js"></script>
		<script src="views/js/animOnScroll.js"></script>
		<script src="views/js/mainPortafolio.js"></script>
		<script>
		(function() {
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			[].slice.call(document.querySelectorAll('.isolayer')).forEach(function(el) {
				new IsoGrid(el, {
					type : 'scrollable',
					transform : 'translateX(-15vw) translateY(275px) rotateX(45deg) rotateZ(45deg)',
					stackItemsAnimation : {
						properties : function(pos) {
							return {
								translateZ: (pos+1) * 50,
								rotateZ: getRandomInt(-3, 3)
							};
						},
						options : function(pos, itemstotal) {
							return {
								type: dynamics.bezier,
								duration: 500,
								points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
								//delay: (itemstotal-pos-1)*40
							};
						}
					},
					onGridLoaded : function() {
						classie.add(document.body, 'grid-loaded');
					}
				});
			});
		})();
		</script>
	</body>
</html>
