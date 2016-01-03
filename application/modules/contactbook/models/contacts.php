<?php
class Contacts extends CI_Model {

  public $id;
  public $name;
  public $number;
  public $city;
  private $table = 'contacts';
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    private function insert() {
    		
    	return	$this->db->insert($this->table,$this);
    }

    private function update(){
    			$this->db->where('id' , $this->id);
    		return	$this->db->update($this->table,array('name'=>$this->name,'number'=>$this->number,'city'=>$this->city));
    }

    public function save() {

    	if($this->id > 0) {
    		return $this->update();
    	}else{
    		return $this->insert();
    	}
    }


}
    
