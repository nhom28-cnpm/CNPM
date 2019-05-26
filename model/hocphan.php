<?php
class hocphan {
	public $id   		  = 0;
	public $mahp   		  = 0;
	public $tenhp    = '';
	

	public function __construct(){
      
	}
	public static function getAll(){
		global $database;
		return $database->table('hocphan')->getAll();
	} 

	public function get(){
		global $database;

		$hocphan = $database->table('hocphan')->getSingle($this->id);
		$this->tenhp = $hocphan->tenhp;

		return $this;
	}
}

?>