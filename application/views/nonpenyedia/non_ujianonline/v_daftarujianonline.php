<!-- NON PENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Dashboard (Non-Penyedia) | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("nonpenyedia/non_partials/v_head.php") ?>

	<!-- SWEET ALERT 2 -->
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

			<!-- Horizontal Layout -->
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-12">
					<div class="card">
						<div class="header">
							<a href="<?php echo base_url()."nonpenyedia/ujianonline"?>" type="button"
								class="btn btn-circle waves-effect waves-circle waves-float">
								<i class="material-icons">arrow_back</i>
							</a><br><br>
							<h2>
								Halo <b><?php echo $this->session->userdata('username');?></b>, anda akan melakukan
								pendaftaran menjadi peserta ujian.
							</h2>

						</div>

						<div class="body">
							<!-- BEGIN INFORMASI -->
							<blockquote>
								<p style="color: #F44336; font-weight:bolder;">INFORMASI PERSYARATAN</p>
								<p class="align-justify" style="font-size:15px;">
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar
									Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>
									1. Tahap awal untuk mengikuti ujian online ini, anda harus klik tombol "Mendaftar
									Menjadi Peserta
									Ujian", dan isi data yang diperlukan.<br>

								</p>
								<footer><cite title="Source Title">Tim Ujian Online UKPBJ</cite></footer>
							</blockquote>
							<hr>

							<div class="table-responsive">
								<table class="table table-bordered">
									<thead style="background-color:#F44336;">
										<tr>
											<th>
												<span style="color:white;">FORM INPUT PERSYARATAN</span>
											</th>
										</tr>

									</thead>
									<td>
										<!-- BEGIN FORM -->
										<!-- <?php echo form_open_multipart("nonpenyedia/ujianonline/mendaftar");?> -->
										<form id="mendaftar" name="mendaftar" action="<?php base_url('nonpenyedia/ujianonline/mendaftar') ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data;charset=utf-8" >
										<input type="hidden" name="id_user" class="form-control"
											value="<?php echo $this->session->userdata('id_user');?>">
										<input type="hidden" name="user_email" class="form-control"
											value="<?php echo $this->session->userdata('email');?>">
										<input type="hidden" name="user_level" class="form-control"
											value="<?php echo $this->session->userdata('level');?>">
										<input type="hidden" name="user_nama" class="form-control"
											value="<?php echo $this->session->userdata('username');?>">
										<!-- UPLOAD SERTIFIKAT -->
										<label for="User_sertifikat">1. Upload Sertifikat: Pengadaan Barang
											Jasa</label>
										<div id="feedbackimage" style="color: red;"></div>
										<div class="form-group">
											<div class="form-line">
												<input type="file" name="user_sertifikat" class="form-control" accept=".jpg,.png" onchange="validate_fileupload(this);" required>
											</div>
											<input type="hidden" name="verifikasi_peserta" class="form-control"
												value="T">
											<small>Syarat Tipe File: .jpg/.png</small><br><br>

											<!-- <button type="submit" class="btn btn-block btn-lg bg-red waves-effect" onclick="return valid_form();">
										<i class="material-icons">send</i>
										<span><b>Kirim Persyaratan</b></span>
									</button> -->
											<input type="submit" class="btn bg-red btn-block btn-lg waves-effect"
												value="KIRIM" onclick="return valid_form();">
											</form>
											<!-- <?php echo form_close(); ?> -->
											<!-- END FORM -->
									</td>
								</table>
							</div>
							<!-- END INFORMASI -->
							<!-- MULAI FORM INPUT -->

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
			</div>
			<!-- #END# Horizontal Layout -->
		</div>
	</section>

	<!-- BEGIN VALIDASI FILE UPLOAD IMAGE -->
	<script>
		var valid = false;

		function validate_fileupload(input_element) {
			var el = document.getElementById("feedbackimage");
			var fileName = input_element.value;
			var allowed_extensions = new Array("jpg", "JPG", "png", "PNG");
			var file_extension = fileName.split('.').pop();

			for (var i = 0; i < allowed_extensions.length; i++) {
				if (allowed_extensions[i] == file_extension) {
					valid = true; // valid file extension
					el.innerHTML = "";
					return;
				}
			}
			el.innerHTML = "File yang ada masukkan tidak didukung!";
			Swal.fire({
				type: 'error',
				title: 'File Yang Anda Masukkan Tidak Didukung!',
				text: 'Anda salah memasukkan tipe file!\nHanya tipe .png & .jpg yang diperbolehkan!'
			})
			// alert("Anda salah memasukkan tipe file!\nHanya tipe .png & .jpg yang diperbolehkan!");
			valid = false;
		}

		function valid_form() {
			return valid;
		}

	</script>
	<!-- END VALIDASI FILE UPLOAD IMAGE -->

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
