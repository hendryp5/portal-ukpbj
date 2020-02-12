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
	<title>Registrasi Akun | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/ukpbjlogo.png" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
		type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo base_url(); ?>assets/tools/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url(); ?>assets/tools/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url(); ?>assets/tools/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url(); ?>assets/tools/css/style.css" rel="stylesheet">

	<!-- SWEET ALERT 2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<!-- ANIMATEJS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo base_url(); ?>assets/tools/css/themes/all-themes.css" rel="stylesheet" />

	<!-- ICON FONTAWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<style>
	.field-icon {
	float: center;
	margin-left: -25px;
	margin-top: -25px;
	position: relative;
	z-index: 2;
	}

	.container{
	padding-top:50px;
	margin: auto;
	}

	body {
	background: url(<?php echo base_url();?>assets/images/bg_hexagonwhite.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	}
	</style>
</head>

<body class="login-page animated fadeIn slow">
	<!-- BEGIN ALERT SUKSES INPUT DATA -->
		<?php if ($this->session->flashdata('success')): ?>
		<!-- <div class="alert alert-success animated fadeIn slow" role="alert"> -->
		<!-- <?php echo $this->session->flashdata('success'); ?> -->
		<!-- SWEETALERT -->
		<script>
			Swal.fire(
				'Pendaftaran Akun Berhasil!',
				'Silahkan login dengan Email dan Password yang sudah Anda daftarkan, jangan lupa lengkapi Data Profile anda agar mendapat status akun terverifikasi.',
				'success'
			)
		</script>
		<!-- </div> -->
		<?php endif; ?>
		<!-- END ALERT SUKSES INPUT DATA -->

	<div class="login-box">
		<div class="card">
			<br>
			<div class="logo">
			<div style="text-align:center;">
				<img src="<?php echo base_url(); ?>assets/images/ukpbjlogo2.png" width="33%">
			</div>
			<a style="color:black;"><b>Portal U<span style="color: #DA3231;">K</span>PBJ</b></a>
			<div style="margin-bottom:0px; text-align:center; font-weight:bold; color: black;">Single
							Sign-On (SSO)
							System</div>
		</div>
			<div class="body">
				<hr>
				<!-- FORM HERE -->
				<form enctype="multipart/form-data" action="<?php base_url('register') ?>" id="sign_up" method="POST"
					onsubmit="if(document.getElementById('terms').checked) { return true; } else { alert('Pastikan anda telah mencentang kolom disamping.'); return false; }">
					<div class="msg">
						<h4>Registrasi Akun</h4>
					</div>
					<div class="input-group">
						<div style=" border-style:solid; border-width: 1px;" class="align-center">
							<span style="font-size:11px; font-weight:bolder;">Mendaftar Sebagai</span><br>

							<!-- user_level -->
							<input type="radio" id="radio_30" class="with-gap radio-col-red" name="user_level"
								value="PENYEDIA" required />
							<label for="radio_30"
								title="Mendaftar sebagai Penyedia (Pemilik CV, PT, Dll.)">Penyedia</label>&nbsp;&nbsp;&nbsp;

							<!-- user_level -->
							<input type="radio" id="radio_31" class="with-gap radio-col-red" name="user_level"
								value="NONPENYEDIA" />
							<label for="radio_31"
								title="Mendaftar sebagai Non-Penyedia (PA, KPA, PP, POKJA, STAFF, Peserta Ujian, Dll.)">Non-Penyedia</label>

						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">account_box</i>
						</span>
						<div class="form-line">
							<!-- user_nama -->
							<input type="text" class="form-control" name="user_nama" placeholder="Nama Lengkap"
								required>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">filter_vintage</i>
						</span>
						<div class="form-line">
							<!-- jenis_kelamin -->
							<input type="radio" id="radio_laki" class="with-gap radio-col-red" name="jenis_kelamin" value="Laki-Laki" required />
							<label for="radio_laki"
								title="Anda memilih jenis kelamin laki-laki.">Laki-Laki</label>
							<!--  -->
							<input type="radio" id="radio_perempuan" class="with-gap radio-col-red" name="jenis_kelamin" value="Perempuan" />
							<label for="radio_perempuan"
								title="Anda memilih jenis kelamin perempuan.">Perempuan</label>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">email</i>
						</span>
						<div class="form-line">
							<!-- user_email -->
							<input oninput="cekusername()" id="user_email" type="email" autocorrect="off" autocapitalize="none"
								autocomplete="off" class="form-control" name="user_email" placeholder="Email" required>
						</div>
						<div class="pesan"></div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
						<div class="form-line">
							<!-- user_password -->
							<input id="password" type="password" autocorrect="off" autocapitalize="none" autocomplete="off"
								class="form-control" name="user_password" placeholder="Password" required>
								<!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
						<div class="form-line">
							<!-- confirm_password -->
							<input id="confirm_password" type="password" autocorrect="off" autocapitalize="none" autocomplete="off"
								class="form-control"  placeholder="Ulangi Password" required>
								<!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>								 -->
						</div>
						<span style="font-size:13px;" id='message'></span>
					</div>
							<!-- user_hp -->
							<input type="hidden" name="user_hp" placeholder="Nomor Handphone" value="-"
								required>
							<!-- user_alamat -->
							<input type="hidden" name="user_alamat"
								placeholder="Alamat Lengkap Sesuai Kartu Identitas" value="-" required>
					<div class="form-group">
						<!-- user_kebijakan -->
						<input type="checkbox" name="user_kebijakan" id="terms" value="Ya"
							class="filled-in chk-col-red">
						<label for="terms" class="align-justify">Dengan ini saya mendaftarkan akun di Portal UKPBJ dengan data yang sebenar-benarnya.</label>
					</div>

					<button id="submitregister" onclick="myFunction()" class="btn btn-block btn-lg bg-red waves-effect" name="Submit"
						type="submit">DAFTAR</button>
				</form>
				<div class="m-t-25 m-b--5 align-center">
					<hr>
					<a href="main">Kembali ke Halaman Login.</a>
				</div>
				<!-- END FORM -->
			</div>
		</div>
	</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/node-waves/waves.js"></script>

	<!-- Validation Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-validation/jquery.validate.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/examples/sign-in.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/demo.js"></script>
	
	<script>
	// show password
	$(".toggle-password").click(function() {
	$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $($(this).attr("toggle"));
	if (input.attr("type") == "password") {
	input.attr("type", "text");
	} else {
	input.attr("type", "password");
	}
	});

	// validasi text
	$("form input[type=text]").on("change invalid", function() {
    var textfield = $(this).get(0);
    
    // hapus dulu pesan yang sudah ada
    textfield.setCustomValidity("");
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity("Tidak boleh kosong!");  
    }
	});

	// validasi password
	$("form input[type=password]").on("change invalid", function() {
    var textfield = $(this).get(0);
    
    // hapus dulu pesan yang sudah ada
    textfield.setCustomValidity("");
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity("Tidak boleh kosong!");  
    }
	});

	// validasi confirmpassword
	$('#password, #confirm_password').on('keyup', function () {
		if ($('#password').val() == $('#confirm_password').val()) {
			$('#message').html('Password Sama ✔').css('color', 'green');
			// document.getElementById('submitperusahaan').disabled = false;
		} else {
			$('#message').html('Password Tidak Sama!').css('color', 'red');
			// document.getElementById('submitperusahaan').disabled = true;
		}
	});

	// validasi email daftar
	var user_id = "";
	var cekusername = function(){
	var user_id = $("input[name=user_email]").val();
													
		if(user_id!=""){
			$('.pesan').html("Sedang mencari....");
			$.ajax({
			url: "<?php echo site_url('checkuserid');?>",
			type: 'GET',
			data: {user_id : user_id},
										
			success: function(data) {  
			$('.pesan').html('');
			if(data=="1"){
			$('.pesan').html('<h5 style="font-size:13px" class="text-danger"> Email: <b>'+user_id+'</b> sudah terdaftar. </h5>');
			document.getElementById('submitregister').disabled = true;
			// location.reload();
		}else{
			$('.pesan').html('<h5 style="font-size:13px" class="text-success"> Email: <b>'+user_id+'</b> tersedia ✔ </h5>');
			document.getElementById('submitregister').disabled = false;
			}
		},

		error: function(e) {
		$('.pesan').html('Ada gangguan koneksi !');
		}
		});
													
		}
	}
	</script>

</body>

</html>
