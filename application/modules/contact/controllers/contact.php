<?php
class Contact extends MX_Controller {
    
    function __construct() {
        parent::__construct();
         $this->load->library('form_validation');
         $this->load->library('session');
    }
    public function index() {
        
       $data['title'] = 'Contact Us';
       $data['module'] = 'contact';
       $data['view_file'] = 'contactus';
       $this->load->module('tamplate');
       $this->tamplate->index($data); 
    }
    
    public function do_submit() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required|min_length[10]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
                    $this->session->set_flashdata('success','Woop ,Will get back to you !');
                    redirect('contact');
		}
    }
    
    
}