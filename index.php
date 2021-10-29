<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div class="corpo">

		<section>
			<h1>Cadastro de Clientes</h1>
			<hr> <br> <br>

			

			<form method="post" action="processa.php" >
				
			<h3>	Nome    <br></h3>

			<input type="text" name="nome" class="campo" maxlength="30" required autofocus ><br>

			<h3>   Telefone <br></h3>

			<input type="number" name="number" class="campo" maxlength="20">
			<br>

			<h3>   CPF  <br></h3>
			
			<input type="tel" name="cpf" class="campo" maxlength="20" placeholder="Digite apenas os números">
			<br>
			

			
			<br> <br>
			
			
			<input type="submit" value="Salvar" class="btn">
			<input type="reset" value="Limpar" class="btn">
			<input type="submit" value="API" onclick="location.href='/api.php'" class="btn">
			</form>
		
		</section>

	</div>
</body>
</html>	

