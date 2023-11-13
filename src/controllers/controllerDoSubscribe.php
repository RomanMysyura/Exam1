<?php

function controllerDoSubscribe($request, $response, $container) {
    $subscribes = $container->subscribes();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $cognoms = $_POST['cognoms'];
        $data_naixement = $_POST['data_naixement'];
        $addres = $_POST['addres'];

        $archivoNombre = $_FILES['archivo']['name'];
        $archivoTmp = $_FILES['archivo']['tmp_name'];
        $archivoError = $_FILES['archivo']['error'];

        if ($archivoError === UPLOAD_ERR_OK) {
       
            $carpetaDestino = 'files/';

            if (!file_exists($carpetaDestino)) {
                mkdir($carpetaDestino, 0777, true);
            }

            $rutaDestino = $carpetaDestino . $archivoNombre;
            move_uploaded_file($archivoTmp, $rutaDestino);

            $result = $subscribes->doSubscribes($nom, $cognoms, $data_naixement, $addres, $rutaDestino);

        } else {
        }
    }

    $response->setTemplate("subscribe.php");

    return $response;
}
