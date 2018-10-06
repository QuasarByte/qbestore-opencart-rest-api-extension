<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1SQLRunner extends QuasarByteOCRestController
{
    public function query()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/sql_runner');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/sql_runner');

        $sql = base64_decode($this->request->server['HTTP_SQLQUERY']);

        $json = $this->model_quasarbyte_ocrest_v1_sql_runner->query($sql);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
