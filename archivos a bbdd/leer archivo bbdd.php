<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	$Id="";
	
	$contenido="";
	
	$tipo="";
	
	require("datos_conexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($conexion, "utf8");
	
	$consulta="SELECT * FROM ARCHIVOS WHERE ID=39";
	
	$resultado=mysqli_query($conexion, $consulta);
	
	while($fila=mysqli_fetch_array($resultado)){
		$Id=$fila["Id"];
		$contenido=$fila["Contenido"];
		$tipo=$fila["Tipo"];
	}
	
	echo "Id: " . $Id . "<br>";
	echo "Tipo: " . $tipo . "<br>";
	echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>";
	
?>

<div>
	
</div>
	
</body>
</html>