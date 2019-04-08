<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Data User
        <small>ARNA</small></br>
        <small>Arwana Citramulia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tabel</a></li>
        <li class="active">Data User</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
    
    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row">
      <div class="col-lg-12 ">
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Success!</h4>
           Sub Tes <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?> 
        </div>
      </div>
    </div>
    <?php endif; ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title "><?= $judul ?></h3>
                <div class="tombol-kanan">
                  <a href="<?= base_url(); ?>index.php/admin/tambahTes" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg  fa-plus"></i>&nbsp; Tambah Sub Tes&nbsp;</a>
                  <!-- <a href="?page=tambah_penyakit" class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-lg fa-plus"></i> Tambah Penyakit</a> -->
                </div>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  width="5%" >No</th>
                  <th  width="25%" >Nama Sub Tes</th>
                  <th width="20%" >Jumlah Soal</th>   
                  <th  width="30%" >Waktu Pengerjaan</th>               
                  <!-- <th width="10%" >Pekerjaan</th> -->
                  <!-- <th width="10%" >Telepon</th> -->
                  <!-- <th width="15%" >Alamat</th> -->
                  <th class="align-middle text-center" width="20%" >Opsi</th>
                  
                </tr>
                </thead>
                <!-- <?php 
                  $nomor = 1;
                  
                  foreach ($user as $data) :
                  
                 ?> -->
                  <tr>
                    <td class="align-middle text-center"><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $data['waktu']; ?></td>
                    <td class="align-middle text-center">
                      <a href="<?= base_url(); ?>index.php/admin/lihatTes/<?= $data['id']; ?>"
                         class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a> 
                      <a href="<?= base_url(); ?>index.php/admin/editTes/<?= $data['id']; ?>"
                         class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg  fa-pencil"></i> Edit</a>
                      <a href="<?= base_url(); ?>index.php/admin/hapusTes/<?= $data['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" 
                         class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-trash-o"></i> Hapus</a>
                    </td>
                  </tr>
                <!-- <?php endforeach; ?> -->
                <tbody>
                
                </tbody>
               <!--  <tfoot>
                  <tr>
                  <th class="align-middle text-center" >No</th>
                  <th class="align-middle text-center" >Kode Kategori</th>
                  <th class="align-middle text-center" >Kategori</th>
                  <th class="align-middle text-center" >Opsi</th>
                  
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

