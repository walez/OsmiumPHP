<?php 
namespace lib;

class Model
{
	
	function __construct()
	{
		$this->db =new \lib\Database();
	}
	protected function _setSql($sql)
	{
		$this->_sql = $sql;
	}
	
	public function getAll($data = null, $fetchMode = \PDO::FETCH_OBJ)
	{
		if (!$this->_sql){

			throw new Exception("No SQL query!");
		}
		
		$sth = $this->db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->fetchAll();
	}

	public function getRow($data = null, $fetchMode = \PDO::FETCH_OBJ)
	{
		if (!$this->_sql){

			throw new Exception("No SQL query!");
		}
		
		$sth = $this->db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->fetch();
	}
	public function update($table, $data, $where)
	{
		
		ksort($data);

		$fieldDetails = NULL;
		foreach($data as $key => $value){
			$fieldDetails .= "$key = :$key,";
		}
		$fieldDetails = rtrim($fieldDetails, ',');

		$whereDetails = NULL;
		$i = 0;
		foreach($where as $key => $value){
			if($i == 0){
				$whereDetails .= "$key = :$key";
			} else {
				$whereDetails .= " AND $key = :$key";
			}
			
		$i++;}
		$whereDetails = ltrim($whereDetails, ' AND ');

		$stmt = $this->db->prepare("UPDATE $table SET $fieldDetails WHERE $whereDetails");

		foreach($data as $key => $value){
			$stmt->bindValue(":$key", $value);
		}

		foreach($where as $key => $value){
			$stmt->bindValue(":$key", $value);
		}

		$stmt->execute();
		$this->count = $stmt->rowCount();
	}
}