<?php
	include '../DAO/ProdutoDAO.php';	
	include '../Model/Produto.php';
	date_default_timezone_set('America/Sao_Paulo');

	echo "Entrou na controller <br>";

	$dao = new ProdutoDAO();	
	$produto = new Produto();

	//Verifica se Salvar foi pressionado.
	if(isset($_POST['cadastro-produto'])){
		//Seta os dados dos campos nos atributos de Mercadoria.
		echo "Isset controller <br>";

		$produto->setId($_POST['id']);
		$produto->setNome($_POST['nomenclatura']);
		$produto->setValor($_POST['valor']);		
		
		if ($produto->getId() == "Bebida") {
			$produto->setId(1);
		} elseif ($produto->getId() == "Comida") {
			$produto->setId(2);
		} else {
			$produto->setId(3);
		}
		//Grava no Banco.
		$dao->addProduto($produto);
	}
	
	$redirect = "../templates/Produto.php"; 
	header("location:$redirect");	
?>