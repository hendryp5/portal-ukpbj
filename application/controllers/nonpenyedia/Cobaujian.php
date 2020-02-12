<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobaujian extends CI_Controller {

    // NON PENYEDIA

    public function __construct()
    {
        parent::__construct();
        //load model auth login casis
        $this->load->model('m_main');
        $this->load->model("m_nonujianonline");
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        // PDF
        // $this->load->library('pdf');
    }
    
	public function index()
	{    
        // if($this->m_main->logged_id()){
            $this->load->view('nonpenyedia/non_ujianonline/v_cobabuka');
        // }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            // redirect("main");
        // }
    }

	public function add()
    {
        // if($this->m_main->logged_id()){
            // MENGAMBIL DATA TAHUN AJARAN
            // $data['tahunpel']=$this->m_datacasis->tahunpel();
            // $data["casis"] = $this->m_datacasis->datacasis();
            
            $casis = $this->m_nonujianonline;
            $validation = $this->form_validation;
            $validation->set_rules($casis->rules());

            if ($validation->run()) {
                $casis->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $this->load->view("nonpenyedia/non_ujianonline/v_cobadd");
        // }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            // redirect("main");
        // }
    }

    public function edit($id_casis = null)
    {
        if($this->m_main->logged_id()){
            if (!isset($id_casis)) redirect('casis/datacasis');
       
            $casis = $this->m_datacasis;
            $validation = $this->form_validation;
            $validation->set_rules($casis->rules());
    
            if ($validation->run()) {
                $casis->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
    
            // MENGAMBIL DATA TAHUN AJARAN
            $data['tahunpel']=$this->m_datacasis->tahunpel();
    
            $data["casis"] = $casis->getById($id_casis);
            
            if (!$data["casis"]) show_404();
            
            $this->load->view("casis/f_casis/v_editcasis", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }

    public function delete($id_casis=null)
    {
        if($this->m_main->logged_id()){
            if (!isset($id_casis)) show_404();
        
            if ($this->m_datacasis->delete($id_casis)) {
                //$this->load->view('admin/f_akun/v_akun');
                redirect(site_url('casis/f_casis/v_datacasis'));
            }
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
	}
    // END AKUN 
    
    
    // BEGIN CETAK FPDF
    // function cetak(){
    //     $pdf = new FPDF('P','mm','Legal');
        
    //     // membuat halaman baru
    //     $pdf->AddPage();      

    //     // BEGIN HEADER
    //     $pdf->Image('assets/images/kalselprov.png',10,6,30);

    //     // setting jenis font yang akan digunakan
    //     $pdf->SetFont('Times','B',13);
        
    //     $pdf->Cell(190,0,'PEMERINTAH PROVINSI KALIMANTAN SELATAN',0,1,'C');
    //     $pdf->Cell(190,9,'DINAS PENDIDIKAN DAN KEBUDAYAAN',0,1,'C');

    //     $pdf->SetFont('Times','B',17);
    //     $pdf->Cell(190,3,'SMA NEGERI 2 KINTAP',0,1,'C');
    //     $pdf->SetFont('Times','B',13);
    //     $pdf->Cell(190,9,'TERAKREDITASI B',0,1,'C');

    //     $pdf->SetFont('Times','',9);
    //     $pdf->Cell(190,0,'Alamat : Jl. A. Yani KM. 14/151 RT.09/03 Desa Sungai Cuka Kec.Kintap',0,1,'C');
    //     $pdf->Cell(190,6,'Kabupaten Tanah Laut Provinsi Kalimantan Selatan 70883',0,1,'C');
    //     $pdf->Cell(190,0,'Web : smanegeri2kintap.sch.id Email : halo@smanegeri2kintap.sch.id',0,1,'C');
    //     // END HEADER

    //     // LINE
    //     $pdf->SetLineWidth(1);
    //     $pdf->Line(17, 40, 215-17, 40);

    //     // SPACE
    //     $pdf->Cell(190,7,'',0,1);

    //     // BEGIN ATAS
    //     $pdf->SetFont('Times','',11);
    //     $pdf->Cell(190,5,'FORMULIR PPDB',0,1,'C');
    //     $pdf->SetLineWidth(0);
    //     $pdf->Cell(99,6,'Tahun Pelajaran',0,0,'R');
    //     $pdf->Cell(11,6,'2018/2019',0,0,'L');
    //     $pdf->Cell(190,7,'',0,1);
    //     // END ATAS

    //     // BEGIN BLOK A
    //     $pdf->SetLineWidth(0);
    //     $pdf->SetFont('Times','B',10);
    //     $pdf->Cell(190,7,'',0,1);
    //     $pdf->Cell(11,6,'A.',1,0,'R');
    //     $pdf->Cell(85,6,'Data Pribadi Calon Peserta Didik',1,0);
        
    //     $pdf->SetFont('Times','',10);

    //     $mahasiswa = $this->db->get('tb_casis')->result();

    //     foreach ($mahasiswa as $row){
    //         // $pdf->Cell(20,6,$row->id_casis,1,0);
    //         // $pdf->Cell(85,6,$row->id_akuncasis,1,0);
    //         // $pdf->Cell(27,6,$row->hp_siswa,1,0);
    //         // $pdf->Cell(25,6,$row->tanggal_lahir,1,1);
    //     }
    //     $pdf->Output();
    // }
    // END CETAK FPDF

    // BEGIN CETAK FORMULIR 1.
    public function cetakformulir(){
        if($this->m_main->logged_id()){
            $data["casis"] = $this->m_datacasis->datacasis();
            $this->load->view('casis/f_cetakformulir/v_cetakformulir', $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("main");
        }
    }
    // END CETAK FORMULIR 1.

    // BEGIN CETAK DOMPDF 2.
    public function cetak(){

        // $data = array(
        //     "dataku" => array(
        //         "nama" => "Petani Kode",
        //         "url" => "http://petanikode.com"
        //     )
        // );
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('Legal', 'potrait');
        $this->pdf->filename = "Formulir PPDB SMAN2KINTAP.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);

        // MENGAMBIL DATA TAHUN AJARAN
        $data['tahunpel']=$this->m_datacasis->tahunpel();
        // MENGAMBIL DATA CASIS
        $data["casis"] = $this->m_datacasis->datacasis();
        $this->pdf->load_view('casis/f_casis/v_cetakcasis', $data);
    }
    // END CETAK DOMPDF 2.


}