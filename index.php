<?php

	require_once("config.php");

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

	$usuario->login("Fernanda", "amorekito06");

	echo $usuario;

?>