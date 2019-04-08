<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('date');
	}

	public function authAdmin ($username, $password)
	{
		$query = $this->db->query("SELECT * from admin where username = '$username' AND password = '$password' limit 1");
		return $query;
	}

	public function authUser ($username, $password)
	{
		$query = $this->db->query("SELECT * from user where username = '$username' AND password = '$password' limit 1");
		return $query;
	}

	public function cekValidUser ($id)
	{
		$query = $this->db->query("SELECT * FROM user where validasi = 0 and id = '$id' limit 1");
		return $query;
	}

	public function editValidUser($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$tgl        = date('Y-m-d H:i:s');
		$validasi   = 1;
		
		$data = [

			'validasi'    => $validasi,
			'tanggal_tes' => $tgl

		];

		$this->db->update('user', $data, ['id' => $id]);
	}

}

/* End of file login_Model.php */
/* Location: ./application/models/login_Model.php */