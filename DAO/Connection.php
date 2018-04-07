<?php
	class Connection {

		private $connect;

		public function conecta() {
			$host = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "Restaurante";			

			try {		
				$this->connect = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $pass); 
			} catch(PDOException $e) {
				echo $e->getMessage();
				echo "Putz, Não Conectou! :(";
			}			
			return $this->connect;
		}

	}
?>