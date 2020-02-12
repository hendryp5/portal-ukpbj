<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kisar extends CI_Controller {

    // NON PENYEDIA 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }
        //load model auth login casis
        // $this->load->model('m_main');
        $this->load->model("m_pkisar");
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
                $data["datakisar"] = $this->m_pkisar->datakisar();
                $this->load->view('nonpenyedia/non_kisar/v_kisar', $data);
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
        // }else{
        //     //jika session belum terdaftar, maka redirect ke halaman login
        //     redirect("main");
        // }
    }

    // FUNGSI SIMPAN
	public function add()
    {
        // if($this->m_main->logged_id()){
            $kisar = $this->m_pkisar;
            $validation = $this->form_validation;
            $validation->set_rules($kisar->rules());
    
            if ($validation->run()) {
                $kisar->save();
                $this->session->set_flashdata('success', 'Berhasil di Kirim!');
            }
    
            $this->load->view("nonpenyedia/non_kisar/v_tambahkisar");
        // }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            // redirect("main");
        // }
    }

    // // FUNGSI UBAH
    public function edit($id_akuncasis = null)
    {
        if($this->m_main->logged_id()){
            if (!isset($id_akuncasis)) redirect('casis/f_akuncasis/v_editakuncasis');
       
            $akuncasis = $this->m_dataakuncasis;
            $validation = $this->form_validation;
            $validation->set_rules($akuncasis->rules());
    
            if ($validation->run()) {
                $akuncasis->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
    
            $data["akuncasis"] = $akuncasis->getById($id_akuncasis);
            if (!$data["akuncasis"]) show_404();
            
            $this->load->view("casis/f_akuncasis/v_editakuncasis", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    // // FUNGSI LIHAT
    public function lihat($id_kisar = null)
    {
        // if($this->m_pkisar->logged_id()){
            if (!isset($id_kisar)) redirect('nonpenyedia/non_kisar/v_kisar');
       
            $datakisar = $this->m_pkisar;
            $validation = $this->form_validation;
            $validation->set_rules($datakisar->rules());
    
            if ($validation->run()) {
                $dataaduan->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
    
            $data["datakisars"] = $this->m_pkisar->datakisar();

            $data["datakisar"] = $datakisar->getById($id_kisar);
            if (!$data["datakisar"]) show_404();
            
            $this->load->view("nonpenyedia/non_kisar/v_lihatkisar", $data);
        // }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            // redirect("main");
        // }
    }

    // // FUNGSI HAPUS
    public function delete($id_akuncasis=null)
    {
        if($this->m_main->logged_id()){
            if (!isset($id_akuncasis)) show_404();
        
            if ($this->m_dataakuncasis->delete($id_akuncasis)) {
                //$this->load->view('admin/f_akun/v_akun');
                redirect(site_url('casis/dataakuncasis'));
            }
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }
	// END AKUN 
}