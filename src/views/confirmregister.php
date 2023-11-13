<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmar registre</title>
    <?php require 'libs.php'; ?>
    <script src="js/scripts.js"></script>
</head>
<body>
    <?php require "menu.php"; ?>
    <h1>Confirmar registre</h1>

    <form action="index.php?r=doconfirmregister" method="post">
        <label for="subscriberId">ID:</label>
        <input type="text" id="subscriberId" name="subscriberId" required>
        <button type="submit">Comprovar Registre</button>
    </form>
</body>
</html>
