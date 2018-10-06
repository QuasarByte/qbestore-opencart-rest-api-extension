<?php
class ModelQuasarByteOCRestV1CategoryDescription extends Model {

	public function findAll() {
		$query = $this->db->query("SELECT cd.* FROM " . DB_PREFIX . "category_description cd INNER JOIN " . DB_PREFIX . "category c ON cd.category_id = c.category_id INNER JOIN " . DB_PREFIX . "category_to_store c2s ON c.category_id = c2s.category_id WHERE c2s.store_id = " . (int)$this->config->get('config_store_id'));

		return $query->rows;
	}

}