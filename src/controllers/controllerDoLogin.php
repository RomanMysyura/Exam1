<?php
function controllerDoLogin($request, $response, $container){
    // Obtenemos los valores a través de POST
    $email = $request->get(INPUT_POST, "email");
    $password = $request->get(INPUT_POST, "password");

    // Guardamos el objeto en una variable
    $userModel = $container->users();

    // Realizamos la verificación del login
    $user = $userModel->login($email, $password);

    if ($user) {
        // Usuario autenticado, puedes redirigir o enviar una respuesta según tus necesidades
        echo "Login successful";

    } else {
        // Usuario no autenticado
        echo "Invalid login credentials";
    }
    
    return $response;
}   
?>
