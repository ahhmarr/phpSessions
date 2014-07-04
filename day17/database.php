<?php
	class Database 
	{
		public $host,$user,$pass,$dbName,$db,$result,$totRows;
		function __construct($host,$user,$pass,$db){
			$this->host=$host;
			$this->user=$user;
			$this->pass=$pass;
			$this->dbName=$db;
			$this->db=mysqli_connect($this->host,
				$this->user,$this->pass,$this->dbName);
		}
		public function query($query)
		{
			$this->result= mysqli_query($this->db,$query);
			$this->totRows=mysqli_num_rows($this->result);
			$this->affectedRows=mysqli_affected_rows($this->result);
			return $this->result;
		}

	}
	$db=new Database("localhost","root","123456","demo_blog");

?>