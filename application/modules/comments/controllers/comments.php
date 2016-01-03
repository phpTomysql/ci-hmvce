<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends MX_Controller {
    
     function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
         $this->load->model('comments/comment_model' , 'cm');
     }
     
     public function index( $pid ) {
     
      $data['pid'] = $pid ;
      $this->load->view('index' , $data);

     }
     
     public function do_submit() {
       $pid     =  $this->input->post('blogid');
       $comment =  $this->input->post('comment');
        
          $this->form_validation->set_rules('comment', 'Comment', 'required|min_length[10]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
		{
		
                      $this->session->set_flashdata('error','Comment can not be blank!');
                      redirect('blog/single/'.$pid);
		}
		else
		{
                   
                    $data = array('userid'=>  is_user(),'blogid'=>$pid,'comment'=>$comment,'commentdate'=>time());
                    if($this->cm->saveComment($data)) {
                    $this->session->set_flashdata('success','Woop ,Comment Saved !');
                    redirect('blog/single/'.$pid);
                    }else {
                      $this->session->set_flashdata('error','Comment can not be saved!');
                      redirect('blog/single/'.$pid);
		
                    }
                   
		}
        
        
        
        
     }
     
     public function commentlist( $pid ) {
        $data['comments'] = $this->cm->commentlist( $pid );
        $this->load->view('commentList',$data);
     }
}