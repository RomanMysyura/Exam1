<?php

function controllerAllSubscribers($request, $response, $container) {
    // Obtener todos los suscriptores
    $subscribes = $container->subscribes();
    $allSubscribers = $subscribes->getAllSubscribers();

    // Pasar los datos a la vista
    $response->set("allSubscribers", $allSubscribers);

    // Establecer la plantilla
    $response->setTemplate("allsubscribers.php");

    return $response;
}

?>
