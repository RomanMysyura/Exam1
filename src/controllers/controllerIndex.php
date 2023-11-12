<?php

function controllerIndex($request, $response, $container) {
    $apartaments = $container->apartaments()->getAll();
    
    // Pasar los datos a la plantilla
    $response->set("apartaments", $apartaments);
    $response->setTemplate("index.php");
    
    return $response;
}

?>
