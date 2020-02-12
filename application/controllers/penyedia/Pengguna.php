<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    // PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }
        
        // model auth login
        $this->load->model("m_main");
        // model data pengguna
        $this->load->model("m_ppengguna");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //Memuat file helper
        $this->load->helper('file');
    }
    
    // FUNGSI AWAL 
	public function index()
	{
        if($this->m_main->logged_id()){

            if($this->session->userdata('level')==='PENYEDIA'){
                $data["pengguna"] = $this->m_ppengguna->datapengguna();
                $this->load->view('penyedia/p_pengguna/v_pengguna', $data);
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
        }else{
        //     //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    // // FUNGSI UBAH PROFIL
    public function ubahprofil()
    {
        if($this->m_main->logged_id()){       
            $ubahprofil = $this->m_ppengguna;
            $validation = $this->form_validation;
            $validation->set_rules($ubahprofil->rules());
    
            if ($validation->run()) {
                $ubahprofil->update();                
                $this->session->set_flashdata('success', 'Data anda berhasil di perbarui.');
                redirect("penyedia/pengguna/ubahprofil");
            }
            
            $data["pengguna"] = $this->m_ppengguna->datapengguna();
            $this->load->view("penyedia/p_pengguna/v_pengguna_ubahprofil", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }
}