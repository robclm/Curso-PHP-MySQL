<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php

	//$busqueda=$_GET["buscar"];
	
	$cod=$_GET["c_art"];
	$sec=$_GET["seccion"];
	$nom=$_GET["n_art"];
	$pre=$_GET["precio"];
	$fec=$_GET["fecha"];
	$imp=$_GET["importado"];
	$por=$_GET["p_orig"];

	require("datos_conexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

	mysqli_set_charset($conexion, "utf8");

	$consulta="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='$cod'";

	$resultados=mysqli_query($conexion, $consulta);
	
	if($resultados==false){
		echo "Error en la consulta";
	}else{
		//echo "Registro eliminado<br><br>";
		//echo mysqli_affected_rows($conexion);
		if(mysqli_affected_rows($conexion)==0){
			echo "no hay registros que eliminar con ese criterio";
		}else{
			echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
		}
	}

	mysqli_close($conexion);
?>
	
</body>
</html>