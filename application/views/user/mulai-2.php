<?php include 'templates/time.php'; ?>
<!-- <div class="float-right mt-3 mr-5">
  <a class="btn btn-outline-primary" href="#" id="timestamp"></a>
</div>
 -->
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
       Petunjuk Pengerjaan Tes 2
      </div>
      <div class="card-body">
       <p class="lead">Test berikut adalah soal hubungan kata. <br> Tugas anda adalah mencari kata keempat yang hilang. <br> Caranya Anda harus menemukan dulu hubungan kata pertama dan kata kedua. <br> Waktu pengerjaan <b>6 menit</b><br> Kerjakan secepat dan semaksimal mungkin sebelum waktunya selesai.</p>
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
              <h4 class="my-0 font-weight-normal text-center">Tes 2 ( Soal Hubungan Kata )</h4>
            </div>
            <div class="card-body">
              <form action="" id="frmSoal" method='POST' > 
                <div class="row">
                  <div class="col-md-12 ml-5">
                    <table>
                      <tr>
                        <td class="align-text-top">
                          <!-- <input type="hidden" name="id[]" value="<?php echo $id; ?>"> -->
                          <!-- <input type="hidden" name="jawaban[<?php echo $id; ?>]" value="<?php echo $jawaban; ?>"> -->
                          <h1 class="lead">1. &nbsp;&nbsp;</h1>
                        </td>
                        <td>
                          <h1 class="lead">Mawar : Merah = Melati :</h1>
                        </td>
                      </tr>
                    </table>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="A" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;Putih</span>

                        </label>
                      </div>
                      </tr>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="B" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;Hijau</span>
                        </label>
                      </div>
                      </tr>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="C" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;Biru</span>
                        </label>
                      </div>
                      </tr>

                      <tr>
                      <div class="ml-4">
                        <label>
                          <input type="radio" name="jawaban" value="D" class="icek">
                          <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;Kuning</span>
                        </label>
                      </div>
                      </tr>
                  </div>
                </div>
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