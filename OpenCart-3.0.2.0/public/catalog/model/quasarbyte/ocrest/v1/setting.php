<?php

class ModelQuasarByteOCRestV1Setting extends Model
{
    public function getSettingPermissionKeys()
    {
        return array(
            array('key' => 'config_address', 'r' => true, 'w' => false),
            array('key' => 'config_cart_weight', 'r' => true, 'w' => false),
            array('key' => 'config_checkout_guest', 'r' => true, 'w' => false),
            array('key' => 'config_checkout_id', 'r' => true, 'w' => false),
            array('key' => 'config_comment', 'r' => true, 'w' => false),
            array('key' => 'config_complete_status', 'r' => true, 'w' => false),
            array('key' => 'config_compression', 'r' => true, 'w' => false),
            array('key' => 'config_country_id', 'r' => true, 'w' => false),
            array('key' => 'config_currency', 'r' => true, 'w' => false),
            array('key' => 'config_currency_auto', 'r' => true, 'w' => false),
            array('key' => 'config_customer_group_display', 'r' => true, 'w' => false),
            array('key' => 'config_customer_group_id', 'r' => true, 'w' => false),
            array('key' => 'config_customer_online', 'r' => true, 'w' => false),
            array('key' => 'config_customer_price', 'r' => true, 'w' => false),
            array('key' => 'config_fax', 'r' => true, 'w' => false),
            array('key' => 'config_geocode', 'r' => true, 'w' => false),
            array('key' => 'config_icon', 'r' => true, 'w' => false),
            array('key' => 'config_image', 'r' => true, 'w' => false),
            array('key' => 'config_image_additional_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_additional_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_cart_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_cart_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_category_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_category_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_compare_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_compare_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_location_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_location_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_popup_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_popup_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_product_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_product_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_related_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_related_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_thumb_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_thumb_width', 'r' => true, 'w' => false),
            array('key' => 'config_image_wishlist_height', 'r' => true, 'w' => false),
            array('key' => 'config_image_wishlist_width', 'r' => true, 'w' => false),
            array('key' => 'config_invoice_prefix', 'r' => true, 'w' => false),
            array('key' => 'config_language', 'r' => true, 'w' => false),
            array('key' => 'config_layout_id', 'r' => true, 'w' => false),
            array('key' => 'config_length_class_id', 'r' => true, 'w' => false),
            array('key' => 'config_limit_admin', 'r' => true, 'w' => false),
            array('key' => 'config_location', 'r' => true, 'w' => false),
            array('key' => 'config_logo', 'r' => true, 'w' => false),
            array('key' => 'config_maintenance', 'r' => true, 'w' => false),
            array('key' => 'config_meta_description', 'r' => true, 'w' => false),
            array('key' => 'config_meta_keyword', 'r' => true, 'w' => false),
            array('key' => 'config_meta_title', 'r' => true, 'w' => false),
            array('key' => 'config_name', 'r' => true, 'w' => false),
            array('key' => 'config_open', 'r' => true, 'w' => false),
            array('key' => 'config_order_mail', 'r' => true, 'w' => false),
            array('key' => 'config_order_status_id', 'r' => true, 'w' => false),
            array('key' => 'config_owner', 'r' => true, 'w' => false),
            array('key' => 'config_processing_status', 'r' => true, 'w' => false),
            array('key' => 'config_product_count', 'r' => true, 'w' => false),
            array('key' => 'config_product_description_length', 'r' => true, 'w' => false),
            array('key' => 'config_product_limit', 'r' => true, 'w' => false),
            array('key' => 'config_return_id', 'r' => true, 'w' => false),
            array('key' => 'config_return_status_id', 'r' => true, 'w' => false),
            array('key' => 'config_review_guest', 'r' => true, 'w' => false),
            array('key' => 'config_review_mail', 'r' => true, 'w' => false),
            array('key' => 'config_review_status', 'r' => true, 'w' => false),
            array('key' => 'config_robots', 'r' => true, 'w' => false),
            array('key' => 'config_secure', 'r' => true, 'w' => false),
            array('key' => 'config_seo_url', 'r' => true, 'w' => false),
            array('key' => 'config_shared', 'r' => true, 'w' => false),
            array('key' => 'config_stock_checkout', 'r' => true, 'w' => false),
            array('key' => 'config_stock_display', 'r' => true, 'w' => false),
            array('key' => 'config_stock_warning', 'r' => true, 'w' => false),
            array('key' => 'config_tax', 'r' => true, 'w' => false),
            array('key' => 'config_tax_customer', 'r' => true, 'w' => false),
            array('key' => 'config_tax_default', 'r' => true, 'w' => false),
            array('key' => 'config_telephone', 'r' => true, 'w' => false),
            array('key' => 'config_template', 'r' => true, 'w' => false),
            array('key' => 'config_theme', 'r' => true, 'w' => false),
            array('key' => 'config_voucher_max', 'r' => true, 'w' => false),
            array('key' => 'config_voucher_min', 'r' => true, 'w' => false),
            array('key' => 'config_weight_class_id', 'r' => true, 'w' => false),
            array('key' => 'config_zone_id', 'r' => true, 'w' => false)
        );
    }

    public function getSettingPermissionCodes()
    {
        return array(
            array('code' => 'quasarbyte', 'r' => true, 'w' => true)
        );
    }

    private function hasPermissionByCode($settingCode, $permissionType)
    {
        $settingPermissionCodes = $this->getSettingPermissionCodes();

        foreach ($settingPermissionCodes as $settingPermissionCode) {
            if (strcmp($settingCode, $settingPermissionCode['code']) == 0 && $settingPermissionCode[$permissionType] == true) {
                return true;
            }
        }

        return false;
    }

