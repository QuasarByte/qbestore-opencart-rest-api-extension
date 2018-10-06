<?php

abstract class QuasarByteOCRestController extends Controller
{
    function __construct($registry)
    {
        parent::__construct($registry);
        $this->load->language('api/quasarbyte/ocrest/v1/qbocrest_controller');
    }

    protected function checkAuthorisation()
    {
        if (!isset($this->session->data['api_id'])) {
            http_response_code(401);
            $this->response->addHeader('Content-Type: application/json');
            //$this->response->setOutput(json_encode(array('error' => $this->language->get('error_permission'))));
            $this->response->output();
            exit();
        }
    }

    public function fatalErrorHandler()
    {
        $error = error_get_last();

        if ($error != null) {
            $this->errorHandler($error['type'], $error['message'], $error['file'], $error['line']);
        }
    }

    public function errorHandler($errno, $errstr, $errfile, $errline) {

        header('php-error-handler: ' . base64_encode(
                json_encode(
                    array('errno' => $errno,
                        'errstr' => $errstr,
                        'errfile' => $errfile,
                        'errline' => $errline,
                    )
                )
            ), false);

        ob_flush();

        if ($errno & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR | E_RECOVERABLE_ERROR | E_STRICT | E_USER_ERROR)) {
            http_response_code(500);
            exit();
        }
        return true;
    }

    protected function changeErrorHandler()
    {
        ob_start();
        error_reporting(E_ALL | E_STRICT);
        //ini_set('display_errors', 'On');
        set_error_handler([$this, 'errorHandler']);
        register_shutdown_function([$this, 'fatalErrorHandler']);
    }

}