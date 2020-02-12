<!-- PENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Kritik & Saran | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
	<?php $this->load->view("penyedia/p_partials/v_head.php") ?>
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
							<span>Paket Pekerjaan</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">speaker_notes</i>
							<span>Pusat Informasi</span>
						</a>
					</li>

					<!-- APLIKASI -->
					<li class="header">FITUR</li>
					<li>
						<a href="<?php echo base_url()."nonpenyedia/apkisad"?>">
							<i class="material-icons">question_answer</i>
							<span>Kirim Kritik & Saran</span>
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
			<div class="block-header">
				<ol class="breadcrumb">
					<li>
						<a href="javascript:void(0);">
							<i class="material-icons">help</i> Pusat Bantuan
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0);">
							<i class="material-icons"></i> Kritik & Saran
						</a>
					</li>
				</ol>
			</div>
			<!-- Basic Examples -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								HALAMAN KRITIK & SARAN
							</h2>
							
						</div>
						<div class="body">
							<div style="margin-bottom:20px;"><a href="<?php echo base_url()."nonpenyedia/kisar/add"?>"
									type="button" class="btn bg-red waves-effect">
									<i class="material-icons">add_circle_outline</i>
									<span><b>KIRIMKAN KRITIK/SARAN</b></span>
								</a></div>
							<div class="table-responsive">
								<table width="100%"
									class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
                                        <tr>
                                        <th colspan="5" class="text-center" style="background-color:#F44336;color:white;">KRITIK & SARAN YANG TELAH DIKIRIM</th>
                                        </tr>
										<tr>
											<th>No.</th>
											<th>Tanggal</th>
											<th>Kritik & Saran</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
                                            <th>No.</th>
											<th>Tanggal</th>
											<th>Kritik & Saran</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
										<?php $no = 1; foreach ($datakisar as $datakisar): ?>
										<tr>
											<td width="5%">
												<?php echo $no++; ?>
											</td>
											<td width="15%">
												<?php echo $datakisar->tanggal ?>
											</td>
											<td  width="25%">
												<?php echo $datakisar->kisar ?>
											</td>
											<td width="10%">
												<div class="btn-group" role="group" aria-label="Default button group">
													<a type="button" class="btn bg-red waves-effect" disabled>Ubah</a>
													<a href="<?php echo site_url('penyedia/kisar/lihat/'.$datakisar->id_kisar) ?>"
														type="button" class="btn bg-red waves-effect">Lihat</a>
													<a class="btn bg-red waves-effect" disabled>Hapus</a>
												</div>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Basic Examples -->
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

	<!-- Jquery DataTable Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script
		src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js">
	</script>
	<script
		src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/buttons.flash.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/jszip.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/pdfmake.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/vfs_fonts.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/buttons.html5.min.js">
	</script>
	<script src="<?php echo base_url(); ?>assets/tools/plugins/jquery-datatable/extensions/export/buttons.print.min.js">
	</script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/tools/js/pages/tables/jquery-datatable.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url(); ?>assets/tools/js/demo.js"></script>
</body>
