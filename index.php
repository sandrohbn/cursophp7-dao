<?php
	require_once("config.php");
	/*
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);
	*/
	//Usando a classe Usuario
	$root = new Usuario();
	$root->loadbyId(1);
	echo $root;
?>