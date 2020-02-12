<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    // NON PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }
        
        $this->load->model("m_nonpengguna");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //Memuat file helper
        $this->load->helper('file');
    }
    
    // FUNGSI AWAL 
	public function index()
	{
            if($this->session->userdata('level')==='NONPENYEDIA'){
                $data["pengguna"] = $this->m_nonpengguna->datapengguna();
                $this->load->view('nonpenyedia/non_pengguna/v_pengguna', $data);
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
    }

    // // FUNGSI UBAH
    public function edit($id_user = null)
    {
            if (!isset($id_user)) redirect('nonpenyedia/non_pengguna/v_pengguna');
       
            $pengguna = $this->m_nonpengguna;
            $validation = $this->form_validation;
            $validation->set_rules($pengguna->rules());
    
            if ($validation->run()) {
                $pengguna->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
    
            $data["pengguna"] = $pengguna->getById($id_user);
            if (!$data["pengguna"]) show_404();
            
            $this->load->view("nonpenyedia/non_pengguna/v_ubahpengguna", $data);
    }
}