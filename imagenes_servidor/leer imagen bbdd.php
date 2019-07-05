<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	require("datos_conexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($conexion, "utf8");
	
	$consulta="SELECT FOTO FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='AR01'";
	
	$resultado=mysqli_query($conexion, $consulta);
	
	while($fila=mysqli_fetch_array($resultado)){
		$ruta_img=$fila["FOTO"];
		
	}
	
?>

<div>
	<img src="/intranet/uploads/<?php echo $ruta_img;?>" alt="Imagen del primer artículo" width="25%"/>
</div>
	
</body>
</html>