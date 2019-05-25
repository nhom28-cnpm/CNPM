<?php
class home extends controller
{
	public function index()
	{
		global $database;
		$limit  		= 16;
		if(! isset($_GET['page'])){
			$offset  	= 0;
		}
		else{
			$offset     = ($_GET['page'] - 1) * 16;
		}
		$sql  			= "SELECT * FROM giangvien LIMIT $limit OFFSET $offset ";
		$sqlcount  		= "SELECT count(id) as total FROM giangvien ";
		$listgv 		= $database->query($sql);
		$totalGV 	    = $database->query($sqlcount); 
		foreach($totalGV as $totalGV){
			$totalGV = $totalGV->total;
		}
		$url = helper::getUrl('home', 'index');
		$pagination 	= new pagination($url,$totalGV, $limit);
		$pagination 	= $pagination->createPageLinks();
		$keywordList	= new modelDanhsachtukhoa();
		$topKeywords    = $keywordList->getAllKeyword();
		$this->loadview('home', ['topKeywords' => $topKeywords, 'pagination' => $pagination, 'listgv' => $listgv, 'tongiaovien' => $totalGV]);
	}
	public function search()
	{
		global $database;
		// add keyword into database 
		$keywordList = new modelDanhsachtukhoa();
		$topKeywords = $keywordList->getAllKeyword();
		$keywordname = input::get('searchName');
		$keywordList->add($keywordname);
		// search 
		$limit  		= 16;
		if(! isset($_GET['page'])){
			$offset  	= 0;
		}
		else{
			$offset     = ($_GET['page'] - 1) * 16;
		}
		$sql  			= "SELECT * FROM `giangvien` WHERE hoten LIKE '%$keywordname%' LIMIT $limit OFFSET $offset";
		$sqlcount  		= "SELECT count(id) as total FROM giangvien WHERE hoten LIKE '%$keywordname%' LIMIT $limit OFFSET $offset ";
		$listgv 		= $database->query($sql);
		$totalGV 	    = $database->query($sqlcount); 
		foreach($totalGV as $totalGV){
			$totalGV = $totalGV->total;
		}

		//related search
		
		$sqlrelated     = "SELECT hoten FROM `giangvien` WHERE makhoa = ( SELECT makhoa from giangvien Where hoten LIKE '%$keywordname%')" ;
		$related        = $database->query($sqlrelated);
		// paginate
		$url = helper::getUrl('home', 'index');
		$pagination 	= new pagination($url,$totalGV, $limit);
		$pagination 	= $pagination->createPageLinks();
		$this->loadView('search_result',['related' => $related,'soluong' => $totalGV,'topKeywords' => $topKeywords, 'pagination' => $pagination, 'listgv' => $listgv]);
	}
}
