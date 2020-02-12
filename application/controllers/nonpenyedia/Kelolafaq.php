<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolafaq extends CI_Controller {
    
    // NON PENYEDIA

	public function __construct()
    {
        parent::__construct();
        //load model faq
        $this->load->model('m_faq');
        //load model dashboard for alert notif
        $this->load->model('m_nondashboard');
    }

	public function index()
	{
        if($this->session->userdata('level')==='NONPENYEDIA'){
            $data["nonpenyedia"] = $this->m_nondashboard->datanonpenyedia();
            $data['show_faqketerangan']=$this->m_faq->show_faqketerangan();
            $data['show_faqkategori']=$this->m_faq->show_faqkategori();
            $data['getdata_kategori'] = $this->m_faq->getdata_kategori()->result();
            $this->load->view('nonpenyedia/non_hkelolafaq/v_kelolafaq', $data);
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

    // -----------------------------
    // | BEGIN HELPDESK KELOLA FAQ | 
    // -----------------------------
    // ** BEGIN FAQ KETERANGAN **
    function simpan_faqketerangan(){
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

		$id_faqketerangan=$this->input->post('id_faqketerangan');
		$id_faqkategori=$this->input->post('id_faqkategori');
        $judul=$this->input->post('judul');
        $keterangan=$this->input->post('keterangan');
        $pembuat=$this->session->userdata('username');
        $created=$now;
        $updated=date('0000-00-00 00:00:00');
		$this->m_faq->simpan_faqketerangan($id_faqketerangan,$id_faqkategori,$judul,$keterangan,$pembuat,$created,$updated);
		redirect('nonpenyedia/kelolafaq');
	}

	function edit_faqketerangan(){
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

		$id_faqketerangan=$this->input->post('id_faqketerangan');
		$id_faqkategori=$this->input->post('id_faqkategori');
        $judul=$this->input->post('judul');
        $keterangan=$this->input->post('keterangan');
        $pembuat=$this->session->userdata('username');
        $created=$this->input->post('created');
        $updated=$now;
		$this->m_faq->edit_faqketerangan($id_faqketerangan,$id_faqkategori,$judul,$keterangan,$pembuat,$created,$updated);
		redirect('nonpenyedia/kelolafaq');
    }

    function hapus_faqketerangan(){
        $id_faqketerangan=$this->input->post('id_faqketerangan');
        $this->m_faq->hapus_faqketerangan($id_faqketerangan);
        redirect('nonpenyedia/kelolafaq');
    }
    // ** END FAQ KETERANGAN **
    //
    // ** BEGIN FAQ KATEGORI **
    function simpan_faqkategori(){
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

		$id_faqkategori=$this->input->post('id_faqkategori');
		$kategori=$this->input->post('kategori');
		$pembuat=$this->session->userdata('username');
        $created=$now;
        $updated=date('0000-00-00 00:00:00');
		$this->m_faq->simpan_faqkategori($id_faqkategori,$kategori,$pembuat,$created,$updated);
		redirect('nonpenyedia/kelolafaq');
	}

	function edit_faqkategori(){
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

		$id_faqkategori=$this->input->post('id_faqkategori');
		$kategori=$this->input->post('kategori');
		$pembuat=$this->input->post('pembuat');
        $created=$this->input->post('created');
        $updated=$now;
		$this->m_faq->edit_faqkategori($id_faqkategori,$kategori,$pembuat,$created,$updated);
		redirect('nonpenyedia/kelolafaq');
    }

    function hapus_faqkategori(){
        $id_faqkategori=$this->input->post('id_faqkategori');
        $this->m_faq->hapus_faqkategori($id_faqkategori);
        redirect('nonpenyedia/kelolafaq');
    }
    // ** END FAQ KATEGORI **
    // ---------------------------
    // | END HELPDESK KELOLA FAQ |
    // ---------------------------

    
}