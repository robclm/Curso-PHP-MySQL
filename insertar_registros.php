<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php

	//$busqueda=$_GET["buscar"];

	require("datos_conexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

	mysqli_set_charset($conexion, "utf8");

	$consulta="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO) VALUES ('AR44','DEPORTES','RAQUETA BADMINTON')";

	$resultados=mysqli_query($conexion, $consulta);


	mysqli_close($conexion);
?>	
	
</body>
</html>