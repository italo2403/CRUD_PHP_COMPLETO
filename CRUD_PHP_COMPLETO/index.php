<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if ($sql->rowCount()>0) {
	$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>

<html lang="pt-br">
<link rel="stylesheet" href="style.css">

<head>

<meta charset="utf-8"/>

<title>Cadastro Dividas</title>

</head>

<h1>Listagem</h1>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>
		
	<?php foreach ($lista as $usuarios): ?>
		<tr>
			<td><?=$usuarios['Id'];?></td>
			<td><?=$usuarios['nome'];?></td>
			<td><?=$usuarios['email'];?></td>
			<td>
				<a href="edit.php?Id=<?=$usuarios['Id'];?>">[Editar]</a>
				<a href="excluir.php?Id=<?=$usuarios['Id'];?>">[Excluir]</a>
			</td>
		</tr>

	<?php endforeach; ?>

</table>

<a href="cadastrar.php">Cadastrar Usuários</a>



</html>