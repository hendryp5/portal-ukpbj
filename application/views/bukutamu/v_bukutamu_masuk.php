<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
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
  <!-- css font -->
  <link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">
  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
  </script>

  <style type="text/css">
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
  }

  .font-selamat{
      font-family: 'Sacramento', cursive;'
    }

  input[type="checkbox"]#checkbox1:checked + span {
      border-color: red;
      padding: 15px;
      border-radius: 3px;
      border: 1px solid red;
      margin-left: 5px;
  }

  input[type="checkbox"]#checkbox2:checked + span {
      border-color: red;
      padding: 15px;
      border-radius: 3px;
      border: 1px solid red;
      margin-left: 5px;
  }

  input[type="checkbox"]#checkbox3:checked + span {
      border-color: red;
      padding: 15px;
      border-radius: 3px;
      border: 1px solid red;
      margin-left: 5px;
  }

  input[type="checkbox"]#checkbox4:checked + span {
      border-color: red;
      padding: 15px;
      border-radius: 3px;
      border: 1px solid red;
      margin-left: 5px;
  }

  .belakang{
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: 1;
    }

    img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
  }
</style>

</head>
<body>
<?php date_default_timezone_set('Asia/Makassar'); ?>
  <!-- preloader -->
  <div class="preloader">
    <div class="loading">
      <img src="<?php echo base_url();?>assets/images/ripple.gif" width="100px">
    </div>
  </div>

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid p-0" style="background-color: #F2F2F2;">
    <!-- point -->
    <div class="belakang">
      <div class="row d-flex justify-content-between mr-0">
      <div class="col-sm-2 ml-5 text-center" style="background-color: #FFFF00; width: 1300px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
          <div style="padding: 10px;">
              <span style="font-weight: bolder; font-size: 20px;">Point Anda</span>
              <span style="display: block; font-weight: bolder; font-size: 40px;">1000 <img src="https://image.flaticon.com/icons/svg/336/336007.svg" width="30px;"></span>
          </div>
      </div>

      <div class="col-sm-2 text-center" >
          <div style="padding: 10px;">
              <?php 
                $datalengkap = $this->session->userdata('datalengkap');

                if($datalengkap == 'Y'){
                  echo '<span data-toggle="tooltip" title="Akun anda sudah verified!" style="color:green;"><img width="50px;" src="https://cdn2.iconfinder.com/data/icons/internet-download-manager-2/64/11_Completed_check_tick_verified_approved-512.png"></span>
                <span style="display: block; font-weight: bolder; font-size: 20px; color: green;">Verified User</span>';
                }else{
                  echo '<span data-toggle="tooltip" title="Akun anda belum verified!" style="color:red;"><img width="50px;" src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-512.png"></span>
                <span style="display: block; font-weight: bolder; font-size: 20px; color: red;">Not Verified</span>';
                }
                ?>
          </div>
      </div>
      </div>
    </div>
  <div class="container text-center" style="padding-top: 30px; padding-bottom: 30px;">
    <!-- photo -->
    <img style="border-radius: 4px; border: 1px solid #ddd; padding: 5px;" width="100px" src="<?php echo base_url();?>assets/upload/file_pengguna/penyedia/photo/<?php echo $this->session->userdata('user_photo');?>">
    
    <h1 class="display-4">
      <?php
        $b = time();

        $hour = date("g", $b);
        $m    = date("A", $b);

        if ($m == "AM") {
          if ($hour == 12) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Malam</span>";
          } elseif ($hour <= 3) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Malam</span>";
          } elseif ($hour <= 5) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Subuhan</span>";
          } elseif ($hour > 5) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Pagi</span>";
          }
        }

        elseif ($m == "PM") {
          if ($hour == 12) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Siang</span>";
          } elseif ($hour <= 3) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Siang</span>";
          } elseif ($hour < 6) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Sore</span>";
          } elseif ($hour >= 6) {
            echo "<span class='font-selamat' style='font-size: 85px; color: black; line-height: 0.9;'>Selamat Malam</span>";
          } else {
            echo "tidak masuk jam.";
          }
        }

        //echo $hour;
        //echo $m;
        ?> 
    </h1>
    <span style="font-weight: bolder; color: black; font-size: 35px;">
      <?php 
      $jenis_kelamin = $this->session->userdata('jenis_kelamin');
      
      if($jenis_kelamin == 'Laki-Laki'){
          echo 'Bapak';
      }else{
          echo 'Ibu';
      }
      ?>
      <?php echo $this->session->userdata('username');?></span>
  </div>
