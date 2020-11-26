<?php
	// Conectar con el servidor y la base de datos
	$conectar=@mysqli_connect('localhost','root','');
	if(!$conectar)
		echo "No se pudo establecer conexion con el servidor";
	else
	{
		$base=mysqli_select_db($conectar,'incaza');
		if(!$base)
			echo "No se pudo encontrar la base de datos";
	}

	$fecha= $_POST['fecha'];
	$cantidad= $_POST['cantidad'];
	$valor= $_POST['valor'];
	$nit= $_POST['nit'];
	
	$sql= "INSERT INTO proveedores(nombre, documento, telefono) VALUES('$nombre', '$documento', '$telefono')";
	$ejecutar=mysqli_query($conectar,$sql);
	if(!$ejecutar)
	{
		echo "Se ha producido un error";
	}
	else
	{
		echo "Datos Guardados Correctamente <br> <a href= 'index.html'> Volver </a>";
	}
?>