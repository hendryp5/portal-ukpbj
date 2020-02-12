<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * Description of Dashboard
 * @author IMAM SYAIFULLOH
 */
class Userpartials extends MX_Controller
{
    public function __construct()
    {
     parent::__construct();
    }
 
    public function index($data=NULL,$page = NULL)
    {
     $data['title'] = 'Lesson HMVC Part 2';     
     $this->load->view('v_head',$data);     
     $this->load->view('v_footer',$data);
    }
}
?>