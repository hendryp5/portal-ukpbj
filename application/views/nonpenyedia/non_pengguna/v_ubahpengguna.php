<!-- NONPENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Ubah Data User Profile | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("nonpenyedia/non_partials/v_head.php") ?>
	<!-- FANCYBOX -->
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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
				<a class="navbar-brand" href="<?php echo base_url()."nonpenyedia/dashboard"?>">UKPBJ KAB. TANAH
					LAUT</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">

					<!-- Call Search -->
					<li>&nbsp;</li>
					<!-- #END# Call Search -->

					<!-- Notifications -->
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
					<li class="header">MENU UTAMA</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/dashboard"?>">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">work</i>
							<span>Paket Pekerjaan</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">speaker_notes</i>
							<span>Media Informasi</span>
						</a>
					</li>

					<!-- APLIKASI -->
					<li class="header">APLIKASI</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/apkisad"?>">
							<i class="material-icons">question_answer</i>
							<span>Kritik & Saran</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/ujianonline"?>">
							<i class="material-icons">spellcheck</i>
							<span>CAT - Ujian Online UKPBJ</span>
						</a>
					</li>

					<!-- AKUN -->
					<li class="header">PENGATURAN</li>
					<li class="active">
						<a href="<?php echo base_url()."nonpenyedia/pengguna"?>">
							<i class="material-icons">account_box</i>
							<span>User Profile</span>
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

	<!-- ------------------------------------------------------------------------------------------------------------------------- -->

	<section class="content">
		<ol class="breadcrumb">
			<li><a href="javascript:void(0);">Pengaturan</a></li>
            <li>User Profile</li>
            <li class="active">Ubah Data</li>
		</ol>
		<div class="container-fluid">
			<div class="row clearfix">
				<!-- FOTO -->
				<div class="col-xs-12 col-sm-4">
					<div class="card profile-card animated fadeInUp">
						<div class="profile-body">
							<div class="align-center">
								<br>
								<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/nonpenyedia/photo/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_photo'];?><?php endforeach; ?>">
									<img width="30%" class="img-thumbnail" src="<?php echo base_url(); ?>assets/upload/file_pengguna/nonpenyedia/photo/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_photo'];?><?php endforeach; ?>" alt="Belum Ada Photo">
								</a>
							</div>
							<div class="content-area">
								<span
									style="font-weight:bold; font-size:20px;"><?php echo $this->session->userdata('username');?></span><br>
								<span
									style="font-weight:bold; font-size:15px;"><?php echo $this->session->userdata('level');?></span><br>
								<span style="font-weight:bold; font-size:15px;">Jabatan :
									<?php echo $this->session->userdata('status');?></span><br>
								<br>
								<?php
                                foreach($pengguna as $penggunas):
                                $datalengkap = $penggunas['user_datalengkap'];
                                if($datalengkap === 'Y'){?>
								<span style="color:green; font-weight:bold;">Account Verified ✔</span>
								<?php }else{ ?>
								<span style="color:red; font-weight:bold;">Account Not Verified 😥</span>
								<?php }
                                endforeach; 
                                ?>


							</div>
						</div>
					</div>
				</div>
				<!-- KTP -->
				<div class="col-xs-12 col-sm-4">
					<div class="card profile-card animated fadeInUp">
						<div class="profile-body">
							<div class="align-center">
								<br>
								<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/nonpenyedia/ktp/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_card'];?><?php endforeach; ?>">
									<img width="50%" src="<?php echo base_url(); ?>assets/upload/file_pengguna/nonpenyedia/ktp/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_card'];?><?php endforeach; ?>" alt="Belum Ada Photo" class="img-thumbnail">
								</a>
							</div>
							<div class="content-area">
								<?php
                                foreach($pengguna as $penggunas):
                                $datalengkap = $penggunas['user_datalengkap'];
                                if($datalengkap === 'Y'){?>
								<span style="color:green; font-weight:bold;">KTP Verified ✔</span>
								<?php }else{ ?>
								<span style="color:red; font-weight:bold;">KTP Not Verified 😥</span>
								<?php }
                                endforeach; 
                                ?>
							</div>
						</div>
					</div>
				</div>
				<!-- QRCODE -->
				<div class="col-xs-12 col-sm-4">
					<div class="card profile-card animated fadeInUp">
						<div class="profile-body">
							<br>
							<div class="align-center">
								<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/nonpenyedia/qrcode/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_qrcode'];?><?php endforeach; ?>">
									<img width="50%" src="<?php echo base_url(); ?>assets/upload/file_pengguna/nonpenyedia/qrcode/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_qrcode'];?><?php endforeach; ?>" alt="Belum Ada Photo" class="img-thumbnail">
								</a>
							</div>
							<div class="content-area">
								<?php
                                foreach($pengguna as $penggunas):
                                $datalengkap = $penggunas['user_datalengkap'];
                                if($datalengkap === 'Y'){?>
								<span style="color:green; font-weight:bold;">QR Code Verified ✔</span>
								<?php }else{ ?>
								<span style="color:red; font-weight:bold;">QR Code Not Verified 😥</span>
								<?php }
                                endforeach; 
                                ?>
							</div>
						</div>
					</div>
				</div>
				<!-- BIODATA -->
				<div class="col-xs-12 col-sm-3 col-lg-12">
					<div class="card card-about-me animated fadeInUp slower">
						<div class="header">

							<div class="row">
								<div class="col-xs-6 m-t-5">
									<h2><b>BIODATA</b></h2>
								</div>
								<div class="col-xs-6 align-right">
									<a role="button" href="<?php echo site_url('nonpenyedia/pengguna/edit/'.$penggunas['id_user']) ?>" class="btn bg-red waves-effect">UBAH DATA</a>
								</div>
							</div>
						</div>
						<div class="body">
							<ul>
								<li>
									<div class="title">
										<i class="material-icons">email</i>
										Email
									</div>
									<div class="content">
										<?php echo $this->session->userdata('email');?>
									</div>
								</li>
								<li>
									<div class="title">
										<i class="material-icons">location_on</i>
										Alamat
									</div>
									<div class="content">
										<?php echo $this->session->userdata('alamat');?>
									</div>
								</li>
								<li>
									<div class="title">
										<i class="material-icons">call</i>
										Nomor HP
									</div>
									<div class="content">
										<?php echo $this->session->userdata('hp');?>
									</div>
								</li>
								<li>
									<div class="title">
										<i class="material-icons">date_range</i>
										Akun Dibuat Pada
									</div>
									<div class="content">
										<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['created'];?><?php endforeach; ?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ------------------------------------------------------------------------------------------------------------------------- -->

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

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/tables/jquery-datatable.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/demo.js"></script>
	</div>
