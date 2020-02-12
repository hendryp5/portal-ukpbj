<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pustakadigital extends CI_Controller {

    // PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }

        //load model auth login
        $this->load->model('m_main');
        $this->load->model('m_ppustakadigital');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //Memuat file helper
        $this->load->helper('file');
    }
    
	public function index()
	{
        if($this->m_main->logged_id()){
            if($this->session->userdata('level')==='PENYEDIA'){
                $data["pustakadigitalbukusaku"] = $this->m_ppustakadigital->pustakadigitalbukusaku();
                $data["pustakadigitalperpres"] = $this->m_ppustakadigital->pustakadigitalperpres();
                $data["pustakadigitalperbup"] = $this->m_ppustakadigital->pustakadigitalperbup();
                $data["pustakadigitalse"] = $this->m_ppustakadigital->pustakadigitalse();
                $this->load->view('penyedia/p_pustakadigital/v_pustakadigital', $data);
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