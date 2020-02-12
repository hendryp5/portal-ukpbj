<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qrcode extends CI_Controller {

    // PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }

        //load model auth login
        $this->load->model('m_main');
        $this->load->model('m_pqrcode');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //Memuat file helper
        $this->load->helper('file');
    }
    
	public function index()
	{
        if($this->m_main->logged_id()){
            if($this->session->userdata('level')==='PENYEDIA'){

                $data["viewqrcode"] = $this->m_pqrcode->viewqrcode();
                
                $this->load->view('penyedia/p_qrcode/v_qrcode', $data);
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
        }else{
             //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }
}