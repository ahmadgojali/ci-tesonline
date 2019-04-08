<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print Data Hasil Ujian</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FontAwesome-->
  <link rel="stylesheet" href="<?= base_url(); ?>assets2/bootstrap/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<!-- <body> -->

<body onload="window.print();">
	<div class="container">
	  <div class="row">
	  	 <!-- hitung jumlah jawaban benar -->
       
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 1<br>Matematika Dasar</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar1; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jawaban</th>
			      <th scope="col">Kunci Jawaban</th>
			      <th scope="col">Keterangan</th>
			    </tr>
			  </thead>
			  <tbody>
			  	 <!-- tabel cocokin jawaban -->
	              <?php 
                  $nomor = 1;
                  foreach ($jaw1 as $row) :
                    
                  $jawaban       = $row['jawaban'];
                  $kunci_jawaban = $row['kunci_jawaban'];

                   if ($jawaban == $kunci_jawaban ) {
                      $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                      // $total += count($ket);
                  }
                  else {
                        $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                  } 

                 ?>
                <tr>
                  <td class="text-center"><?php echo $nomor++; ?></td>
                  <td><?php echo $row['jawaban']; ?></td>
                  <td><?= $row['kunci_jawaban']; ?></td>
                  <td class="text-center"><?= $ket; ?></td>
                </tr>
               <?php endforeach; ?>
			  </tbody>
			</table>
	    </div>

	    <!-- hitung jumlah jawaban benar -->
    
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 2<br>Hubungan Kata</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar2; ?></p>
	     <table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Jawaban</th>
		      <th scope="col">Kunci Jawaban</th>
		      <th scope="col">Keterangan</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<!-- tabel cocokin jawaban -->
            <?php 
            $nomor = 1;
            foreach ($jaw2 as $data) :

              $jawaban       = $data['jawaban'];
              $kunci_jawaban = $data['kunci_jawaban'];
              // $total = 0;


                if ($jawaban == $kunci_jawaban ) {
                    $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                    // $total += count($ket);
                }
                else {
                      $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                }
          
          ?>
          <tr>
            <td class="text-center"><?= $nomor++; ?></td>
            <td><?= $data['jawaban']; ?></td>
            <td><?= $data['kunci_jawaban']; ?></td>
            <td class="text-center"><?= $ket; ?></td>
          </tr>

          <?php endforeach; ?>
		  </tbody>
		</table>
	    </div>
	</div>


		<div class="row">
		<!-- hitung jumlah jawaban benar -->
        
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 3<br>Deret Angka</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar3; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jaw1</th>
			      <th scope="col">Jaw2</th>
			      <th scope="col">Kun Jaw1</th>
			      <th scope="col">Kun Jaw2</th>
			      <th scope="col">Ket</th>
			    </tr>
			  </thead>
			  <tbody>
			  <!-- tabel cocokin jawaban -->
             	<?php 
                  $nomor = 1;
                  foreach ($jaw3 as $data) :
                    
                    $jawaban1       = $data['jawaban1'];
                    $jawaban2       = $data['jawaban2'];
                    $kunci_jawaban1 = $data['kunci_jawaban1'];
                    $kunci_jawaban2 = $data['kunci_jawaban2'];
                    // $total = 0;

                       if ($jawaban1 == $kunci_jawaban1 OR $jawaban2 == $kunci_jawaban2) {
                          $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                           // $total += count($ket);
                          // var_dump($total);
                          // echo "$total";
                      }
                      else {
                            $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                      }                        
                
                ?>
                <tr>
                  <td class="text-center"><?= $nomor++; ?></td>
                  <td><?= $data['jawaban1']; ?></td>
                  <td><?= $data['jawaban2']; ?></td>
                  <td><?= $data['kunci_jawaban1']; ?></td>
                  <td><?= $data['kunci_jawaban2']; ?></td>
                  <td class="text-center"><?= $ket; ?></td>
                </tr>
                <?php endforeach ; ?>
			  </tbody>
			</table>
	    </div>


		<!-- hitung jumlah jawaban benar -->
     
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 4<br>Silogisme</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar4; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jawaban</th>
			      <th scope="col">Kunci Jawaban</th>
			      <th scope="col">Keterangan</th>
			    </tr>
			  </thead>
			  <tbody>
			  	 <!-- tabel cocokin jawaban -->
	            <?php 
                $nomor = 1;
                foreach ($jaw4 as $data) :
                  
                  $jawaban       = $data['jawaban'];
                  $kunci_jawaban = $data['kunci_jawaban'];
                  // $total = 0;


                    if ($jawaban == $kunci_jawaban ) {
                        $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                        // $total += count($ket);

                    }
                    else {
                          $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                    }
              
              ?>
              <tr>
                <td class="text-center"><?= $nomor++; ?></td>
                <td><?= $data['jawaban']; ?></td>
                <td><?= $data['kunci_jawaban']; ?></td>
                <td class="text-center"><?= $ket; ?></td>
              </tr>

              <?php endforeach; ?>
			  </tbody>
			</table>
	    </div>

	    <!-- <div class="row"> -->

	
	    <div class="col-sm-6 text-center">
	    	<div class="text-center">Jawaban Tes 5<br>Bahasa Inggris</div>
	    	<p class="text-justify">Jumlah Benar : <?= $jml_benar5; ?></p>
	      <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jawaban</th>
			      <th scope="col">Kunci Jawaban</th>
			      <th scope="col">Keterangan</th>
			    </tr>
			  </thead>
			  <tbody>
			  	  <!-- tabel cocokin jawaban -->
             	<?php 
                  $nomor = 1;
                  foreach ($jaw5 as $data) :
                    
                  $jawaban       = $data['jawaban'];
                  $kunci_jawaban = $data['kunci_jawaban'];
                  // $total = 0;

                     if ($jawaban == $kunci_jawaban) {
                        $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                        // $total += count($ket);
                    }
                    else {
                          $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                    }                        
                
                ?>
                <tr>
                  <td class="text-center"><?= $nomor++; ?></td>
                  <td><?= $data['jawaban']; ?></td>
                  <td><?= $data['kunci_jawaban']; ?></td>
                  <td class="text-center"><?= $ket; ?></td>
                </tr>

                <?php endforeach; ?>
			  </tbody>
			</table>
	    </div>
	    
	    
	  </div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>