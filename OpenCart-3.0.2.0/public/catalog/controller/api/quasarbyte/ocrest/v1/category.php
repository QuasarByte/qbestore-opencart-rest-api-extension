<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1Category extends QuasarByteOCRestController
{
    public function findAll()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/category');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/category');

        $categories = $this->model_quasarbyte_ocrest_v1_category->findAll();

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($categories));
    }
}
