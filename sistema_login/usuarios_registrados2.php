<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	session_start();
	
	if(!isset($_SESSION["usuario"])){
		
		header("Location:login.php");
	}
	
?>	
	
<h1>Bienvenidos Usuarios</h1>

<?php
	echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";
?>	
	
<p><a href="cierre.php">Cierra Sesión</a></p>	
	
<p>Esto es información solo para usuarios registrados</p>
	
<p><a href="usuarios_registrados1.php">Volver</a></p>

</body>
</html>