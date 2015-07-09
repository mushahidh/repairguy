<?php

namespace common\models;

use Yii;

class SoapBaseModel extends \yii\data\ArrayDataProvider {

    public $client;

    public function init() {

        $client = new \SoapClient("http://localhost/RoboService/Service.svc?wsdl", array('soap_version' => SOAP_1_1, 'trace' => true));
        $this->client = $client;
        parent::init();
    }

    public $allModels;

    public function mapResponse($response, $func) {
        $result = $response->{$func . 'Result'};
        //var_dump($response);
        if (!empty($result)) {
            foreach ($result as $r) {
                if(is_array($r)){
                foreach ($r as $key => $a) {
                    $this->allModels[] = $a;
                }}else{
                    $this->allModels[]=$r;
                }
            }
        }
    }

}
