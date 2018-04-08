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
			<h1><b>Cadastro de Clientes</b></h1>
			</div>
		</div>

		<div class="container center">
			<form action="../controller/ClienteController.php" method="post" accept-charset="utf-8">
				<div class="col-sm-8">
					<label for="nome"><h3>Nome:</h3></label>
					<input type="text" name="nome" placeholder="Ex: João da Silva">
				</div>
			
				<div class="col-sm-8">
					<label for="cpf"><h3>CPF:</h3></label>
					<input type="text" name="cpf" placeholder="Ex: 000.000.00-00">
				</div>
				
				<div class="col-sm-8">
					<label for="contato"><h3>Contato:</h3></label>
					<input type="tel" name="telefone" placeholder="Ex: (11)99999-9999">
				</div>

				<div class="col-sm-8">
					<input type="submit" name="cadastrar" class="ui-btn ui-corner-all ui-btn-a ui-btn-active ui-radio-on ui-first-child" value="Cadastrar">
				</div>
			
			</form>
		</div>

		<!-- Modal -->
  			<div class="modal fade" id="myModal" role="dialog">
    			<div class="modal-dialog modal-md">
      				<div class="modal-content">
        				<div class="modal-header">
        					<div class="col-md-8">
          					<span>Usuário cadastrado com sucesso!</span>	
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