<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1Constants extends QuasarByteOCRestController
{
    public function findAll()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/constants');

        $this->checkAuthorisation();

        $json = array();

        $json['DB_PREFIX'] = DB_PREFIX;

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
