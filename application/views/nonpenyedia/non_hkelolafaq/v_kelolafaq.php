<!-- PENYEDIA -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Kelola FAQ (Non-Penyedia) | UKPBJ Kab. Tanah Laut - Center of Excellence</title>
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
					<!-- HELPDESK BEGIN -->
					<?php
					foreach($nonpenyedia as $nonpenyediaz):
						$level = $nonpenyediaz['user_level'];
						$status = $nonpenyediaz['user_status'];
						endforeach; 

					if($level == 'NONPENYEDIA' && $status == 'Helpdesk'){ ?>
					<li class="active">
						<a href="<?php echo base_url()."nonpenyedia/kelolafaq"?>">
							<i class="material-icons">live_help</i>
							<span>Kelola FAQ</span>
						</a>
					</li>
					<?php }
					?>

					<!-- HELPDESK END -->

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
				<h2>Kelola FAQ</h2>
			</div>

			<!-- Horizontal Layout -->
			<div class="row clearfix">
				<!-- FUNGSI VALIDASI ALERT -->
				<?php
					// $hp = $this->session->userdata('hp');
					// $alamat = $this->session->userdata('alamat');
					// $status = $this->session->userdata('status');
					foreach($nonpenyedia as $nonpenyedia):
					$hp = $nonpenyedia['user_hp'];
					$alamat = $nonpenyedia['user_alamat'];
					$ktp = $nonpenyedia['user_card'];
					endforeach; 

					if($hp == '-' && $alamat == '-' && $ktp == 'default.jpg'){?>
				<div class="alert alert-warning">
					<strong>Perhatian!</strong> Anda belum melengkapi biodata diri dengan lengkap, <a
						href="<?php echo site_url("nonpenyedia/pengguna");?>" class="alert-link">Klik disini</a>.
				</div>
				<?php }else{ ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<strong>Terimakasih,</strong> Anda sudah melengkapi biodata diri dengan lengkap.
				</div>
				<?php }
					?>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Aksi
							</h2>
						</div>
						<div class="body">
							<!-- BEGIN BUTTON PANGGIL MODAL -->
							<!-- <a type="button" class="btn btn-primary waves-effect" data-toggle="modal"
								data-target="#modal_tambahkategori">
								<i class="material-icons">library_add</i>
								<span style="font-weight:bolder;">Tambah Kategori</span>
							</a> -->
							<a type="button" class="btn btn-success waves-effect" data-toggle="modal"
								data-target="#modal_tambahfaq">
								<i class="material-icons">library_add</i>
								<span style="font-weight:bolder;">Tambah FAQ</span>
							</a>
							<!-- END BUTTON PANGGIL MODAL -->
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Data FAQ 
							</h2>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table width="100%"
									class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<td>#</td>
											<td>Kategori</td>
											<td>Judul</td>
											<td>Jawaban</td>
											<td>Aksi</td>
										</tr>
									</thead>
									<tbody>
										<?php 
                                        $no = 1;
                                            foreach($show_faqketerangan->result_array() as $i):
                                                $id_faqketerangan=$i['id_faqketerangan'];
                                                $id_faqkategori=$i['id_faqkategori'];
                                                $judul=$i['judul'];
                                                $keterangan=$i['keterangan'];
                                                $pembuat=$i['pembuat'];
                                                $created=$i['created'];
                                                $updated=$i['updated'];
                                        ?>
										<tr>
											<td align="center" width="1%"><?php echo $no++; ?></td>
											<td width="20%"><?php $id_faqkategori; 
										if($id_faqkategori == '1'){
											echo 'LPSE';
										}elseif($id_faqkategori == '2'){
											echo 'Aplikasi SPSE';
										}elseif($id_faqkategori == '3'){
											echo 'Aplikasi Apendo';
										}elseif($id_faqkategori == '4'){
											echo 'Aplikasi SiKAP';
										}elseif($id_faqkategori == '5'){
											echo 'Agregasi Data Penyedia';
										}elseif($id_faqkategori == '6'){
											echo 'Aplikasi SIRUP';
										}else{
											echo 'Undefined';
										}
										?></td>
											<td width="20%"><?php echo $judul;?></td>
											<td><?php echo $keterangan;?></td>
											<td width="10%" align="center">
												<!-- <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $id_faqketerangan;?>"> Ubah</a> -->
												<div class="btn-group btn-group-xs" role="group"
													aria-label="Extra-small button group">
													<a type="button" class="btn bg-blue waves-effect" data-toggle="modal" data-target="#modal_ubahfaq<?php echo $id_faqketerangan;?>">Ubah</a>
													<a type="button" class="btn bg-red waves-effect" data-toggle="modal" data-target="#modal_hapusfaq<?php echo $id_faqketerangan;?>">Hapus</a>
													
												</div>
											</td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Data Kategori
							</h2>
							<p>Sementara data kategori masih belum bisa ditambahkan.</p>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table width="100%"
									class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<td>#</td>
											<td>Kategori</td>
											<td>Aksi</td>
										</tr>
									</thead>
									<tbody>
										<?php 
                                        $no = 1;
                                            foreach($show_faqkategori->result_array() as $i):
                                                $id_faqkategori=$i['id_faqkategori'];
                                                $kategori=$i['kategori'];
                                                $pembuat=$i['pembuat'];
                                                $created=$i['created'];
                                                $updated=$i['updated'];
                                        ?>
										<tr>
											<td width="1%" align="center"><?php echo $no++; ?></td>
											<td><?php echo $kategori; ?></td>
											<td align="center">
												<!-- <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $id_faqketerangan;?>"> Ubah</a> -->
												<div class="btn-group btn-group-xs" role="group"
													aria-label="Extra-small button group">
													<a type="button" class="btn bg-blue waves-effect" data-toggle="modal" data-target="#modal_ubahkategori<?php echo $id_faqkategori;?>">Ubah</a>
													<a type="button" class="btn bg-red waves-effect" data-toggle="modal" data-target="#modal_hapuskategori<?php echo $id_faqkategori;?>">Hapus</a>
												</div>
											</td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- #END# Horizontal Layout -->


		</div>
	</section>

	<!-- ------------------------
	     | BEGIN KUMPULAN MODAL |
         ------------------------ -->

	<!-- BEGIN MODAL TAMBAH KATEGORI -->
	<div class="modal fade" id="modal_tambahkategori" tabindex="-1" role="dialog" aria-labelledby="largeModal"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Kategori Baru</h3>
				</div>
				<!-- BEGIN FORM -->
				<form class="form-horizontal" method="post"
					action="<?php echo site_url().'nonpenyedia/kelolafaq/simpan_faqkategori'?>">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-xs-3">Kategori</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<input name="kategori" type="text" class="form-control"
											placeholder="Masukkan Kategori." required />
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						<button class="btn btn-info">Simpan</button>
					</div>
				</form>
				<!-- END FORM -->
			</div>
		</div>
	</div>
	<!-- 1. END MODAL TAMBAH KATEGORI -->
	<!--  -->
	<!-- 2. BEGIN MODAL UBAH KATEGORI -->
	<?php 
        foreach($show_faqkategori->result_array() as $i):
        $id_faqkategori=$i['id_faqkategori'];
        $kategori=$i['kategori'];
        $pembuat=$i['pembuat'];
        $created=$i['created'];
        $updated=$i['updated'];
    ?>
	<div class="modal fade" id="modal_ubahkategori<?php echo $id_faqkategori;?>" tabindex="-1" role="dialog"
		aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Ubah Kategori</h3>
				</div>
				<form class="form-horizontal" method="post"
					action="<?php echo site_url().'nonpenyedia/kelolafaq/edit_faqkategori'?>">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-xs-3">Kategori</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<input name="id_faqkategori" type="hidden" class="form-control"
											value="<?php echo $id_faqkategori;?>" required />
										<input name="kategori" type="text" class="form-control"
											placeholder="Masukkan Kategori." value="<?php echo $kategori;?>" required />
										<input name="pembuat" type="hidden" class="form-control"
											value="<?php echo $pembuat;?>" required />
										<input name="created" type="hidden" class="form-control"
											value="<?php echo $created;?>" required />
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						<button class="btn btn-info">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php endforeach;?>

	<!-- 2. END MODAL UBAH KATEGORI -->
	<!--  -->
	<!-- 3. BEGIN MODAL HAPUS KATEGORI -->
	<?php 
        foreach($show_faqkategori->result_array() as $i):
        $id_faqkategori=$i['id_faqkategori'];
        $kategori=$i['kategori'];
        $pembuat=$i['pembuat'];
        $created=$i['created'];
        $updated=$i['updated'];
    ?>
        <div class="modal fade" id="modal_hapuskategori<?php echo $id_faqkategori;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus Kategori</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url().'nonpenyedia/kelolafaq/hapus_faqkategori'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus data Kategori ini?
					<br>
					<b><?php echo $kategori;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_faqkategori" value="<?php echo $id_faqkategori;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    <!-- 3. END MODAL HAPUS KATEGORI -->
	<!-- -------------------------- -->
	<!-- 1. BEGIN MODAL TAMBAH FAQ -->
	<div class="modal fade" id="modal_tambahfaq" tabindex="-1" role="dialog" aria-labelledby="largeModal"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Tambah FAQ Baru</h3>
				</div>
				<form class="form-horizontal" method="post"
					action="<?php echo site_url().'nonpenyedia/kelolafaq/simpan_faqketerangan'?>">
					<div class="modal-body">

						<div class="form-group">
							<label class="control-label col-xs-3">Kategori</label>
							<div class="col-xs-8">
								<select name="id_faqkategori" class="form-control" required>
									<option value="">-PILIH-</option>
									<?php foreach($getdata_kategori as $row):?>
									<option value="<?php echo $row->id_faqkategori;?>"><?php echo $row->kategori;?>
									</option>
									<?php endforeach;?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Judul</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<input name="judul" type="text" class="form-control"
											placeholder="Masukkan Judul FAQ." required />
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Jawaban</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<textarea id="editor1" rows="15" cols="50" name="keterangan" type="text" class="form-control"
											placeholder="Masukkan Jawaban dari FAQ." required></textarea>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						<button class="btn btn-info">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- 1. END MODAL TAMBAH FAQ -->
	<!--  -->
	<!-- 2. BEGIN MODAL UBAH FAQ -->
	<?php 
        foreach($show_faqketerangan->result_array() as $i):
        $id_faqketerangan=$i['id_faqketerangan'];
        $id_faqkategori=$i['id_faqkategori'];
        $judul=$i['judul'];
        $keterangan=$i['keterangan'];
        $pembuat=$i['pembuat'];
        $created=$i['created'];
        $updated=$i['updated'];
    ?>
	<div class="modal fade" id="modal_ubahfaq<?php echo $id_faqketerangan;?>" tabindex="-1" role="dialog"
		aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Ubah FAQ</h3>
				</div>
				<form class="form-horizontal" method="post"
					action="<?php echo site_url().'nonpenyedia/kelolafaq/edit_faqketerangan'?>">
					<input name="id_faqketerangan" type="hidden" class="form-control"
											value="<?php echo $id_faqketerangan;?>" required />
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-xs-3">Kategori</label>
							<div class="col-xs-8">
								<select name="id_faqkategori" class="form-control" required>
									<option value="">-PILIH-</option>
									<?php if($id_faqkategori=='1'):?>
									<option value="1" selected>LPSE</option>
									<option value="2">APLIKASI SPSE</option>
									<option value="3">APLIKASI APENDO</option>
									<option value="4">APLIKASI SIKAP</option>
									<option value="5">AGREGASI DATA PENYEDIA (ADP)</option>
									<option value="6">APLIKASI SIRUP</option>
									<?php elseif($id_faqkategori=='2'):?>
									<option value="1">LPSE</option>
									<option value="2" selected>APLIKASI SPSE</option>
									<option value="3">APLIKASI APENDO</option>
									<option value="4">APLIKASI SIKAP</option>
									<option value="5">AGREGASI DATA PENYEDIA (ADP)</option>
									<option value="6">APLIKASI SIRUP</option>
									<?php elseif($id_faqkategori=='3'):?>
									<option value="1">LPSE</option>
									<option value="2">APLIKASI SPSE</option>
									<option value="3" selected>APLIKASI APENDO</option>
									<option value="4">APLIKASI SIKAP</option>
									<option value="5">AGREGASI DATA PENYEDIA (ADP)</option>
									<option value="6">APLIKASI SIRUP</option>
									<?php elseif($id_faqkategori=='4'):?>
									<option value="1">LPSE</option>
									<option value="2">APLIKASI SPSE</option>
									<option value="3">APLIKASI APENDO</option>
									<option value="4" selected>APLIKASI SIKAP</option>
									<option value="5">AGREGASI DATA PENYEDIA (ADP)</option>
									<option value="6">APLIKASI SIRUP</option>
									<?php elseif($id_faqkategori=='5'):?>
									<option value="1">LPSE</option>
									<option value="2">APLIKASI SPSE</option>
									<option value="3">APLIKASI APENDO</option>
									<option value="4">APLIKASI SIKAP</option>
									<option value="5" selected>AGREGASI DATA PENYEDIA (ADP)</option>
									<option value="6">APLIKASI SIRUP</option>
									<?php elseif($id_faqkategori=='6'):?>
									<option value="1">LPSE</option>
									<option value="2">APLIKASI SPSE</option>
									<option value="3">APLIKASI APENDO</option>
									<option value="4">APLIKASI SIKAP</option>
									<option value="5">AGREGASI DATA PENYEDIA (ADP)</option>
									<option value="6" selected>APLIKASI SIRUP</option>
									<?php else:?>
									<option value="1">LPSE</option>
									<option value="2">APLIKASI SPSE</option>
									<option value="3">APLIKASI APENDO</option>
									<option value="4">APLIKASI SIKAP</option>
									<option value="5">AGREGASI DATA PENYEDIA (ADP)</option>
									<option value="6">APLIKASI SIRUP</option>
									<?php endif;?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Judul</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<input name="judul" type="text" class="form-control"
											placeholder="Masukkan Judul FAQ." value="<?php echo $judul;?>" required />
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-3">Jawaban</label>
							<div class="col-xs-8">
								<div class="form-group">
									<div class="form-line">
										<textarea id="editor1" rows="15" cols="50" name="keterangan" type="text" class="form-control" required><?php echo $keterangan;?></textarea>
									</div>
								</div>
							</div>
						</div>
						<input name="created" type="hidden" class="form-control"
											value="<?php echo $created;?>" required />
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info">Update</button>
						</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<?php endforeach;?>
	<!-- 2. END MODAL UBAH FAQ -->
	<!--  -->
	<!-- 3. BEGIN MODAL HAPUS FAQ -->
	<?php
        foreach($show_faqketerangan->result_array() as $i):
			$id_faqketerangan=$i['id_faqketerangan'];
			$id_faqkategori=$i['id_faqkategori'];
			$judul=$i['judul'];
			$keterangan=$i['keterangan'];
			$pembuat=$i['pembuat'];
			$created=$i['created'];
			$updated=$i['updated'];
    ?>
        <div class="modal fade" id="modal_hapusfaq<?php echo $id_faqketerangan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus FAQ</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url().'nonpenyedia/kelolafaq/hapus_faqketerangan'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus data FAQ dengan judul ini?
					<br>
					<b><?php echo $judul;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_faqketerangan" value="<?php echo $id_faqketerangan;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    <!-- 3. END MODAL HAPUS FAQ -->
	<!-- --------------------------
	     |   END KUMPULAN MODAL   |
         -------------------------- -->

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

    <script type="text/javascript" src="<?php echo base_url().'assets/tools/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        // Fungsi untuk mengganti textarea dengan ckeditor style
          CKEDITOR.replace( 'editor1' ,{   
              toolbar: [
                     ['Source'] ,
                     ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList'] ,
                   ]              
            });
 
      });
    </script>
</body>
