<?php 

	class Conexion
	{
		private $host;
		private $db;
		private $user;
		private $pass;
		function __construct()
		{
			$this->host="localhost";
			$this->db="productosPhp";
			$this->user="root";
			$this->pass="abdc1234";
		}
		public function getConexion()
		{
			    $gbd = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			    return $gbd;
			
		}
	}

 ?>