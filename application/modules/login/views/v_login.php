<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Login Portal | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
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
</head>

<body class="login-page">
	<div class="login-box">
		<div class="logo">
			<div style="text-align:center;">
			<img src="<?php echo base_url(); ?>assets/images/ukpbjlogo.png" width="20%">
			</div>
			<a href="javascript:void(0);"><b>Portal-UKPBJ</b></a>
			<small>UKPBJ Kab. Tanah Laut - Center of Excellence</small>
		</div>
		<div class="card">
			<div class="body">
				<form id="sign_in" method="POST">
					<div class="msg"><b>LOGIN</b></div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">email</i>
						</span>
						<div class="form-line">
							<input type="text" class="form-control" name="email" placeholder="Email" required
								autofocus>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
						<div class="form-line">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8 p-t-5">
							<!-- <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label> -->
						</div>
						<div class="col-xs-4">
							<button class="btn btn-block bg-red waves-effect" type="submit">LOGIN</button>
						</div>
						</form>
					</div><hr>
					<div class="row m-t-15 m-b--20">
						<div class="col-xs-6">
						<button class="btn btn-block bg-red waves-effect">Lupa Password?</button>
						</div>
						<div class="col-xs-6 align-right">
						<button class="btn btn-block bg-red waves-effect">Daftar Disini</button>
						</div>
					</div>				
			</div>
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
</body>

</html>
