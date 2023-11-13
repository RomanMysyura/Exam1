<?php

function controllerDoLogin($request, $response, $container){
    // Obtenemos el valor del código a través de POST
    $code = $request->get(INPUT_POST, "code");

    // Guardamos el objeto en una variable
    $usersModel = $container->users();

    // Verificamos el código
    $codeResult = $usersModel->verifyCode($code);

   

    // Si el código existe...
    if($codeResult) {
        // Establecer variable de sesión como identificado
        $_SESSION['identified'] = true;

        $response->setHeader('Content-Type', 'application/json');
        echo json_encode(["status" => "success", "message" => "Código verificado correctamente"]);
        exit; // Salir después de enviar la respuesta JSON
    } else {
        // Establecer variable de sesión como no identificado
        $_SESSION['identified'] = false;

        $response->setHeader('Content-Type', 'application/json');
        echo json_encode(["status" => "error", "message" => "Código no válido"]);
        exit; // Salir después de enviar la respuesta JSON
    }

    return $response;
}
?>
