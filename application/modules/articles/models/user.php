<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* User Model
*/

class User extends MY_Model
{

	  protected $table 		= 'users'; // table
	  public $timestamps 	= false;


	/* 
	|function articles   
	|Model User
	|Purpose : Making relations between User & Article Model
	|return all articles of user
	*/
    public function articles(){

    	return	$this->hasMany('article', 'user_id');
	}

	public function custom() {

		$this->load->model("blog/blog");
		return Blog::all();
	}

	
}