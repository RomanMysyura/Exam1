<?php

function controllerConfirmRegister($request, $response, $container) {
    
    $response->setTemplate("confirmregister.php");

    return $response;
}

?>
