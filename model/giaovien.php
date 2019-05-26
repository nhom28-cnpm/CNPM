<?php
class giaovien {
	public $id   		  = 0;
	public $magv       = '';
	public $hoten    = '';
	public $ngaysinh    = '';
	public $diachi      = '';
	public $gioitinh   = '';
	public $dienthoai	 = '';
	public $email ='';
	public $makhoa = 0;
	

	public function __construct(){
		//$this->id = $id;
		//$this->get();
	}

		public function getGV(){
		
	}


	public static function create($postData){
		global $database;
		return $database->table('giangvien')->insert($postData);

	}
	public static function update($postWhere,$postUpdate){
		global $database;
		return $database->table('giangvien')->update($postWhere,$postUpdate);

	}

	public static function delete($postId){
		global $database;
		return $database->table('giangvien')->delete($postId);
	}

	public static function search($postTimkiem){
		global $database;
		return $database->table('giangvien')->search($postTimkiem);

	}


	public static function getAll(){
		global $database;
		return $database->table('giangvien')->getAll();
	} 

	public function get(){
		global $database;

		$giaovien = $database->table('giangvien')->getSingle($this->id);
		$this->HotenGV = $giaovien->HotenGV;

		return $this;
	}

}
?>