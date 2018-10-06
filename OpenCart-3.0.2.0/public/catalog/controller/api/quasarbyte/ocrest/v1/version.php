<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1Version extends QuasarByteOCRestController
{
    public function getVersion()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/version');

        $this->checkAuthorisation();

        $json = array();

        $json['openCartVersion'] = VERSION;
        $json['openCartRestVersion'] = '1.0.0.0';
        $json['openCartTargetVersion'] = '3.0.0.0';

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
