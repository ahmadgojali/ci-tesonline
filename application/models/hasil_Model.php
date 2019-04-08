<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_Model extends CI_Model {

	public function getAllHasil()
	{
		// $query = $this->db->query("SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id group by jawaban_tes1.id_user order by user.tanggal_tes DESC");

		$query = $this->db->query("SELECT nilai.*, user.* FROM nilai, user where nilai.id_user = user.id order by user.tanggal_tes DESC");
		
		return $query->result_array();
	}

	public function getHasilById($id)
	{
		// $query = $this->db->query("SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id");

		$query = $this->db->query("SELECT nilai.*, user.* FROM nilai, user where nilai.id_user = user.id and nilai.id_user = $id");

		return $query;
		// return $query->row_array();
	}

	public function getJmlBenar($no, $id)
	{
		if ($no == 1) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id and jawaban_tes1.jawaban = soal1.kunci_jawaban");

			return $query->num_rows();
		}

		elseif ($no == 2) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes2.*, soal2.* FROM `jawaban_tes2`, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id and jawaban_tes2.jawaban = soal2.kunci_jawaban");

			return $query->num_rows();

		}

		elseif ($no == 3) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2");

			return $query->num_rows();
		}

		elseif ($no == 4) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id and jawaban_tes4.jawaban = soal4.kunci_jawaban");

			return $query->num_rows();
		}

		elseif ($no == 5) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes5.*, soal5.* FROM `jawaban_tes5`, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id and jawaban_tes5.jawaban = soal5.kunci_jawaban");

			return $query->num_rows();
		}
		
	}

	// public function getJmlBenar1($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id and jawaban_tes1.jawaban = soal1.kunci_jawaban");

	// 	return $query->num_rows();
		
	// }

	// public function getJmlBenar2($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes2.*, soal2.* FROM `jawaban_tes2`, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id and jawaban_tes2.jawaban = soal2.kunci_jawaban");

	// 	return $query->num_rows();
		
	// }

	// public function getJmlBenar3($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2");

	// 	return $query->num_rows();
		
	// }

	// public function getJmlBenar4($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id and jawaban_tes4.jawaban = soal4.kunci_jawaban");

	// 	return $query->num_rows();
		
	// }

	// public function getJmlBenar5($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes5.*, soal5.* FROM `jawaban_tes5`, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id and jawaban_tes5.jawaban = soal5.kunci_jawaban");

	// 	return $query->num_rows();
		
	// }

	public function cocokJaw($no, $id)
	{
		if ($no == 1) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id order by soal1.id ASC");

        	return $query->result_array();
		}

		elseif ($no == 2) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id order by soal2.id ASC");

        	return $query->result_array();
		}

		elseif ($no == 3) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id order by soal3.id ASC");

        	return $query->result_array();
		}

		elseif ($no == 4) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes4.*, soal4.* FROM jawaban_tes4, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id order by soal4.id ASC");

        	return $query->result_array();
		}

		elseif ($no == 5) {
			
			$query = $this->db->query("SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id order by soal5.id ASC");

        	return $query->result_array();
		}

	}

	// public function cocokJaw1($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id order by soal1.id ASC");

 //        return $query->result_array();

	// }

	// public function cocokJaw2($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes2.*, soal2.* FROM jawaban_tes2, user, soal2 where jawaban_tes2.id_user = user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id order by soal2.id ASC");

 //        return $query->result_array();

	// }

	// public function cocokJaw3($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id order by soal3.id ASC");

 //        return $query->result_array();

	// }

	// public function cocokJaw4($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes4.*, soal4.* FROM jawaban_tes4, user, soal4 where jawaban_tes4.id_user = user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id order by soal4.id ASC");

 //        return $query->result_array();

	// }

	// public function cocokJaw5($id)
	// {
	// 	$query = $this->db->query("SELECT user.*, jawaban_tes5.*, soal5.* FROM jawaban_tes5, user, soal5 where jawaban_tes5.id_user = user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id order by soal5.id ASC");

 //        return $query->result_array();

	// }

	// public function exportDataAll()
	// {
	// 	$query =  $this->db->query("SELECT user.*, nilai.* FROM nilai, user where nilai.id_user = user.id");
	// 	return $query->result_array();

		
	// }

	// public function exportDataById($id)
	// {
	// 	$query =  $this->db->query("SELECT user.*, nilai.* FROM nilai, user where nilai.id_user = user.id and nilai.id_user = $id");
		
	// 	return $query->result_array();
	// }

	public function getWaktu()
	{
		// $query = $this->db->query("SELECT * FROM waktu");
		return $this->db->get("waktu")->result_array();
	}

	


}

/* End of file hasil_Model.php */
/* Location: ./application/models/hasil_Model.php */