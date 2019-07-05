<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	include("conexion.php");
	
	$Id=$_GET["Id"];
	
	$base->query("DELETE FROM DATOS_USUARIOS WHERE ID='$Id'");
	header("Location:index.php");
	
?>	
	
</body>
</html>