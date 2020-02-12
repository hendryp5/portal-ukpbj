<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    // AWAL
    
    //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    // BEGIN AMBIL DATA CASIS
    function datacasis(){
        $id = $this->session->userdata('user_id');

        $this->db->where('id_akuncasis',$id);
        $datacasis= $this->db->get('tb_casis');
        
        return $datacasis->result_array();    
    }
    // END AMBIL DATA CASIS

    //  BEGIN AMBIL jadwal
    function jadwal(){
        $this->db->order_by('id_pendaftaran','DSC');
        $jadwals= $this->db->get('tb_pendaftaran');
        
        return $jadwals->result_array();    
    }
    //  END AMBIL jadwal
}
?>