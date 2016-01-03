<?php 

class Register_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function register( $data ) {
        
        if($this->db->insert('users', $data )){
            return true;
        } else {
            return false;
        }
    }
    
    public function checkUser($email , $pass) {
        $query = $this->db->get_where('users', array('email' => $email,'password'=>$pass));
        echo $query->num_rows();die;
    }
}