<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iniciar sesión</title>
    <?php require 'libs.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body class="p-0 m-0 border-0 bd-example m-0 border-0">
    <?php require "menu.php" ?>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex flex-column align-items-center">
                <div class="card p-4 bg-dark container-opacity formlogin" data-bs-theme="dark">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <img src="/img/ApartamentsFiguerencs2.ico" alt="ApartamentsFiguerencs" width="100px" height="100px">
                    </div>
                    <form id="loginForm" action="index.php?r=dologin" method="POST">
                        <input type="text" name="email" placeholder="Correo electrónico" required>
                        <input type="password" name="password" placeholder="Contraseña" required>
                        <button type="button" onclick="doLogin()">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
