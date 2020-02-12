<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolaakun extends CI_Controller {
    
    // PPE
	public function __construct()
    {
        parent::__construct();
        $this->load->model('ppe/m_kelolaakun', 'm_kelolaakun');
    }

	public function index()
	{
        if($this->session->userdata('level')==='PPE'){
            $data['show_akun']=$this->m_kelolaakun->show_akun();
            $this->load->view('ppe/ppe_kelolaakun/v_ppekelolaakun', $data);
        }else{
            echo "Akses Ditolak!";
            redirect('main');
        }
	}

	function simpan_akun(){
		$hp = '-';
		$alamat = '-';
		$status = '-';
		$datalengkap = 'T';
		$kebijakan = 'Ya';
		$defaultjpg = 'default.jpg';
		date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
		
		$id_user=$this->input->post('id_user');
		$user_email=$this->input->post('user_email');
		$user_password=md5($this->input->post('user_password'));
		$user_level=$this->input->post('user_level');
		$user_nama=$this->input->post('user_nama');
		$user_hp=$hp;
		$user_alamat=$alamat;
		$user_status=$this->input->post('user_status');
		$user_datalengkap=$datalengkap;
		$user_card=$defaultjpg;
		$user_qrcode=$defaultjpg;
		$user_photo=$defaultjpg;
		$user_kebijakan=$kebijakan;
		$created=$now;
		$updated=date('0000-00-00 00:00:00');
		$this->m_kelolaakun->simpan_akun($id_user,$user_email,$user_password,$user_level,$user_nama,$user_hp,$user_alamat,$user_status,$user_datalengkap,$user_card,$user_qrcode,$user_photo,$user_kebijakan,$created,$updated);
		redirect('ppe/kelolaakun');
	}

	function edit_akun(){
		$kode_barang=$this->input->post('kode_barang');
		$nama_barang=$this->input->post('nama_barang');
		$satuan=$this->input->post('satuan');
		$harga=$this->input->post('harga');
		$this->m_kelolaakun->edit_akun($kode_barang,$nama_barang,$satuan,$harga);
		redirect('barang');
	}
}