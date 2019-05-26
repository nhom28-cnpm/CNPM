<?php

class admin extends controller {

	public function index(){
		global $database, $session;
		$user = new user();
		$errors = [];

		if (input::has('login')){
			if ($user->login(input::post('username'), input::post('password'))){
				helper::redirect('admin', 'trangquantri');
			}
			else {
				echo'Sai tên đăng nhập hoặc mật khẩu';
			}
		}

		$this->loadView('admin_login', ['errors' => $errors]);
	}

	public function dashboard(){
		global $database;

		$this->checkLoggedIn();
		$user = new user();
		//$khoa = new khoa();
		//$giaovien =  new giaovien(2);
		$PostCollection = new PostCollection();
		$posts = $PostCollection
		//->ofGiaovien($giaovien)
		->paginate(5)
		->get();



		$this->loadView(
			'dashboard',
			[
				'user' => $user,
				'posts' => $posts,
				'khoas' => khoa::getAll(),
				
			]
		);
	
	}

	public function trangquantri(){
		global $database;

		$this->checkLoggedIn();
		$user = new user();
		$this->loadView(
			'trangquantri',
			[
				'user' => $user
				//'posts' => $posts,
				//'giaoviens' => giaovien::getAll(),
				//'khoas' => khoa::getAll()
			]
		);
	
	}

		public function quanligv(){
		global $database;
			$this->checkLoggedIn();
		$user = new user();
		$GiaovienCollection = new GiaovienCollection();
		$gvs = $GiaovienCollection
		//->ofGiaovien($giaovien)
		->paginate(5)
		->get();


		$this->loadView(
			'quanligv',
			[
				//'user' => $user,
				'gvs' => $gvs,
				'khoas' => khoa::getAll()
			]
		);
	
	}

	public function quanlydiem(){
		global $database;
		$this->checkLoggedIn();
		$user = new user();
		$DiemCollection = new DiemCollection();
		$diems = $DiemCollection
		//->ofDiem($giaovien)
		->limit(20)
		->get();
		$this->loadView(
			'quanlidiem',
			[
				//'user' => $user,
				'diems' => $diems,
				'posts' => Post::getAll(),
				'thamgiahocphans' => thamgiahocphan::getAll(),
				'hocphans' => hocphan::getAll()
			]
		);
	
	}


	public function tim_kiem(){
		$db = new database();
		if(input::get('tukhoa')){
			$key = input::get('tukhoa');
			$db_timkiem = $db->table('sinhvien')->search($key);
		}
		
		$this->loadView(
			'timkiemsv',
			[
				'db_timkiem' => $db_timkiem,
				'giaoviens' => giaovien::getAll(),
				'khoas' => khoa::getAll()
			]
		);

}
		
		public function tim_kiemgv(){
		$db = new database();
		if(input::get('tukhoa')){
			$key = input::get('tukhoa');
			$db_timkiem = $db->table('giangvien')->searchGV($key);
		}
		$this->loadView(
			'timkiemgv',
			[
				'db_timkiem' => $db_timkiem,
				'khoas' => khoa::getAll()
			]
		);


		}

	public function changePassword(){
		global $database, $session, $validation;

		$this->checkLoggedIn();

		$user = new user();

		if (input::has('changePassword')) {

			$errors = $validation->validate([
				'new_password' => [
					'is_number' => true
				],
				'new_password' => [
					'min_length' => 6,
					'max_length' => 30,
				],
			]);


			if (count($errors) > 0){
				return;
			}

			$user = new user();
		
		if (input::has('changePassword')){
			if ($user->changePassword(input::post('new_password'))){
				echo "Bạn đã đổi mật khẩu thành công";
			}
			else {
				echo "Bạn chưa đổi mật khẩu";
			}
		}
	}
		
	$this->loadView(
			'admin_change_password',
			[
				'user' => $user
			]
		);
	}

	public function checkLoggedIn(){
		$user = new user();

		if ( ! $user->isLogged() ){
			helper::redirect('admin', 'index');
		}
	}

	public function logout(){
		$user = new user();
		if ($user->logout()){
			helper::redirect('admin', 'index');
		}
	}
}

?>