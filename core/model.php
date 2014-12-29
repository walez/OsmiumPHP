<?php 
/**
* Model super Class
*/
class Model{
	protected $db;

	public function __construct() {
		$this->db = Database::init();
	}
	protected function _setSql($sql)
	{
		$this->_sql = $sql;
	}
	
	public function getAll($data = null)
	{
		if (!$this->_sql)
		{
			throw new Exception("No SQL query!");
		}
		
		$sth = $this->db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->fetchAll();
	}
	
	public function getRow($data = null)
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