<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|For call front theme 
|$this->tamplate->front($data); 
|--------------------------------
|For call admin theme 
|$this->tamplate->admin($data); 

*/

class Articles extends Front_Controller {
    
     function __construct() {

        parent::__construct();
        $this->load->model('article');
        $this->load->model('user');
     }
     
    function index() {
        
       // $custom = User::leftJoin('articles' , 'users.id' ,'=','articles.user_id')->get();
      //  print_r($custom);

       //var_dump(User::custom());
        
        $data['title']      = "Articles";
        $data['module']     = "articles";
        $data['view_file']  = "articles";

        /* 
        |Find all articles with specific user 
        |Model User
        |Model Article 
        */

        $user = User::with("articles")->find(1);

        /* 
        |Find all articles with specific coloumns 
        |Model Article 
        */

        $data['articles'] = Article::all();
        /* 
        |Find article by id & relation to user  
        |Model Article 
        |Model User
        */

        /* BOTH ARE SIMILAR */
        // $user = Article::with("users")->find(3);
        // $user = Article::find(3);
        /* BOTH ARE SIMILAR */

        $users = Article::all();

        foreach ($users as $user) {
       //    var_dump($user->users->name);
        }
       

       
      
        $this->tamplate->front($data); 
      //  $this->tamplate->admin($data); 


     }
}