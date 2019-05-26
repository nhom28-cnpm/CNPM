<?php
class khoa {
	public $id   		  = null;
	public $TenKhoa       = '';
	
	

	public function __construct($id){
		$this->id = $id;
		$this->get();
	}


	//public static function create($postData){
		//global $database;
		//return $database->table('giaoviens')->insert($postData);

	public static function getAll(){
		global $database;
		return $database->table('khoa')->getAll();
	} 

	public function get(){
		global $database;

		$khoa = $database->table('khoa')->getSingle($this->id);
		$this->TenKhoa = $khoa->TenKhoa;

		return $this;
	}
}
?>