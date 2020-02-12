<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manualbook extends CI_Controller {

    // PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }

        //load model auth login
        $this->load->model('m_main');
        $this->load->model('m_faq');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //Memuat file helper
        $this->load->helper('file');
    }
    
	public function index()
	{
        if($this->m_main->logged_id()){
            if($this->session->userdata('level')==='PENYEDIA'){

                // $data["viewkategori"] = $this->m_faq->viewkategori();
                // $data["viewketeranganlpse"] = $this->m_faq->viewketeranganlpse();
                // $data["viewketeranganspse"] = $this->m_faq->viewketeranganspse();
                // $data["viewketeranganapendo"] = $this->m_faq->viewketeranganapendo();
                // $data["viewketerangansikap"] = $this->m_faq->viewketerangansikap();
                // $data["viewketeranganadp"] = $this->m_faq->viewketeranganadp();
                // $data["viewketerangansirup"] = $this->m_faq->viewketerangansirup();
                
                // $data["datafaq"] = $this->m_ploginfaq->datafaq();
                $this->load->view('penyedia/p_manualbook/v_manualbook');
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