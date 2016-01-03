<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MX_Controller {
    
     function __construct() {
        parent::__construct();
     }
     
    function index() {
       
        $data['module'] = "menu";
        $data['view_file'] = "menu";
        //$this->load->module('tamplate');
       // $this->tamplate->index($data); 
        $this->load->view('menu');


     }
     
     function login_submit() {
         $email = $this->input->post('email');
         $pass  = $this->input->post('password');
         if($this->my_auth->login_auth($email , $pass)) {
             print_r($this->session->all_userdata());
             echo 'You are logged in';
         }else {
             echo 'Invalid Id/Pass';
         }
         
     }
     
     function logout() {
         if($this->my_auth->logout()){
             redirect("login");
         }
     }
     
     public function myupload() {
         
                $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']	= '0';
		$config['max_width']    = '0';
		$config['max_height']  = '0';
                $element                = 'file';

		$this->load->library('upload', $config);
               // $this->upload->do_upload();
		if ( ! $this->upload->do_upload($element,0755))
		{
			$error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
		}
		else
		{
			$error = array('upload_data' => $this->upload->data());
                       chmod($config['upload_path'].$error['upload_data']['file_name'], 0755);
			//$this->load->view('upload_success', $data);
		}
                
         print_r($error); die;
     }
}