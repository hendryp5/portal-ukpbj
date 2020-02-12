<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporgangguan extends CI_Controller {

    // PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }

        //load model auth login
        $this->load->model('m_main');
        //load data lapor gangguan
        $this->load->model("m_plaporgangguan");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //Memuat file helper
        $this->load->helper('file');
    }
    
	public function index()
	{
        if($this->m_main->logged_id()){
            if($this->session->userdata('level')==='PENYEDIA'){
                $data["dataaduan"] = $this->m_plaporgangguan->dataaduan();
                $this->load->view('penyedia/p_laporgangguan/v_laporgangguan', $data);
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
        }else{
             //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    // FUNGSI SIMPAN
	public function add()
    {
        if($this->m_main->logged_id()){
            $laporgangguan = $this->m_plaporgangguan;
            $validation = $this->form_validation;
            $validation->set_rules($laporgangguan->rules());
    
            if ($validation->run()) {
                $laporgangguan->save();
                $this->session->set_flashdata('success', 'Laporan gangguan anda berhasil kami terima!');
                redirect('penyedia/laporgangguan/add');
            }
    
            $this->load->view("penyedia/p_laporgangguan/v_tambahlaporgangguan");
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    // // FUNGSI LIHAT
    public function lihat($id_aduan = null)
    {
        if($this->m_main->logged_id()){
            if (!isset($id_aduan)) redirect('penyedia/p_laporgangguan/v_laporgangguan');
       
            $detaillaporgangguan = $this->m_plaporgangguan;
            $validation = $this->form_validation;
            $validation->set_rules($detaillaporgangguan->rules());
    
            if ($validation->run()) {
                $detaillaporgangguan->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
    
            $data["dataaduans"] = $this->m_plaporgangguan->dataaduan();

            $data["dataaduan"] = $detaillaporgangguan->getById($id_aduan);
            if (!$data["dataaduan"]) show_404();
            
            $this->load->view("penyedia/p_laporgangguan/v_lihatlaporgangguan", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }
}