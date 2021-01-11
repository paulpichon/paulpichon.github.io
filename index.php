<?php

require_once "models/enlaces.php";
require_once "models/gestorMensajes.php";


require_once "controllers/template.php";
require_once "controllers/enlaces.php";
require_once "controllers/gestorMensajes.php";


$pagina = new TemplateController();
$pagina -> template();
