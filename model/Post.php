<?php

class Post {
	public $id          = 0;
	public $masv 		= '';
	public $hoten       = '';
	public $ngaysinh    = '';
	public $diachi    = '';
	public $gioitinh      = '';
	public $makhoa  	= 0;

	public function __construct(){
      
	}

	public static function create($postData){
		global $database;
		return $database->table('sinhvien')->insert($postData);

	}
	public static function update($postWhere,$postUpdate){
		global $database;
		return $database->table('sinhvien')->update($postWhere,$postUpdate);

	}

	public static function delete($postId){
		global $database;
		return $database->table('sinhvien')->delete($postId);
	}
	public static function getAll(){
		global $database;
		return $database->table('sinhvien')->getAll();
	} 

	public function get(){
		global $database;

		$sinhvien = $database->table('sinhvien')->getSingle($this->id);
		$this->Hoten = $sinhvien->Hoten;

		return $this;
	}
}

?>