<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <meta name="author" content="UKPBJ" />
  <meta name="keywords"
  content="ukpbj, tanah, laut, kabupaten, pelaihari, pengadaan, barang, jasas" />
  <meta name="description"
  content="Sebagai pusat informasi dan media akses layanan." />
  <meta name="theme-color" content="#b02928">
  <title>Buku Tamu | UKPBJ Kab. Tanah Laut - Center of Excellence</title>

  <!-- Favicon-->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/ukpbjlogo.png" type="image/x-icon">
  <!-- BS4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- QRCODE SCANNER -->
  <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/tools/instascan/instascan.min.js"></script> -->

  <!-- css font -->
  <link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">

  <style type="text/css">

    video{
      border:1px solid rgba(0,0,0,.1); 
      border-color: gray;
      width: 700px;
      height: 500px;
      /*menghilangkan video*/
      display: none;
    }

    /**/
    #monitor{
      margin:auto;
      position:relative;
      width:700px;
      height:500px;
      border:1px solid rgba(0,0,0,.1);  
    }

    #monitor .scan
    {
      width:100%;
      height:5px;
      background-color:pink;
      position:absolute;
      z-index:9999;
      -moz-animation: scan 2s infinite;
      -webkit-animation: scan 2s infinite;
      animation: scan 2s infinite;
      -webkit-animation-direction: alternate-reverse;
      box-shadow:0px 0px 30px rgba(255,204,102,.5);  
    }

    @-webkit-keyframes scan {
      0%, 100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
      100% {
        -webkit-transform: translateY(450px);
        transform: translateY(490px);
      }
    }

    .font-selamat{
      font-family: 'Sacramento', cursive;'
    }
  </style>
