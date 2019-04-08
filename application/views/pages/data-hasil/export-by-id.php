<!-- // Tambahkan table -->
<table id="example1" class="table table-bordered table-striped "  border="1">
	<thead>
	<tr>
	  <th rowspan="2" class="text-center">No</th>
	  <th rowspan="2" class="text-center">Nama</th>
	  <th colspan="5" class="text-center">Sub Tes</th>
	  <th rowspan="2" class="text-center">Total</th>
	  	<tr>
            <td><center><b>1</b></center></td>
            <td><center><b>2</b></center></td>
            <td><center><b>3</b></center></td>
            <td><center><b>4</b></center></td>
            <td><center><b>5</b></center></td>
        </tr>                             	  
	</tr>
	</thead>
	<tbody>

	<?php 
	
	$nomor = 1;
	foreach ($hasil as $data) :
	
	$total = $data['tes1'] + $data['tes2'] + $data['tes3'] + $data['tes4'] + $data['tes5'] ;                      
	?>
	<tr>
	  <td><center> <?= $nomor++; ?> </center></td>
	  <td> <?= $data['nama']; ?> </td>
	  <td><center> <?= $data['tes1']; ?> </center></td>
	  <td><center> <?= $data['tes2']; ?> </center></td>
	  <td><center> <?= $data['tes3']; ?> </center></td>
	  <td><center> <?= $data['tes4']; ?> </center></td>
	  <td><center> <?= $data['tes5']; ?> </center></td>
	  <td><center> <?= $total; ?> </center></td> 
	</tr>
	<?php endforeach; ?>
	</tbody>

</table>
