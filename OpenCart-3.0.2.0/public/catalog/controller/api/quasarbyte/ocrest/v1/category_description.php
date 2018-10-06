<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1CategoryDescription extends QuasarByteOCRestController
{
    public function findAll()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/category_description');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/category_description');

        $json = $this->model_quasarbyte_ocrest_v1_category_description->findAll();

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