</head>
<body onload="startTime()">
  <?php date_default_timezone_set('Asia/Makassar'); ?>
  <!-- alert success -->
  <?php if ($this->session->flashdata('msg')): ?>
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  <?php endif; ?>

  <div class="container-fluid" >
    <div class="row">
      <!-- pelaihari jam -->
      <div class="col-sm-2" style="background-color: #00a9ff;">
        <div class="text-center">
          <div style="margin-top: 30px;">
            <img
            src="https://image.flaticon.com/icons/svg/684/684908.svg"
            style="width: 30px;" alt="Location Icon">
            <span style="font-size: 30px; color: white; font-weight: bolder">Pelaihari</span>
          </div>
        </div>
        <div class="text-center" style="margin-top: 10px; color: white;">
          <?php

          function hari_ini(){
            $hari = date ("D");

            switch($hari){
              case 'Sun':
              $hari_ini = "Minggu";
              break;

              case 'Mon':     
              $hari_ini = "Senin";
              break;

              case 'Tue':
              $hari_ini = "Selasa";
              break;

              case 'Wed':
              $hari_ini = "Rabu";
              break;

              case 'Thu':
              $hari_ini = "Kamis";
              break;

              case 'Fri':
              $hari_ini = "Jumat";
              break;

              case 'Sat':
              $hari_ini = "Sabtu";
              break;

              default:
              $hari_ini = "Tidak di ketahui";   
              break;
            }

            return $hari_ini;

          }

          function tgl_indo($tanggal){
            $bulan = array (
              1 =>   'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember'
            );
            $pecahkan = explode('-', $tanggal);

              // variabel pecahkan 0 = tahun
              // variabel pecahkan 1 = bulan
              // variabel pecahkan 2 = tanggal

            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
          }
          ?>

          <div style="font-weight: bolder; font-size: 15px;"><?php echo hari_ini() .", "; ?><?php echo tgl_indo(date('Y-m-d')); ?></div>
          <div style="font-weight: bolder; font-size: 40px;" id="txt"></div>
        </div>
      </div>
      <!-- selamat pagi -->
      <div class="col text-center" style="margin-top: 30px; background-color: white;">

        <?php
        $b = time();

        $hour = date("g", $b);
        $m    = date("A", $b);

        if ($m == "AM") {
          if ($hour == 12) {
            echo "<span class='font-selamat' style='font-size: 70px; color: #9901FE;'>Selamat Malam</span>";
          } elseif ($hour < 5) {
            echo "<span class='font-selamat' style='font-size: 70px; color: #9901FE;'>Subuhan Yuk</span>";
          } elseif ($hour > 5) {
            echo "<span class='font-selamat' style='font-size: 70px; color: #9901FE;'>Selamat Pagi</span>";
          }
        }

        elseif ($m == "PM") {
          if ($hour == 12) {
            echo "<span class='font-selamat' style='font-size: 70px; color: #9901FE;'>Selamat Siang</span>";
          } elseif ($hour < 4) {
            echo "<span class='font-selamat' style='font-size: 70px; color: #9901FE;'>Selamat Siang</span>";
          } elseif ($hour > 4) {
            echo "<span class='font-selamat' style='font-size: 70px; color: #9901FE;'>Selamat Sore</span>";
          } elseif ($hour > 6) {
            echo "<span class='font-selamat' style='font-size: 70px; color: #9901FE;'>Selamat Malam</span>";
          }
        }
        ?> 
        <br>
        
        <div style="margin-bottom: 30px; line-height: 0.9;">
          <span style="font-size: 30px; font-weight: bolder; color: #9901FE">SELAMAT DATANG</span>
          <br>
          <span style="font-size: 15px; font-weight: bolder; color: #9901FE;">DI UKPBJ KABUPATEN TANAH LAUT</span>
        </div>
      </div>
      <!-- smartoffice -->
      <div class="col-sm-2 text-center" style="background-color: #F2F2F2;">
        <div style="margin-top: 30px;">
          <img width="100px;" style="margin-bottom: 10px;" src="<?php echo base_url();?>assets/images/ukpbjlogo2.png"><br>
          <img width="200px;" src="<?php echo base_url();?>assets/images/smart.png">
        </div>
      </div>
    </div>
    <div class="row">
      <!-- googleplay -->
      <div class="col-sm-2" style="background-color: #FFFF00;">
        <div style="margin-top: 40px; margin-bottom: 20px;" class="text-center">
          <div><span style="line-height: 0.9; font-weight: bolder; font-size: 18px;">Temukan aplikasi kami<br>UKPBJ TALA<br>di Google Play</span></div>
          <a href="#"><img
            src="https://lh3.googleusercontent.com/cjsqrWQKJQp9RFO7-hJ9AfpKzbUb_Y84vXfjlP0iRHBvladwAfXih984olktDhPnFqyZ0nu9A5jvFwOEQPXzv7hr3ce3QVsLN8kQ2Ao=s0"
            style="width: 150px; margin-top: 10px;" alt="Unduh via Google Play">
          </a>
        </div>
      </div>
      <!-- slider -->
      <div class="col" style="background-color: white;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-50" src="<?php echo base_url();?>assets/images/baner.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-50" src="https://lpse.tanahlautkab.go.id/eproc4/public/images/imgng/mm.49404109-8157-4cc7-9a6f-5336408210b9.WhatsApp%20Image%202019-11-18%20at%2015.48.28.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-50" src="https://lpse.tanahlautkab.go.id/eproc4/public/images/imgng/mm.0e52b733-a3b1-48f7-84f8-28c5db7d630b.ADP.PNG" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- scanakun -->
      <div class="col-sm-2" style="background-color: #F2BF0C;">
        <div style="margin-top: 30px; margin-bottom: 10px;" class="text-center">
          <div >
            <span style="font-weight: bolder; font-size: 20px;">SCAN AKUN</span>
          </div>
          <img
          src="https://image.flaticon.com/icons/svg/964/964456.svg"
          style="width: 100px; margin-top: 10px;" alt="Mobile QRCODE">
          <div style="margin-top: 10px;">
            <span style="font-weight: bolder; font-size: 20px;">DARI APLIKASI<br>ANDROID UKPBJ</span><br>
            <span style="font-size: 13px;">Silahkan dekatkan Kode QR-Code dari layar hp kamu pada alat scanner dibawah monitor ini dan nikmati fasilitas layanan maksimal dari kami.</span>
          </div>
        </div>
      </div>
      <!-- NAMA -->
      <div class="col">
        <div class="row">
          <div class="col text-center" style="padding: 20px; font-size: 20px; color: white; background-color: #0000FE;">
            <div>KABAG. PBJ</div>
            <div>MINA AYU ROSWYDA</div>
          </div>
          <div class="col text-center" style="padding: 20px; font-size: 20px; color: white; background-color: #FE0000;">
            <div>KASUBAG. LPSE</div>
            <div>MAHYUNI HIDAYAT</div>
          </div>
          <div class="col text-center" style="padding: 20px; font-size: 20px; color: white; background-color: #00FFFF;">
            <div>KASUBAG. PBJ</div>
            <div>YULIS SYAIRI</div>
          </div>
          <div class="col text-center" style="padding: 20px; font-size: 20px; color: white; background-color: #FF6600;">
            <div>KASUBAG. PBJ</div>
            <div>MAHRITA RATNA P.</div>
          </div>
        </div>
        <!-- pengumuman -->
        <div class="row">
          <div class="col text-center" style="padding: 25px; font-size: 15px; background-color: white;">
            <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
              <div style="font-size: 20px; color: white; border-radius: 15px;  width: 300px; background-color: #00FF01;">PENGUMUMAN TERBARU</div>
            </div>
            <span style="font-weight: bolder;">Saat ini tim IT LPSE Kab. Tanah Laut sedang mengembangkan sistem aplikasi portal layanan pengadaan berbasis android, cek selengkapnya di portal kami ukpbj.tanahlautkab.go.id</span>
          </div>
        </div>
        <!-- createdby -->
        <div class="row mt-3">
          <div class="col" style="padding: 25px; font-size: 15px; background-color: #333333;">
            <div class="d-flex justify-content-end">
              <div>
                <div style="text-align: right; font-size: 10px; color: white; line-height: 1.5">
                  <span>Created by: Tim IT LPSE TALA</span><br>
                  <span>Powered by: pastitala.org-2020</span><br>
                  <span>Versi Aplikasi: 1.00-202001</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div style="margin-top: 50px;" id="monitor">
    <div class="scan"></div> -->
    <video id="preview"></video>
    <!-- </div> -->

    <!-- hidden form utk auth -->
    <form id="formnik" action="<?php echo base_url('bukutamu/authqr') ?>" method="POST">
      <input type="hidden" name="data" id="nik">
      <!-- <button type="submit" class="btn btn-primary btn-lg btn-block"><span style="font-weight:bold;">KIRIM</span></button> -->
    </form>

    <audio id="myAudio">
      <!-- <source src="horse.ogg" type="audio/ogg"> -->
        <source src="<?php echo base_url();?>assets/sound/audio.mpeg" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>

        <script type="text/javascript">
          let scanner = new Instascan.Scanner({
           video: document.getElementById('preview') 
         });

    // mainnya disini addlistener
    scanner.addListener('scan', function (content) {
      // alert(content);

      //play audio
      var x = document.getElementById("myAudio"); 
      x.play();

      // input to value
      document.getElementById("nik").value = content;

      // delay 3 detik, kemudian submit form
      setTimeout(function(){ 
        document.getElementById('formnik').submit();
      }, 3000);
    });

    Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
  </script>

  <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>

<!-- POPPER BS4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- BS4 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>