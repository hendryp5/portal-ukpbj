<?php
class M_kelolaakun extends CI_Model{
    
    // PPE

	// OKE
	function show_akun(){
		$hasil=$this->db->query("SELECT * FROM tb_user");
		return $hasil;
	}

	function simpan_akun($id_user,$user_email,$user_password,$user_level,$user_nama,$user_hp,$user_alamat,$user_status,$user_datalengkap,$user_card,$user_qrcode,$user_photo,$user_kebijakan,$created,$updated){
		$hasil=$this->db->query("INSERT INTO tb_user (id_user,user_email,user_password,user_level,user_nama,user_hp,user_alamat,user_status,user_datalengkap,user_card,user_qrcode,user_photo,user_kebijakan,created,updated) VALUES ('$id_user','$user_email','$user_password','$user_level','$user_nama','$user_hp','$user_alamat','$user_status','$user_datalengkap','$user_card','$user_qrcode','$user_photo','$user_kebijakan','$created','$updated')");
		return $hasil;
	}

	function edit_akun($kode_barang,$nama_barang,$satuan,$harga){
		$hasil=$this->db->query("UPDATE tb_user SET barang_nama='$nama_barang',barang_satuan='$satuan',barang_harga='$harga' WHERE barang_id='$kode_barang'");
		return $hsl;
	}
	
}