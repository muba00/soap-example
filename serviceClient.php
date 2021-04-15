<?php

class serviceClient {

    public function __construct() {
        $params = [
            "location" => "http://soap-example.test/serviceProvider.php",
            "uri" => "urn://soap-example.test/serviceProvider.php",
            "trace" => 1
        ];

        $this->instance = new SoapClient(NULL, $params);
    }


    public function getCarList() {
        return $this->instance->__soapCall('getCarList', []);
    }
}
