<?php

class serviceClient {

    public function __construct() {
        $params = [
            "location" => "http://soap-example.test/Company-A/serviceProvider.php",
            "uri" => "urn://soap-example.test/Company-A/serviceProvider.php",
            "trace" => 1
        ];

        $this->instance = new SoapClient(NULL, $params);
    }


    public function getCarList() {
        return $this->instance->__soapCall('getCarList', []);
    }
}
