<?php
	require_once("config.php");
	/*
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);
	*/

	//Usando a classe Usuario

	/*Carrega 1 usuario
	$root = new Usuario();
	$root->loadById(1);
	echo $root;
	*/

	/*Carrega uma lista de usuario
	$lista = Usuario::getList();
	echo json_encode($lista);
	*/

	/*carrega uma lista buscando pelo login
	$search = Usuario::search("");
	echo json_encode($search);
	*/

	//Carregar um usuário usando login e senha
	$usuario = new Usuario();
	$usuario->login("login","senha");
	echo $usuario;
?>