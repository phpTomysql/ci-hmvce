<?php

class Comment_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function saveComment($data) {
        if($this->db->insert('comments' , $data)){
            
            return true;
        }else {
            return false;
            
        }
    }
    
    public function commentlist( $pid ) {
        
       $this->db->select("*");
       $this->db->from('comments c');
       $this->db->join('users u', 'u.userid = c.userid');
       $this->db->where('c.blogid',$pid);
       $this->db->order_by('c.commentdate DESC');
       $query = $this->db->get();
       return $query->result();

    }
}
