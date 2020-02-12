<!-- PENYEDIA -->
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

	<title>Berita dan Informasi | UKPBJ Kab. Tanah Laut - Center of Excellence</title>

	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/ukpbjlogo.png" type="image/x-icon">

	<!-- BS4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- FA ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	/*css box berita*/
	.rounded{
		border-radius:8px!important
	}

	.card-shadow{
		border:0;box-shadow:0 0 0 1px rgba(255,255,255,.1),0 2px 4px 0 rgba(14,30,37,.12)
	}

	.card-shadow:hover{
		box-shadow:0 1px 5px 0 rgba(0,0,0,.22)
	}

	.card-shadow .card-img-top{
		border-top-left-radius:calc(8px - 1px);
		border-top-right-radius:calc(8px - 1px)
	}

	/*css sidebar*/
	.bg-company-red {
		background-color: #b02928 !important;
	}

	/* define a fixed width for the entire menu */
	.navigation {
		width: 200px;
	}

	/* reset our lists to remove bullet points and padding */
	.mainmenu, .submenu {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	/* make ALL links (main and submenu) have padding and background color */
	.mainmenu a {
		display: block;
		text-decoration: none;
		padding: 10px;
		color: #000;
		font-size: 16px;
	}

	/* add hover behaviour */
	.mainmenu a:hover {
		color:#b02928;
		background-color: #fafcfd;
	}

	.activesidebar{
		background-color:#f6f9fb;
		border-left: 2px solid #b02928;
		margin-left: -2px;
	}
/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
  */

  .mainmenu li:hover .submenu {
  	display: block;
  	max-height: 200px;
  }

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
  */

  .submenu a {
  	background-color: #999;
  }

  /* hover behaviour for links inside .submenu */
  .submenu a:hover {
  	background-color: #666;
  }

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
  */
  .submenu {
  	overflow: hidden;
  	max-height: 0;
  	-webkit-transition: all 0.5s ease-out;
  }

  /* scroll mobile*/
  div.scrollmenu {
  	background-color: white;
  	overflow: auto;
  	white-space: nowrap;
  }

  div.scrollmenu a {
  	display: inline-block;
  	color: black;
  	text-align: center;
  	padding: 14px;
  	text-decoration: none;
  }

  div.scrollmenu a:hover {
  	background-color: gray;
  }

  /*untuk faq box icon image*/
  .zoom:hover { transform: scale(1.1); }

  .box {
  	transition: all .2s ease-in-out; 
  	padding: 20px;  
  	margin:5px; 
  	background-color: #F1F1F1; 
  	height: 120px; 
  	width: 150px; 
  	border-radius: 3px; 
  	text-align: center; 
  	vertical-align: middle;
  }

  .mb-0 > a {
  	display: block;
  	position: relative;
  }
  .mb-0 > a:after {
  	content: "\f078"; /* fa-chevron-down */
  	font-family: 'FontAwesome';
  	position: absolute;
  	right: 0;
  }
  .mb-0 > a[aria-expanded="true"]:after {
  	content: "\f077"; /* fa-chevron-up */
  }

</style>
</head>

<body style="background-color: #F8F8F8">
	<!-- NAVBARTOP -->
	<nav class="navbar navbar-expand-md navbar-light bg-company-red">
		<div class="container">
			<a class="navbar-brand" style="color:white;" href="#">
				<img src="<?php echo base_url(); ?>assets/images/ukpbjlogo.png" width="30" height="30" alt=""> UKPBJ Kab. Tanah Laut
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
				<div class="navbar-nav" >
					<a style="color:white;" class="nav-item nav-link active" href="<?php echo site_url();?>penyedia/dashboard">Beranda <span class="sr-only">(current)</span></a>
					<a style="color:white;" class="nav-item nav-link" href="<?php echo site_url();?>penyedia/pengguna">Profil Saya</a>
					<a style="color:white;" class="nav-item nav-link" href="<?php echo site_url();?>penyedia/kontakkami">Kontak Kami</a>
					<a style="color:white;" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- INFOBAR -->
	<nav style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 3px 7px 0 rgba(0, 0, 0, 0.19);" class="navbar navbar-expand-md navbar-light bg-light d-none d-md-block">
		<div class="container">
			<a class="navbar-brand" href="#"><span style="color:green;"><i class="fa fa-circle"></i></span> <?php echo $this->session->userdata('username');?> <span style="font-size:13px; color:gray;">Dashboard User</span></a>
			<nav class="navbar navbar-expand">
			</div>
		</div>
	</nav>
	<!-- SCROLL MOBILE -->
	<div class="scrollmenu d-block d-sm-none">
		<a href="<?php echo site_url();?>penyedia/dashboard" >Beranda</a>
		<a href="<?php echo site_url();?>penyedia/beritadaninformasi" style="color:#B02928;">Berita & Informasi</a>
		<a href="<?php echo site_url();?>penyedia/pustakadigital" >Pustaka Digital</a>
		<a href="<?php echo site_url();?>penyedia/kisar">Kritik & Saran</a>
		<a href="<?php echo site_url();?>penyedia/laporgangguan">Lapor Gangguan</a>
		<a href="<?php echo site_url();?>penyedia/pengguna">Profil Saya</a>
		<a href="<?php echo site_url();?>penyedia/faq">FAQ</a>
		<a href="<?php echo site_url();?>penyedia/manualbook">Manual Book</a>
	</div>
	<!-- SIDEBAR -->
	<div class="container mt-4">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 d-none d-md-block">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xs-4 ml-2">
								<!-- image profile -->
								<img src="<?php echo base_url(); ?>assets/upload/file_pengguna/penyedia/photo/<?php echo $this->session->userdata('user_photo');?>" style="width:60px; border-radius: 4px; border: 1px solid #ddd; padding: 4px;">
							</div>
							<div class="col-xs-4 ml-3" style="font-size: 14px;">
								<span style="color:#b02928; font-weight: bolder;">
									<?php echo $this->session->userdata('username');?>
								</span>
								<?php 
								$datalengkap = $this->session->userdata('datalengkap');

								if($datalengkap == 'Y'){
									echo '<sup>
									<span data-toggle="tooltip" title="Akun anda sudah verified!" style="color:green;"><img width="15px;" src="https://cdn2.iconfinder.com/data/icons/internet-download-manager-2/64/11_Completed_check_tick_verified_approved-512.png"></span>
									</sup>';
								}else{
									echo '<sup>
									<span data-toggle="tooltip" title="Akun anda belum verified!" style="color:red;"><img width="15px;" src="https://cdn1.iconfinder.com/data/icons/everyday-5/64/cross_delete_stop_x_denied_stopped-512.png"></span>
									</sup>';
								}
								?>
								
								<br>
								Hp: <?php echo $this->session->userdata('hp');?><br>
								<u><?php echo $this->session->userdata('level');?></u>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col">
								<nav class="navigation">
									<!-- sidebarnya disini ya -->
									<ul class="mainmenu">
										<li >
											<a href="<?php echo site_url();?>penyedia/dashboard"><img src="https://image.flaticon.com/icons/svg/609/609803.svg" width="33px"> <span style="margin-left:10px; ">Beranda</span></a>
										</li>
										<li class="activesidebar">
											<a href="<?php echo site_url();?>penyedia/beritadaninformasi"><img src="https://image.flaticon.com/icons/svg/1074/1074208.svg" width="33px"> <span style="margin-left:10px; color:#b02928;">Berita & Informasi</span></a>
										</li>										
										<li >
											<a href="<?php echo site_url();?>penyedia/pustakadigital"><img src="https://image.flaticon.com/icons/svg/2446/2446892.svg" width="37px"><span style="margin-left:10px; ">Pustaka Digital</span></a>
										</li>
										<li >
											<a href="<?php echo site_url();?>penyedia/kisar"><img src="https://image.flaticon.com/icons/svg/1141/1141031.svg" width="33px"><span style="margin-left:10px; "> Kritik & Saran</span></a>
										</li>
										<li >
											<a href="<?php echo site_url();?>penyedia/laporgangguan"><img src="https://image.flaticon.com/icons/svg/1128/1128764.svg" width="33px"><span style="margin-left:10px; "> Lapor Gangguan</span></a>
										</li>
										<li >
											<a href="<?php echo site_url();?>penyedia/faq"><img src="https://image.flaticon.com/icons/svg/309/309213.svg" width="33px"><span style="margin-left:10px; "> FAQ</span></a>
										</li>
										<hr>
										<li>
											<a href="<?php echo site_url();?>penyedia/pengguna"><img src="https://image.flaticon.com/icons/svg/609/609782.svg" width="33px"><span style="margin-left:10px;"> Profil Saya</span></a>
										</li>
										<li>
											<a href="<?php echo site_url();?>penyedia/manualbook"><img src="https://image.flaticon.com/icons/svg/2446/2446995.svg" width="33px"><span style="margin-left:10px;"> Manual Book</span></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BEGIN MAIN CONTENT -->
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div>
							<div class="d-flex justify-content-between">
								<span style="color:#b02928; font-size: 13px; font-weight: bolder;">INFORMASI</span>
								<span><a href="<?php echo site_url();?>penyedia/beritadaninformasi" class="btn btn-primary btn-sm">< Kembali</a></span>
							</div>

							<hr>
							<!-- CONTENT -->
							<!-- BEGIN BERITA -->
							<div class="row">
								<div class="col">
									<div class="text-center"><img width="40%" src="<?php echo base_url();?>assets/upload/file_beritainformasi/<?php echo $datainformasi->gambar_berita?>"></div>
									<div class="text-center" style="font-weight: bolder;"><?php echo $datainformasi->judul_berita?></div>
									<div class="text-center">Oleh: <?php echo $datainformasi->pembuat_berita?>, <?php echo $datainformasi->tanggal_berita?>, <?php echo $datainformasi->jenis?></div>
									<div class="mt-3" style="text-align: justify;
  text-justify: inter-word;"><?php echo $datainformasi->isi_berita?></div>
								</div>
							</div>	
							<!-- END BERITA -->
							<!-- * -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

		<!-- Modal Logout-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Yakin untuk logout?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-footer">
						<a href="<?php echo site_url();?>penyedia/dashboard/logout" class="btn btn-primary">Logout</a>
					</div>
				</div>
			</div>
		</div>

		<!-- JQUERY -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<!-- POPPER BS4 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<!-- BS4 -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!-- Tooltips -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();   
			});
		</script>

	</body>