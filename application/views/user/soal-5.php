  <div class="card-deck  px-3 py-3 pt-md-5 pb-md-4 mx-auto">
    <!-- timer -->
     <div class="col-md-3" id="timer-posisi">
       <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Timer (Sisa Waktu)</h4>
        </div>
        <div class="card-body">
          <div class="panel-body">
            <div align="left" style="padding-left: 5px; padding-right:1px;">
              <div id='timer'></div>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      
    </div>
    <!-- soal -->
    <div class="col-md-9">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Tes 5 ( Soal Bahasa Inggris ) </h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url(); ?>index.php/user/simpanJawaban/5/<?= $session['id'] ?>" id="frmSoal" method='POST' >
          <?php 
            $nomor = 1;
            foreach ($soal as $data) :

           ?>
            
            <div class="row mr-md-5 ">
              <div class="col-md-12 ml-5 ">
             
                <!-- pernyataan -->
                <div class="row pb-3 pt-3">
                  <!-- isi pernyataan -->
                  <h1 class="lead ml-4 mr-5 text-justify"><?= $data['pernyataan']?></h1>
                </div>

                <!-- no dan soal -->
                <table>
                  <tr>
                    <td class="align-text-top">
                      <input type="hidden" name="id[]" value="<?= $data['id']; ?>">
                      <!-- <input type="hidden" name="jawaban[<?php echo $id; ?>]" value="<?php echo $jawaban; ?>"> -->
                      <h1 class="lead"><?= $nomor; ?>. &nbsp;&nbsp;</h1>
                    </td>
                    <td>
                      <h1 class="lead text-justify"><?= $data['soal']; ?></h1>
                    </td>
                  </tr>
                </table>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?= $data['id']; ?>]" value="A" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;A. &nbsp;<?= $data['pilihan_a']; ?></span>

                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?= $data['id']; ?>]" value="B" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;B. &nbsp;<?= $data['pilihan_b']; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?= $data['id']; ?>]" value="C" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;C. &nbsp;<?= $data['pilihan_c']; ?></span>
                    </label>
                  </div>
                  </tr>

                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?= $data['id']; ?>]" value="D" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;D. &nbsp;<?= $data['pilihan_d']; ?></span>
                    </label>
                  </div>
                  </tr>

                  <?php if($data['pilihan_e'] <> '') : ?>
                  <tr>
                  <div class="ml-4 mr-5 text-justify">
                    <label>
                      <input type="radio" name="pilihan[<?= $data['id']; ?>]" value="E" class="icek">
                      <span class="label-text lead">&nbsp;&nbsp;&nbsp;&nbsp;E. &nbsp;<?= $data['pilihan_e']; ?></span>
                    </label>
                  </div>
                  </tr>
                  <?php endif; ?>
              
              </div>
            </div>
            <?php 
              $nomor++;
               endforeach;
            ?>
             
              
            <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Finish">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include 'templates/footer.php'; ?>

  <script type="text/javascript">

    $(document).ready(function() {
        /** Membuat Waktu Mulai Hitung Mundur Dengan 
            * var detik;
            * var menit;
            * var jam;
        */
        
        var detik   = <?= $detik; ?>;
        var menit   = <?= $menit; ?>;
        var jam     = <?= $jam; ?>;
              
        /**
           * Membuat function hitung() sebagai Penghitungan Waktu
        */
        function hitung() {
            /** setTimout(hitung, 1000) digunakan untuk 
                 * mengulang atau merefresh halaman selama 1000 (1 detik) 
            */
            setTimeout(hitung,1000);

            /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
            if(menit < 2 && jam == 0){
                var peringatan = 'style="color:red"';
            };

            /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
            $('#timer').html(
                '<h4 align="center"'+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h4><hr>'
            );

            /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
            detik --;

            /** Jika var detik < 0
                * var detik akan dikembalikan ke 59
                * Menit akan Berkurang 1
            */
            if(detik < 0) {
                detik = 59;
                menit --;

               /** Jika menit < 0
                    * Maka menit akan dikembali ke 59
                    * Jam akan Berkurang 1
                */
                if(menit < 0) {
                    menit = 59;
                    jam --;

                    /** Jika var jam < 0
                        * clearInterval() Memberhentikan Interval dan submit secara otomatis
                    */
                         
                    if(jam < 0) { 
                        clearInterval(hitung); 
                        /** Variable yang digunakan untuk submit secara otomatis di Form */
                        var frmSoal = document.getElementById("frmSoal"); 
                       // alert('Maaf, Waktu pengerjaan untuk soal tes ke-1 ini telah habis, lanjut ke tes berikutnya.');
                        frmSoal.submit(); 
                    } 
                } 
            } 
        }           
        /** Menjalankan Function Hitung Waktu Mundur */
        hitung();
    });
  
  </script>
