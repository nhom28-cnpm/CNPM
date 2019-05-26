<?php

class user {

	public $id       = 0;
	public $username = '';
	public $role = '';
 		//public $email    = '';

	public function __construct(){

		$this->get();
	}

	public function get(){
		global $database, $session;

		if ( ! $this->isLogged()){
			return;
		}

		$user = $database->table('user_login')->getSingle($session->get('logged_user'));

		$this->id       = $user->id;
		$this->username = $user->username;
		//$this->email    = $user->email;
	}

	public function login($username, $password){
		global $database, $session;

		$sql = "SELECT * FROM user_login WHERE username=? AND password=?";
		$user = $database->getBySql($sql, [$username, sha1($password)]);

		if ($user){
			$session->set('logged_user', $user[0]->id);
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function isLogged(){
		global $session;
		return $session->has('logged_user');
	}

	public function logout(){
		global $session;
		$session->remove('logged_user');
		return TRUE;
	}

	public function changePassword($newPassword){
		global $database;

		$database->updatepassword($this->id, ['password' => sha1($newPassword)]);

		return true;
	}
}

?>