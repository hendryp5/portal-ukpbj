<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beritadaninformasi extends CI_Controller {

    // PENYEDIA 
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('main');
        }

        //load model auth login
        $this->load->model('m_main');
        // model berita informasi
        $this->load->model('m_pberita');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_ppengguna');
        //Memuat file helper
        $this->load->helper('file');
    }
    
    public function index(){
        if($this->m_main->logged_id()){
            if($this->session->userdata('level')==='PENYEDIA'){
                $data["viewberita"] = $this->m_pberita->viewberita();
                $data["viewinformasi"] = $this->m_pberita->viewinformasi();
                $data["pengguna"] = $this->m_ppengguna->datapengguna();
                $this->load->view('penyedia/p_berita/v_mainberitainformasi', $data);
            }else{
                echo "Akses Ditolak!";
                redirect('main');
            }
        }else{
                //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    public function semuaberita(){
        if($this->m_main->logged_id()){
            if($this->session->userdata('level')==='PENYEDIA'){
                // $data["viewberita"] = $this->m_pberita->viewberita();
                // $data["viewinformasi"] = $this->m_pberita->viewinformasi();

                // ---------------berita-------------- //
                $this->load->library('pagination');

                //konfigurasi pagination
                $config['base_url'] = site_url('penyedia/beritadaninformasi/semuaberita/'); //site url
                // $config['total_rows'] = $this->db->count_all('tb_beritadaninformasi', array('jenis','berita'));
                $config['total_rows'] = $this->m_pberita->hitungtotalrowberita(); //total row
                $config['per_page'] = 6;  //show record per halaman
                $config["uri_segment"] = 4;  // uri parameter
                $choice = $config["total_rows"] / $config["per_page"];
                $config["num_links"] = floor($choice);

                // Membuat Style pagination untuk BootStrap v4
                $config['first_link']       = 'Pertama';
                $config['last_link']        = 'Terakhir';
                $config['next_link']        = 'Selanjutnya';
                $config['prev_link']        = 'Sebelumnya';
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
                $config['full_tag_close']   = '</ul></nav></div>';
                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
                $config['num_tag_close']    = '</span></li>';
                $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
                $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['prev_tagl_close']  = '</span>Next</li>';
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
                $config['first_tagl_close'] = '</span></li>';
                $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['last_tagl_close']  = '</span></li>';

                $this->pagination->initialize($config);
                $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

                //panggil function get_berita_list yang ada pada mmodel M_pberita. 
                $data['data'] = $this->m_pberita->get_berita_list($config["per_page"], $data['page']);   

                $data['pagination'] = $this->pagination->create_links();
                // ---------------berita-------------- //

                $this->load->view('penyedia/p_berita/v_semuaberita', $data);
        }else{
            echo "Akses Ditolak!";
            redirect('main');
        }
        }else{
                //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    public function semuainformasi(){
        if($this->m_main->logged_id()){
            if($this->session->userdata('level')==='PENYEDIA'){
                // $data["viewberita"] = $this->m_pberita->viewberita();
                // $data["viewinformasi"] = $this->m_pberita->viewinformasi();

                // ---------------informasi-------------- //
                $this->load->library('pagination');

                //konfigurasi pagination
                $config['base_url'] = site_url('penyedia/beritadaninformasi/semuainformasi'); //site url
                // $config['total_rows'] = $this->db->count_all('tb_beritadaninformasi', array('jenis','berita'));
                $config['total_rows'] = $this->m_pberita->hitungtotalrowinformasi(); //total row
                $config['per_page'] = 6;  //show record per halaman
                $config["uri_segment"] = 4;  // uri parameter
                $choice = $config["total_rows"] / $config["per_page"];
                $config["num_links"] = floor($choice);

                // Membuat Style pagination untuk BootStrap v4
                $config['first_link']       = 'Pertama';
                $config['last_link']        = 'Terakhir';
                $config['next_link']        = 'Selanjutnya';
                $config['prev_link']        = 'Sebelumnya';
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
                $config['full_tag_close']   = '</ul></nav></div>';
                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
                $config['num_tag_close']    = '</span></li>';
                $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
                $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['prev_tagl_close']  = '</span>Next</li>';
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
                $config['first_tagl_close'] = '</span></li>';
                $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['last_tagl_close']  = '</span></li>';

                $this->pagination->initialize($config);
                $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

                //panggil function get_informasi_list yang ada pada model M_pberita. 
                $data['data'] = $this->m_pberita->get_informasi_list($config["per_page"], $data['page']);   

                $data['pagination'] = $this->pagination->create_links();
                // ---------------informasi-------------- //

                $this->load->view('penyedia/p_berita/v_semuainformasi', $data);
        }else{
            echo "Akses Ditolak!";
            redirect('main');
        }
        }else{
                //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    // // FUNGSI LIHAT
    public function lihatberita($url_berita = null)
    {
        if($this->m_main->logged_id()){
            if (!isset($url_berita)) redirect('penyedia/p_berita/v_semuaberita');
       
            $databerita = $this->m_pberita;

            $data["databerita"] = $databerita->getById($url_berita);
            if (!$data["databerita"]) show_404();
            
            $this->load->view("penyedia/p_berita/v_lihatberita", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    // // FUNGSI LIHAT
    public function lihatinformasi($url_berita = null)
    {
        if($this->m_main->logged_id()){
            if (!isset($url_berita)) redirect('penyedia/p_berita/v_semuainformasi');
       
            $datainformasi = $this->m_pberita;

            $data["datainformasi"] = $datainformasi->getById($url_berita);
            if (!$data["datainformasi"]) show_404();
            
            $this->load->view("penyedia/p_berita/v_lihatinformasi", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }
}