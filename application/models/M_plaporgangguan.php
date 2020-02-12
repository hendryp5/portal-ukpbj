<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_plaporgangguan extends CI_Model
{
    // PENYEDIA
    
    // TABEL DB
    private $_table = "tb_aduan";

    // INISIALISASI
    public $id_aduan;
    public $id_user;
    public $user_nama;
    public $tanggal;
    public $kategori;
    public $tipe;
    public $versi;
    public $judul;
    public $deskripsi;
    public $file_pendukung = "default.jpg";
    public $created;
    public $updated;

    // PERATURAN INPUT
    public function rules()
    {
        return [
            ['field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'required'],

            ['field' => 'tipe',
            'label' => 'Tipe',
            'rules' => 'required'],
            
            ['field' => 'versi',
            'label' => 'Versi',
            'rules' => 'required'],

            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    // MENGAMBIL SEMUA DATA DARI DB
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    // MENGAMBIL DATA PER ID
    public function getById($id_aduan)
    {
        return $this->db->get_where($this->_table, ["id_aduan" => $id_aduan])->row();
    }

    // FUNGSI MENYIMPAN
    public function save()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $tanggal = date('d-m-Y');

        $post = $this->input->post();
        $this->id_aduan = uniqid('aduan_');
        $this->id_user = $this->session->userdata('id_user');
        $this->user_nama = $this->session->userdata('username');
        $this->tanggal = $tanggal;
        $this->kategori = $post["kategori"];
        $this->tipe = $post["tipe"];
        $this->versi = $post["versi"];
        $this->judul = $post["judul"];
        $this->deskripsi = $post["deskripsi"];
        $this->file_pendukung = $this->_uploadImage();
        $this->created = $now;
        $this->updated = date('0000-00-00 00:00:00');

        $this->db->insert($this->_table, $this);
    }

    // FUNGSI MENGUBAH
    public function update()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        // if (!empty($_FILES["pdf"]["name"])) {
        //     $this->pdf = $this->_uploadPdf();
        // } else {
        //     $this->pdf = $post["old_pdf"];
        // }

        $this->tgl_dibuat = $post["tgl_dibuat"];
        $this->tgl_diubah = $now;
        $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
    }

    // FUNGSI MENGHAPUS
    public function delete($id_admin)
    {
        $this->_deleteImage($id_admin);
        // $this->_deletePdf($id_admin);
        return $this->db->delete($this->_table, array("id_admin" => $id_admin));
    }

    // FUNGSI UPLOAD IMAGE PER ID
    private function _uploadImage()
    {
    $config['upload_path']          = './assets/upload/file_aduan/penyedia';
    $config['allowed_types']        = 'jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id_aduan;
    $config['overwrite']			= true;
    $config['max_size']             = 102400; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file_pendukung')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    // FUNGSI HAPUS IMAGE PER ID
    private function _deleteImage($id_admin)
    {
    $akun = $this->getById($id_admin);
    if ($akun->file_pendukung != "default.jpg") {
	    $filename = explode(".", $akun->file_pendukung)[0];
		return array_map('unlink', glob(FCPATH."assets/upload/file_aduan/$filename.*"));
    }
    }

    // BEGIN AMBIL DATA ADUAN PER ID
    function dataaduan(){
        $id = $this->session->userdata('id_user');

        $this->db->where('id_user',$id);
        $this->db->order_by("created", "desc");
        $dataaduan = $this->db->get('tb_aduan');
        
        return $dataaduan->result();    
    }
    // END AMBIL DATA ADUAN PER ID
}