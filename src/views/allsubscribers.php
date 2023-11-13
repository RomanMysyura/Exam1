<!DOCTYPE html>
<html lang="en">
<head>
    <title>ApartamentsFiguerencs</title>
    <?php require 'libs.php'; ?>
    <!-- Include DataTables CSS and JS files -->
    
    <script src="js/scripts.js"></script>

   
</head>
<body>
    <?php require "menu.php"; ?>
    <h1>Inscripcions</h1>
    <table id="subscribersTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Data_naixement</th>
                <th>Addres</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($allSubscribers as $subscriber) {
                    echo '<tr>';
                    echo '<td>' . $subscriber['id'] . '</td>';
                    echo '<td>' . $subscriber['Nom'] . '</td>';
                    echo '<td>' . $subscriber['Cognoms'] . '</td>';
                    echo '<td>' . $subscriber['Data_naixement'] . '</td>';
                    echo '<td>' . $subscriber['Addres'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>
