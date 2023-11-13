<?php

function controllerSubscribe($request, $response, $container) {
   


    $response->setTemplate("subscribe.php");
    

    return $response;
}

?>