</div>

<div class="d-flex justify-content-center text-center" style="margin-top: -55px">
 <div style="padding: 10px; background-color: yellow; border-radius: 10px; width: 300px; font-weight: bolder; font-size: 15px; color: blue; border: 2px solid blue;">Apa yang bisa kami bantu?
 </div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col">
      <!-- tablist -->
     <nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-konsultasi-tab" data-toggle="tab" href="#nav-konsultasi" role="tab" aria-controls="nav-konsultasi" aria-selected="true"><span style="padding: 20px;">KONSULTASI</span></a>
        <a class="nav-item nav-link" id="nav-koordinasi-tab" data-toggle="tab" href="#nav-koordinasi" role="tab" aria-controls="nav-koordinasi" aria-selected="false"><span style="padding: 20px;">KOORDINASI</span></a>
        <a class="nav-item nav-link" id="nav-registrasi-tab" data-toggle="tab" href="#nav-registrasi" role="tab" aria-controls="nav-registrasi" aria-selected="false"><span style="padding: 20px;">REGISTRASI</span></a>
        <a class="nav-item nav-link" id="nav-fasilitasi-tab" data-toggle="tab" href="#nav-fasilitasi" role="tab" aria-controls="nav-fasilitasi" aria-selected="false"><span style="padding: 20px;">FASILITASI</span></a>
      </div>
    </nav>
    <!-- tabcontent -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-konsultasi" role="tabpanel" aria-labelledby="nav-konsultasi-tab">
        <div class="col mt-3 text-center">
          <div class="mt-2">
            <div class="row">
              <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox1" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Perihal Aplikasi SPSE</span>
                  </a>
                  </label>
              </div>
              <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox1" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Perihal Aplikasi SIRUP</span>
                  </a>
                  </label>
              </div>
              <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox1" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Perihal Aplikasi SIKAP</span>
                  </a>
                  </label>
              </div>
            </div>
            <div class="row">
              <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox1" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Perihal Aplikasi E-Katalog</span>
                  </a>
                  </label>
              </div>
              <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox1" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Perihal Regulasi PBJ</span>
                  </a>
                  </label>
              </div>
              <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox1" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Perihal Proses PBJ</span>
                  </a>
                  </label>
              </div>
            </div>

            <script type="text/javascript">
              function onlyOne(checkbox) {
                  var checkboxes = document.getElementsByName('check')
                  checkboxes.forEach((item) => {
                      if (item !== checkbox) item.checked = false
                  })
              }
            </script>

          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-koordinasi" role="tabpanel" aria-labelledby="nav-koordinasi-tab">
        <div class="col mt-3 text-center">
          <div class="mt-2">
            <div class="row">
                <div class="col">
                    <label>
                    <a class="btn">
                    <input value="Perihal Aplikasi SPSE" id="checkbox2" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                    <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Kunjungan Kerja</span>
                    </a>
                    </label>
                </div>
                <div class="col">
                    <label>
                    <a class="btn">
                    <input value="Perihal Aplikasi SPSE" id="checkbox2" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                    <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Rapat</span>
                    </a>
                    </label>
                </div>
                <div class="col">
                    <label>
                    <a class="btn">
                    <input value="Perihal Aplikasi SPSE" id="checkbox2" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                    <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Klarifikasi & Pembuktian</span>
                    </a>
                    </label>
                </div>
            </div>

            <script type="text/javascript">
              function onlyOne(checkbox) {
                  var checkboxes = document.getElementsByName('check')
                  checkboxes.forEach((item) => {
                      if (item !== checkbox) item.checked = false
                  })
              }
            </script>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-registrasi" role="tabpanel" aria-labelledby="nav-registrasi-tab">
        <div class="col mt-3 text-center">
          <div class="mt-2">
            <div class="row">
                <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox3" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Akun Penyedia SPSE</span>
                  </a>
                  </label>
                </div>
                <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox3" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Akun SiKAP</span>
                  </a>
                  </label>
                </div>
                <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox3" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Akun PA/KPA</span>
                  </a>
                  </label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox3" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Akun PPK</span>
                  </a>
                  </label>
                </div>
                <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox3" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Akun Pejabat Pengadaan</span>
                  </a>
                  </label>
                </div>
                <div class="col">
                  <label>
                  <a class="btn">
                  <input value="Perihal Aplikasi SPSE" id="checkbox3" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                  <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Akun Sosialita</span>
                  </a>
                  </label>
                </div>
            </div>

            <script type="text/javascript">
              function onlyOne(checkbox) {
                  var checkboxes = document.getElementsByName('check')
                  checkboxes.forEach((item) => {
                      if (item !== checkbox) item.checked = false
                  })
              }
            </script>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-fasilitasi" role="tabpanel" aria-labelledby="nav-fasilitasi-tab">
        <div class="col mt-3 text-center">
          <div class="mt-2">
            <div class="row">
                <div class="col">
                    <label>
                    <a class="btn">
                    <input value="Perihal Aplikasi SPSE" id="checkbox4" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                    <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Penggunaan Bidding Room</span>
                    </a>
                    </label>
                </div>
                <div class="col">
                    <label>
                    <a class="btn">
                    <input value="Perihal Aplikasi SPSE" id="checkbox4" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                    <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Penggunaan Ruang Pelatihan</span>
                    </a>
                    </label>
                </div>
                <div class="col">
                    <label>
                    <a class="btn">
                    <input value="Perihal Aplikasi SPSE" id="checkbox4" type="checkbox" name="check" onclick="onlyOne(this)" hidden>
                    <span style="color: black; margin-left: 5px; padding: 15px; border-radius: 1px; margin-left: 5px;"> Akses Internet Hotspot</span>
                    </a>
                    </label>
                </div>
            </div>
            <script type="text/javascript">
              function onlyOne(checkbox) {
                  var checkboxes = document.getElementsByName('check')
                  checkboxes.forEach((item) => {
                      if (item !== checkbox) item.checked = false
                  })
              }
            </script>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div></div>
