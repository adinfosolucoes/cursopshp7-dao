<?php

	require_once("config.php");

	$root = new usuario();

	$root->loadById(1);


	echo $root;

?>