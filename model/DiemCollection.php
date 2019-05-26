<?php

class DiemCollection {

	public $posts  = [];
	public $limit  = 10;
	public $offset = 0;

	public $filter = [];

	public function __construct(){

	}


	public function limit($limit){
		$this->limit = $limit;
		return $this;
	}

	public function offset($offset){
		$this->offset = $offset;
		return $this;
	}


	public function get(){
		global $database;

		$postsData = $database->table('diem')
								->get($this->filter, $this->limit, $this->offset);

		foreach ($postsData as $postData) {
			$d = new diem();

			$d->id       = $postData->id;
			$d->masv    = $postData->masv;
			$d->diemcc     = $postData->diemcc;
			$d->diemgk       = $postData->diemgk;
			$d->diemck    = $postData->diemck;
			$d->diemtb     = $postData->diemtb;
			$d->hanhkiem      = $postData->hanhkiem;
			$d->id_thamgiahocphan      = $postData->id_thamgiahocphan;
			

			$this->diems[] = $d;

}

		return $this->diems;

	}
}

	
?>