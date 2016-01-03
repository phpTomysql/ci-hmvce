<?php
class Blog_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function blogList() {
        
       $this->db->select("b.blogtitle , substring(b.blogtext,1,100) AS blogtext , b.postdate ,b.blogid ,u.email",false);
       $this->db->from('blog b');
       $this->db->join('users u', 'u.userid = b.userid');
       $query = $this->db->get();
       return $query->result();

    }
    
    public function blogSingle( $pid ) {
        
       $this->db->select("b.blogtitle , b.blogtext , b.postdate ,b.blogid ,u.email",false);
       $this->db->from('blog b');
       $this->db->join('users u', 'u.userid = b.userid');
       $this->db->where('b.blogid',$pid);
       $query = $this->db->get();
       return $query->result();

    }
}