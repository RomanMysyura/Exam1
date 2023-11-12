<!DOCTYPE html>
<html lang="en">
<head>
    <title>ApartamentsFiguerencs</title>
    <?php require 'libs.php'; ?>
    <script src="js/scripts.js"></script>
</head>
<body>
    <?php require "menu.php"; ?>
    <h1>INDEX</h1>

    <?php
        // Verificar si hay datos de apartamentos para mostrar
        if(isset($apartaments) && !empty($apartaments)) {
    ?>
            <!-- Agrega el atributo ID a tu tabla para identificarla -->
            <table id="apartmentsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Postal Address</th>
                        <th>Length</th>
                        <th>Latitude</th>
                        <th>Short Description</th>
                        <th>Square Metres</th>
                        <th>Number of Rooms</th>
                        <th>Services Extra</th>
                        <th>Price Day Low Season</th>
                        <th>Price Day High Season</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Main Image ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($apartaments as $apartment) {
                    ?>
                            <tr>
                                <td><?php echo $apartment['id_apartment']; ?></td>
                                <td><?php echo $apartment['title']; ?></td>
                                <td><?php echo $apartment['postal_address']; ?></td>
                                <td><?php echo $apartment['length']; ?></td>
                                <td><?php echo $apartment['latitude']; ?></td>
                                <td><?php echo $apartment['short_description']; ?></td>
                                <td><?php echo $apartment['square_metres']; ?></td>
                                <td><?php echo $apartment['number_rooms']; ?></td>
                                <td><?php echo $apartment['services_extra']; ?></td>
                                <td><?php echo $apartment['price_day_low_season']; ?></td>
                                <td><?php echo $apartment['price_day_high_season']; ?></td>
                                <td><?php echo $apartment['start_date']; ?></td>
                                <td><?php echo $apartment['end_date']; ?></td>
                                <td><?php echo $apartment['main_image_id']; ?></td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
    <?php
        } else {
            echo "No hay apartamentos para mostrar.";
        }
    ?>
</body>
</html>
