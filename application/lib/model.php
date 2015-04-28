<?php namespace lib;

/**
* 
*/
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
		if (!$this->_sql)
		{
			throw new Exception("No SQL query!");
		}
		
		$sth = $this->db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->fetchAll();
	}

	public function getRow($data = null, $fetchMode = \PDO::FETCH_OBJ)
	{
		if (!$this->_sql)
		{
			throw new Exception("No SQL query!");
		}
		
		$sth = $this->db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->fetch();
	}
}
 ?>