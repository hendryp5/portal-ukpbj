<div class="user-info"
	style="background: url('<?php echo base_url(); ?>assets/images/user-img-background.jpg') no-repeat no-repeat;">
	<div class="image">
		<img src="<?php echo base_url(); ?>assets/images/user.png" width="48" height="48" alt="User" />
	</div>
	<div class="info-container">
		<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username');?></div>
		<div class="email"><?php echo $this->session->userdata('email');?></div>
		<div class="btn-group user-helper-dropdown">
			<i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="true">keyboard_arrow_down</i>
			<ul class="dropdown-menu pull-right">
				<li><a href="<?php echo base_url()."penyedia/pengguna"?>"><i class="material-icons">person</i>Data Pengguna</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="<?php echo base_url()."penyedia/dashboard/logout"?>"><i class="material-icons">input</i>Sign Out</a></li>
			</ul>
		</div>
	</div>
</div>
