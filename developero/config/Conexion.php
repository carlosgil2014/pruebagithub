<?php 
	class Conexion extends mysqli{
		private $HOST = 'localhost';
		private $USER = 'root';
		private $PASS = '';
		private $DB_NAME = 'miagenda';

		public function __construct(){
			parent:: __construct($this->HOST,$this->USER,$this->PASS,$this->DB_NAME);
			$this->set_charset('utf-8');

			$this->connect_errno ? die('error en la conexion'.mysqli_connect_errno())
			: $m ='conectado';
			//echo $m;
		}
	}
 ?>