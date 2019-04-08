<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('date');
	}

	public function getAllUser()					
	{
		$query =  $this->db->query("SELECT * from user order by id desc");
		// $user =  $this->db->("SELECT * FROM user");
		return $query->result_array();
	}

	public function getUserById($id)
	{
		$query = $this->db->query("SELECT * from user where id = '$id' ");

		return $query->row_array();
	}

	public function tambahDataUser()
	{	
		date_default_timezone_set('Asia/Jakarta');
		$tgl        = date('Y-m-d H:i:s');
		$validasi   = 0;
		$nama       = ucwords($this->input->post('nama', true));
		$pendidikan = ucwords($this->input->post('nama', true));

		$data = [
			"nama"        => $nama,
			"username"    => $this->input->post('username', true),
			"password"    => $this->input->post('password', true),
			"email"       => $this->input->post('email', true),
			"validasi"    => $validasi,
			"umur"        => $this->input->post('umur', true),
			"no_telp"     => $this->input->post('no_telp', true),
			"pendidikan"  => $pendidikan,
			"tanggal_tes" => $tgl

		];

		$this->db->insert("user", $data);

		// $query = $this->db->query("SELECT * from user where id = '$id' ");

		// return $query->row_array();
	}

	public function ubahDataUser()
	{
		// date_default_timezone_set('Asia/Jakarta');
		// $validasi = 0;
		// $tgl = date('Y-m-d H:i:s');
		$nama       = ucwords($this->input->post('nama', true));
		$pendidikan = ucwords($this->input->post('nama', true));

		$data = [
			"nama"       => $nama,
			"username"   => $this->input->post('username', true),
			"password"   => $this->input->post('password', true),
			"email"      => $this->input->post('email', true),
			// "validasi"    => $validasi,
			"umur"       => $this->input->post('umur', true),
			"no_telp"    => $this->input->post('no_telp', true),
			"pendidikan" => $pendidikan
			// "tanggal_tes" => $tgl
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);

		// $query = $this->db->query("SELECT * from user where id = '$id' ");

		// return $query->row_array();
	}

	public function hapusDataUser($id)
	{
		$this->db->delete('user', ['id' => $id]);

		// $query = $this->db->query("SELECT * from user where id = '$id' ");

		// return $query->row_array();
	}

}

/* End of file user_Model.php */
/* Location: ./application/models/user_Model.php */