<?php

class serviceProvider {

    public function getCarList() {
        // connect to DB
        $cars = [
            ["id" => "1", "brand" => "Mercedes-Benz", "image" => "mercesed.png", "year" => "", "condition" => "new" ],
            ["id" => "2", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "condition" => "new" ],
            ["id" => "3", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "condition" => "new" ],
            ["id" => "4", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "condition" => "new" ],
            ["id" => "5", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "condition" => "new" ],
            ["id" => "6", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "condition" => "new" ],
            ["id" => "7", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "condition" => "new" ]
        ];

        return $cars;
    }
}


$params = ["uri" => 'http://soap-example.test/serviceProvider.php'];
$server = new SoapServer(NULL, $params);
$server->setClass('serviceProvider');
$server->handle();