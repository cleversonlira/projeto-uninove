<?php 
	/**
	*
	*/
	class PedidoDAO
	{
		public function addPedido($pedido)
		{
			$insert = "INSERT INTO Pedido(cpfCliente, mesa, itens, idStatusPedido)
			VALUES (?, ?, ?, ?);";
			
			$connect = new Connection();
			$connect = $connect->conecta();

			try{
				$stmt = $connect->prepare($insert);
				
				$stmt->bindValue(1, $pedido->getCpfCliente());
				$stmt->bindValue(2, $pedido->getMesa());
				$stmt->bindValue(3, $pedido->getItens());
				$stmt->bindValue(4, $pedido->getStatus());

				$stmt->execute();				
			} catch(PDOException $e) {
				echo $e->getMessage();
				echo "Houve erro na Inserção dos dados no banco!";
			}
		}
	}
?>