<hr>
<div class="row mt-5">
    <div class="col text-center">
        <span style="font-weight: bolder; color: black; font-size: 15px;"> BERTEMU DENGAN : 
        <select style="width: 500px; height: 40px;" >
        <option>--- PILIH ---</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </span>

    <div class="mt-4">
      <a data-toggle="modal" data-target="#exampleModal" class="btn btn-light">BATAL</a>
      <a href="" class="btn btn-danger">PROSES SEKARANG</a>
    </div>
    </div>
</div>
</div>

<!-- Modal Logout-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk membatalkan proses?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <a href="<?php echo site_url();?>bukutamu/logout" class="btn btn-primary btn-block">Saya Yakin.</a>
        </div>
      </div>
    </div>
  </div>

<!-- <?php echo $this->session->userdata('datalengkap');?> -->


<!-- Selamat Datang <?php echo $this->session->userdata('username');?><br>
            EMAIL: <?php echo $this->session->userdata('email');?><br>
            JENIS KELAMIN: <?php echo $this->session->userdata('jenis_kelamin');?><br>
            LEVEL: <?php echo $this->session->userdata('level');?><br>
            HP: <?php echo $this->session->userdata('hp');?><br>
            ID USER: <?php echo $this->session->userdata('id_user');?><br>
            ALAMAT: <?php echo $this->session->userdata('alamat');?><br>
            DATALENGKAP: <?php echo $this->session->userdata('datalengkap');?><br>
            USER PHOTO: <?php echo $this->session->userdata('user_photo');?><br>
            NO KTP: <?php echo $this->session->userdata('no_ktp');?><br>
            LOGGED IN: <?php echo $this->session->userdata('logged_in');?><br> -->
  

  <!-- POPPER BS4 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- BS4 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>