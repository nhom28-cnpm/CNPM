<?php
class diem {
	public $id   		  = 0;
	public $masv    = '';
	public $diemcc    = '';
	public $diemgk    = '';
	public $diemck      = '';
	public $diemtb   = '';
	public $hanhkiem    	= '';
	public $id_thamgiahocphan = 0;
	

	public function __construct(){
      
	}

	public static function create($postData){
		global $database;
		return $database->table('diem')->insert($postData);

	}
	public static function update($postWhere,$postUpdate){
		global $database;
		return $database->table('diem')->update($postWhere,$postUpdate);

	}

	public static function delete($postId){
		global $database;
		return $database->table('diem')->delete($postId);
	}
}

?>