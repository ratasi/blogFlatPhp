<?php
//index.php
//escrito por Rafa Tárrega
error_reporting(0);
if ($_GET['id']==true) {
	require 'detalle.php';
}else{
	require 'todo.php';
}

?>