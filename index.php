<?php
//index.php
//escrito por Rafa Tárrega

if (isset($_GET['id'])) {
	require 'detalle.php';
}else{
	require 'todo.php';
}

?>