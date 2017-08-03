<?php 

	/**
	* 
	*/
	class recordarConexion extends mysqli
	{
		private $host = 'localhost';
private $user = 'root';		
private $pass = '';
private $bd = 'miagenda';		 
		
		public function __construct()
		{
			parent:: __construct($this->host,$this->user,$this->pass,$this->bd);
			$this->set_charset('utf-8');
			if(mysqli_connect_error()){
				echo'falla';
			}else{
				echo'exito';
			}
		}
	}

	$conexion = new recordarConexion();
 ?>