<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    // PENYEDIA

	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }

        //load model auth login casis
        $this->load->model('m_main');
        $this->load->model('m_ppengguna');
    }

	public function index()
	{
		if($this->m_main->logged_id())
        {
            if($this->session->userdata('level')==='PENYEDIA'){
                $data["pengguna"] = $this->m_ppengguna->datapengguna();
                $this->load->view('penyedia/p_dashboard/v_dashboard', $data);
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
	}
}