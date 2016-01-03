<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Article Model
*/
//use Illuminate\Database\Eloquent\Model as Eloquent;
class Article extends MY_Model
{
  protected $table = 'articles'; // table
  public $timestamps = false;
	/* 
	|function users reverse 
	|Model Article
	|Purpose : Making relations between Article & User Model
	|return user of a article
	*/
    public function users(){
  		
  		/* belongsTo ('modelname' ,'forgin key','local key')*/
    	return	$this->belongsTo('user','user_id','id');

	}

  	
}