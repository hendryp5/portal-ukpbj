<?php
class Main extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_main');
  }
 
  function index()
  {
    if($this->m_main->logged_id()){
        if($this->session->userdata('level')==='PENYEDIA'){
          redirect('penyedia/dashboard');
        }elseif($this->session->userdata('level')==='NONPENYEDIA'){
          redirect('nonpenyedia/dashboard');
        }elseif($this->session->userdata('level')==='PPE'){
          redirect('ppe/dashboard');
        }else{
          redirect('main');
        }
    }else{
        $this->load->view('v_main');
    }
  }
 
  function auth()
  {
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->m_main->validate($email,$password);
    
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $id_user  = $data['id_user'];
        $name  = $data['user_nama'];
        $jenis_kelamin  = $data['jenis_kelamin'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $hp = $data['user_hp'];
        $alamat = $data['user_alamat'];
        $status = $data['user_status'];
        $datalengkap = $data['user_datalengkap'];
        $user_photo = $data['user_photo'];
        $no_ktp = $data['no_ktp'];
        $sesdata = array(
            'id_user'  => $id_user,
            'username'  => $name,
            'jenis_kelamin'  => $jenis_kelamin,
            'email'     => $email,
            'level'     => $level,
            'hp'     => $hp,
            'alamat'     => $alamat,
            'status'     => $status,
            'datalengkap'     => $datalengkap,
            'user_photo'     => $user_photo,
            'no_ktp'     => $no_ktp,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'PPE'){
            redirect('ppe/dashboard');
 
        // access login for penyedia
        }elseif($level === 'PENYEDIA'){
            redirect('penyedia/dashboard');
 
        // access login for nonpenyedia
        }elseif($level === 'NONPENYEDIA'){
            redirect('nonpenyedia/dashboard');

        // access login for author
        }else{
            redirect('page/author');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username atau Password Salah!');
        redirect('main');
    }
  }
 
  function logout()
  {
      $this->session->sess_destroy();
      redirect('main');
  }
 
  // FORGOT PASSWORD
  public function lupapassword()
  {
    $this->load->view('v_forgotpassword');
  }

}