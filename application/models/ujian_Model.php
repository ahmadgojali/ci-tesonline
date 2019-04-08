<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian_Model extends CI_Model {

	public function getDataSessionById($id)
	{

		$query   = $this->db->query("SELECT * from user where id = $id");

		return $query->row_array();
	}

	public function getWaktu($id)
	{
		$query = $this->db->query("SELECT * FROM waktu WHERE id = $id");

		return $query->row_array();
	}

	public function getSoal($no)
	{
		if ($no == 1) {
			
			$query   = $this->db->query("SELECT * FROM soal1 order by id ASC");

			return $query->result_array();
		}

		elseif ($no == 2) {
			
			$query   = $this->db->query("SELECT * FROM soal2 order by id ASC");

			return $query->result_array();
		}

		elseif ($no == 3) {
			
			$query   = $this->db->query("SELECT * FROM soal3 order by id ASC");

			return $query->result_array();
		}

		elseif ($no == 4) {
			
			$query   = $this->db->query("SELECT * FROM soal4 order by id ASC");

			return $query->result_array();
		}

		elseif ($no == 5) {
			
			$query   = $this->db->query("SELECT * FROM soal5 order by id ASC");

			return $query->result_array();
		}

		// else {

		// 	$query   = $this->db->query("SELECT * FROM soal1 order by id ASC");

		// 	return $query->result_array();
		// }
	}

	public function cekJmlSoal($no)
	{
		if ($no == 1) {
			
			$query   = $this->db->query("SELECT * FROM soal1 order by id ASC");

			return $query->num_rows();
		}

		elseif ($no == 2) {
			
			$query   = $this->db->query("SELECT * FROM soal2 order by id ASC");

			return $query->num_rows();
		}

		elseif ($no == 3) {
			
			$query   = $this->db->query("SELECT * FROM soal3 order by id ASC");

			return $query->num_rows();
		}

		elseif ($no == 4) {
			
			$query   = $this->db->query("SELECT * FROM soal4 order by id ASC");

			return $query->num_rows();
		}

		elseif ($no == 5) {
			
			$query   = $this->db->query("SELECT * FROM soal5 order by id ASC");

			return $query->num_rows();
		}
	}

	public function cekValidSession($no, $session)
	{
		if ($no == 1 ) {
			
			$query   = $this->db->query("SELECT * FROM jawaban_tes1 WHERE id_user ='$session'");
			return $query;
		}

		elseif ($no == 2 ) {
			
			$query   = $this->db->query("SELECT * FROM jawaban_tes2 WHERE id_user ='$session'");
			return $query;
		}

		elseif ($no == 3 ) {
			
			$query   = $this->db->query("SELECT * FROM jawaban_tes3 WHERE id_user ='$session'");
			return $query;
		}

		elseif ($no == 4 ) {
			
			$query   = $this->db->query("SELECT * FROM jawaban_tes4 WHERE id_user ='$session'");
			return $query;
		}

		elseif ($no == 5 ) {
			
			$query   = $this->db->query("SELECT * FROM jawaban_tes5 WHERE id_user ='$session'");
			return $query;
		}
	}

	public function insertJawaban($no, $data)	
	{
		if ($no == 1) {

			$this->db->insert_batch('jawaban_tes1', $data);
			
			// $query = ("INSERT INTO jawaban_tes1 (id_user, id_soal, jawaban) VALUES ('$id_user', '$id_soal', '$jawaban')");
			// $this->db->query($query);

			// $this->db->insert("jawaban_tes1", $data);
		
		}

		elseif ($no == 2) {
			
			// $data = array(
			// 	array(
			// 		'id_user' => $id_user,
			// 		'id_soal' => $id_soal,
			// 		'jawaban' => $jawaban
			// 	)
			// );

			$this->db->insert_batch('jawaban_tes2', $data);
		}

		elseif ($no == 3) {
			
			// $data = array(
			// 	array(
			// 		'id_user' => $id_user,
			// 		'id_soal' => $id_soal,
			// 		'jawaban1' => $jawaban1, 
			// 		'jawaban2' => $jawaban2
			// 	)
			// );

			$this->db->insert_batch('jawaban_tes3', $data);
		}

		elseif ($no == 4) {
			
			// $data = array(
			// 	array(
			// 		'id_user' => $id_user,
			// 		'id_soal' => $id_soal,
			// 		'jawaban' => $jawaban
			// 	)
			// );

			$this->db->insert_batch('jawaban_tes4', $data);
		}

		elseif ($no == 5) {
			
			// $data = array(
			// 	array(
			// 		'id_user' => $id_user,
			// 		'id_soal' => $id_soal,
			// 		'jawaban' => $jawaban
			// 	)
			// );

			$this->db->insert_batch('jawaban_tes5', $data);
		}
	}

	public function hitungJmlBenar($no, $session)
	{
		if ($no == 1) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $session and jawaban_tes1.jawaban = soal1.kunci_jawaban ");

			return $query->num_rows();
		}

		elseif ($no == 2) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $session and jawaban_tes2.jawaban = soal2.kunci_jawaban ");

			return $query->num_rows();
		}

		elseif ($no == 3) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $session and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2");

			return $query->num_rows();
		}

		elseif ($no == 4) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes4.*, soal4.* FROM jawaban_tes4, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $session and jawaban_tes4.jawaban = soal4.kunci_jawaban ");

			return $query->num_rows();
		}

		elseif ($no == 5) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $session and jawaban_tes5.jawaban = soal5.kunci_jawaban ");

			return $query->num_rows();
		}
	}

	public function insertNilai($no, $jml_benar, $id_user)			
	{
		if ($no == 1) {

			$nilai = array(
						'id_user' => $id_user,
						'tes1' => $jml_benar,
						'tes2' => 0,
						'tes3' => 0,
						'tes4' => 0,
						'tes5' => 0
					);
			
			$this->db->insert('nilai', $nilai);
		}

		elseif ($no == 2) {
			
			$nilai = array(

						'tes2' => $jml_benar
					);
			
			$this->db->where('id_user', $id_user);
			$this->db->update('nilai', $nilai);
		}

		elseif ($no == 3) {
			
			$nilai = array(

						'tes3' => $jml_benar
					);

			$this->db->where('id_user', $id_user);
			$this->db->update('nilai', $nilai);
		}

		elseif ($no == 4) {
			
			$nilai = array(
						'tes4' => $jml_benar
					);

			$this->db->where('id_user', $id_user);
			$this->db->update('nilai', $nilai);
		}

		elseif ($no == 5) {
			
			$nilai = array(
						'tes5' => $jml_benar
						);

			$this->db->where('id_user', $id_user);
			$this->db->update('nilai', $nilai);
		}
	}



}

/* End of file ujian_Model.php */
/* Location: ./application/models/ujian_Model.php */