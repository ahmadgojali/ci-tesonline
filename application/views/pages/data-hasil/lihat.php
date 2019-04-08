<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

  <!-- select _GET -->
    
   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <div>
            <a href="<?= base_url(); ?>index.php/admin/dataHasil" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
            <a href="<?= base_url(); ?>index.php/admin/printById/<?= $lihathasil['id_user'] ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Print&nbsp;</a>
            <!-- <a href="print2.php?id_user=<?php echo $data['id_user']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a> -->
            <a href="<?= base_url(); ?>index.php/admin/exportById/<?= $lihathasil['id_user'] ?>" class="btn btn-default btn-sm float-right">&nbsp;<i class="fa fa-download"></i>&nbsp; Export to Excel&nbsp;</a>
          </div>
          <div class="tombol-kanan">
              
          </div>
        
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">
                   <!-- data pelamar -->
                

                <div class="box-body">
                  
                <!-- row-tabel1 dan tabel2 -->
                <!-- <div class="row"> -->
                   <!-- <section class="col-lg-7 connectedSortable"> -->

                  <!-- hitung jumlah jawaban benar -->
                  
                  <!-- col-tabel-tes1 -->
                  <!-- <div class="col-md-6"> -->
                    <div class="text-center">Tabel Jawaban Tes 1</i></b><br>Matematika Dasar</div>
                     <div class="">
                      <table>
                    
                        <tr>
                          <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                          <td>:</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar1; ?></td>
                        </tr>
                      </table>
                     </div>
                     
                      <table id="" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th class="" width="10">No</th>
                          <th class="">Jawaban</th>
                          <th class="">Kunci Jawaban</th>
                          <th class="text-center" >Keterangan</th>                              
                        </tr>
                        </thead>
                        <tbody>
                        <!-- tabel cocokin jawaban1 -->
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

                        <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                      </table>
                       
                    </div>

                     <!-- hitung jumlah jawaban benar -->
                     
                      <!-- col-tabel-tes3 -->
                      <div class="box-body">
                        <div class="text-center">Tabel Jawaban Tes 3</i></b><br>Deret Angka</div>
                         <div class="">
                            <table>
                        
                            <tr>
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar3; ?></td>
                            </tr>
                          </table>
                         </div>
                         
                          <table id="" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th class="" width="10" >No</th>
                              <th class="">Jawaban1</th>
                              <th class="">Jawaban2</th>
                              <th class="">Kunci Jawaban1</th>
                              <th class="">Kunci Jawaban2</th>
                              <th class="text-center" >Keterangan</th>                              
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
                            <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                          </table>
                           
                        </div>
                        <!-- col-tabel-tes3 -->

                         <!-- hitung jumlah jawaban benar -->
                     
                      <!-- col-tabel-tes5 -->
                      <div class="box-body">
                        <div class="text-center">Tabel Jawaban Tes 5</i></b><br>Bahasa Inggris</div>
                         <div class="">
                            <table>
                        
                            <tr>
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar5; ?></td>
                            </tr>
                          </table>
                         </div>
                         
                          <table id="" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th class="" width="10">No</th>
                              <th class="">Jawaban</th>
                              <th class="">Kunci Jawaban</th>
                              <th class="text-center " >Keterangan</th>                              
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
                              <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                          </table>
                           
                        </div>
                        <!-- col-tabel-tes5 -->
                                        
                </section>
                <!-- /.Left col -->

                
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-6 connectedSortable">
                    <!-- hitung jumlah jawaban benar -->
                     
                     <div class="box-body">

                      <!-- col-tabel-tes2 -->
                      <!-- <div class="col-md-6"> -->
                        <div class="text-center">Tabel Jawaban Tes 2</i></b><br>Hubungan Kata</div>
                         <div class="">
                            <table>
                          
                            <tr>
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar2; ?></td>
                            </tr>
                          </table>
                         </div>
                        <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                        <table id="" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th class="" width="10">No</th>
                            <th class="">Jawaban</th>
                            <th class="">Kunci Jawaban</th>
                            <th class="text-center " >Keterangan</th>                              
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
                          <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                        </table>
                    
                      </div>
                      <!-- col-tabel-tes2 -->

                       <!-- hitung jumlah jawaban benar -->
                         

                          <!-- col-tabel-tes4 -->
                          <div class="box-body">
                            <div class="text-center">Tabel Jawaban Tes 4</i></b><br>Silogisme</div>
                             <div class="">
                                <table>
                              
                                <tr>
                                  <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                                  <td>:</td>
                                  <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar4; ?></td>
                                </tr>
                              </table>
                             </div>
                            <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                            <table id="" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th class="" width="10">No</th>
                                <th class="">Jawaban</th>
                                <th class="">Kunci Jawaban</th>
                                <th class="text-center " >Keterangan</th>                              
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
                              <!-- Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$total"; ?> -->
                            </table>
                        
                          </div>
                          <!-- col-tabel-tes4 -->
                        </section>
                        <!-- right col -->
                      </div>
                      <!-- /.row (main row) -->
                     </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </section>
            <!-- /.content -->
