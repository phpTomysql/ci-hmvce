<?php
class Blog extends MY_Model {

      protected $table    = 'blogs'; // table
      public $timestamps  = false;

    public function __construct() {
        parent::__construct();
    }
}