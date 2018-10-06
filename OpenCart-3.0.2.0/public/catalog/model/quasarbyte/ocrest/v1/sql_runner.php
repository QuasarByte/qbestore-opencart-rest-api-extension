<?php
class ModelQuasarByteOCRestV1SQLRunner extends Model {

	public function query($sql) {
		$query = $this->db->query($sql);
		return $query->rows;
	}

}