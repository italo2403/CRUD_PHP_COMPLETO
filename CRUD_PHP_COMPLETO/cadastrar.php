<!DOCTYPE html>

<html lang="pt-br">
<link rel="stylesheet" href="style.css">

<head>

<meta charset="utf-8"/>

<title>Cadastro Dividas</title>

</head>

<body>
	
	<h1 class="cadastrar">cadastrar</h1>

	<form method="POST" action="cadastrar_action.php">
		
		<label>
		Nome: <input type="text" name="nome"/>
		</label>
		<label>
		email <input type="email" name="email"/>
		</label>
		<input type="submit" value="salvar"/>
	</form>

</body>
</html>