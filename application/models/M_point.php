<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model
{
	// TABEL DB
    private $_table = "tb_point";

    public $id_point; 
    public $id_user;
    public $point;
    public $created;
    public $updated;

    // PERATURAN INPUT
    public function rules()
    {
        return [
            ['field' => 'point',
            'label' => 'Point',
            'rules' => 'required']
        ];
    }

    // FUNGSI MENYIMPAN
    public function save()
    {
        date_default_timezone_set('Asia/Makassar'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s'); //memberikan waktu terkini
        $kosong = '-'; //memberikan string kosong
        $tidak = 'T'; //memberikan nilai T
        $point500 = '500';

        $post = $this->input->post();

        $this->id_point = uniqid('point_');
        $this->id_user = $post["id_user"];
        $this->point = $point500;
        $this->created = $now;
        $this->updated = date('0000-00-00 00:00:00');

        $this->db->insert($this->_table, $this);
    }
}