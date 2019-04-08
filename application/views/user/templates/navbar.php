<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm" id="navbar-posisi">
  <h5 class="my-0 ml-md-4 mr-md-auto font-weight-normal"><img src="<?= base_url(); ?>assets/img/logo_arwana.png" alt="" width="" height="20px"> &nbsp;&nbsp;PT. Arwana Citramulia Tbk </h5>
  <!-- Arwana Citramulia  -->
  <!-- <img src="assets/img/arna-logo.png" alt="" width="120px" height="80px"> -->


  <!-- <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Beranda</a>
    <a class="p-2 text-dark" href="#">Registrasi</a>
    <a class="p-2 text-dark" href="#">Pengumuman</a>
    <a class="p-2 text-dark" href="#">Q & A</a>
  </nav> -->
  <div class="mr-md-4">
    &nbsp;
    User : <?= $session['nama'] ?> &nbsp;
    <!-- <a class="btn btn-outline-primary" href="#"><?= date('d:M:Y') ?></a>&nbsp; -->
    <a class="p-2 text-dark" href="<?= base_url();  ?>index.php/login/logout/2">Logout</a>
  </div>
</div>