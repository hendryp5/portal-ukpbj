<!-- PENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Pengguna | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("penyedia/p_partials/v_head.php") ?>
	<!-- FANCYBOX -->
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>


<body class="theme-red">

	<!-- BEGIN LOADING -->
	<!-- Page Loader -->
	<?php $this->load->view("penyedia/p_partials/v_loading.php") ?>
	<!-- #END# Page Loader -->
	<!-- END LOADING -->

	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->

	<!-- Search Bar -->
	<?php $this->load->view("penyedia/p_partials/v_search.php") ?>
	<!-- #END# Search Bar -->

	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="<?php echo base_url()."penyedia/dashboard"?>">PORTAL - UKPBJ KAB. TANAH
					LAUT</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">

					<!-- Call Search -->
					<li><a href="javascript:void(0);" class="js-search" data-close="true"><i
								class="material-icons">search</i></a></li>
					<!-- #END# Call Search -->

					<!-- Notifications -->
					<?php $this->load->view("penyedia/p_partials/v_lonceng.php") ?>
					<!-- #END# Notifications -->

					<!-- Tasks -->
					<?php $this->load->view("penyedia/p_partials/v_bendera.php") ?>
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
			<?php $this->load->view("penyedia/p_partials/v_userinfo.php") ?>
			<!-- #User Info -->

			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo base_url()."penyedia/dashboard"?>">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">work</i>
							<span>Paket Pekerjaan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Tender</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Non Tender</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">speaker_notes</i>
							<span>Media Informasi</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Berita</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard"?>">Pengumuman</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">help</i>
							<span>Pusat Bantuan</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="<?php echo base_url()."penyedia/aduan"?>">Aduan</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/kisar"?>">Kritik & Saran</a>
							</li>
						</ul>
					</li>
					<li class="header">SETTINGS</li>
					<li class="active">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">settings</i>
							<span>Pengaturan</span>
						</a>
						<ul class="ml-menu">
							<li class="active">
								<a href="<?php echo base_url()."penyedia/pengguna"?>">Pengguna</a>
							</li>
							<li>
								<a href="<?php echo base_url()."penyedia/dashboard/logout"?>">Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- #Menu -->

			<!-- Footer -->
			<?php $this->load->view("penyedia/p_partials/v_footer.php") ?>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->

		<!-- Right Sidebar -->
		<?php $this->load->view("penyedia/p_partials/v_rightmenu.php") ?>
		<!-- #END# Right Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-3">
					<div class="card profile-card">
						<div class="profile-header">&nbsp;</div>
						<div class="profile-body">
							<div class="image-area">
								<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/photo/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_photo'];?><?php endforeach; ?>">
									<img width="50%" class="card-img-top" src="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/photo/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_photo'];?><?php endforeach; ?>" alt="Belum Ada Photo">
								</a>
							</div>
							<div class="content-area">
								<h3><?php echo $this->session->userdata('username');?></h3>
								<?php
                                foreach($pengguna as $penggunas):
                                $datalengkap = $penggunas['user_datalengkap'];
                                if($datalengkap === 'Y'){?>
								<span style="color:green; font-weight:bold;">Akun Terverifikasi <i
										class="material-icons">check</i></span>
								<?php }else{ ?>
								<span style="color:red; font-weight:bold;">Akun Belum Terverifikasi</span>
								<?php }
                                endforeach; 
                                ?>

								</p>
								<p style="font-weight:bold; font-size:20px;">
									Status : <?php echo $this->session->userdata('status');?>
								</p>

							</div>
						</div>
						<!-- <div class="profile-footer">
							<ul>
								<li>
									<span>Dibuat : </span>
									<span>
									
									</span>
								</li>
							</ul>
							<button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
						</div> -->
					</div>

					<div class="card card-about-me">
						<div class="header">
							<h2>BIODATA</h2>
						</div>
						<div class="body">
							<ul>
								<li>
									<div class="title">
										<i class="material-icons">casino</i>
										QR CODE
									</div>
									<div class="content align-center">
										<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/qrcode/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_qrcode'];?><?php endforeach; ?>">
											<img width="70%" class="card-img-top" src="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/qrcode/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_qrcode'];?><?php endforeach; ?>" alt="Belum Ada Photo">
										</a>
									</div>
								</li>
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
										<i class="material-icons">credit_card</i>
										KTP
									</div>
									<div class="content align-center">

										<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/ktp/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_card'];?><?php endforeach; ?>">
											<img width="70%" class="card-img-top" src="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/ktp/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_card'];?><?php endforeach; ?>" alt="Belum Ada Photo">
										</a>
									</div>
								</li>
								<li>
									<div class="title">
										<i class="material-icons">date_range</i>
										Dibuat Pada
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
				<div class="col-xs-12 col-sm-9">
					<div class="card">
						<div class="body">
							<div>
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home" aria-controls="home"
											role="tab" data-toggle="tab">Beranda</a></li>
									<li role="presentation"><a href="#profile_settings" aria-controls="settings"
											role="tab" data-toggle="tab">Ubah Profile</a></li>
									<li role="presentation"><a href="#change_password_settings" aria-controls="settings"
											role="tab" data-toggle="tab">Ubah Password</a></li>
								</ul>

								<div class="tab-content">
									<!-- HOME -->
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<div>
											<h2>Selamat Datang di Portal UKPBJ Kab. Tanah Laut</h2>
											<p>Dengan Aplikasi Portal UKPBJ anda dapat menggunakan layanan yang kami
												sediakan untuk mempermudah proses layanan serta transaksi.</p>
										</div>
									</div>

									<!-- PROFILE -->
									<div role="tabpanel" class="tab-pane fade in" id="profile_settings">
										<div class="body">
											<div class="row clearfix">
												<div class="col-sm-12">
												<!-- FORM HERE -->
												<form action="<?php site_url('penyedia/pengguna/edit') ?>" method="post" enctype="multipart/form-data">
												<input type="hidden" name="id_user" value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['id_user'];?><?php endforeach; ?>" />
													<div class="form-group">
														<h2 class="card-inside-title">Email</h2>
														
															<div class="">
																<input name="user_email" type="email" class="form-control"
																	placeholder="Email"
																	value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['user_email'];?><?php endforeach; ?>"
																	readonly />
																	<input type="hidden" name="user_password"
															value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['user_password'];?><?php endforeach; ?>" />
															</div>
													</div>
													<div class="form-group">
														<h2 class="card-inside-title">Nama</h2>
														<div class="form-line">
															<input name="user_nama" type="text" class="form-control" placeholder="Nama"
																value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['user_nama'];?><?php endforeach; ?>" />
														</div>
													</div>
													<div class="form-group">
														<h2 class="card-inside-title">Nomor HP</h2>
														<div class="form-line">
															<input name="user_hp" type="text" class="form-control"
																value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['user_hp'];?><?php endforeach; ?>" />
														</div>
													</div>
													<div class="form-group">
														<h2 class="card-inside-title">Alamat</h2>
														<div class="form-line">
															<input name="user_alamat" type="text" class="form-control" placeholder="Alamat"
																value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['user_alamat'];?><?php endforeach; ?>" />
														</div>
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<h2 class="card-inside-title">Photo</h2>
														<div class="form-line">
															<input name="user_photo" type="file" class="form-control"
																placeholder="Photo" />
															<input type="hidden" name="user_photoold"
															value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['user_photo'];?><?php endforeach; ?>" />
														</div>
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<h2 class="card-inside-title">Photo Terakhir</h2>
														<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/photo/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_photo'];?><?php endforeach; ?>">
															<img width="40%" class="card-img-top" src="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/photo/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_photo'];?><?php endforeach; ?>" alt="Belum Ada Photo">
														</a>
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<h2 class="card-inside-title">Kartu Identitas (KTP/SIM)</h2>
														<div class="form-line">
															<input name="user_card" type="file" class="form-control"
																placeholder="Photo" />
															<input type="hidden" name="user_cardold"
															value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['user_card'];?><?php endforeach; ?>" />
														</div>
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<h2 class="card-inside-title">Kartu Identitas (KTP/SIM) Terakhir
														</h2>
														<a data-fancybox="gallery" href="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/ktp/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_card'];?><?php endforeach; ?>">
															<img width="40%" class="card-img-top" src="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/ktp/<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_card'];?><?php endforeach; ?>" alt="Belum Ada Photo">
														</a>
													</div>
												</div>

												<input type="hidden" name="created" value="<?php foreach($pengguna as $penggunas):?><?php echo $penggunas['created'];?><?php endforeach; ?>" />

												<div class="col-sm-12">
													<div class="form-group">
														<button type="submit"
															class="btn bg-red btn-block btn-lg waves-effect"><i
																class="material-icons">save</i><span>SIMPAN</span>
														</button>
														</form>
														<!-- END FORM -->
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- PASSWORD -->
									<div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
										<div class="body">
											<div class="row clearfix">
												<div class="col-sm-12">
													<div class="form-group">
														<!-- OLD PASSWORD -->
														<h2 class="card-inside-title">Password Lama</h2>
														<div class="form-line">
															<input type="text" class="form-control"
																placeholder="Password" value="<?php foreach($pengguna as $penggunas):?>
										<?php echo $penggunas['user_password'];?><?php endforeach; ?>" readonly />
														</div>
													</div>
												</div>

												<div class="col-sm-12">
													<hr>
													<div class="align-center">
														<h5>Jika Anda ingin merubah Password silahkan masukkan Password
															baru pada kolom dibawah ini.</h5>
													</div>
													<div class="form-group">
														<!-- NEW PASSWORD -->
														<h2 class="card-inside-title">Password Baru</h2>
														<div class="form-line">
															<!-- FORM HERE -->
															<form action="">
																<input type="text" class="form-control"
																	placeholder="Password" />
														</div>
													</div>
												</div>

												<div class="col-sm-12">
													<div class="form-group">
														<button type="submit"
															class="btn bg-red btn-block btn-lg waves-effect"><i
																class="material-icons">save</i><span>SIMPAN</span>
														</button>
														</form>
														<!-- END FORM -->
													</div>
												</div>

												</form>
												<!-- END FORM -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/tables/jquery-datatable.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/demo.js"></script>
	</div>
