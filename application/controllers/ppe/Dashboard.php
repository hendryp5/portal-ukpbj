<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    // PPE
	public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_dashboard');
    }

	public function index()
	{
        if($this->session->userdata('level')==='PPE'){
            $this->load->view('ppe/v_ppedashboard');
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