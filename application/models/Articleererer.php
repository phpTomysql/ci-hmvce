<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Article Model
*/
use Illuminate\Database\Eloquent\Model as Eloquent;
class Article extends Eloquent
{
  public $timestamps = false;
}