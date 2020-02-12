<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

                                        <form action="<?php base_url('nonpenyedia/ujianonline/add') ?>" method="post" enctype="multipart/form-data;charset=utf-8" >
										<input type="text" name="id_user" class="form-control" value="<?php echo $this->session->userdata('id_user');?>">
										<input type="text" name="user_email" class="form-control" value="<?php echo $this->session->userdata('email');?>">
										<input type="text" name="user_level" class="form-control" value="<?php echo $this->session->userdata('level');?>">
										<input type="text" name="user_nama" class="form-control" value="<?php echo $this->session->userdata('username');?>">
										<!-- UPLOAD SERTIFIKAT -->
										<!-- <input type="file" name="user_sertifikat" class="form-control" accept=".jpg,.png" required> -->
										<input type="text" name="verifikasi_peserta" class="form-control" value="T">
											
										<input type="submit" value="KIRIM" name="submit" >
										</form>
</body>
</html>