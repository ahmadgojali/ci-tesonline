  <div class="card-deck  px-3 py-3 pt-md-5 pb-md-4 mx-auto" id="posisi">
    <!-- timer -->
     <div class="col-md-3" id="timer-posisi">
       <div class="card mb-4 shadow-sm">
        <!-- <?= $timer; ?> -->
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Timer (Sisa Waktu)</h4>
        </div>
        <div class="card-body">
          <div class="panel-body">
            <div class="text-center">
              <div id="timer"></div>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
       
    </div>
     <!-- soal -->
    <div class="col-md-9" id="soal-posisi"> 
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Test 1 ( Soal Matematika Dasar )</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url(); ?>index.php/user/simpanJawaban/1/<?= $session['id'] ?>" id="frmSoal" method='POST' > 
            
            <?php
             $nomor = 1;
             foreach ($soal as $data) :
            ?>
    
              <div class="row">
                <div class="col-md-12">
                  <table>
                    <tr>
                      <td class="align-text-top">
                        <input type="hidden" name="id[]" value="<?= $data['id']; ?>">
                        <h1 class="lead pl-4"><?= $nomor; ?>. </h1>
                      </td>
                      <td>
                        <h1 class="lead pl-3 pr-3"><?= $data['soal'] ?></h1>
                      </td>
                    </tr>
                  </table>

                    <tr>
                      <div class="form-group ml-md-2 pl-md-5 pr-3 col-md-4">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="text" name="jawaban[<?= $data['id']; ?>]" value="" class="form-control" id="dengan-rupiah" placeholder="Jawab disini" autocomplete="off" onkeypress="validate(event)">
                        
                      </div>
                    </tr>
                  </div>
                </div>
               <?php
               $nomor++;
               endforeach;
               ?> 
               <!-- <?php var_dump($id) ?>
               <?php var_dump($soal) ?>
               <?php var_dump($pilihan_a) ?>
               <?php var_dump($pilihan_b) ?>
               <?php var_dump($pilihan_c) ?>
               <?php var_dump($pilihan_d) ?> -->

            <!-- <input type="hidden" id="jmrows" value="<?=$num_rows?>">              -->
            <div class="float-right mr-md-5 mb-3">
               <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Next">
            </div>
          </form>   
        </div>
      </div>
    </div>
  </div>

 <?php include 'templates/footer.php'; ?>

 <!-- fungsi validasi angka dan operator mtk -->
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
    var regex = /[0-9+-/*ABCDEabcde]|\./;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>
<!-- fungsi validasi angka dan operator mtk -->

<!-- mematikan tombol back pada browser -->
<!-- <script type = "text/javascript" >
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script> -->


<!-- Script Wizard -->
<!--     <script type="text/javascript">
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('#rootwizard').find('.bar').css({width:$percent+'%'});
      }});
      $('#rootwizard .finish').click(function() {
        
        $('#rootwizard').find("a[href*='tab1']").trigger('click');
      });
    });

    </script> -->

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

</body>
</html>
  