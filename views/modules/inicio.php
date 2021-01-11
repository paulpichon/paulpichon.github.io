<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		<title>PICHON.SPACE | Desarrollo y Diseño Web</title>
		<link rel="icon" href="views/img/icono.jpg" alt="logo-pichonspace.com">
		<meta name="description" content="Una página web personal enfocada al desarrollo y diseño web en Tlaxcala y puebla." />
		<meta name="keywords" content="desarrollo, web, diseño, desing, portafolio,  efectos, animacion, css, javascript, php, tlaxcala, puebla" />
		<meta name="author" content="Paul Pichon Fabian" />

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Roboto+Mono" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="views/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="views/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="views/css/pieces.css" />
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body>


    <main>
      <div class="pieces" style="background-image: url(views/img/img_inicio/normal.jpg)" data-img-alt="url(views/img/img_inicio/alt.jpg)" data-img-code="url(views/img/img_inicio/code.jpg)"></div>
      <div class="overlay overlay--hidden"></div>
      <div class="content">
        <div class="content__inner">
          <div class="content__top">
            <h2 class="title">
              <span class="title__inner mode mode--design" data-switch data-glitch>pichon.space</span>
            </h2>
            <div class="controls">
              <button class="btn btn--menu mode mode--design" data-switch>
                <svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
                <svg class="icon icon--menu-alt"><use xlink:href="#icon-menu-alt"></use></svg>
              </button>
            </div>
          </div>
          <div class="menu">
            <ul class="menu__inner">
              <li class="menu__item"><a class="menu__link" href="frontEnd" data-switch>Portafolio</a></li>
              <!-- <li class="menu__item"><a class="menu__link" href="" data-switch>Diseño</a></li> -->
              <li class="menu__item"><a class="menu__link" href="experiments" target="_blank" data-switch>Experimentos</a></li>
              <li class="menu__item"><a class="menu__link" href="https://codepen.io/pichonspace/" target="_blank" data-switch>CodePen</a></li>
            </ul>
          </div>
          <div class="menu menu--code">
            <ul class="menu__inner">
              <li class="menu__item"><a class="menu__link" href="sistemas" data-switch>Portafolio</a></li>
              <!-- <li class="menu__item"><a class="menu__link" href="experimentos" data-switch>Experimentos</a></li> -->
              <li class="menu__item"><a class="menu__link" href="https://codepen.io/pichonspace/" target="_blank" data-switch>CodePen</a></li>
            </ul>
          </div>
          <div class="content__bottom">
            <div class="switch mode mode--design">
              <a class="switch__item switch__item--current">FrontEnd </a>
              <a class="switch__item"><span class="mode mode--design" data-switch data-glitch>BackEnd</span></a>
            </div>

            <div class="link-wrap">
              <a class="contact-link mode mode--design" data-switch data-glitch href="contact">¡Trabajemos!</a>
            </div>

            <div class="link-wrap">
              <a class="contact-link mode mode--design" data-switch data-glitch href="about">Sobre mi</a>
            </div>
          </div>

        </div><!-- /content__inner-->
      </div><!-- /content -->
      <div class="loading"></div>
      <!-- <img class="hidden" src="views/img/img_inicio/code.jpg"/>
      <img class="hidden" src="views/img/img_inicio/alt.jpg"/> -->
    </main>


		<script src="views/js/imagesloaded.pkgd.min.js"></script>
		<script src="views/js/anime.min.js"></script>
		<script src="views/js/charming.min.js"></script>
		<script src="views/js/main.js"></script>
	</body>
</html>
