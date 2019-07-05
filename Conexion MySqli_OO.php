<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	$conexion = new mysqli("localhost", "root" , "", "pruebas");
	
	if($conexion->connect_errno){
		echo "Falló la conexión " . $conexion->connect_errno;
	}
	
	$conexion->set_charset("utf8");
	$sql="SELECT * FROM PRODUCTOS";
	
	$resultados=$conexion->query($sql);
	
	if($conexion->errno){
		die($conexion->error);
	}
	
	while($fila=$resultados->fetch_assoc()){
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
	
	$conexion->close();
?>	

</body>
</html>