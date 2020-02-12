<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    // NON PENYEDIA

	public function __construct()
    {
        parent::__construct();
        //load model auth login casis
        // $this->load->model('m_main');
        $this->load->model('m_nondashboard');
    }

	public function index()
	{
		// if($this->m_main->logged_id())
        // {
        //     $this->load->view('casis/v_dashboardcasis');         

        // }else{
		// 	//jika session belum terdaftar, maka redirect ke halaman login
        //     redirect("main");
        // }
        
        // if($this->m_main->logged_id()){
            // $data["casis"] = $this->m_datacasis->datacasis();
            // $this->load->view('casis/v_dashboardcasis');  
        // }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            // redirect("main");
        // }

        if($this->session->userdata('level')==='NONPENYEDIA'){
            $data["nonpenyedia"] = $this->m_nondashboard->datanonpenyedia();
            $this->load->view('nonpenyedia/non_dashboard/v_dashboard', $data);
        }else{
            echo "Akses Ditolak!";
            redirect('main');
        }
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }
}