<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		document.getElementsByTagName("html")[0].className += " js";
	</script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/extension/css/style.css">
	<title>FAQ | LPSE Kab. Tanah Laut - Center of Excellence</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/tinylogo4.3.png" />
</head>

<body>
	<header class="cd-header flex flex-column flex-center">
		<div class="text-component text-center">
			<img style="border: 10px solid transparent;" src="<?php echo base_url(); ?>assets/images/lpse-logo.png" width="200px">
			<h1 style="font-weight:bolder;">F.A.Q</h1>
			<p style="color:white;">Pertanyaan yang sering ditanyakan.</p>
		</div>
	</header>

	<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">

		<!-- BEGIN KATEGORI -->
		<ul class="cd-faq__categories">
			<!-- <li><a class="cd-faq__category cd-faq__category-selected truncate" href="#basics">Dasar</a></li> -->
			<?php foreach ($viewkategori as $viewkategoris): 
			$kategori = $viewkategoris['kategori'];
			?>
			<li><a class="cd-faq__category truncate" href="#<?php echo $kategori; ?>"><?php echo $kategori; ?></a></li>
			<?php endforeach; ?>
		</ul> <!-- cd-faq__categories -->
		<!-- END KATEGORI -->

		<!-- BEGIN PERTANYAAN -->
		<div class="cd-faq__items">
			<ul id="LPSE" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>LPSE</h2>
				</li>
				<?php foreach ($viewketeranganlpse as $viewketeranganlpses): 
				$judul = $viewketeranganlpses['judul'];
				$pertanyaan = $viewketeranganlpses['keterangan'];
				?>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span><?php echo $judul;?></span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p><?php echo $pertanyaan;?></p>
						</div>
					</div> <!-- cd-faq__content -->
				</li>
				<?php endforeach; ?>
			</ul> <!-- cd-faq__group -->

			<ul id="Aplikasi SPSE" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Aplikasi SPSE</h2>
				</li>
				<?php foreach ($viewketeranganspse as $viewketeranganspses): 
				$judul = $viewketeranganspses['judul'];
				$pertanyaan = $viewketeranganspses['keterangan'];
				?>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span><?php echo $judul;?></span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p><?php echo $pertanyaan;?></p>
						</div>
					</div> <!-- cd-faq__content -->
				</li>
				<?php endforeach; ?>
			</ul> <!-- cd-faq__group -->

			<ul id="Aplikasi Apendo" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Aplikasi Apendo</h2>
				</li>
				<?php foreach ($viewketeranganapendo as $viewketeranganapendos): 
				$judul = $viewketeranganapendos['judul'];
				$pertanyaan = $viewketeranganapendos['keterangan'];
				?>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span><?php echo $judul;?></span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p><?php echo $pertanyaan;?></p>
						</div>
					</div> <!-- cd-faq__content -->
				</li>
				<?php endforeach; ?>
			</ul> <!-- cd-faq__group -->

			<ul id="Aplikasi SiKAP" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Aplikasi SiKAP</h2>
				</li>
				<?php foreach ($viewketerangansikap as $viewketerangansikaps): 
				$judul = $viewketerangansikaps['judul'];
				$pertanyaan = $viewketerangansikaps['keterangan'];
				?>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span><?php echo $judul;?></span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p><?php echo $pertanyaan;?></p>
						</div>
					</div> <!-- cd-faq__content -->
				</li>
				<?php endforeach; ?>
			</ul> <!-- cd-faq__group -->

			<ul id="Agregasi Data Penyedia (ADP)" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Agregasi Data Penyedia (ADP)</h2>
				</li>
				<?php foreach ($viewketeranganadp as $viewketeranganadps): 
				$judul = $viewketeranganadps['judul'];
				$pertanyaan = $viewketeranganadps['keterangan'];
				?>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span><?php echo $judul;?></span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p><?php echo $pertanyaan;?></p>
						</div>
					</div> <!-- cd-faq__content -->
				</li>
				<?php endforeach; ?>
			</ul> <!-- cd-faq__group -->

			<ul id="Aplikasi SIRUP" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Aplikasi SIRUP</h2>
				</li>
				<?php foreach ($viewketerangansirup as $viewketerangansirups): 
				$judul = $viewketerangansirups['judul'];
				$pertanyaan = $viewketerangansirups['keterangan'];
				?>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span><?php echo $judul;?></span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p><?php echo $pertanyaan;?></p>
						</div>
					</div> <!-- cd-faq__content -->
				</li>
				<?php endforeach; ?>
			</ul> <!-- cd-faq__group -->
		</div> <!-- cd-faq__items -->
		<!-- END PERTANYAAN -->

		<a href="#0" class="cd-faq__close-panel text-replace">Close</a>

		<div class="cd-faq__overlay" aria-hidden="true"></div>
	</section> <!-- cd-faq -->
	<script src="<?php echo base_url(); ?>assets/extension/js/util.js"></script>
	<!-- util functions included in the CodyHouse framework -->
	<script src="<?php echo base_url(); ?>assets/extension/js/main.js"></script>
</body>

</html>
