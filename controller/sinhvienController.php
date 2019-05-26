<?php 
    class sinhvienController{
        public function login(){
            global $database;
            global $session ;
            $username = input::post('uname');    
            $password = input::post('psw'); 
            $sql      = "SELECT * FROM user_login WHERE username = '$username' and password = '$password' and role = 3";
            $rs       = $database->query($sql);
            if($rs){
                foreach ($rs as $user) {
                    $userID = $user->id;
                }
                $session->set('sinhvien',[
                    'id' => $userID
                ]);
                helper::redirect('home','index');
            }
            else{
                echo"Sai tên đăng nhập hoặc mật khẩu ";
            }

        }
        public function logout(){
            global $session;
            $session->remove('sinhvien');
            helper::redirect('home','index');
        }
    }

?>