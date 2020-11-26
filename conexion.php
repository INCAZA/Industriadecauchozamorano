<?php
$servidor="mysqli:dbname="BD";host="SERVIDOR";

try{

	$pdo= new PDO($servidor,USUARIO,PASSWORD,
		        array(PDO::MYSQLI_ATTR_INIT_COMMAND=>"SET NAMES utf8")
            );
	echo "<script>alert('conectado...')</script>";

}catch(PDOException $e){

	echo "<script>alert('Error...')</script>";
}


?>