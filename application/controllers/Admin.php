<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		if( $this->session->userdata('admin') != TRUE){
			redirect(base_url("index.php/login"));
		}

		$this->load->model('user_Model');
		$this->load->model('hasil_Model');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

	public function dataPelamar()
	{
		$data['user'] = $this->user_Model->getAllUser();
		$data['judul'] = 'Data User';
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/data-pelamar/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambahPelamar()
	{
		$data['judul'] = 'Tambah User';

		// $this->form_validation->set_rules($this->rules());
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'required|numeric');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');

		if ($this->form_validation->run() == FALSE ) {
			
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/data-pelamar/tambah', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->user_Model->tambahDataUser();
			
			$this->session->set_flashdata('flash', 'ditambahkan');

			redirect('index.php/admin/dataPelamar');
		}		
	}

	public function editPelamar($id)
	{

		if (!isset($id)) redirect('index.php/admin/dataPelamar');

		$data['judul'] = 'Edit User';
		$data['user'] = $this->user_Model->getUserById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'required|numeric');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');

		if ($this->form_validation->run() == FALSE ) {
			
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/data-pelamar/ubah', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->user_Model->ubahDataUser();
			
			$this->session->set_flashdata('flash', 'diubah');

			redirect('index.php/admin/dataPelamar');
		}
	}

	public function hapusPelamar($id)
	{
		$this->user_Model->hapusDataUser($id);

		$this->session->set_flashdata('flash', 'dihapus');

		redirect('index.php/admin/dataPelamar');
	}

	public function dataHasil()
	{	
		$data['hasil'] = $this->hasil_Model->getAllHasil();
		$data['judul'] = 'Data Hasil Tes';
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/data-hasil/index', $data);
		$this->load->view('templates/footer');
	}

	public function lihatHasil($id)
	{	
		$data['lihathasil'] = $this->hasil_Model->getHasilById($id)->row_array();
		$data['jml_benar1'] = $this->hasil_Model->getJmlBenar(1, $id);
		$data['jml_benar2'] = $this->hasil_Model->getJmlBenar(2, $id);
		$data['jml_benar3'] = $this->hasil_Model->getJmlBenar(3, $id);
		$data['jml_benar4'] = $this->hasil_Model->getJmlBenar(4, $id);
		$data['jml_benar5'] = $this->hasil_Model->getJmlBenar(5, $id);
		$data['jaw1']       = $this->hasil_Model->cocokJaw(1, $id);
		$data['jaw2']       = $this->hasil_Model->cocokJaw(2, $id);
		$data['jaw3']       = $this->hasil_Model->cocokJaw(3, $id);
		$data['jaw4']       = $this->hasil_Model->cocokJaw(4, $id);
		$data['jaw5']       = $this->hasil_Model->cocokJaw(5, $id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/data-hasil/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function exportAll()
	{
		// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data ke excel    
		header("Content-type: application/vnd-ms-excel");    
		header("Content-Disposition: attachment; filename=Data_hasil_all.xls");        
		$data['hasil'] = $this->hasil_Model->getAllHasil();    
		// $data['hasil'] = $this->hasil_Model->exportDataAll();    
		$this->load->view('pages/data-hasil/export-all', $data); 
	}

	public function exportById($id)
	{
		// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data ke excel    
		header("Content-type: application/vnd-ms-excel");    
		header("Content-Disposition: attachment; filename=Hasil_per_pelamar.xls");        
		$data['hasil'] = $this->hasil_Model->getHasilById($id)->result_array();    
		$this->load->view('pages/data-hasil/export-by-id', $data);
	}

	public function printById($id)
	{
		$data['lihathasil'] = $this->hasil_Model->getHasilById($id)->row_array();
		$data['jml_benar1'] = $this->hasil_Model->getJmlBenar(1, $id);
		$data['jml_benar2'] = $this->hasil_Model->getJmlBenar(2, $id);
		$data['jml_benar3'] = $this->hasil_Model->getJmlBenar(3, $id);
		$data['jml_benar4'] = $this->hasil_Model->getJmlBenar(4, $id);
		$data['jml_benar5'] = $this->hasil_Model->getJmlBenar(5, $id);
		$data['jaw1']       = $this->hasil_Model->cocokJaw(1, $id);
		$data['jaw2']       = $this->hasil_Model->cocokJaw(2, $id);
		$data['jaw3']       = $this->hasil_Model->cocokJaw(3, $id);
		$data['jaw4']       = $this->hasil_Model->cocokJaw(4, $id);
		$data['jaw5']       = $this->hasil_Model->cocokJaw(5, $id);
		$this->load->view('pages/data-hasil/print-by-id', $data);
	}

	public function dataSoal()
	{	
		// $data['hasil'] = $this->hasil_Model->getAllHasil();
		$data['judul'] = 'Data Sub Tes';
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/data-soal/index', $data);
		$this->load->view('templates/footer');
	}

	public function waktu()
	{	
		$data['waktu'] = $this->hasil_Model->getWaktu();
		$data['judul'] = 'Waktu pengerjaan';
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/data-soal/waktu', $data);
		$this->load->view('templates/footer');
	}

	public function editWaktu()
	{
		// $data['waktu'] = $this->hasil_Model->getWaktu();
		// $data['judul'] = 'edit waktu';
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		$this->load->view('pages/data-soal/modal-edit');
		// $this->load->view('pages/data-soal/modal-edit', $data);
		// $this->load->view('templates/footer');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */

 ?>