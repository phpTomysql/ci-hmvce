<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tamplate extends MX_Controller {

  function __construct() {
        parent::__construct();
    }

    function front($data) { 
        $this->load->view("front/tamplate2",$data);
    }

    function admin($data) {
    	$this->load->view("admin/tamplate",$data);
    }
}