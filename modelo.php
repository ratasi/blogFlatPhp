<?php
//model.php

function abrir_db()
{
	$enlace= new PDO("mysql:host=localhost;dbname=blog_superheroes",'root');
	return $enlace;
}

function cerrar_db(&$enlace)
{
	$enlace=null;
}

function devolver_entradas()
{
	$enlace=abrir_db();

	$resultado=$enlace->query("SELECT id,descripcion,titulo FROM entradas");

	$entradas = array();

	while($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
		$entradas[]=$fila;
	}

	cerrar_db($enlace);
	return $entradas;
}
function devolver_entrada_id($id){
	$enlace=abrir_db();
	//Devolucion de la informacion
	$consulta="SELECT titulo,descripcion FROM entradas WHERE id=:id;";
	$statemen=$enlace->prepare($consulta);
	$statemen->bindValue(':id',$id,PDO::PARAM_INT);
	$statemen->execute();


	$fila=$statemen->fetch(PDO::FETCH_ASSOC);

	cerrar_db($enlace);

	return $fila;
}

?>