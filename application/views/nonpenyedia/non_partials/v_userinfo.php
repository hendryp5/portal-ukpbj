<div class="user-info"
	style="background: url('<?php echo base_url(); ?>assets/images/user-img-background.jpg') no-repeat no-repeat;">
	<div class="image">
		<img src="<?php echo base_url(); ?>assets/images/user.png" width="48" height="48" alt="User" />
	</div>
	<div class="info-container">
		<div class="name" style="font-size:15px; font-weight:bolder;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username');?></div>
		<div class="email" style="font-size:15px;"><?php echo $this->session->userdata('email');?></div>
		<div class="btn-group user-helper-dropdown">
			<i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="true">keyboard_arrow_down</i>
			<ul class="dropdown-menu pull-right">
				<li><a href="<?php echo base_url()."nonpenyedia/pengguna"?>"><i class="material-icons">person</i>Profil Pengguna</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="<?php echo base_url()."nonpenyedia/dashboard/logout"?>"><i class="material-icons">input</i>Log Out</a></li>
			</ul>
		</div>
	</div>
</div>
