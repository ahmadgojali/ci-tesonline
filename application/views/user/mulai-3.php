<?php include 'templates/time.php'; ?>
<!-- <div class="float-right mt-3 mr-5">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div> -->

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4"><?= $judul ?></h1>
  <p class="lead">Selamat Datang di Sistem Recruitment Online PT Arwana Citramulia Tbk </p>
</div>

<div class="row">
  <div class="col-md-2">
     
  </div>

  <div class="col-8">
    <?= @$alert; ?>
    <div class="card text-center">
      <div class="card-header lead">
       Petunjuk Pengerjaan Tes 3
      </div>
      <div class="card-body">
         <p class="lead">Test ketiga adalah soal deret angka. <br> Tugas Anda adalah meneruskan deret angka yang ada. <br> Caranya Anda harus menemukan dulu pola yang terbentuk dari angka - angka sebelumnya.<br> Anda tidak diperkenankan untuk mengunakan alat bantu hitung digital seperti kalkulator, Hp dll. <br> Waktu pengerjaan <b>9 menit</b><br> Kerjakan secepat dan semaksimal mungkin sebelum waktunya selesai.</p>
      </div>
      <div class="card-footer text-muted">
       <?= @$tombol; ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Latihan</button>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Latihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- soal -->
      <div class="col-md-12">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-center"> Test 3 ( Soal Deret Angka )</h4>
          </div>
          <div class="card-body">
            <form action="" method='POST' > 
            
            <div class="row">
              <div class="col-md-12 ">
                <div class="row">
                  <div class="align-text-center col-md-1">
                    <!-- <input type="hidden" name="id[]" value="<?php echo $id; ?>"> -->
                    <h1 class="lead text-center pt-2">1.</h1>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1</button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success">2</button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success">3</button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success">4</button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success">5</button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success">6</button></div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text"  onkeypress='validate(event)' name="jawaban1" value="" class="form-control"  placeholder="" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text"  onkeypress='validate(event)' name="jawaban2" value="" class="form-control"  placeholder="" autocomplete="off">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- row -->
                </div>
                <!-- col 12 -->
              </div>
              <!-- row -->
            </div><br>
            <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="latihan" id="submit" class="btn btn-success" value="Submit">
            </div>
          </form> 
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary disabled">Mulai</button> -->
      </div>
    </div>
  </div>
</div>

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