<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_nonujianonline extends CI_Model
{
    // NON PENYEDIA
    
    // TABEL DB
    private $_table = "tb_pesertaujian";

    // INISIALISASI
    public $id_pesertaujian;
    public $id_user;
    public $user_email;
    public $user_level;
    public $user_nama;
    public $user_sertifikat;
    public $verifikasi_peserta;
    public $created;
    public $updated;

    // PERATURAN INPUT
    public function rules()
    {
        return [
            ['field' => 'user_sertifikat',
            'label' => 'User_sertifikat',
            'rules' => 'required'],
            ['field' => 'verifikasi_peserta',
            'label' => 'Verifikasi_peserta',
            'rules' => 'required']
        ];
    }

    // MENGAMBIL SEMUA DATA DARI DB
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    // MENGAMBIL DATA PER ID
    public function getById($id_pesertaujian)
    {
        return $this->db->get_where($this->_table, ["id_pesertaujian" => $id_pesertaujian])->row();
    }

    // FUNGSI MENYIMPAN
    public function save()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $verifikasi='T';

        $post = $this->input->post();

        $this->id_pesertaujian = uniqid('peserta_');
        $this->id_user = $post["id_user"];
        $this->user_email = $post["user_email"];
        $this->user_level = $post["user_level"];
        $this->user_nama = $post["user_nama"];
        $this->user_sertifikat = $this->_uploadImage();
        $this->verifikasi_peserta = $verifikasi;
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
    $config['upload_path']          = './assets/upload/file_pesertaujian/sertifikat';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['file_name']            = $this->id_pesertaujian;
    $config['overwrite']			= true;
    $config['max_size']             = 2048000; // 2MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('user_sertifikat')) {
        return $this->upload->data("file_name");
    }
    
    print_r($this->upload->display_errors());
    return "default.jpg";
    }

    // FUNGSI HAPUS IMAGE PER ID
    private function _deleteImage($id_admin)
    {
    $akun = $this->getById($id_admin);
    if ($akun->file_pendukung != "default.jpg") {
	    $filename = explode(".", $akun->file_pendukung)[0];
		return array_map('unlink', glob(FCPATH."assets/upload/file_pesertaujian/sertifikat/$filename.*"));
    }
    }

    // BEGIN AMBIL DATA NON PENYEDIA PER ID
    function datanonpenyedia(){
        $id = $this->session->userdata('id_user');

        $this->db->where('id_user',$id);
        $datanonpenyedia= $this->db->get('tb_user');
        
        return $datanonpenyedia->result_array();    
    }
    // END AMBIL DATA NON PENYEDIA PER ID

    // BEGIN AMBIL DATA NON PENYEDIA PER ID
    function datapendaftaran(){
        $id = $this->session->userdata('id_user');

        $this->db->where('id_user',$id);
        $datapendaftaran= $this->db->get('tb_pesertaujian');
        
        return $datapendaftaran->result_array();    
    }
    // END AMBIL DATA NON PENYEDIA PER ID
}

