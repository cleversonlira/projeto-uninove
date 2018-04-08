<?php
	include '../DAO/PedidoDAO.php';	
	include '../Model/Pedido.php';
	date_default_timezone_set('America/Sao_Paulo');

	echo "Entrou na controller <br>";

	$dao = new PedidoDAO();	
	$pedido = new Pedido();

	//Verifica se Salvar foi pressionado.
	if(isset($_POST['cadastro-pedido'])){
		//Seta os dados dos campos nos atributos de Mercadoria.
		echo "Isset controller <br>";

		$pedido->setId($_POST['id']);
		$pedido->setNome($_POST['nomenclatura']);
		$pedido->setValor($_POST['valor']);		
		
		
		//Grava no Banco.
		$dao->addPedido($pedido);
	}
	
	
	 $redirect = "../templates/visualiza.php"; 
	 header("location:$redirect");
	
	echo $pedido->getNome()."<br>";
	echo $pedido->getId()."<br>";
	echo $pedido->getValor()."<br>";
	echo "Fim controller";
?>