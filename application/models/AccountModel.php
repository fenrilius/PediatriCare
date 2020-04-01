<?php

class AccountModel extends CI_model
{
	public function addAccount()
	{
		//use query builder to insert $data to table "account"
		$data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"fullname" => $this->input->post('fullname', true),
			"email" => $this->input->post('email', true),
		];
		$this->db->insert('account', $data);
	}

	public function getAccountByUsername($uname)
	{
		//get data mahasiswa based on id 
		$query = $this->db->query("SELECT * FROM account WHERE username = '" . $uname . "'");
		return $query->row();
	}

	public function getAccountByPassword($username)
	{
		$this->db->select('password');
		$this->db->from('account');
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->row_array();
	}
}
