<?php

include('./serviceClient.php');

$client = new serviceClient();
$cars = $client->getCarList();


var_dump($cars);