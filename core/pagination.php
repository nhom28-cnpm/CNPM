<?php

class pagination {

	protected $totalRows   = 0;
	protected $rowsPerPage = 10;
	protected $url         = '';
	protected $currentPage = 1;
	protected $totalPage   = 0;
	protected $cssId       = '';

	public function __construct( $url='',$totalRows = 100, $rowsPerPage = 10){
	    $this->url         = $url;
		$this->totalRows   = $totalRows;
		$this->rowsPerPage = $rowsPerPage;
		$this->currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$this->totalPage   = floor($this->totalRows / $this->rowsPerPage) + 1;
	}

	public function createPageLinks(){

		$html = '<ul>';
		// Loop page
		if($this->totalPage == 1){
			return $html = '';
		}
		for ($i = 1; $i <= $this->totalPage; $i++){
			if ($this->currentPage == $i){
				$html .= '<li><span>'.$i.'</span></li>';
			}
			else {
				$html .= '<li><a href="'.$this->url.'&page='.$i.'">'.$i.'</a></li>';
			}
			
		}

		if ($this->currentPage < $this->totalPage){
			$html .= '<li><a href="'.$this->url.'&page='.($this->currentPage + 1).'">Next</a></li>';
		}

		return $html;
	}
}

?>