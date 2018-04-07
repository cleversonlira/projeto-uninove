<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Comanda</title>
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
    			<h1><b>Seja Bem Vindo a Nossa Pizzaria!</b></h1><br> 
    			<p>Faça seu pedido de forma e pratica pelo aplicativo e acompanhe o andamento em tempo real.</p> 
 			</div>
 			</div>
		


		<div class="container center">
			<form >

			<div class="col-sm-2">
					<label for="contato">Número da mesa:</label>
					<select id="mesa" name="mesa" data-native-menu="false" data-theme="a" data-form="ui-btn-up-a" tabindex="-1">
    					<option value="1">1</option>
        				<option value="2">2</option>
        				<option value="3">3</option>
        				<option value="4">4</option>
        				<option value="5">5</option>
        				<option value="6">6</option>
        				<option value="7">7</option>
        				<option value="8">8</option>
        				<option value="9">9</option>
        				<option value="10">10</option>
					</select>	
				</div>



				<div class="col-sm-6">
					<label for="produto"><span>Selecione a Pizza :</span></label>
     				<select id="produto" name="produto" data-native-menu="false" data-theme="a" data-form="ui-btn-up-a" tabindex="-1">
        				<option value="Mussarela">Mussarela</option>
        				<option value="Calabresa">Calabresa</option>
        				<option value="Portuguesa">Portuguesa</option>
        				<option value="Frango com Catupiry">Frango com Catupiry</option>
      					<option value="Marguerita">Marguerita</option>
      				</select>
				</div>
			
				<div class="col-sm-8">
					<label for="bebida"><span>Selecione uma Bebida:</span></label>
     				<select id="bebida" name="bebida" data-native-menu="false" data-theme="a" data-form="ui-btn-up-a" tabindex="-1">	
        				<option></option>
        				<option value="Refrigerante 350ml">Refrigerante 350ml</option>
        				<option value="Refrigerante 600ml">Refrigerante 600ml</option>
        				<option value="Refrigerante 2L">Refrigerante 2L</option>
        				<option value="Cerveja 350ml">Cerveja 350ml</option>
        				<option value="Cerveja 600ml">Cerveja 600ml</option>

      				</select>

				</div>
				
			

				<div class="col-sm-8">
					<input type="button" name="butao" class="ui-btn ui-corner-all ui-btn-a ui-btn-active ui-radio-on ui-first-child" value="Cadastrar">
				</div>
			
			</form>
		</div>
	</body>
</html>