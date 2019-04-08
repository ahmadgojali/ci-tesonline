

    $(document).ready(function() {
        /** Membuat Waktu Mulai Hitung Mundur Dengan 
            * var detik;
            * var menit;
            * var jam;
        */
        // var detik   = <?= $detik; ?>;
        // var menit   = <?= $menit; ?>;
        // var jam     = <?= $jam; ?>;

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

