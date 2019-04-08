<?php include 'templates/time.php'; ?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4"><?= $judul ?></h1>
  <p class="lead">Selamat Datang <b><?= $session['nama'] ?></b> di Sistem Recruitment Online</p>
</div>
<!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h3 class="">Selamat Datang, <?= $data['nama'] ?></h3>
  <p class="lead"> </p>
</div> -->

<!-- <div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-md-8">
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-center">Petunjuk Pengerjaan Sub Tes 2</h4>
      </div>
      <div class="card-body">
        <div class="panel-body"> -->
          <!-- isi petunjuk disini      -->
<!--        </div>
        
        <center>
          <a href="soal2.php" class="btn btn-md btn-primary text-center">Mulai</a>
        </center>
      </div>
    </div>
  </div>

  <div class="col-md-2">
     
  </div>
</div>
 -->
<!-- <div class="container"> -->
<!-- collapse soal 1 show yang lain hide -->
<div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-8">
    <div class="card text-center">
      <div class="card-header lead">
       Data Diri Peserta Tes
      </div>
      <div class="card-body text-lg-left">
       <div class="row">
          <div class="col-md-4">
           
         </div>
         <div class="col-md-2 lead">
           <div class="row">Nama</div>
           <div class="row">Umur</div>
           <div class="row">No HP</div>
           <div class="row">Pendidikan</div>
           <div class="row">Tangal Tes</div>
         </div>
         <div class="col-md-1 lead">
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
           <div class="row">:</div>
         </div>
         <div class="col-md-5 lead">
          <div class="row"><?= $session['nama'] ?></div>
          <div class="row"><?= $session['umur'] ?></div>
          <div class="row"><?= $session['no_telp'] ?></div>
          <div class="row"><?= $session['pendidikan'] ?></div>
          <div class="row"><?= $session['tanggal_tes'] ?></div>
         </div>
       </div>
      </div>
      <div class="card-footer text-muted">
       <a href="<?= base_url(); ?>index.php/user/mulaiSoal/1" class="btn btn-primary">Mulai</a>
      </div>
    </div>
  </div>



  <div class="col-md-2">
     
  </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- mematikan tombol back pada browser -->
<!-- <script type = "text/javascript" >
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script> -->

<?php include 'templates/footer.php'; ?>

<!-- jam realtime dengan javascript -->
  <script>
    window.setTimeout("waktu()", 1000);
   
    function waktu() {
      var waktu = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById("jam").innerHTML = 'Jam ' + waktu.getHours();
      document.getElementById("menit").innerHTML = waktu.getMinutes() + ' Menit';
      document.getElementById("detik").innerHTML = waktu.getSeconds() + ' Detik';
    }
  </script>