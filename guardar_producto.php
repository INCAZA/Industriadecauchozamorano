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

	$nombre= $_POST['Nombre'];
	$cantidad= $_POST['Cantidad'];
	$valor= $_POST['Valor'];

	$sql= "INSERT INTO productos(nombre, cantidad, valor) VALUES('$nombre', '$cantidad', '$valor')";
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