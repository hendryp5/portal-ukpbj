<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_nonpengguna extends CI_Model
{
    // PENYEDIA
    
    // TABEL DB
    private $_table = "tb_user";

    // INISIALISASI
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
    public function getById($id_user)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id_user])->row();
    }

    // FUNGSI MENYIMPAN
    public function save()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $post = $this->input->post();
        $this->id_user = uniqid('kisar_');
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
        $this->id_user = $post["id_user"];
        $this->user_email = $post["user_email"];
        $this->user_password = $post["user_password"];
        $this->user_nama = $post["user_nama"];
        $this->user_hp = $post["user_hp"];
        $this->user_alamat = $post["user_alamat"];

        if (!empty($_FILES["user_card"]["name"])) {
            $this->user_card = $this->_uploadCard();
        } else {
            $this->user_card = $post["user_cardold"];
        }

        if (!empty($_FILES["user_photo"]["name"])) {
            $this->user_photo = $this->_uploadCard();
        } else {
            $this->user_photo = $post["user_photoold"];
        }

        $this->created = $post["created"];
        $this->updated = $now;
        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }

    // FUNGSI MENGHAPUS
    public function delete($id_admin)
    {
        $this->_deleteImage($id_admin);
        // $this->_deletePdf($id_admin);
        return $this->db->delete($this->_table, array("id_admin" => $id_admin));
    }

    // --------------------BEGIN UPLOAD----------------------------

    // FUNGSI UPLOAD CARD PER ID
    private function _uploadCard()
    {
    $config['upload_path']          = './assets/upload/file_pengguna/penyedia/ktp';
    $config['allowed_types']        = 'jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id_user;
    $config['overwrite']			= true;
    $config['max_size']             = 102400; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('user_card')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    // FUNGSI HAPUS IMAGE PER ID
    private function _deleteImage($id_user)
    {
        $pengguna = $this->getById($id_user);
        if ($pengguna->user_card != "default.jpg") {
            $filename = explode(".", $pengguna->file_pendukung)[0];
            return array_map('unlink', glob(FCPATH."assets/upload/file_pengguna/penyedia/ktp/$filename.*"));
        }
    }

    // ***
    
    // FUNGSI UPLOAD PHOTO PER ID
    private function _uploadPhoto()
    {
    $config['upload_path']          = './assets/upload/file_pengguna/penyedia/photo';
    $config['allowed_types']        = 'jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id_user;
    $config['overwrite']			= true;
    $config['max_size']             = 102400; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('user_photo')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    // FUNGSI HAPUS IMAGE PER ID
    private function _deletePhoto($id_user)
    {
        $pengguna = $this->getById($id_user);
        if ($pengguna->user_photo != "default.jpg") {
            $filename = explode(".", $pengguna->user_photo)[0];
            return array_map('unlink', glob(FCPATH."assets/upload/file_pengguna/penyedia/photo/$filename.*"));
        }
    }

    // ------------------END UPLOAD------------------------------

    // BEGIN AMBIL DATA PENGGUNA PER ID
    function datapengguna(){
        $id = $this->session->userdata('id_user');

        $this->db->where('id_user',$id);
        $datapengguna = $this->db->get('tb_user');
        
        return $datapengguna->result_array();    
    }
    // END AMBIL DATA PENGGUNA PER ID
}