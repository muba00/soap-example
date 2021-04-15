<?php

class serviceProvider {

    public function getCarList() {
        /*
        This function will return the list of the cars, as an array.
        Normally from the Database but to keep it simple,
        we will return pre-defined array
        */
        $cars = [
            ["id" => "1", "name" => "Mercedes-AMG E 53", "image" => "/Company-A/assets/08-mercedes-benz-vehicles-mbsocialcar-mercedes-amg-e-53-4matic-coupe-c238-in-black-by-thomas-rauhut-3400x1440.jpeg", "year" => "2019", "price" => "€76,250", "condition" => "new" ],
            ["id" => "2", "name" => "BMW 7 Series", "image" => "/Company-A/assets/bmw-7-series.jpeg", "year" => "2020", "price" => "€91,700", "condition" => "new" ],
            ["id" => "3", "name" => "Tesla Model S", "image" => "/Company-A/assets/model-s.jpeg", "year" => "2020", "price" => "€86,990", "condition" => "new" ],
            ["id" => "4", "name" => "Audi RS e-tron GT", "image" => "/Company-A/assets/audi-rs-e-tron-gt.jpeg", "year" => "2021", "price" => "€138,200", "condition" => "new" ],
            ["id" => "5", "name" => "Bentley Continental GT", "image" => "/Company-A/assets/Bentley-Continental-GT.jpeg", "year" => "2020", "price" => "€199,444", "condition" => "new" ],
            ["id" => "6", "name" => "Rolls-Royce-Phantom", "image" => "/Company-A/assets/Rolls-Royce-Phantom.jpeg", "year" => "2020", "price" => "€357,328", "condition" => "new" ]
        ];

        return $cars;
    }
}


$params = ["uri" => 'http://soap-example.test/Company-A/serviceProvider.php'];
$server = new SoapServer(NULL, $params);
$server->setClass('serviceProvider');
$server->handle();