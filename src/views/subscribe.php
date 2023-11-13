<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inscripció</title>
    <?php require 'libs.php'; ?>
    <script src="js/scripts.js"></script>
</head>

<body>
    <?php require "menu.php"; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Inscripció</h2>
        <form action="index.php?r=dosubscribe" method="post" enctype="multipart/form-data">
            <!-- Campos del formulario con clases de Bootstrap -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" name="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="cognoms" class="form-label">Cognoms:</label>
                <input type="text" name="cognoms" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="data_naixement" class="form-label">Data de naixement:</label>
                <input type="date" name="data_naixement" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="addres" class="form-label">Adreça:</label>
                <input type="text" name="addres" class="form-control" required>
            </div>

            <!-- Agrega el campo de carga de archivos -->
            <div class="mb-3">
                <label for="archivo" class="form-label">Arxiu:</label>
                <input type="file" name="archivo" class="form-control" accept=".pdf, .doc, .docx">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>
