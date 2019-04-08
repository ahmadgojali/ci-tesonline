<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('login_Model');
	}

	public function index()
	{
		$this->load->view('login');	
	}

	public function loginProses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$cek_user = $this->login_Model->authUser($username, $password);

		if($cek_user->num_rows() > 0) {

			$data    = $cek_user->row_array();
			$session = $data['id'];
			
			$validasi = $this->login_Model->cekValidUser($session);
			
			if ($validasi->num_rows() > 0) {
				
				// $this->login_Model->editValidUser($session);

				$data_session = [
				'user'        => TRUE,
				'id_user'     => $session
				// 'nama'        => $data['nama'],
				// 'username'    => $username,
				// 'password'    => $password,
				// 'email'       => $data['email'],
				// 'validasi'    => $data['validasi'],
				// 'umur'        => $data['umur'],
				// 'no_telp'     => $data['no_telp'],
				// 'pendidikan'  => $data['pendidikan'],
				// 'tanggal_tes' => $data['tanggal_tes']
				];

			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/user"));

			}

			else {

				$this->session->set_flashdata('pesan', 'Maaf anda sudah pernah login sebelumnya !');

				redirect(base_url("index.php/login"));
			}

		}

		else{

			$cek_admin = $this->login_Model->authAdmin($username, $password);
		
			if($cek_admin->num_rows() > 0){

				$data = $cek_admin->row_array();
				
					$data_session = [
						'admin'      => TRUE,
						'id_admin'   => $data['id'],
						'nama_admin' => $data['nama'],
						'user_admin' => $username,
						'pass_admin' => $password,
						'level'      => $data['level']
						];

				$this->session->set_userdata($data_session);
	 
				redirect(base_url("index.php/admin"));
	 
			}

			else {

				$this->session->set_flashdata('pesan', 'Username dan password salah !');

				redirect(base_url("index.php/login"));
			}
		}
	}
 
	public function logout($level)
	{
		if ($level == 2) {
			
			$data_session = array ('user','id_user','nama','username','password','email','validasi','umur','no_telp','pendidikan','tanggal_tes', 'mulai1', 'mulai2', 'mulai3', 'mulai4', 'mulai5');

			$this->session->unset_userdata($data_session);
			// $this->session->sess_destroy();
			redirect(base_url('index.php/login'));
		}

		else {

			$data_session = array ('admin', 'id_admin', 'nama_admin', 'user_admin', 'pass_admin', 'level');
				 
			$this->session->unset_userdata($data_session);
			// $this->session->sess_destroy();
			redirect(base_url('index.php/login'));
		}
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */