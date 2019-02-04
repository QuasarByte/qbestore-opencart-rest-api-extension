<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1Setting extends QuasarByteOCRestController
{
    public function findByCode()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingCode = base64_decode($this->request->server['HTTP_SETTINGCODE']);
        $storeId = base64_decode($this->request->server['HTTP_STOREID']);

        $settings = $this->model_quasarbyte_ocrest_v1_setting->getSetting($settingCode, $storeId);

        $json = array();

        foreach ($settings as $settingKey => $settingValue) {
            if ($this->model_quasarbyte_ocrest_v1_setting->canSettingRead($settingCode, $settingKey)) {
                $json[$settingKey] = $settingValue;
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode((Object)$json));
    }

    public function findByKeys()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingKeys = json_decode(base64_decode($this->request->server['HTTP_SETTINGKEYS']), true);
        $storeId = base64_decode($this->request->server['HTTP_STOREID']);

        $json = array();

        foreach ($settingKeys as $settingKey) {

            $settingCodeAndValue = $this->model_quasarbyte_ocrest_v1_setting->getSettingCodeAndValue($settingKey['key'], $storeId, $settingKey['deserializationType']);

            if ($settingCodeAndValue['code'] != null) {
                if ($this->model_quasarbyte_ocrest_v1_setting->canSettingRead($settingCodeAndValue['code'], $settingKey['key'])) {
                    $json[$settingKey['key']] = $settingCodeAndValue['value'];
                }
            } else {
                $json[$settingKey] = null;
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode((Object)$json));
    }

    public function getSettingPermissionKeys()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $json = $this->model_quasarbyte_ocrest_v1_setting->getSettingPermissionKeys();

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function getSettingPermissionCodes()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $json = $this->model_quasarbyte_ocrest_v1_setting->getSettingPermissionCodes();

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));

    }

    public function canSettingReadByCode()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingCode = base64_decode($this->request->server['HTTP_SETTINGCODE']);

        $json = $this->model_quasarbyte_ocrest_v1_setting->canSettingReadByCode($settingCode);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function canSettingWriteByCode()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingCode = base64_decode($this->request->server['HTTP_SETTINGCODE']);

        $json = $this->model_quasarbyte_ocrest_v1_setting->canSettingWriteByCode($settingCode);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function canSettingReadByKey()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingKey = base64_decode($this->request->server['HTTP_SETTINGKEY']);

        $json = $this->model_quasarbyte_ocrest_v1_setting->canSettingReadByKey($settingKey);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function canSettingWriteByKey()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingKey = base64_decode($this->request->server['HTTP_SETTINGKEY']);

        $json = $this->model_quasarbyte_ocrest_v1_setting->canSettingWriteByKey($settingKey);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function canSettingRead()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingCode = base64_decode($this->request->server['HTTP_SETTINGCODE']);
        $settingKey = base64_decode($this->request->server['HTTP_SETTINGKEY']);

        $json = $this->model_quasarbyte_ocrest_v1_setting->canSettingRead($settingCode, $settingKey);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function canSettingWrite()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingCode = base64_decode($this->request->server['HTTP_SETTINGCODE']);
        $settingKey = base64_decode($this->request->server['HTTP_SETTINGKEY']);

        $json = $this->model_quasarbyte_ocrest_v1_setting->canSettingWrite($settingCode, $settingKey);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function deleteSettingByCode()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingCode = base64_decode($this->request->server['HTTP_SETTINGCODE']);
        $storeId = base64_decode($this->request->server['HTTP_STOREID']);

        $this->model_quasarbyte_ocrest_v1_setting->deleteSettingByCode($settingCode, $storeId);
    }

    public function deleteSettingByKey()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingKey = base64_decode($this->request->server['HTTP_SETTINGKEY']);
        $storeId = base64_decode($this->request->server['HTTP_STOREID']);

        $this->model_quasarbyte_ocrest_v1_setting->deleteSettingByKey($settingKey, $storeId);
    }

    public function existsSettingByCode()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $json = array();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingCode = base64_decode($this->request->server['HTTP_SETTINGCODE']);
        $storeId = base64_decode($this->request->server['HTTP_STOREID']);

        if ($this->model_quasarbyte_ocrest_v1_setting->canSettingReadByCode($settingCode)) {
            $json['result'] = $this->model_quasarbyte_ocrest_v1_setting->existsSettingByCode($settingCode, $storeId);
        } else {
            $json['result'] = false;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function existsSettingByKey()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $json = array();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingKey = base64_decode($this->request->server['HTTP_SETTINGKEY']);
        $storeId = base64_decode($this->request->server['HTTP_STOREID']);

        if ($this->model_quasarbyte_ocrest_v1_setting->canSettingReadByKey($settingKey)) {
            $json['result'] = $this->model_quasarbyte_ocrest_v1_setting->existsSettingByKey($settingKey, $storeId);
        } else {
            $json['result'] = false;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function saveSettings()
    {
        $this->changeErrorHandler();

        $this->load->language('api/quasarbyte/ocrest/v1/setting');

        $this->checkAuthorisation();

        $this->load->model('quasarbyte/ocrest/v1/setting');

        $settingKeys = json_decode(base64_decode($this->request->post['SETTINGKEYS']), true);
        $storeId = base64_decode($this->request->post['STOREID']);

        foreach ($settingKeys as $settingKey) {
            if (!$this->model_quasarbyte_ocrest_v1_setting->canSettingWrite($settingKey['code'], $settingKey['key'])) {
                http_response_code(404);
                $this->response->addHeader('Content-Type: application/json');
                $this->response->setOutput(json_encode(array('error' => $this->language->get('error_setting_permission'),
                        'code' => $settingKey['code'],
                        'key' => $settingKey['key']))
                );
                $this->response->output();
                exit();
            }
        }

        foreach ($settingKeys as $settingKey) {
            $this->model_quasarbyte_ocrest_v1_setting->saveSetting($settingKey['code'], $settingKey['key'], $settingKey['value'], $storeId, $settingKey['serializationType']);
        }
    }
}
