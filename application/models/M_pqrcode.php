<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pqrcode extends CI_Model
{
    function viewqrcode(){
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user',$id);
        $viewqrcode= $this->db->get('tb_user');
        
        return $viewqrcode->result_array();
    }
}