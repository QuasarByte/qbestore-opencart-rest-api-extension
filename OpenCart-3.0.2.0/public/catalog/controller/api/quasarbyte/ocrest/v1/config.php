<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1Config extends QuasarByteOCRestController
{
    public function findAll()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/config');

        $this->checkAuthorisation();

        $json = array();
        $json['config_store_id'] = $this->config->get('config_store_id');

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
