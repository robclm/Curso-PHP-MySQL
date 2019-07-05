<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
<style>
	.resaltar{
		color:#F00;
		font-weight:bold;
	}	
</style>
</head>

<body>
	
<?php
	echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>"
?>	
	
<?php
	$nombre="Roberto";
	
	echo "Hola $nombre <br>";
?>	
	
<?php
	$variable1="Casa";
	$variable2="CASA";
	
	$resultado=strcasecmp($variable1,$variable2); //Devuelve 1 si no son iguales. 0 si son iguales
	
	if($resultado){
		echo "No coinciden";
	}else{
		echo "Coinciden";
	}
	
?>	
</body>
</html>