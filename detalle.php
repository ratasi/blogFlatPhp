<?php
//index.php
//escrito por Rafa Tárrega

	require_once 'modelo.php';
	$entrada = devolver_entrada_id($_GET['id']);
		require 'vistas/show.php';
?>