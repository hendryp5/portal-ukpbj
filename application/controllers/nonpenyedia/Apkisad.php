<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apkisad extends CI_Controller {

    // NON PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        //Memuat file helper
        $this->load->helper('file');
    }
    
    // FUNGSI AWAL 
	public function index()
	{
        // if($this->m_main->logged_id()){
            // $data["akuncasis"] = $this->m_dataakuncasis->datacasis();
            // $this->load->view('penyedia/p_aduan/v_aduan');

            if($this->session->userdata('level')==='NONPENYEDIA'){
                $this->load->view('nonpenyedia/non_kisad/v_kisad');
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
        // }else{
        //     //jika session belum terdaftar, maka redirect ke halaman login
        //     redirect("main");
        // }
    }
}