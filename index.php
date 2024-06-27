<?php

include_once __DIR__ ."/partials/hotel.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Hotels</h1>
        <ul>
            <?php
                foreach ($hotels as $hotel){
            ?>
            <?php echo $hotel['name']; ?>
            <li><?php echo $hotel['description'] ?></li>
            <li><?php echo $hotel['parking'] ?></li>
            <li><?php echo $hotel['vote'] ?></li>
            <li><?php echo $hotel['distance_to_center'] ?></li>
            <?php
                };
            ?>
        </ul>
        
    </body>
</html>