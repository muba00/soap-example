<?php

include('./serviceClient.php');

$client = new serviceClient();
$cars = $client->getCarList();


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="my-5">List of the cars, provided by Company-A over SOAP</h1>
        <div class="row">

            <?php foreach($cars as $car) {
                echo '<div class="col-4">
                        <div class="card my-2">
                            <img src="'.$car['image'].'" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">'.$car['name'].'</h5>
                                <p class="card-text"><b>Price:</b> <span class="text-success">'.$car['price'].'</span></p>
                                <p class="card-text"><b>Year:</b> <span class="">'.$car['year'].'</span></p>
                                <p class="card-text"><b>Condition:</b> <span class="text-muted">'.$car['condition'].'</span></p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                      </div>';
            }?>

        </div>
    </div>
</body>
</html>