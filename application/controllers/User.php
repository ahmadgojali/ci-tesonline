<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if( $this->session->userdata('user') != TRUE){
			redirect(base_url("index.php/login"));
		}

		$this->load->model('ujian_Model');	
	}

	public function index()
	{
		// $session         = $this->session->userdata('id_user');
		// $data['session'] = $this->ujian_Model->getDataSessionById($session);
		$data['session'] = $this->getSession();
		$data['judul']   = 'Ujian Online';
		
		$this->load->view('user/templates/header');
		$this->load->view('user/templates/navbar', $data);
		$this->load->view('user/index', $data);
		// $this->load->view('user/templates/footer');
	}

	public function getSession()
	{
		$session = $this->session->userdata('id_user');
		return $this->ujian_Model->getDataSessionById($session);
	}

	public function mulaiSoal($no)
	{
		if ($no == 1) {

			$latihan   = $this->input->post('latihan');
			$jawaban   = $this->input->post('jawaban');
			$jwb_benar = 2;
			
			if (isset($latihan)) {

		      if ($jawaban == $jwb_benar) {

		        $data['alert'] = '<div class="alert alert-success" role="alert">
		                    <center>Jawaban anda benar, karena 1 + 1 adalah 2 , anda bisa lanjut dan langsung mengerjakan soal dengan menekan tombol mulai dibawah .</center>
		                  </div>';

		        $url = base_url('index.php/user/soal/1');
		        $data['tombol'] = '<a href="'.$url.'" class="btn btn-success">Mulai</a>';
		        
		      } else {
		      
		        $data['alert'] = '<div class="alert alert-danger" role="alert">
		                     <center>Jawaban anda salah, coba lagi!</center></div>';
		      }
			      			    
			}

			$data['session'] = $this->getSession();
			$data['judul']   = 'Matematika Dasar';

			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/mulai-1', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 2) {

			$latihan   = $this->input->post('latihan');
			$jawaban   = $this->input->post('jawaban');
			$jwb_benar = 'A';
			
			if (isset($latihan)) {

		      if ($jawaban == $jwb_benar) {

		        $data['alert'] = '<div class="alert alert-success" role="alert">
		                    <center>Jawaban anda benar, karena Mawar : Merah = Melati : <i>Putih</i>, anda bisa lanjut dan langsung mengerjakan soal dengan menekan tombol mulai dibawah.</center>
		                  </div>';

		        $url = base_url('index.php/user/soal/2');
		        $data['tombol'] = '<a href="'.$url.'" class="btn btn-success">Mulai</a>';
		        
		      } else {
		      
		        $data['alert'] = '<div class="alert alert-danger" role="alert">
		                     <center>Jawaban anda salah, coba lagi!</center></div>';
		      }
			      			    
			}
			
			$data['session'] = $this->getSession();
			$data['judul']   = 'Hubungan Kata';

			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/mulai-2', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 3) {

			$latihan    = $this->input->post('latihan');
			$jawaban1   = $this->input->post('jawaban1');
			$jawaban2   = $this->input->post('jawaban2');
			$jwb_benar1 = 7;
			$jwb_benar2 = 8;

			if (isset($latihan)) {

		      if ($jawaban1 == $jwb_benar1 && $jawaban2 == $jwb_benar2) {

		        $data['alert'] = '<div class="alert alert-success" role="alert">
		                    <center>Jawaban anda benar, karena 7 dan 8 adalah lanjutan dari angka sebelumnya, anda bisa lanjut dan langsung mengerjakan soal dengan menekan tombol mulai dibawah.</center>
		                  </div>';

		        $url = base_url('index.php/user/soal/3');
		        $data['tombol'] = '<a href="'.$url.'" class="btn btn-success">Mulai</a>';
		        
		      } else {
		      
		        $data['alert'] = '<div class="alert alert-danger" role="alert">
		                     <center>Jawaban anda salah, coba lagi!</center></div>';
		      }
			      			    
			}
			
			$data['session'] = $this->getSession();
			$data['judul']   = 'Deret Angka';

			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/mulai-3', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 4) {

			$latihan   = $this->input->post('latihan');
			$jawaban   = $this->input->post('jawaban');
			$jwb_benar = 'A';
			
			if (isset($latihan)) {

		      if ($jawaban == $jwb_benar) {

		        $data['alert'] = '<div class="alert alert-success" role="alert">
		                    <center>Jawaban anda benar, karena Baik > Buruk, anda bisa lanjut dan langsung mengerjakan soal dengan menekan tombol mulai dibawah.</center>
		                  </div>';

		        $url = base_url('index.php/user/soal/4');
		        $data['tombol'] = '<a href="'.$url.'" class="btn btn-success">Mulai</a>';
		        
		      } else {
		      
		        $data['alert'] = '<div class="alert alert-danger" role="alert">
		                     <center>Jawaban anda salah, coba lagi!</center></div>';
		      }
			      			    
			}
			
			$data['session'] = $this->getSession();
			$data['judul']   = 'Silogisme';

			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/mulai-4', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 5) {

			$latihan   = $this->input->post('latihan');
			$jawaban   = $this->input->post('jawaban');
			$jwb_benar = 'B';
			
			if (isset($latihan)) {

		      if ($jawaban == $jwb_benar) {

		        $data['alert'] = '<div class="alert alert-success" role="alert">
		                    <center>Jawaban anda benar, anda bisa lanjut dan langsung mengerjakan soal dengan menekan tombol mulai dibawah.</center>
		                  </div>';

		        $url = base_url('index.php/user/soal/5');
		        $data['tombol'] = '<a href="'.$url.'" class="btn btn-success">Mulai</a>';
		        
		      } else {
		      
		        $data['alert'] = '<div class="alert alert-danger" role="alert">
		                     <center>Jawaban anda salah, coba lagi!</center></div>';
		      }
			      			    
			}

			$data['session'] = $this->getSession();
			$data['judul']   = 'Bahasa Inggris';

			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/mulai-5', $data);
			// $this->load->view('user/templates/footer');
		}

		else {

			$data['session'] = $this->getSession();
			
			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/selesai');
			// $this->load->view('user/templates/footer');
		}
	}

	public function soal($no)
	{
		if ($no == 1) {
			
			//set session untuk timer soal 
			//set session dulu dengan nama $_SESSION["mulai"]
		    if (isset($_SESSION["mulai1"])) { 
		        //jika session sudah ada
		        $telah_berlalu = time() - $_SESSION["mulai1"];
		    } else { 
		        //jika session belum ada
		        $_SESSION["mulai1"]  = time();
		        $telah_berlalu      = 0;
		    } 

		    //ambil waktu dari database
		    $time = $this->ujian_Model->getWaktu($no);
		    // $temp_waktu = (0.5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
		    $temp_waktu = ($time['waktu']*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
		    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
		    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
		     
		    if ($temp_menit < 60) { 
		        //Apabila $temp_menit yang kurang dari 60 menit 
		        $jam    = 0; 
		        $menit  = $temp_menit; 
		        $detik  = $temp_detik; 
		    } else { 
		        //Apabila $temp_menit lebih dari 60 menit          
		        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
		        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
		        $detik  = $temp_detik;
		    }

			$data['detik']   = $detik;
			$data['menit']   = $menit;
			$data['jam']     = $jam;
			$data['session'] = $this->getSession();
			$data['soal']    = $this->ujian_Model->getSoal($no);
			
			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/soal-1', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 2) {
			
			//set session untuk timer soal 
			//set session dulu dengan nama $_SESSION["mulai"]
		    if (isset($_SESSION["mulai2"])) { 
		        //jika session sudah ada
		        $telah_berlalu = time() - $_SESSION["mulai2"];
		    } else { 
		        //jika session belum ada
		        $_SESSION["mulai2"]  = time();
		        $telah_berlalu      = 0;
		    } 

		    //ambil waktu dari database
		    $time = $this->ujian_Model->getWaktu($no);
		    $temp_waktu = ($time['waktu']*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
		    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
		    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
		     
		    if ($temp_menit < 60) { 
		        //Apabila $temp_menit yang kurang dari 60 menit 
		        $jam    = 0; 
		        $menit  = $temp_menit; 
		        $detik  = $temp_detik; 
		    } else { 
		        //Apabila $temp_menit lebih dari 60 menit          
		        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
		        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
		        $detik  = $temp_detik;
		    }

			$data['detik']   = $detik;
			$data['menit']   = $menit;
			$data['jam']     = $jam;
			$data['session'] = $this->getSession();
			$data['soal']    = $this->ujian_Model->getSoal($no);

			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/soal-2', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 3) {
			
			//set session untuk timer soal 
			//set session dulu dengan nama $_SESSION["mulai"]
		    if (isset($_SESSION["mulai3"])) { 
		        //jika session sudah ada
		        $telah_berlalu = time() - $_SESSION["mulai3"];
		    } else { 
		        //jika session belum ada
		        $_SESSION["mulai3"]  = time();
		        $telah_berlalu      = 0;
		    } 

		    //ambil waktu dari database
		    $time = $this->ujian_Model->getWaktu($no);
		    $temp_waktu = ($time['waktu']*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
		    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
		    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
		     
		    if ($temp_menit < 60) { 
		        //Apabila $temp_menit yang kurang dari 60 menit 
		        $jam    = 0; 
		        $menit  = $temp_menit; 
		        $detik  = $temp_detik; 
		    } else { 
		        //Apabila $temp_menit lebih dari 60 menit          
		        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
		        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
		        $detik  = $temp_detik;
		    }

			$data['detik']   = $detik;
			$data['menit']   = $menit;
			$data['jam']     = $jam;
			$data['session'] = $this->getSession();
			$data['soal']    = $this->ujian_Model->getSoal($no);
			
			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/soal-3', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 4) {
			
			//set session untuk timer soal 
			//set session dulu dengan nama $_SESSION["mulai"]
		    if (isset($_SESSION["mulai4"])) { 
		        //jika session sudah ada
		        $telah_berlalu = time() - $_SESSION["mulai4"];
		    } else { 
		        //jika session belum ada
		        $_SESSION["mulai4"]  = time();
		        $telah_berlalu      = 0;
		    } 

		    //ambil waktu dari database
		    $time = $this->ujian_Model->getWaktu($no);
		    $temp_waktu = ($time['waktu']*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
		    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
		    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
		     
		    if ($temp_menit < 60) { 
		        //Apabila $temp_menit yang kurang dari 60 menit 
		        $jam    = 0; 
		        $menit  = $temp_menit; 
		        $detik  = $temp_detik; 
		    } else { 
		        //Apabila $temp_menit lebih dari 60 menit          
		        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
		        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
		        $detik  = $temp_detik;
		    }

			$data['detik']   = $detik;
			$data['menit']   = $menit;
			$data['jam']     = $jam;
			$data['session'] = $this->getSession();
			$data['soal']    = $this->ujian_Model->getSoal($no);
			
			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/soal-4', $data);
			// $this->load->view('user/templates/footer');
		}

		elseif ($no == 5) {
			
			//set session untuk timer soal 
			//set session dulu dengan nama $_SESSION["mulai"]
		    if (isset($_SESSION["mulai5"])) { 
		        //jika session sudah ada
		        $telah_berlalu = time() - $_SESSION["mulai5"];
		    } else { 
		        //jika session belum ada
		        $_SESSION["mulai5"]  = time();
		        $telah_berlalu      = 0;
		    } 

		    //ambil waktu dari database
		    $time = $this->ujian_Model->getWaktu($no);
		    $temp_waktu = ($time['waktu']*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
		    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
		    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
		     
		    if ($temp_menit < 60) { 
		        //Apabila $temp_menit yang kurang dari 60 menit 
		        $jam    = 0; 
		        $menit  = $temp_menit; 
		        $detik  = $temp_detik; 
		    } else { 
		        //Apabila $temp_menit lebih dari 60 menit          
		        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
		        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
		        $detik  = $temp_detik;
		    }

			$data['detik']   = $detik;
			$data['menit']   = $menit;
			$data['jam']     = $jam;
			$data['session'] = $this->getSession();
			$data['soal']    = $this->ujian_Model->getSoal($no);
			
			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/soal-5', $data);
			// $this->load->view('user/templates/footer');
		}

		else {

			$data['session'] = $this->getSession();
			
			$this->load->view('user/templates/header');
			$this->load->view('user/templates/navbar', $data);
			$this->load->view('user/selesai');
			// $this->load->view('user/templates/footer');
		}
	}


	public function simpanJawaban($no, $session)
	{

		if ($no == 1) {

			$cekValid = $this->ujian_Model->cekValidSession($no, $session);
			if ($cekValid->num_rows() > 0) {
				
				$url = base_url('index.php/user/mulaiSoal/2');

				echo "<script language='javascript'>window.alert('Maaf, Anda sudah pernah mengerjakan tes ini sebelumnya.'), window.location = '".$url."'</script>";
				// var_dump($cekValid);
			}

			else {

				$jml_soal = $this->ujian_Model->cekJmlSoal($no);

				$id      = $_POST['id'];
				$pilihan = $_POST['jawaban'];
				
				for ($nomor = 1; $nomor <= $jml_soal; $nomor++) { 
					
					$id_user = $session;
					$id_soal = $nomor;
					$jawaban = strtoupper($pilihan[$nomor]);

					$data = array(
						array(
							'id_user' => $id_user,
							'id_soal' => $id_soal,
							'jawaban' => $jawaban
						)
					);

				 	$this->ujian_Model->insertJawaban($no, $data);

				}

			 	$jml_benar = $this->ujian_Model->hitungJmlBenar($no, $session);
				$id_user = $session;
				
			 	$this->ujian_Model->insertNilai($no, $jml_benar, $id_user);
				
				redirect('index.php/user/mulaiSoal/2');		
			}
		}

		elseif ($no == 2) {

			$cekValid = $this->ujian_Model->cekValidSession($no, $session);
			if ($cekValid->num_rows() > 0) {
				
				$url = base_url('index.php/user/mulaiSoal/3');

				echo "<script language='javascript'>window.alert('Maaf, Anda sudah pernah mengerjakan tes ini sebelumnya.'), window.location = '".$url."'</script>";
			}

			else {

				$jml_soal = $this->ujian_Model->cekJmlSoal($no);

				$id      = $_POST['id'];
				$pilihan = $_POST['jawaban'];
				
				for ($nomor = 1; $nomor <= $jml_soal; $nomor++) { 
					
					$id_user = $session;
					$id_soal = $nomor;
					$jawaban = isset($pilihan[$nomor]) ? $pilihan[$nomor] : '' ;

					$data = array(
						array(
							'id_user' => $id_user,
							'id_soal' => $id_soal,
							'jawaban' => $jawaban
						)
					);
					
					// var_dump($jawaban);

				 	$this->ujian_Model->insertJawaban($no, $data);
				}

				$jml_benar = $this->ujian_Model->hitungJmlBenar($no, $session);
				$id_user = $session;
				
			 	$this->ujian_Model->insertNilai($no, $jml_benar, $id_user);
				
				redirect('index.php/user/mulaiSoal/3');		
			}
		}

		elseif ($no == 3) {

			$cekValid = $this->ujian_Model->cekValidSession($no, $session);
			if ($cekValid->num_rows() > 0) {
				
				$url = base_url('index.php/user/mulaiSoal/4');

				echo "<script language='javascript'>window.alert('Maaf, Anda sudah pernah mengerjakan tes ini sebelumnya.'), window.location = '".$url."'</script>";
			}

			else {

				$jml_soal = $this->ujian_Model->cekJmlSoal($no);

				$id      = $_POST['id'];
				$pilihan1 = $_POST['jawaban1'];
				$pilihan2 = $_POST['jawaban2'];
				
				for ($nomor = 1; $nomor <= $jml_soal; $nomor++) { 
					
					$id_user = $session;
					$id_soal = $nomor;
					$jawaban1 = $pilihan1[$nomor];
					$jawaban2 = $pilihan2[$nomor];

					$data = array(
						array(
							'id_user' => $id_user,
							'id_soal' => $id_soal,
							'jawaban1' => $jawaban1,
							'jawaban2' => $jawaban2
						)
					);

				 	$this->ujian_Model->insertJawaban($no, $data);
				 	// $this->ujian_Model->insertJawaban($no, $id_user, $id_soal, $jawaban1, $jawaban2);
				}
				
				$jml_benar = $this->ujian_Model->hitungJmlBenar($no, $session);
				$id_user = $session;
				
			 	$this->ujian_Model->insertNilai($no, $jml_benar, $id_user);

				redirect('index.php/user/mulaiSoal/4');		
			}
		}

		elseif ($no == 4) {

			$cekValid = $this->ujian_Model->cekValidSession($no, $session);
			if ($cekValid->num_rows() > 0) {
				
				$url = base_url('index.php/user/mulaiSoal/5');

				echo "<script language='javascript'>window.alert('Maaf, Anda sudah pernah mengerjakan tes ini sebelumnya.'), window.location = '".$url."'</script>";
			}

			else {

				$jml_soal = $this->ujian_Model->cekJmlSoal($no);

				$id      = $_POST['id'];
				$pilihan = $_POST['pilihan'];
				
				for ($nomor = 1; $nomor <= $jml_soal; $nomor++) { 
					
					$id_user = $session;
					$id_soal = $nomor;
					
					$jawaban = isset($pilihan[$nomor]) ? $pilihan[$nomor] : '';

					$data = array(
						array(
							'id_user' => $id_user,
							'id_soal' => $id_soal,
							'jawaban' => $jawaban
						)
					);
					
				 	$this->ujian_Model->insertJawaban($no, $data);
				 	// $this->ujian_Model->insertJawaban($no, $id_user, $id_soal, $jawaban);
				}
				
				$jml_benar = $this->ujian_Model->hitungJmlBenar($no, $session);
				$id_user = $session;
				
			 	$this->ujian_Model->insertNilai($no, $jml_benar, $id_user);

				redirect('index.php/user/mulaiSoal/5');		
			}
		}

		elseif ($no == 5) {

			$cekValid = $this->ujian_Model->cekValidSession($no, $session);
			if ($cekValid->num_rows() > 0) {
				
				$url = base_url('index.php/user/mulaiSoal/6');

				echo "<script language='javascript'>window.alert('Maaf, Anda sudah pernah mengerjakan tes ini sebelumnya.'), window.location = '".$url."'</script>";
			}

			else {

				$jml_soal = $this->ujian_Model->cekJmlSoal($no);

				$id      = $_POST['id'];
				$pilihan = $_POST['pilihan'];
				
				for ($nomor = 1; $nomor <= $jml_soal; $nomor++) { 
					
					$id_user = $session;
					$id_soal = $nomor;
					$jawaban = isset($pilihan[$nomor]) ? $pilihan[$nomor] : '';

					$data = array(
						array(
							'id_user' => $id_user,
							'id_soal' => $id_soal,
							'jawaban' => $jawaban
						)
					);
					
					// var_dump($jawaban);

				 	$this->ujian_Model->insertJawaban($no, $data);
				 	// $this->ujian_Model->insertJawaban($no, $id_user, $id_soal, $jawaban);
				}
				
				$jml_benar = $this->ujian_Model->hitungJmlBenar($no, $session);
				$id_user = $session;
				
			 	$this->ujian_Model->insertNilai($no, $jml_benar, $id_user);

				redirect('index.php/user/mulaiSoal/6');		
			}
		}

	}

	public function timerSession()
	{
		
		//set session untuk timer soal 
		//set session dulu dengan nama $_SESSION["mulai"]
	    if (isset($_SESSION["mulai1"])) { 
	        //jika session sudah ada
	        $telah_berlalu = time() - $_SESSION["mulai1"];
	    } else { 
	        //jika session belum ada
	        $_SESSION["mulai1"]  = time();
	        $telah_berlalu      = 0;
	    } 

	    //ubah waktu disini
	    // $temp_waktu = (0.5*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
	    $temp_waktu = (15*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
	    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
	    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
	     
	    if ($temp_menit < 60) { 
	        //Apabila $temp_menit yang kurang dari 60 menit 
	        $jam    = 0; 
	        $menit  = $temp_menit; 
	        $detik  = $temp_detik; 
	    } else { 
	        //Apabila $temp_menit lebih dari 60 menit          
	        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
	        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
	        $detik  = $temp_detik;
	    }   
	}






}

/* End of file User.php */
/* Location: ./application/controllers/User.php */