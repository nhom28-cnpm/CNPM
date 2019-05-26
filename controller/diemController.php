<?php
class diemController extends controller {


	public static function create(){
	
		
		$insert = diem::create([	
		
			'id' => input::post('id'),
			'masv' => input::post('masv'),
			'diemcc' => input::post('diemcc'),
			'diemgk' => input::post('diemgk'),
			'diemck' => input::post('diemck'),
			'diemtb' => input::post('diemtb'),
			'hanhkiem' => input::post('hanhkiem'),
			'id_thamgiahocphan' => input::post('id_thamgiahocphan')

		]);

		if($insert){
			helper::redirect('admin', 'quanlydiem');
		}else{
			echo "Chưa thêm được điểm sinh viên";
		}
	}

		public function update(){

		$update = diem::update(
	
			input::post('id'),

			
			
			[
			'masv' => input::post('masv'),
			'diemcc' => input::post('diemcc'),
			'diemgk' => input::post('diemgk'),
			'diemck' => input::post('diemck'),
			'diemtb' => input::post('diemtb'),
			'hanhkiem' => input::post('hanhkiem'),
			'id_thamgiahocphan' => input::post('id_thamgiahocphan')

			]);



		if($update){
			helper::redirect('admin', 'quanlydiem');
		}else{
			echo "Chưa thêm được sinh viên";
		}
}

	public function delete(){
		$delete = diem::delete([
			'id' => input::post('id')

		]);
	if($delete){
			helper::redirect('admin', 'quanlydiem');
		}else{
			echo "Chưa xóa được sinh viên";
		}
	}
}


?>