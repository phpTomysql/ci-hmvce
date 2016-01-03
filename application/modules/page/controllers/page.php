<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MX_Controller {
    
     function __construct() {
        parent::__construct();
     }
     
    function index($page = NULL) {
        $data['title'] = $page;
        $data['module'] = "page";
        $data['view_file'] = $page;
        $this->load->module('tamplate');
        $this->tamplate->index($data); 


     }
     public function myupload() {
         
         
            print_r($_FILES); die;
         
//            $ds          = DIRECTORY_SEPARATOR;  //1
//
//            $storeFolder = 'uploads';   //2
//
//            if (!empty($_FILES)) {
//
//            $tempFile = $_FILES['file']['tmp_name'];          //3             
//
//            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
//
//            $targetFile =  $targetPath. $_FILES['file']['name'];  //5
//
//            move_uploaded_file($tempFile,$targetFile); //6
//
//            }
     }
}