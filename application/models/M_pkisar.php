<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pkisar extends CI_Model
{
    // PENYEDIA
    
    // TABEL DB
    private $_table = "tb_kisar";

    // INISIALISASI
    public $id_kisar;
    public $id_user;
    public $user_nama;
    public $tanggal;
    public $kisar;
    public $created;
    public $updated;

    // PERATURAN INPUT
    public function rules()
    {
        return [
            ['field' => 'kisar',
            'label' => 'Kisar',
            'rules' => 'required']
        ];
    }

    // MENGAMBIL SEMUA DATA DARI DB
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    // MENGAMBIL DATA PER ID
    public function getById($id_kisar)
    {
        return $this->db->get_where($this->_table, ["id_kisar" => $id_kisar])->row();
    }

    // FUNGSI MENYIMPAN
    public function save()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $post = $this->input->post();
        $this->id_kisar = uniqid('kisar_');
        $this->id_user = $this->session->userdata('id_user');
        $this->user_nama = $this->session->userdata('username');
        $this->tanggal = $now;
        $this->kisar = $post["kisar"];
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
    $config['upload_path']          = './assets/upload/file_aduan';
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
    function datakisar(){
        $id = $this->session->userdata('id_user');

        $this->db->where('id_user',$id);
        $this->db->order_by("created", "desc");
        $datakisar= $this->db->get('tb_kisar');
        
        return $datakisar->result();    
    }
    // END AMBIL DATA ADUAN PER ID
}