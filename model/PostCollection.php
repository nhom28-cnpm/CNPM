<?php

class PostCollection {

	public $posts  = [];
	public $limit  = 10;
	public $offset = 0;

	public $filter = [];

	public function __construct(){

	}

	//public function ofGiaovien($giaovien){
		//$this->filter['gv_id'] = $giaovien->id;
		//return $this;
	//}

	public function limit($limit){
		$this->limit = $limit;
		return $this;
	}

	public function offset($offset){
		$this->offset = $offset;
		return $this;
	}

	public function paginate($trangSV){
		$page = input::get('page') ?? 1;
		$offset = ($page - 1) * $trangSV;
		$this->offset($offset);
		$this->limit($trangSV);

		return $this;

		
	}

	public function get(){
		global $database;

		$postsData = $database->table('sinhvien')
								->get($this->filter, $this->limit, $this->offset);

		foreach ($postsData as $postData) {
			$post = new Post();

			$post->id       = $postData->id;
			$post->masv       = $postData->masv;
			$post->hoten     = $postData->hoten;
			$post->ngaysinh       = $postData->ngaysinh;
			$post->diachi    = $postData->diachi;
			$post->gioitinh     = $postData->gioitinh;
			$post->makhoa      = $postData->makhoa;
			
			$this->posts[] = $post;

}

		return $this->posts;

	}

	public function totalRows(){
		global $database;
	return $database->table('sinhvien')->totalRows();
	}

}
	
?>