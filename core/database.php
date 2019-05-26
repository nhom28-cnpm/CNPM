<?php
/**
 * Database class
 * Author: nguyenbv
 */

class database {

	private $connection   = null;
	private $hostName     = null;
	private $username     = null;
	private $password     = null;
	private $databaseName = null;
	private $charset = 'utf8';

	private $table = '';

	public function __construct(){
		global $config;

		$this->hostname     = $config['database']['host_name'];
		$this->username     = $config['database']['user_name'];
		$this->password     = $config['database']['password'];
		$this->databaseName = $config['database']['database_name'];
		$this->connect();
	}

	public function connect(){
		$this->connection = new mysqli(
			$this->hostName,
			$this->username,
			$this->password,
			$this->databaseName
		);
		mysqli_set_charset($this->connection, $this->charset);
		if ($this->connection->connect_error){
			echo 'Không the ket noi csdl';
			exit();
		}
	}

	public function table($tableName){
		$this->table = $tableName;
		return $this;
	}

	public function insert($data){
		$fields        = implode(',', array_keys($data));
		$questionMarks = str_repeat('?,', count($data));
		$questionMarks = substr($questionMarks, 0, -1);

		$sql = "INSERT INTO ".$this->table."($fields) VALUES($questionMarks)";
		$types = str_repeat('s', count($data));
		$values = array_values($data);

		$statment = $this->connection->prepare($sql);
		$statment->bind_param($types, ...$values);
		$statment->execute();

		$this->reset();
	}
	public function insert_new($table = '', $data)
    {
        $keys = '';
        $values = '';
        foreach ($data as $key => $value) {
            $keys .= ',' . $key;
            $values .= ',"' . mysqli_real_escape_string($this->connection, $value) . '"';
        }
		$sql = 'INSERT INTO ' . $table . '(' . trim($keys, ',') . ') VALUES (' . trim($values, ',') . ')';
        return mysqli_query($this->connection, $sql);
    }
	public function getSingle($id){
		$sql = "SELECT * FROM ".$this->table." WHERE id=?";
		$statment = $this->connection->prepare($sql);
		$statment->bind_param('i', $id);
		$statment->execute();
		$result = $statment->get_result();
		if ($result->num_rows == 0){
			return null;
		}
		return $result->fetch_object();
	}

	public function get($where = [], $limit = 10, $offset = 0){

		$sql = 'SELECT * FROM '.$this->table;
		if (count($where) > 0){
			$whereString = '';
			foreach ($where as $key => $value) {
				$whereString .= $key.'=? AND ';
			}
			$whereString = substr($whereString, 0, -5);
			$sql .= " WHERE $whereString";
			// prepare condition
			$whereConditions = array_values($where);
		}
		$sql .= ' LIMIT ? OFFSET ?';

		$statment = $this->connection->prepare($sql);
		if (count($where) > 0){
			$params = array_merge($whereConditions, [$limit, $offset]);
			$statment->bind_param(str_repeat('s', count($params)), ...$params);
		}
		else {
		$statment->bind_param('iii',$whereConditions, $limit, $offset);
		}
		$statment->execute();

		$result = $statment->get_result();
		$returnData = [];

		while ($row = $result->fetch_object()) {
			$returnData[] = $row;
		}

		$this->reset();
		return $returnData;
	}

	public function totalRows($where = []){

		$sql = "SELECT count(*) AS total FROM ".$this->table;
		if (count($where) > 0){
			$whereString = '';
			foreach ($where as $key => $value) {
				$whereString .= $key.'=? AND ';
			}
			$whereString = substr($whereString, 0, -5);
			$sql .= " WHERE $whereString";
		}
		
		$statment = $this->connection->prepare($sql);

		if (count($where) > 0){
			$types           = str_repeat('s', count($where));
			$whereConditions = array_values($where);
			$statment->bind_param($types, ...$whereConditions);
		}

		$statment->execute();
		$result = $statment->get_result();

		$row = $result->fetch_object();

		return $row->total;

	}

	public function update($where, $data){
		if (gettype($where) == 'integer'){
			$where = ['id' => $where];
		}

		$keyValues = [];
		foreach ($data as $key => $value) {
			$keyValues[] = $key.'=?';
		}

		$set = implode(',', $keyValues);

		$whereString = '';
		foreach ($where as $key => $value) {
			$whereString .= $key.'=? AND ';
		}
		$whereString = substr($whereString, 0, -5);

		$sql = 'UPDATE '.$this->table." SET $set WHERE $whereString";

		$statment        = $this->connection->prepare($sql);
		$types           = str_repeat('s', count($data) + count($where));
		$sets            = array_values($data);
		$whereConditions = array_values($where);

		$statment->bind_param($types, ...$sets, ...$whereConditions);

		$statment->execute();
		$this->reset();
	}


	public function delete($where){
		if (gettype($where) == 'integer'){
			$where = ['id' => $where];
		}

		$whereString = '';
		foreach ($where as $key => $value) {
			$whereString .= $key.'=? AND ';
		}
		$whereString = substr($whereString, 0, -5);

		$sql = 'DELETE FROM '.$this->table." WHERE $whereString";

		$statment        = $this->connection->prepare($sql);
		$whereConditions = array_values($where);
		$types           = str_repeat('s', count($where));
		$statment->bind_param($types, ...$whereConditions);
		$statment->execute();
		$this->reset();
	}

	public function getBySql($sql, $params = []){
		$statment = $this->connection->prepare($sql);
		if ( !empty($params)){
			$types = str_repeat('s', count($params));
			$statment->bind_param($types, ...$params);
		}
		$statment->execute();
		$result = $statment->get_result();

		$returnData = [];

		while ($row = $result->fetch_object()) {
			$returnData[] = $row;
		}

		$this->reset();
		return $returnData;
	}

	protected function reset(){
		$this->table = '';
	}

    public function query($sql = '')
    {
        if ($result = mysqli_query($this->connection, $sql)) {
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_object($result)) {
                        $data[] = $row;
                    }
                    mysqli_free_result($result);
                    return $data;
                } else
                    return false;
            } else
            return false;
	}
	public function update_new($table = '', $data = [], $where = [])
    {
        $SET = '';
        foreach ($data as $key => $value) {
            $SET .= "$key = '$value',";
        }
        $SET = rtrim($SET, ', ');

        foreach ($where as $id => $idValue) { }
        $sql = "UPDATE $table SET $SET WHERE $id = $idValue";
        if (mysqli_query($this->connection, $sql)) {
            return true;
            
        }
        else{
            echo " dm";
        }
        return false;
    }

}

?>