    private function hasPermissionByKey($settingKey, $permissionType)
    {
        $settingPermissionKeys = $this->getSettingPermissionKeys();

        foreach ($settingPermissionKeys as $settingPermissionKey) {
            if (strcmp($settingKey, $settingPermissionKey['key']) == 0 && $settingPermissionKey[$permissionType] == true) {
                return true;
            }
        }

        return false;
    }

    private function hasPermission($settingCode, $settingKey, $permissionType)
    {
        if ($this->hasPermissionByCode($settingCode, $permissionType)) {
            return true;
        } elseif ($this->hasPermissionByKey($settingKey, $permissionType)) {
            return true;
        } else {
            return false;
        }
    }

    public function canSettingReadByCode($settingCode)
    {
        return $this->hasPermissionByCode($settingCode, 'r');
    }

    public function canSettingWriteByCode($settingCode)
    {
        return $this->hasPermissionByCode($settingCode, 'w');
    }

    public function canSettingReadByKey($settingKey)
    {
        return $this->hasPermissionByCode($settingKey, 'r');
    }

    public function canSettingWriteByKey($settingKey)
    {
        return $this->hasPermissionByKey($settingKey, 'w');
    }

    public function canSettingRead($settingCode, $settingKey)
    {
        return $this->hasPermission($settingCode, $settingKey, 'r');
    }

    public function canSettingWrite($settingCode, $settingKey)
    {
        return $this->hasPermission($settingCode, $settingKey, 'w');
    }

    public function getSetting($code, $storeId = 0, $deserializationType = "JSONDECODE")
    {
        $data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$storeId . "' AND `code` = '" . $this->db->escape($code) . "'");

        foreach ($query->rows as $result) {
            if (!$result['serialized']) {
                $data[$result['key']] = $result['value'];
            } else {
                if (strcmp($deserializationType, "JSONDECODE") == 0) {
                    $data[$result['key']] = json_decode($result['value'], true);
                } elseif (strcmp($deserializationType, "UNSERIALIZE") == 0) {
                    $data[$result['key']] = unserialize($query->row['value'], ['allowed_classes' => false]);
                } else {
                    $data[$result['key']] = null;
                }
            }
        }

        return $data;
    }

    public function getSettingCodeAndValue($key, $storeId = 0, $deserializationType = "JSONDECODE")
    {
        $query = $this->db->query("SELECT code, value, serialized FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$storeId . "' AND `key` = '" . $this->db->escape($key) . "'");

        $result = array();

        if ($query->num_rows) {

            $result['code'] = $query->row['code'];

            if (!$query->row['serialized']) {
                $result['value'] = $query->row['value'];
            } else {
                if (strcmp($deserializationType, "JSONDECODE") == 0) {
                    $result['value'] = json_decode($query->row['value'], true);
                } elseif (strcmp($deserializationType, "UNSERIALIZE") == 0) {
                    $result['value'] = unserialize($query->row['value'], ['allowed_classes' => false]);
                } else {
                    $result['value'] = null;
                }
            }
        } else {
            $result['code'] = null;
            $result['value'] = null;
        }

        return $result;
    }

    public function deleteSettingByCode($code, $storeId = 0)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int)$storeId . "' AND `code` = '" . $this->db->escape($code) . "'");
    }

    public function deleteSettingByKey($key, $storeId = 0)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int)$storeId . "' AND `key` = '" . $this->db->escape($key) . "'");
    }

    public function existsSettingByCode($code, $storeId = 0)
    {
        $query = $this->db->query("SELECT CASE WHEN EXISTS(SELECT 1 FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int)$storeId . "' AND `code` = '" . $this->db->escape($code) . "') THEN 1 ELSE 0 END flag");

        if ($query->row['flag']) {
            return true;
        } else {
            return false;
        }
    }

    public function existsSettingByKey($key, $storeId = 0)
    {
        $query = $this->db->query("SELECT CASE WHEN EXISTS(SELECT 1 FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int)$storeId . "' AND `key` = '" . $this->db->escape($key) . "') THEN 1 ELSE 0 END flag");

        if ($query->row['flag']) {
            return true;
        } else {
            return false;
        }
    }

    public function existsSetting($code, $key, $storeId = 0)
    {
        $query = $this->db->query("SELECT CASE WHEN EXISTS(SELECT 1 FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int)$storeId . "' AND `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "') THEN 1 ELSE 0 END flag");

        if ($query->row['flag']) {
            return true;
        } else {
            return false;
        }
    }

    public function saveSetting($code, $key, $value = '', $storeId = 0, $serializationType = "JSONENCODE")
    {
        if ($this->existsSetting($key, $storeId)) {
            if (!is_array($value)) {
                $this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '" . $this->db->escape($value) . "', serialized = '0'  WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$storeId . "'");
            } else {
                if ($serializationType == "JSONENCODE") {
                    $this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '" . $this->db->escape(json_encode($value)) . "', serialized = '1' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$storeId . "'");
                } elseif ($serializationType == "SERIALIZE") {
                    $this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '" . $this->db->escape(serialize($value)) . "', serialized = '1' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$storeId . "'");
                }
            }
        } else {
            if (substr($key, 0, strlen($code)) == $code) {
                if (!is_array($value)) {
                    $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$storeId . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
                } else {
                    if ($serializationType == "JSONENCODE") {
                        $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$storeId . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value)) . "', serialized = '1'");
                    } elseif ($serializationType == "SERIALIZE") {
                        $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$storeId . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(serialize($value)) . "', serialized = '1'");
                    }
                }
            }
        }
    }
}