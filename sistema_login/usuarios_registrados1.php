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
	echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
?>	
	
<p><a href="cierre.php">Cierra Sesión</a></p>
	
<p>Esto es información solo para usuarios registrados</p>
<table width="489" height="187" border="1">
	<tr>
		<td colspan="3" align="center">Zona usuarios registrados</td>
	</tr>
	<tr>
		<td><a href="usuarios_registrados2.php">Página 1</a></td>
		<td><a href="usuarios_registrados3.php">Página 2</a></td>
		<td><a href="usuarios_registrados4.php">Página 3</a></td>
	</tr>
</table>
	
</body>
</html>