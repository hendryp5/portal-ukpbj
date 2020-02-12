<?php
class M_main extends CI_Model{
 
  //fungsi cek session
  function logged_id()
  {
      return $this->session->userdata('id_user');
  }

  function validate($email,$password){
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tb_user',1);
    return $result;
  }

  // FORGOT PASSWORD

}