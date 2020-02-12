<?php
class M_bukutamu extends CI_Model{
 
  //fungsi cek session
  function logged_id()
  {
      return $this->session->userdata('id_user');
  }

  function validate($no_ktp){
    $this->db->where('no_ktp',$no_ktp);
    $result = $this->db->get('tb_user',1);
    return $result;
  }
}