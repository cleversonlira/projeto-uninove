<?php 
	include 'Connection.php';

	class ProdutoDAO
	{
		
		public function addProduto($produto)
		{
			#private $id;		
			#private $nome;
			#private $valor;

			$insert = "INSERT INTO Produto (nome, valor, idTipoProduto)
			VALUES (?, ?, ?);";
			
			$connect = new Connection();
			$connect = $connect->conecta();

			try{
				$stmt = $connect->prepare($insert);
				
				$stmt->bindValue(1, $produto->getNome());
				$stmt->bindValue(2, $produto->getValor());
				$stmt->bindValue(3, $produto->getId());

				$stmt->execute();				
			} catch(PDOException $e) {
				echo $e->getMessage();
				echo "Houve erro na Inserção dos dados no banco!";
			}
		}

		public function buscaCategorias() 
		{
			$select = "SELECT *	FROM TipoProduto;";
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