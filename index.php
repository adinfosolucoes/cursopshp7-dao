<?php

	require_once("config.php");

	/*

	$root = new usuario();

	$root->loadById(1);


	echo $root;

	echo "<hr/>";


	$lista = Usuario::getList();

	echo json_encode($lista);


	echo "<hr/>";

	$search = Usuario::search("da");
	echo json_encode($search);

	echo "<hr/>";

	$usuario = new usuario();

	$usuario->login("daniel", "123456");

	echo $usuario;

	echo "<hr/>";

	$aluno = new Usuario();

	$aluno->setDeslogin("aluno2");
	$aluno->setDessenha("aluno2020");

	$aluno->insert();

	echo $aluno;

	echo "<hr/>";

	$usuario = new Usuario();
	$usuario->loadById(4);

	$usuario->update("professor", "prof2020");

	*/

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->delete();

echo $usuario;

?>