<?php
class postController extends controller {


	public static function create(){
	
		
		$insert = Post::create([
			'id' => input::post('id'),
			'masv' => input::post('masv'),
			'hoten' => input::post('hoten'),
			'ngaysinh' => input::post('ngaysinh'),
			'diachi' => input::post('diachi'),
			'gioitinh' => input::post('gioitinh'),
			'makhoa' => input::post('makhoa')

		]);

		if($insert){
			helper::redirect('admin', 'dashboard');
		}else{
			echo "Chưa thêm được sinh viên";
		}
	}

	public function delete(){
		$delete = Post::delete([
			'id' => input::post('id')

		]);
	if($delete){
			helper::redirect('admin', 'dashboard');
		}else{
			echo "Chưa xóa được sinh viên";
		}
	}

	public function update(){
		$update = Post::update(
	
			 input::post('id'), 
			
			
			[
			'masv' => input::post('masv'),
			'hoten' => input::post('hoten'),
			'ngaysinh' => input::post('ngaysinh'),
			'diachi' => input::post('diachi'),
			'gioitinh' => input::post('gioitinh'),
			'makhoa' => input::post('makhoa')

			]);

			if($update){
			helper::redirect('admin', 'dashboard');
		}else{
			echo "Chưa sửa được sinh viên";
		}
	}


	
}


?>