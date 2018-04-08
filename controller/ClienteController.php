<?php
	include '../DAO/ClienteDAO.php';	
	date_default_timezone_set('America/Sao_Paulo');

	$dao = new ClienteDAO();	
	$cliente = new Cliente();

	//Verifica se Salvar foi pressionado.
	if(isset($_POST['cadastrar'])){
		//Seta os dados dos campos nos atributos de Mercadoria.
		$cliente->setCpf($_POST['cpf']);
		$cliente->setNome($_POST['nome']);
		$cliente->setTelefone($_POST['telefone']);		

		//Grava no Banco.
		$dao->addCliente($cliente);
	}
	
	
	$redirect = "../templates/index.php"; 
	header("location:$redirect");	
?>