<?php
function isLogged($request, $response, $container, $next){
    
    // Iniciamos la sesión
    

    // Comprobamos si hemos iniciado sesión
    $identified = $_SESSION['identified'] ?? false;
    
    // Si no hemos iniciado sesión...
    if(!$identified) {

        // Redirigimos al login
        $response->redirect("location: index.php?r=login");
        return $response;
    }

    // Si hemos iniciado sesión, redirigimos a la página de contacto
    $response->redirect("location: index.php?r=allsubscribersverified");
    return $response;
}
?>
