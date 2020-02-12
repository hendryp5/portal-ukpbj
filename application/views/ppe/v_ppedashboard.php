<!-- PENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Dashboard (PPE) | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("nonpenyedia/non_partials/v_head.php") ?>
</head>

<body class="theme-red">
	<!-- BEGIN LOADING -->
	<!-- Page Loader -->
	<?php $this->load->view("nonpenyedia/non_partials/v_loading.php") ?>
	<!-- #END# Page Loader -->
	<!-- END LOADING -->

	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->

	<!-- Search Bar -->
	<?php $this->load->view("nonpenyedia/non_partials/v_search.php") ?>
	<!-- #END# Search Bar -->

	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="<?php echo base_url()."nonpenyedia/dashboard"?>">PORTAL - UKPBJ KAB. TANAH
					LAUT</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Call Search -->
					<li>&nbsp;</li>
					<!-- #END# Call Search -->
					<!-- Notifications -->
					<iframe scrolling="no" frameborder="no" clocktype="html5"
						style="overflow:hidden;border:0;margin:0;padding:0;width:151px;height:50px;"
						src="https://www.clocklink.com/html5embed.php?clock=008&timezone=GMT0800&color=red&size=151&Title=&Message=&Target=&From=2019,1,1,0,0,0&Color=red"></iframe>
					<?php $this->load->view("nonpenyedia/non_partials/v_lonceng.php") ?>
					<!-- #END# Notifications -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- #Top Bar -->

	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">

			<!-- User Info -->
			<?php $this->load->view("nonpenyedia/non_partials/v_userinfo.php") ?>
			<!-- #User Info -->

			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MENU</li>
					<li>
					<li class="active">
						<a href="<?php echo base_url()."nonpenyedia/dashboard"?>">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">work</i>
							<span>Kelola Paket Pekerjaan</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">speaker_notes</i>
							<span>Kelola Pusat Informasi</span>
						</a>
					</li>
                    <li>
						<a href="<?php echo site_url("ppe/kelolaakun");?>">
							<i class="material-icons">account_box</i>
							<span>Kelola Akun Pengguna</span>
						</a>
					</li>

					<!-- FITUR -->
					<li class="header">FITUR</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/apkisad"?>">
							<i class="material-icons">question_answer</i>
							<span>Kelola Kritik & Saran</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/ujianonline"?>">
							<i class="material-icons">spellcheck</i>
							<span>Kelola CAT - Ujian Online UKPBJ</span>
						</a>
					</li>

					<!-- AKUN -->
					<li class="header">PENGATURAN</li>
					<a href="<?php echo site_url("nonpenyedia/pengguna"); ?>">
						<i class="material-icons">account_box</i>
						<span>Profil Pengguna</span>
					</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">help</i>
							<span>Pusat Bantuan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo site_url()."nonpenyedia/manualbook"?>">Manual Book</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo site_url()."nonpenyedia/dashboard/logout"?>">
							<i class="material-icons">exit_to_app</i>
							<span>Log Out</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- #Menu -->

			<!-- Footer -->
			<?php $this->load->view("nonpenyedia/non_partials/v_footer.php") ?>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->

		<!-- Right Sidebar -->
		<?php $this->load->view("nonpenyedia/non_partials/v_rightmenu.php") ?>
		<!-- #END# Right Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">

			<div class="alert bg-teal alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
				<b>Selamat Datang <?php echo $this->session->userdata('username');?>.</b> 😊
			</div>

			<!-- Widgets -->
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-pink hover-expand-effect">
						<div class="icon">
							<i class="material-icons">playlist_add_check</i>
						</div>
						<div class="content">
							<div class="text">NEW TASKS</div>
							<div class="number count-to" data-from="0" data-to="125" data-speed="15"
								data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-cyan hover-expand-effect">
						<div class="icon">
							<i class="material-icons">help</i>
						</div>
						<div class="content">
							<div class="text">NEW TICKETS</div>
							<div class="number count-to" data-from="0" data-to="257" data-speed="1000"
								data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-light-green hover-expand-effect">
						<div class="icon">
							<i class="material-icons">forum</i>
						</div>
						<div class="content">
							<div class="text">NEW COMMENTS</div>
							<div class="number count-to" data-from="0" data-to="243" data-speed="1000"
								data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-orange hover-expand-effect">
						<div class="icon">
							<i class="material-icons">person_add</i>
						</div>
						<div class="content">
							<div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
								data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Widgets -->

			<!-- Horizontal Layout -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Dashboard
							</h2>
						</div>
						<div class="body">
							ID : <?php echo $this->session->userdata('id_user');?><br>
							EMAIL : <?php echo $this->session->userdata('email');?><br>
							LEVEL : <?php echo $this->session->userdata('level');?><br>
							NAMA : <?php echo $this->session->userdata('username');?><br>
							HP : <?php echo $this->session->userdata('hp');?><br>
							ALAMAT : <?php echo $this->session->userdata('alamat');?><br>
							STATUS : <?php echo $this->session->userdata('status');?><br>
							DATALENGKAP (Y/T) : <?php echo $this->session->userdata('datalengkap');?><br><br>
						</div>
					</div>
				</div>

			</div>
			<!-- #END# Horizontal Layout -->


		</div>
	</section>

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

	<!-- Autosize Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/autosize/autosize.js"></script>

	<!-- Moment Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/momentjs/moment.js"></script>

	<!-- Bootstrap Material Datetime Picker Plugin Js -->
	<script
		src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
	</script>

	<!-- Bootstrap Datepicker Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js">
	</script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/examples/sign-in.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/demo.js"></script>
</body>
