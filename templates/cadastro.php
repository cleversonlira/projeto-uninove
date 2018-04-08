<?php include '../DAO/ProdutoDAO.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Teste</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Cadastro Cliente Teste</h2>
	<form action="../controller/ClienteController.php" method="post" accept-charset="utf-8">
		<input type="tel" name="telefone" value="" placeholder="(11)98242-8106"><br>
		<input type="text" name="nome" value="" placeholder="João da Silva"><br>
		<input type="text" name="cpf" value="" placeholder="068.069.957-99"><br>
		<input type="submit" name="cadastrar" value="Cadastrar"><br>
	</form>
	
	<h2>Cadastro Produto Teste</h2>
	<form action="../controller/ProdutoController.php" method="post" accept-charset="utf-8">
		Nome:<input type="text" name="nomenclatura" value="" placeholder="Calabresa"><br>
		Preço:<input type="text" name="valor" value="" placeholder="32,50"><br>
		Tipo: <input type="text" name="id" value="" placeholder="Bebida"><br>
		<input type="submit" name="cadastro-produto" value="Cadastrar"><br>
	</form>

	<?php foreach($categoria->buscaCategorias() as $categorias) {?>
		<?php echo $categorias->nome."<br>"; ?>
	}?>
</body>
</html>