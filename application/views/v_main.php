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
	<title>Portal | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
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

	<!-- ICON FONTAWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<style>
		.separator {
			display: flex;
			align-items: center;
			text-align: center;
			color: #818078;
			opacity: .5;
		}

		.separator::before,
		.separator::after {
			opacity: .5;
			content: '';
			flex: 1;
			border-bottom: 1px solid #818078;
		}

		.separator::before {
			margin-right: .25em;
		}

		.separator::after {
			margin-left: .25em;
		}

		body {
			background: url(<?php echo base_url();
			?>assets/images/bg_hexagonwhite.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.field-icon {
			float: center;
			margin-left: -25px;
			margin-top: -25px;
			position: relative;
			z-index: 2;
		}

	</style>
</head>

<body class="login-page animated fadeIn slow">
	<div class="row">
		<!-- <div class="col" style="background-color:red;">
			awd
		</div> -->
		<div class="col">
			<div class="login-box">
				<div class="card">
					<div class="logo">
						<br>
						<div style="text-align:center;">
							<img src="<?php echo base_url(); ?>assets/images/ukpbjlogo2.png" width="33%">
						</div>
						<a style="color:black;"><b>Portal U<span style="color: #DA3231;">K</span>PBJ</b></a>
						<div style="margin-bottom:0px; text-align:center; font-weight:bold; color: black;">Single
							Sign-On (SSO)
							System</div>
					</div>
					<div class="body">
						<form id="sign_in" action="<?php echo base_url('main/auth') ?>" method="POST">
							<!-- <div class="msg" style="font-size:20px;"><b><u>LOGIN</u></b></div> -->
							<div style="color:red; text-align:center;"><?php echo $this->session->flashdata('msg');?>
							</div>
							<!-- EMAIL -->
							<div class="input-group" style="margin-top: 15px;">
								<span class="input-group-addon">
									<i class="material-icons">email</i>
								</span>
								<div class="form-line">
									<!-- email -->
									<input type="email" class="form-control" name="email" placeholder="Masukkan email"
										required>
								</div>
							</div>
							<!-- PASSWORD -->
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">lock</i>
								</span>
								<div class="form-line">
									<!-- password -->
									<input id="password-field" type="password" autocorrect="off" autocapitalize="none"
										autocomplete="off" class="form-control" name="password" 
										placeholder="Password" required>
									<span toggle="#password-field"
										class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
							</div>
							<!-- button -->
							<button style="margin-top: 5px;" class="btn btn-block bg-red waves-effect" type="submit">MASUK</button>
						</form>
						<br>
						<div class="separator">ATAU</div><br>
						<div class="text-center" style="font-size:7px;">
							<a href="#"><span>Reset Password</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="body">
					<div class="row m-b--20">
						<div class="col-xs-10"><br>
							Belum punya akun? <a href="register"><span style="color:#DA3231;">Register</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="separator">Download Aplikasi</div><br>
			<div class="text-center"><a href="#"><img
						src="https://lh3.googleusercontent.com/cjsqrWQKJQp9RFO7-hJ9AfpKzbUb_Y84vXfjlP0iRHBvladwAfXih984olktDhPnFqyZ0nu9A5jvFwOEQPXzv7hr3ce3QVsLN8kQ2Ao=s0"
						style="width: 45%;" alt="Unduh via Google Play"></a></div>
			<div class="text-center" style="margin-top:30px; color:gray;">UKPBJ Kabupaten Tanah Laut |
				<?php echo date('Y');?></div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/node-waves/waves.js"></script>

	<!-- Validation Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-validation/jquery.validate.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/examples/sign-in.js"></script>

	<!-- SHOW PASSWORD -->
	<script>
		$(".toggle-password").click(function () {
			$(this).toggleClass("fa-eye fa-eye-slash");
			var input = $($(this).attr("toggle"));
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});

	</script>
</body>

</html>
