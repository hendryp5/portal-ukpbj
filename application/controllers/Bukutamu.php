<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutamu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        //load model auth login
        $this->load->model('m_main');

        $this->load->model('m_bukutamu');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        //Memuat file helper
        $this->load->helper('file');

    }

	public function index()
	{
		$this->load->view('bukutamu/v_bukutamu');
	}

    public function masuk()
    {   
        if($this->m_main->logged_id()){
            $this->load->view('bukutamu/v_bukutamu_masuk');
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("bukutamu");
        }
    }

	public function authqr()
	{	
        $this->load->library('encrypt'); 
        // key encrypt
        $key = 'uukpbjkabupatentanahlaut04022020';

		// get data from post form
		$no_ktp_enkrip    = $this->input->post('data',TRUE);
        // dekrip proses
        $hasil_dekrip = $this->encrypt->decode($no_ktp_enkrip, $key); 

		$validate = $this->m_bukutamu->validate($hasil_dekrip);

		if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $id_user  = $data['id_user'];
        $name  = $data['user_nama'];
        $jenis_kelamin  = $data['jenis_kelamin'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $hp = $data['user_hp'];
        $alamat = $data['user_alamat'];
        $status = $data['user_status'];
        $datalengkap = $data['user_datalengkap'];
        $user_photo = $data['user_photo'];
        $sesdata = array(
            'id_user'  => $id_user,
            'username'  => $name,
            'jenis_kelamin'  => $jenis_kelamin,
            'email'     => $email,
            'level'     => $level,
            'hp'     => $hp,
            'alamat'     => $alamat,
            'status'     => $status,
            'datalengkap'     => $datalengkap,
            'user_photo'     => $user_photo,
            'no_ktp'     => $no_ktp,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'PPE'){
            redirect('bukutamu/masuk');
 
        // access login for penyedia
        }elseif($level === 'PENYEDIA'){
            redirect('bukutamu/masuk');
 
        // access login for nonpenyedia
        }elseif($level === 'NONPENYEDIA'){
            redirect('bukutamu/masuk');

        // access login for author
        }else{
            redirect('page/author');
        }
    }else{
        echo $this->session->set_flashdata('msg','Anda tidak terdaftar pada sistem kami! Silahkan mendaftar melalui aplikasi UKPBJ TALA yang ada di Google Play.');
        redirect('bukutamu');
    }

	}

    public function logout()
    {
      $this->session->sess_destroy();
      redirect('bukutamu');
    }

}
