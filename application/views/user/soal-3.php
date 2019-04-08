  <div class="card-deck  px-3 py-3 pt-md-5 pb-md-4 mx-auto">
    <!-- timer -->
    <div class="col-md-3" id="timer-posisi">
       <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Timer (Sisa Waktu)</h4>
        </div>
        <div class="card-body">
          <div class="panel-body">
            <div class="text-center">
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
          <h4 class="my-0 font-weight-normal text-center">Test 3 ( Soal Deret Angka )</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url(); ?>index.php/user/simpanJawaban/3/<?= $session['id'] ?>" id="frmSoal" method='POST' > 
           <?php 
            $nomor = 1;
            foreach ($soal as $data) :
            
            ?>
            <div class="row">
              <div class="col-md-12 ">
                <div class="row">
                  <div class="align-text-center col-md-1">
                    <input type="hidden" name="id[]" value="<?= $data['id']; ?>">
                    <h1 class="lead text-center pt-2"><?= $nomor; ?>.</h1>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?= $data['deret_1']; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?= $data['deret_2']; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?= $data['deret_3']; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?= $data['deret_4']; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?= $data['deret_5']; ?></button></div>
                      <div class="col-md-2 text-center"><button type="button" class="btn btn-success"><?= $data['deret_6']; ?></button></div>
                    </div>
                  </div>

                  

                  <div class="col-md-5">
                  <?php
                    $index = array("1");
                    foreach ($index as $value) :
                  ?>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" name="jawaban1[<?= $data['id'];?>]" value="" class="form-control"  placeholder="" autocomplete="off" onkeypress='validate(event)' tabindex="<?= $value ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" name="jawaban2[<?= $data['id'];?>]" value="" class="form-control"  placeholder="" autocomplete="off" onkeypress='validate(event)' tabindex="<?= $value ?>">
                        </div>
                      </div>
                    </div>
                  <?php  endforeach; ?>
                  </div>
               

                  <!-- row -->
                </div>
                <!-- col 12 -->
              </div>
              <!-- row -->
            </div>
            <?php
             $nomor++;
             endforeach;
             ?> 
            
            <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Next">
            </div>
          </form> 
        </div>   
      </div>
    </div>         
  </div>

   <?php include 'templates/footer.php'; ?>

  <!-- fungsi validasi angka dan operator mtk hanya angka tidak abjad  -->
  <script>
    function validate(evt) {
    var theEvent = evt || window.event;

      // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9+-/*]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }
  </script>
  <!-- fungsi validasi angka dan operator mtk -->

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