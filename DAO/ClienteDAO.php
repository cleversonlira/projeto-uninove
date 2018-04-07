<?php
	include '../model/Cliente.php';
	include 'Connection.php';
	date_default_timezone_set('America/Sao_Paulo');

	class ClienteDAO {

		public function addCliente($cliente) {
			
			$insert = "INSERT INTO Cliente(cpf, nome, telefone)
			VALUES (?, ?, ?);";
			
			$connect = new Connection();
			$connect = $connect->conecta();

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
			$connect = new Connection();
			$connect = $connect->conecta();			
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