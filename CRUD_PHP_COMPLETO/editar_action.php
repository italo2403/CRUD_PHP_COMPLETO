<?php 
require 'config.php';


$Id = filter_input(INPUT_POST, 'Id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($Id && $nome && $email){
	$sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE Id = :Id");
	$sql->bindValue('Id', $Id);
	$sql->bindValue(':nome', $nome);
	$sql->bindValue(':email', $email);
	$sql->execute();


	header("Location: index.php");
	exit;
}else{
	//	header("Location: index.php");
//	exit;
}