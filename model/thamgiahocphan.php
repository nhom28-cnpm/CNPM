<?php
class thamgiahocphan {
	public $id   		  = 0;
	public $masv   		  = '';
	public $magv    = '';
	public $hp_id    = 0;
	public $tenlop    = '';

	public function __construct(){
      
	}
	public static function getAll(){
		global $database;
		return $database->table('thamgiahocphan')->getAll();
	} 

	public function get(){
		global $database;

		$hocphan = $database->table('thamgiahocphan')->getSingle($this->id);
		$this->tenhp = $hocphan->tenhp;

		return $this;
	}
}

?>