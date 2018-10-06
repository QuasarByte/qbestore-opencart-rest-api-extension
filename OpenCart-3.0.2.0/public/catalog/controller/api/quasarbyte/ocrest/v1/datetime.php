<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1DateTime extends QuasarByteOCRestController
{
    public function getDateTime()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/datetime');

        $this->checkAuthorisation();

        $dateTimeFormat = urldecode($this->request->get['dateTimeFormat']);

        $json = array('result' => date($dateTimeFormat));

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}