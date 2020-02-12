<!-- NON PENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Dashboard (Non-Penyedia) | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("nonpenyedia/non_partials/v_head.php") ?>
	<!-- SWEETALERT -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
				<a class="navbar-brand" href="<?php echo base_url()."nonpenyedia/dashboard"?>">Portal - UKPBJ Kab. Tanah
					Laut</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">

					<!-- Call Search -->
					<li><a href="javascript:void(0);" class="js-search" data-close="true"><i
								class="material-icons">search</i></a></li>
					<!-- #END# Call Search -->

					<!-- Notifications -->
					<?php $this->load->view("nonpenyedia/non_partials/v_lonceng.php") ?>
					<!-- #END# Notifications -->

					<!-- Tasks -->
					<?php $this->load->view("nonpenyedia/non_partials/v_bendera.php") ?>
					<!-- #END# Tasks -->

					<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
								class="material-icons">more_vert</i></a></li>
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
					<li class="header">MAIN NAVIGATION</li>
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
							<span>Aplikasi Aduan</span>
						</a>
					</li>
					<li class="active">
						<a href="<?php echo base_url()."nonpenyedia/ujianonline"?>">
							<i class="material-icons">spellcheck</i>
							<span>CAT - Ujian Online UKPBJ</span>
						</a>
					</li>

					<!-- AKUN -->
					<li class="header">AKUN</li>
					<li>
						<a href="<?php echo site_url()."nonpenyedia/pengguna"?>">
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

	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>CAT - Ujian Online UKPBJ</h2>
			</div>

			<!-- BEGIN ALERT SUKSES INPUT DATA -->
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success animated fadeIn slow" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
					<!-- SWEETALERT -->
					<script>
						Swal.fire(
							'Anda berhasil mengirimkan berkas persyaratan!',
							'Tahap selanjutnya Tim Ujian Online akan memverifikasi data yang telah anda kirim. Tunggu informasi selanjutnya, Terimakasih. 😊',
							'success'
						)

					</script>
				</div>
				<?php endif; ?>
				<!-- END ALERT SUKSES INPUT DATA -->
				
			<!-- Horizontal Layout -->
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-8">
					<div class="card">
						<div class="header">
							<h2>
								Selamat Datang <?php echo $this->session->userdata('username');?>, di CAT - Ujian Online
								UKPBJ.
							</h2>
							
						</div>

						<div class="body">
							<!-- BEGIN INFORMASI -->
							<blockquote>
								<p style="color: #F44336; font-weight:bolder;">INFORMASI</p>
								<p class="align-justify" style="font-size:15px;">
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									
								</p>
								<footer><cite title="Source Title">Tim Ujian Online UKPBJ</cite></footer>
							</blockquote>
							<!-- END INFORMASI -->

							<!-- ID : <?php echo $this->session->userdata('id_user');?><br>
							EMAIL : <?php echo $this->session->userdata('email');?><br>
							LEVEL : <?php echo $this->session->userdata('level');?><br>
							NAMA : <?php echo $this->session->userdata('username');?><br>
							HP : <?php echo $this->session->userdata('hp');?><br>
							ALAMAT : <?php echo $this->session->userdata('alamat');?><br>
							STATUS : <?php echo $this->session->userdata('status');?><br>
							DATALENGKAP (Y/T) : <?php echo $this->session->userdata('datalengkap');?><br><br> -->


						</div>
					</div>
				</div>
				<!-- STATUS PESERTA -->
				<?php
				foreach($datapendaftaran as $datapendaftarans):
				$sdhupload = $datapendaftarans['verifikasi_peserta']; //Y atau T

				if($sdhupload == 'Y'){?>
					<div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <div class="body bg-green">
                            Status Peserta: <b>Terverifikasi.</b>
                        </div>
                    </div>
                </div>
				<?php }else{?>
					<div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <div class="body bg-red">
                            Status Peserta: <b>Belum Terverifikasi.</b>
                        </div>
                    </div>
                </div>
				<?php }	
				endforeach;
				?>

				<!-- MULAI UJIAN -->
				<?php
				foreach($datapendaftaran as $datapendaftarans):
				$sdhupload = $datapendaftarans['verifikasi_peserta']; //Y atau T
				if($sdhupload == 'Y'){?>
				
					<div class="col-xs-12 col-sm-4">
					<div class="card">
						<div class="header bg-brown">
							<h2>
								Mulai Ujian Online. <small>Untuk memulai ujian online, silahkan klik tombol dibawah.</small>
							</h2>

						</div>
						<div class="body">
							<p>Ujian dimulai pada: 01-08-2019, Jam 08.00 WITA.<br>[countdown]</p>
							<a href="#" role="button" class="btn btn-block btn-lg bg-brown waves-effect"><b>Mulai
									Ujian</b></a>
						</div>
					</div>
				</div>
				<?php }

				endforeach;
				?>
				<!-- END MULAI UJIAN -->
				
				<?php
				$session = $this->session->userdata('level'); //

				foreach($datapendaftaran as $datapendaftarans):
				$sdhupload = $datapendaftarans['verifikasi_peserta']; //Y atau T

				if (!empty($sdhupload)){?>
				<!-- LIHAT DATA -->
				<div class="col-xs-12 col-sm-4">
					<div class="card">
						<div class="header bg-pink">
							<h2>
								Lihat Data. <small>Untuk melihat data persyaratan pendaftaran yang telah anda kirimkan, silahkan klik tombol dibawah.</small>
							</h2>

						</div>
						<div class="body">
							<a href="<?php echo site_url('nonpenyedia/ujianonline/lihatdata/'.$datapendaftarans['id_pesertaujian']) ?>" role="button"
								class="btn btn-block btn-lg bg-pink waves-effect"><b>Lihat Data</b></a>
						</div>
					</div>
				</div>
				<!-- END LIHAT DATA -->
				<?php }
				endforeach;

				if (empty($sdhupload)){ ?>
				<!-- MENDAFTAR -->
					<div class="col-xs-12 col-sm-4">
					<div class="card">
						<div class="header bg-indigo">
							<h2>
								Mendaftar. <small>Klik tombol dibawah untuk mendaftar menjadi peserta ujian.</small>
							</h2>

						</div>
						<div class="body">
							<a href="<?php echo site_url('nonpenyedia/ujianonline/add') ?>" role="button"
								class="btn btn-block btn-lg bg-indigo waves-effect"><b>Mendaftar Menjadi Peserta
									Ujian</b></a>
						</div>
					</div>
				</div>
				<!-- END MENDAFTAR -->
				<?php }
				?>
				
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
