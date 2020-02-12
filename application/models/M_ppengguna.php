<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_ppengguna extends CI_Model
{
    // PENYEDIA
    
    // TABEL DB
    private $_table = "tb_user";

    // INISIALISASI
    public $id_user;
    public $user_email;
    public $user_password;
    public $user_level;
    public $user_nama;
    public $jenis_kelamin;
    public $user_hp;
    public $user_alamat;
    public $user_status;
    public $user_datalengkap;
    public $user_card = 'default.jpg';
    public $user_qrcode = 'default.jpg';
    public $user_photo = 'default.jpg';
    public $user_kebijakan;
    public $no_ktp;
    public $created;
    public $updated;

    // PERATURAN INPUT
    public function rules()
    {
        return [
            ['field' => 'user_alamat',
            'label' => 'Alamat',
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

    // FUNGSI MENGUBAH
    public function update()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $ya = 'Y';
        $tidak = 'T';
        $id_userpng = $this->session->userdata('id_user').'.png';

        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->no_ktp = $post["no_ktp"];
        $this->user_email = $post["user_email"];
        $this->user_password = $post["user_password"];
        $this->user_level = $post["user_level"];
        $this->user_nama = $post["user_nama"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->user_hp = $post["user_hp"];
        $this->user_alamat = $post["user_alamat"];
        $this->user_status = $post["user_status"];
        $this->user_datalengkap = $ya;

        if (!empty($_FILES["user_card"]["name"])) {
            $this->user_card = $this->_uploadCard();
        } else {
            $this->user_card = $post["user_cardold"];
        }

        $this->user_qrcode = $id_userpng;
        $this->_qrcodegenerate();

        if (!empty($_FILES["user_photo"]["name"])) {
            $this->user_photo = $this->_uploadPhoto();
        } else {
            $this->user_photo = $post["user_photoold"];
        }

        $this->user_kebijakan = $post["user_kebijakan"];
        
        $this->created = $post["created"];
        $this->updated = $now;

        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    }
    
    // FUNGSI UPLOAD CARD PER ID
    private function _uploadCard()
    {
    $configcard['upload_path']          = './assets/upload/file_pengguna/penyedia/ktp';
    $configcard['allowed_types']        = 'jpg|png|jpeg|bmp';
    $configcard['file_name']            = $this->id_user;
    $configcard['overwrite']            = true;
    $configcard['max_size']             = 102400; // 1MB
    $configcard['quality']              = '50%';
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    // $this->load->library('upload', $config);

    $this->load->library('upload',$configcard);
    $this->upload->initialize($configcard);

    if ($this->upload->do_upload('user_card')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    private function _qrcodegenerate(){
        // $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        // $config['cacheable']    = true; //boolean, the default is true
        // $config['cachedir']     = './assets/'; //string, the default is application/cache/
        // $config['errorlog']     = './assets/'; //string, the default is application/logs/
        // $config['imagedir']     = './assets/upload/file_pengguna/penyedia/qrcode/'; //direktori penyimpanan qr code
        // $config['quality']      = true; //boolean, the default is true
        // $config['size']         = '1024'; //interger, the default is 1024
        // $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        // $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        // $this->ciqrcode->initialize($config);
        
        // // encrypt ktp ke qrcode
        // $this->load->library('encrypt');
        // $key = 'uukpbjkabupatentanahlaut04022020'; //Key 32 character 

        // $no_ktp = $this->no_ktp; //call data no_ktp
        // $hasil_enkripsi = $this->encrypt->encode($no_ktp, $key);  

        // $id_user = $this->id_user; //call data id_user
        // $image_name=$id_user.'.png'; //buat name dari qr code sesuai dengan nim
 
        // $params['data'] = $hasil_enkripsi; //data yang akan di jadikan QR CODE
        // $params['level'] = 'H'; //H=High
        // $params['size'] = 10;
        // $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        // $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        // 

        $this->load->library('ciqrcode');

        $tempdir = "./assets/upload/file_pengguna/penyedia/qrcode/"; //Nama folder tempat menyimpan file qrcode
        if (!file_exists($tempdir)) //Jika tidak ada folder, maka buat folder bernama sesuai $tempdir
        mkdir($tempdir);

        //ambil logo
        $logopath="./assets/images/ukpbjlogo.png";

        // // encrypt ktp ke qrcode
        $this->load->library('encrypt');
        $key = 'uukpbjkabupatentanahlaut04022020'; //Key 32 character 

        //isi qrcode jika di scan
        $no_ktp = $this->no_ktp; //call data no_ktp
        $hasil_enkripsi = $this->encrypt->encode($no_ktp, $key);  
        $codeContents = $hasil_enkripsi;

        //simpan file qrcode
        $id_user = $this->id_user; //call data id_user
        QRcode::png($codeContents, $tempdir.$id_user.'.png', QR_ECLEVEL_H, 10,4);

        // ambil file qrcode
        $QR = imagecreatefrompng($tempdir.$id_user.'.png');

        // memulai menggambar logo dalam file qrcode
        $logo = imagecreatefromstring(file_get_contents($logopath));
         
        imagecolortransparent($logo , imagecolorallocatealpha($logo , 0, 0, 0, 127));
        imagealphablending($logo , false);
        imagesavealpha($logo , true);

        $QR_width = imagesx($QR);
        $QR_height = imagesy($QR);

        $logo_width = imagesx($logo);
        $logo_height = imagesy($logo);

        // Scale logo to fit in the QR Code
        $logo_qr_width = $QR_width/3;
        $scale = $logo_width/$logo_qr_width;
        $logo_qr_height = $logo_height/$scale;

        imagecopyresampled($QR, $logo, $QR_width/3.0, $QR_height/3.0, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

        // Simpan kode QR lagi, dengan logo di atasnya
        imagepng($QR,$tempdir.$id_user.'.png');
    }

    // FUNGSI UPLOAD CARD PER ID
    private function _uploadQrcode()
    {
    $configqrcode['upload_path']          = './assets/upload/file_pengguna/penyedia/qrcode';
    $configqrcode['allowed_types']        = 'jpg|png|jpeg|bmp';
    $configqrcode['file_name']            = $this->id_user;
    $configqrcode['overwrite']            = true;
    $configqrcode['max_size']             = 102400; // 1MB
    $configqrcode['quality']              = '50%';
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    // $this->load->library('upload', $config);

    $this->load->library('upload',$configqrcode);
    $this->upload->initialize($configqrcode);

    if ($this->upload->do_upload('user_qrcode')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    // FUNGSI UPLOAD PHOTO PER ID
    private function _uploadPhoto()
    {
        $configphoto['upload_path']          = './assets/upload/file_pengguna/penyedia/photo';
        $configphoto['allowed_types']        = 'jpg|png|jpeg|bmp';
        $configphoto['file_name']            = $this->id_user;
        $configphoto['overwrite']			= true;
        $configphoto['max_size']             = 102400; // 1MB
        $configphoto['quality']              = '50%';
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        // $this->load->library('upload', $config);

        $this->load->library('upload',$configphoto);
        $this->upload->initialize($configphoto);

        if ($this->upload->do_upload('user_photo')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    // BEGIN AMBIL DATA PENGGUNA PER ID
    function datapengguna(){
        $id = $this->session->userdata('id_user');

        $this->db->where('id_user',$id);
        $datapengguna = $this->db->get('tb_user');
        
        return $datapengguna->result_array();    
    }
}