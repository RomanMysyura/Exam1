<?php

// Configuracióo
include "../src/config.php";

// Controllers
include '../src/controllers/controllerIndex.php';
include '../src/controllers/controllerMenu.php';
include '../src/controllers/controllerRegister.php';
include '../src/controllers/controllerLogin.php';
include '../src/controllers/controllerContactar.php';
include '../src/controllers/controllerDoLogin.php';

// Middleware//
include '../src/middleware/isLogged.php';

// Models
include '../src/models/connection.php';
include '../src/models/apartaments.php';
include '../src/models/users.php';
include '../src/models/reserves.php';

// Emeset Framework
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

// Instanciom els objectes Emeset
$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = '';
if (isset($_REQUEST["r"])) {
  $r = $_REQUEST["r"];
}

if ($r == '') {
    controllerIndex($request, $response, $container);
} else if ($r == 'signup') {
    controllerRegister($request, $response, $container);
} else if ($r == 'login') {
    controllerLogin($request, $response, $container);
} else if ($r == 'registrar') {
    controllerDoRegister($request, $response, $container);
}else if ($r == 'contactar') {
    controllerContactar($request, $response, $container);
}else if ($r == 'dologin') {
    controllerDoLogin($request, $response, $container);
}


$response->response();