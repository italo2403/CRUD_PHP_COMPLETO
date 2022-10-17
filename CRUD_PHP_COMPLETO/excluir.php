<?php 
require 'config.php';

$Id = filter_input(INPUT_GET, 'Id');

if($Id){
	$sql = $pdo->prepare("DELETE FROM usuarios WHERE Id = :Id");
		$sql->bindValue(':Id', $Id);
		$sql->execute();
}

header("location: index.php");

?>