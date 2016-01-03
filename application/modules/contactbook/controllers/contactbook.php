<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactbook extends MX_Controller {
    
    public $module = "contactbook";
     function __construct() {
        parent::__construct();

     }
     
    public function index() {

        $data['title'] = "Add Contact";
        $data['module'] = $this->module;
        $data['view_file'] = "add_form";
        $this->load->module('tamplate');
        $this->tamplate->index($data); 

     }


     public function save() {

      $this->load->model('contacts');
      $contact =  new Contacts();
      $contact->id = 1;
        $contact->name    = $this->input->post('name');
        $contact->number  = $this->input->post('number');
        $contact->city    = $this->input->post('city');

      if($contact->save()){
        die('Saved');
      }

     }
}