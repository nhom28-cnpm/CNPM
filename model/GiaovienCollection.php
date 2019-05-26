<?php

class GiaovienCollection {

	public $posts  = [];
	public $limit  = 10;
	public $offset = 0;

	public $filter = [];

	public function __construct(){

	}

	public function ofGiaovien($giaovien){
		$this->filter['gv_id'] = $giaovien->id;
		return $this;
	}

	public function limit($limit){
		$this->limit = $limit;
		return $this;
	}

	public function offset($offset){
		$this->offset = $offset;
		return $this;
	}
		public function paginate($trangGV){
		$page = input::get('page') ?? 1;
		$offset = ($page - 1) * $trangGV;
		$this->offset($offset);
		$this->limit($trangGV);

		return $this;

		
	}


		public function get(){
		global $database;

		$postsData = $database->table('giangvien')
								->get($this->filter, $this->limit, $this->offset);

		foreach ($postsData as $postData) {
			$gv = new giaovien();

			$gv->id       = $postData->id;
			$gv->magv       = $postData->magv;
			$gv->hoten     = $postData->hoten;
			$gv->ngaysinh       = $postData->ngaysinh;
			$gv->diachi    = $postData->diachi;
			$gv->gioitinh     = $postData->gioitinh;
			$gv->dienthoai      = $postData->dienthoai;
			$gv->email      = $postData->email;
			$gv->makhoa      = $postData->makhoa;

			$this->gvs[] = $gv;

}

		return $this->gvs;
	}

	public function totalRows(){
		global $database;
	return $database->table('giangvien')->totalRows();
	}

}

	
?>