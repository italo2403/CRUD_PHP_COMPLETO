<?php 
require 'config.php';


$usuario = [];
$Id = filter_input(INPUT_GET, 'Id');
if($Id){
	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE Id = :Id");
	$sql->bindValue(':Id', $Id);
	$sql->execute();

if($sql->rowCount() > 0){
	$usuario = $sql->fetch(PDO::FETCH_ASSOC);

 }else{
 	header("Location: index.php");
 	exit;
 }

}else{
	header("Location: index.php");
}
?>

<h1>Editar Cadastro</h1>
<form method="POST" action="editar_action.php">
	<input type="hidden" name="Id" value="<?=$usuario['Id'];?>">
	<label>
		Nome:<input type="text" name="nome" value="<?=$usuario['nome'];?>" />
	</label>
	<label>
		Email:<input type="text" name="email" value="<?=$usuario['email'];?>"/>
	</label>
	<input type="submit" name="Atualizar"/>
</form>
