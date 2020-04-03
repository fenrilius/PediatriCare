<?php

class RumahSakitModel extends CI_model
{
	public function getAllRumahSakit()
	{
		// get all data
		$query = $this->db->query("SELECT * FROM rumahsakit");
		return $query->result_array();
	}
}