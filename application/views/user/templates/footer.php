  <!-- <div class="container"> -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md text-center">
          <img src="<?= base_url();  ?>assets/img/arna-logo.png" alt="" width="30" height="30">
          <!-- <img class="mb-2" src="<?= base_url();  ?>assets/img/logo.png" alt="" width="30" height="30"> -->
          <h6 class="d-block mb-3 text-muted">Copyright © 2019 PT Arwana Citramulia Tbk. All Rights Reserved.</h6>
        </div>
      </div>
    </footer>
  <!-- container end -->
  </div>
</div>

<!-- Scroll to Top Button-->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-lg"></i>
  <span class="glyphicon glyphicon-chevron-up"></span>
</a>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
 <script src="<?= base_url();  ?>assets/dist/jquery-3.3.1.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
<script src="<?= base_url();  ?>assets/dist/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- <script src="<?= base_url();  ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="<?= base_url();  ?>assets/dist/bootstrap/js/bootstrap.min.js"></script>

<script src="<?= base_url();  ?>assets/dist/jquery.bootstrap.wizard.js"></script>

<!-- icheck -->
<script src="<?= base_url();  ?>assets/dist/icheck/js/icheck.js?v=1.0.2"></script>
  <script>
    $(document).ready(function(){
      $('.icek').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '20%' // optional
      });
    });
  </script>
  <!-- icheck -->

  <!-- back-to-top -->
  <script>
  $(document).ready(function(){
   $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#back-to-top').fadeIn();
          } else {
              $('#back-to-top').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });
      
      $('#back-to-top').tooltip('show');

  });
  </script>
  <!-- back-to-top -->

<!-- menampilkan waktu realtime dengan ajax -->
<!--   <script>
  // Function ini dijalankan ketika Halaman ini dibuka pada browser
  $(function(){
    setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
  });
   
  //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
  function timestamp() {
    $.ajax({
      url: '<?= base_url(); ?>index.php/user/ajaxJamRealtime',
      success: function(data) {
      $('#timer').html(data);
      },
    });
  }
  </script> -->

  <!-- jam realtime dengan javascript -->
  <!-- <script>
    window.setTimeout("waktu()", 1000);
   
    function waktu() {
      var waktu = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById("jam").innerHTML = 'Jam ' + waktu.getHours();
      document.getElementById("menit").innerHTML = waktu.getMinutes() + ' Menit';
      document.getElementById("detik").innerHTML = waktu.getSeconds() + ' Detik';
    }
  </script> -->

  <!-- fungsi validasi angka dan operator mtk hanya angka tidak abjad  -->
  <!-- <script>
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
  </script> -->
  <!-- fungsi validasi angka dan operator mtk -->

  <!-- mematikan tombol back pada browser -->
  <!-- <script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
  </script> -->

  <!-- hide/show button -->
  <!-- <script>
     $(document).ready(function() {
    
       $("#tombol2").click(function() {
         // $("#button2").disabled = false;
         $("#button2").show();
       })
    
       $("#tombol_show").click(function() {
         $("#box").show();
       })
    
     });

  </script> -->
  <!-- hide/show button -->




  
