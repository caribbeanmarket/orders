<?php 
class Model{
	
	protected $db;
	public function __construct()
	{
		$server_name = 'HOST-STORE\MSSQLSERVER2017';
		$this->db = new PDO( "sqlsrv:server=".$server_name." ; Database = BRDATA2", "sa", "BRd@t@123");

	}
}