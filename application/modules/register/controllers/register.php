<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MX_Controller {
    
     function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
     }
     
    function index() {
        
        $data['title'] = 'Register';
        $data['module'] = "register";
        $data['view_file'] = 'register_form';
        $this->load->module('tamplate');
        $this->tamplate->index($data); 


     }
     
     public function do_submit() {
         
         //$this->load->model('module_name/model_name','alias');
         
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
         $this->form_validation->set_rules('password', 'Password', 'required|max_length[50]');

              if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
                    
                    $this->load->model('register/register_model','rm');
                     $email = $this->input->post('email');
                     $pass  = $this->input->post('password');
                    $data = array(
                    'email' => $email ,
                    'password' => $pass
                    );
                    if($this->rm->register( $data )){
                    $this->session->set_flashdata('success','Woop you are registred with us ,Now login !');
                    redirect('login');
                    }else {
                    $this->session->set_flashdata('error','Please try again !');
                    redirect('register');
                  
                    }
     
                    
                    
                   
		}
         
         
         
         
         
         
         
     }
}