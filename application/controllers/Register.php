<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    // PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        // model register
        $this->load->model("m_register");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        //Memuat file helper
        $this->load->helper('file');
    }
    
    // FUNGSI AWAL 
	public function index()
	{
        $user = $this->m_register;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run() ) {
            $user->save();
            $this->session->set_flashdata('success', 'Anda Berhasil Mendaftar Akun, Silahkan Login.');     
        }
        
        $this->load->view('v_register');
    }
}