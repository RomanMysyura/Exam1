<?php

// Configuració
include "../src/config.php";

// Controllers
include '../src/controllers/controllerIndex.php';
include '../src/controllers/controllerMenu.php';
include '../src/controllers/controllerContactar.php';


include '../src/controllers/controllerSubscribe.php';
include '../src/controllers/controllerDoSubscribe.php';
include '../src/controllers/controllerAllSubscribers.php';
include '../src/controllers/controllerConfirmRegister.php';



// Middleware//
include '../src/middleware/isLogged.php';

// Models
include '../src/models/connection.php';
include '../src/models/users.php';
include '../src/models/subscribes.php';

// Emeset Framework
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

// Instanciom els objectes Emesett
$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = '';
if (isset($_REQUEST["r"])) {
  $r = $_REQUEST["r"];
}

if ($r == '') {
    controllerIndex($request, $response, $container);
} else if ($r == 'contactar') {
    controllerContactar($request, $response, $container);
}else if ($r == 'subscribe') {
    controllerSubscribe($request, $response, $container);
}else if ($r == 'dosubscribe') {
    controllerDoSubscribe($request, $response, $container);
}else if ($r == 'allsubscribers') {
     isLogged($request, $response, $container, "controllerAllSubscribers");
}else if ($r == 'allsubscribersverified') {
    controllerAllSubscribers($request, $response, $container);
}else if ($r == 'confirmregister') {
    controllerConfirmRegister($request, $response, $container);
}


$response->response();