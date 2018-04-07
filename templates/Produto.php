<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery Mobile: Theme Download</title>
		<link rel="stylesheet" href="css/novo.min.css" />
		<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>	
		<div data-role="header" data-position="inline">
			<div class="container center">
			<h1><b>Cadastro de Produtos</b></h1>
			</div>
		</div>

		<div class="container center">
			<form >
				<div class="col-sm-8">
					<label for="nome_produto"><h3>Nome:</h3></label>
					<input type="text" name="nome_produto" placeholder="Digite o nome/Sabor do novo Produto">
				</div>
			
				<div class="col-sm-8">
					<label for="descricao"><h3>Descrição:</h3></label>
					<input type="text" name="descricao" placeholder="Digite de forma breve e resumida os ingredientes do novo produto">
				</div>

				<div class="col-sm-6">
					<label for="categoria"><h3>Selecione a Categoria:</h3></label>
     				<select id="categoria" name="categoria" data-native-menu="false" data-theme="a" data-form="ui-btn-up-a" tabindex="-1">
        				<option value="Comida">Comida</option>
        				<option value="Bebida">Bebida</option>
        				<option value="Sobremesa">Sobremesa</option>
      				</select>
				</div>


				<div class="col-sm-8">

					<input type="submit" name="cadastro-produto" class="ui-btn ui-corner-all ui-btn-a ui-btn-active ui-radio-on ui-first-child" value="Cadastrar" data-toggle="modal" data-target="#myModal">
					<br><br><br><br><br><br>
				</div>
			
			</form>
		</div>

		<div data-role="header" data-position="inline">
			<div class="container center">
			<h1><b>Consulta de Produtos</b></h1>
			</div>
		</div>
		<div class="container">
		<div class="col-sm-8">
					<label for="pesquisa_produto"><h3>Busca:</h3></label>
					<input type="search" name="pesquisa_produto" placeholder="Consulte produtos já cadastrados">
				</div>
</div>


		<!-- Modal -->
  			<div class="modal fade" id="myModal" role="dialog">
    			<div class="modal-dialog modal-md">
      				<div class="modal-content">
        				<div class="modal-header">
        					<div class="col-md-8">
          					<span>Produto cadastrado com sucesso!</span>	
        					</div>
        				</div>
      			  	
      			  		<div class="modal-footer primary">
      			  			
      			  				<span>Toque em qualquer lugar para continuar</span>	
        				</div>
      				
      				</div>
    			</div>
  			</div>

	<style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: left;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>


	</body>
</html>