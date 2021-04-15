<?php

class serviceProvider {

    public function getCarList() {
        /*
        This function will return the list of the cars, as an array.
        Normally from the Database but to keep it simple,
        we will return pre-defined array
        */
        $cars = [
            ["id" => "1", "brand" => "Mercedes-AMG E 53 4MATIC+ Coupé", "image" => "/Company-A/assets/08-mercedes-benz-vehicles-mbsocialcar-mercedes-amg-e-53-4matic-coupe-c238-in-black-by-thomas-rauhut-3400x1440.jpeg", "year" => "2019", "price" => "$76,250", "condition" => "new" ],
            ["id" => "2", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "price" => "", "condition" => "new" ],
            ["id" => "3", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "price" => "", "condition" => "new" ],
            ["id" => "4", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "price" => "", "condition" => "new" ],
            ["id" => "5", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "price" => "", "condition" => "new" ],
            ["id" => "6", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "price" => "", "condition" => "new" ],
            ["id" => "7", "brand" => "Mercedes-Benz", "image" => "", "year" => "", "price" => "", "condition" => "new" ]
        ];

        return $cars;
    }
}


$params = ["uri" => 'http://soap-example.test/Company-A/serviceProvider.php'];
$server = new SoapServer(NULL, $params);
$server->setClass('serviceProvider');
$server->handle();