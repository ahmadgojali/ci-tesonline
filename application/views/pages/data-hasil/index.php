<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">  
        
        <!-- START CUSTOM TABS -->
        <!-- <h2 class="page-header">Arwana Citramulia</h2> -->

        <div class="row">
          <div class="col-md-12">
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
              <!-- <ul class="nav nav-tabs pull-right lead">
                <li><a href="#nilai5" data-toggle="tab">Tes 5</a></li>
                <li><a href="#nilai4" data-toggle="tab">Tes 4</a></li>
                <li><a href="#nilai3" data-toggle="tab">Tes 3</a></li>
                <li><a href="#nilai2" data-toggle="tab">Tes 2</a></li>
                <li class="active"><a href="#nilai1" data-toggle="tab">Tes 1</a></li>
                
                <li class="pull-left header"><i class="fa fa-th"></i> Hasil Ujian Pelamar</li>
              </ul> -->

                <div class="tab-pane active" id="nilai1">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title "><?= $judul ?></h3>

                      <!-- search -->
                      <!-- <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search_tes1" id="search_tes1" class="form-control pull-right" placeholder="Search">
                          button search
                          <div class="input-group-btn">
                            <button type="submit" name="tes1" id="tes1" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div> -->
                        <div class="tombol-kanan">
                            <a href="<?= base_url(); ?>index.php/admin/exportAll" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-download"></i>&nbsp; Export to Excel All Data&nbsp;</a>
                        </div>
                    </div>
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Umur</th>
                          <th>Email</th>                              
                          <th>Tanggal Tes</th>   
                         
                          <th class="align-middle text-center" width="20%" >Opsi</th>
                          
                        </tr>
                        </thead>
                        <?php 
                          $nomor = 1;
                          foreach ($hasil as $data) :   
                         ?>
                         <tr>
                            <td class="align-middle text-center"><?php echo $nomor++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['umur']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['tanggal_tes']; ?></td>
                            <td class="align-middle text-center">
                              <a href="<?= base_url(); ?>index.php/admin/lihatHasil/<?= $data['id_user']; ?>"
                                 class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        <tbody>
                        
                        </tbody>
                        
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <!-- pagination -->
                    <!-- <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div> -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->


      <!-- </div> -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

