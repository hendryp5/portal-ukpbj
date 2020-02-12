<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // $this->load->model("product_model");
        $this->load->library('form_validation');
        $this->load->model('m_faq');
    }

	public function index()
	{
        $data["viewkategori"] = $this->m_faq->viewkategori();
        $data["viewketeranganlpse"] = $this->m_faq->viewketeranganlpse();
        $data["viewketeranganspse"] = $this->m_faq->viewketeranganspse();
        $data["viewketeranganapendo"] = $this->m_faq->viewketeranganapendo();
        $data["viewketerangansikap"] = $this->m_faq->viewketerangansikap();
        $data["viewketeranganadp"] = $this->m_faq->viewketeranganadp();
        $data["viewketerangansirup"] = $this->m_faq->viewketerangansirup();

		$this->load->view('v_faq', $data);
	}
}
