<?php
class giaovienController extends controller {


	public static function create(){
	
		
		$insert = giaovien::create([
		
			'id' => input::post('id'),
			'magv' => input::post('magv'),
			'hoten' => input::post('hoten'),
			'ngaysinh' => input::post('ngaysinh'),
			'diachi' => input::post('diachi'),
			'gioitinh' => input::post('gioitinh'),
			'dienthoai' => input::post('dienthoai'),
			'email' => input::post('email'),
			'makhoa' => input::post('makhoa')
			
		]);

		if($insert){
			helper::redirect('admin', 'quanligv');
		}else{
			echo "Chưa thêm được giáo viên";
		}
	}

		public function update(){

		$update = giaovien::update(
	
			input::post('id'),

			
			
			[
			'magv' => input::post('magv'),
			'hoten' => input::post('hoten'),
			'ngaysinh' => input::post('ngaysinh'),
			'diachi' => input::post('diachi'),
			'gioitinh' => input::post('gioitinh'),
			'dienthoai' => input::post('dienthoai'),
			'email' => input::post('email'),
			'makhoa' => input::post('makhoa')

			]);



		if($update){
			helper::redirect('admin', 'quanligv');
		}else{
			echo "Chưa sửa được giáo viên";
		}
}

	public function delete(){
		$delete = giaovien::delete([
			'id' => input::post('id')

		]);
	if($delete){
			helper::redirect('admin', 'quanligv');
		}else{
			echo "Chưa xóa được giáo viên";
		}
	}
}


?>