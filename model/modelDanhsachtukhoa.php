<?php 
    class modelDanhsachtukhoa{
        public function add($keyword){
            global $database; 
            if($keyword == null){
                helper::redirect('home','index');
                return 0;
                
            }
            $soluong = 0;
            $sql = "SELECT * FROM danhsachtukhoa WHERE Tentukhoa LIKE '$keyword'";
            $rs  = $database->query($sql);
            if($rs != null){
                
                foreach($rs as $value){
                    $soluong = $value->soluong + 1;
                    $id      = $value->id;
                }
                $database->update_new('danhsachtukhoa',['soluong' => $soluong], ['id'=> $id]);
                

            }
            else{
            $database->insert_new('danhsachtukhoa',['Tentukhoa' => $keyword,'soluong' => 1]);
            }
        }
        public function getAllKeyword(){
            global $database; 
            $sql = "SELECT * FROM danhsachtukhoa ORDER BY soluong DESC LIMIT 52";
            $rs  = $database->query($sql);
            return $rs;
        }
    }
?>