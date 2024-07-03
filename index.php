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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="my-4">
                Hotels
            </h1>
            <form action="./index.php" method="GET">
                <input type="checkbox" name="filterParking" id="filterParking">
                <label for="filterParking" class="form-check-label">Filter by Parking</label>
                <button type="submit" id="filterParkingButton">
                    Filter
                </button>
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Parking</th>
                        <th>Vote</th>
                        <th>Distance to Center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($hotels as $hotel){
                            if($filterParking == 'on' && !$hotel['parking']){
                                continue;
                            };
                    ?>
                        <tr>
                            <td>
                                <?php
                                    echo $hotel['name'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $hotel['description'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $hotel['parking'] ? 'Yes' : 'No';
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $hotel['vote'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $hotel['distance_to_center'];
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>