<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	$busqueda=$_GET["buscar"];
	
	require("datos_conexion.php");
	
	/*Procedimientos*/
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($conexion, "utf8");
		
	//$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";//para que funcione como un buscador
	
	$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO = '$busqueda'";
	
	echo "$consulta <br><br>";
	
	$resultados=mysqli_query($conexion, $consulta);
	
	while(($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC))==true){
		echo "<table><tr><td>";
		echo $fila['CÓDIGOARTÍCULO'] . "</td><td> ";
		echo $fila['NOMBREARTÍCULO'] . "</td><td> ";
		echo $fila['SECCIÓN'] . "</td><td> ";
		echo $fila['IMPORTADO'] . "</td><td> ";
		echo $fila['PRECIO'] . "</td><td> ";
		echo $fila['PAÍSDEORIGEN'] . "</td><td></tr></table>";
		
		echo "<br>";				
		echo "<br>";

	}	
	
	mysqli_close($conexion);
?>	
	
</body>
</html>