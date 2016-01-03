<?php

class Login_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function login($email , $pass) {
        $this->db->select('userid , email');
        $query = $this->db->get_where('users', array('email' => $email,'password'=>$pass));
        if($query->num_rows() > 0 ) {
            return  $query->result_array();
        }else {
            return false;
        }
    }
}
