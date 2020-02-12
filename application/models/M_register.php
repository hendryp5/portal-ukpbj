<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model
{
    // AWAL REGISTER
    
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
    public $user_card = "default.jpg"; 
    public $user_qrcode = "default.jpg";
    public $user_photo = "default.jpg";
    public $user_kebijakan;
    public $no_ktp;
    public $created;
    public $updated;

    // PERATURAN INPUT
    public function rules()
    {
        return [
            ['field' => 'user_email',
            'label' => 'Email',
            'rules' => 'required|is_unique[tb_user.user_email]'],

            ['field' => 'user_password',
            'label' => 'Password',
            'rules' => 'required'],
            
            ['field' => 'user_nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'user_hp',
            'label' => 'HP',
            'rules' => 'required'],

            ['field' => 'user_alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'user_kebijakan',
            'label' => 'Kebijakan',
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
        return $this->db->get_where($this->_table, ["id_aduan" => $id_user])->row();
    }

    // FUNGSI MENYIMPAN
    public function save()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s'); //memberikan waktu terkini
        $kosong = '-'; //memberikan string kosong
        $tidak = 'T'; //memberikan nilai T

        $post = $this->input->post();
        $this->id_user = uniqid('user_');
        $this->user_email = $post["user_email"];
        $this->user_password = md5($this->input->post('user_password'));
        $this->user_level = $post["user_level"];
        $this->user_nama = $post["user_nama"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->user_hp = $kosong;
        $this->user_alamat = $kosong;
        $this->user_status = $kosong;
        $this->user_datalengkap = $tidak;
        $this->user_kebijakan = $post["user_kebijakan"];
        $this->no_ktp = $kosong;
        $this->created = $now;
        $this->updated = date('0000-00-00 00:00:00');
        $this->db->insert($this->_table, $this);
    }

    // BEGIN AMBIL DATA ADUAN PER ID
    function dataaduan(){
        $id = $this->session->userdata('id_user');

        $this->db->where('id_user',$id);
        $dataaduan = $this->db->get('tb_aduan');
        
        return $dataaduan->result();    
    }
    // END AMBIL DATA ADUAN PER ID
}