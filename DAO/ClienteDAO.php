<?php
	include '../model/Cliente.php';
	date_default_timezone_set('America/Sao_Paulo');

	class ClienteDAO {

		//conecta no banco de dados.
		public function conecta() {
			$host = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "Restaurante";			

			try {		
				$connect = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $pass); 
			} catch(PDOException $e) {
				echo $e->getMessage();
				echo "Putz, Não Conectou! :(";
			}			
			return $connect;
		}

		public function addCliente($cliente) {
			
			$insert = "INSERT INTO Cliente(cpf, nome, telefone)
			VALUES (?, ?, ?);";
			
			$connect = $this->conecta();

			try{
				$stmt = $connect->prepare($insert);
				
				$stmt->bindValue(1, $cliente->getCpf());
				$stmt->bindValue(2, $cliente->getNome());
				$stmt->bindValue(3, $cliente->getTelefone());

				$stmt->execute();				
			} catch(PDOException $e) {
				echo $e->getMessage();
				echo "Houve erro na Inserção dos dados no banco!";
			}
		}

		public function buscaClientes() {
			$select = "SELECT *	FROM Cliente;";
			$connect = $this->conecta();
			try{
				$stmt = $connect->prepare($select);
				$stmt->execute();
				return $stmt->fetchAll(PDO::FETCH_OBJ);
			}catch(PDOException $e) {
				echo $e->getMessage();
				echo "Não buscou!";
			}
		}	

	}
?>