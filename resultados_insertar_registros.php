<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
		$c_art = $_GET["c_art"];
		$secc = $_GET["secc"];
		$n_art = $_GET["n_art"];
		$pre = $_GET["pre"];
		$fec = $_GET["fec"];
		$imp = $_GET["imp"];
		$p_ori = $_GET["p_ori"];

		require ("datos_conexion.php");
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BBDD";
			exit();
		}
	
		mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
		mysqli_set_charset($conexion,"utf8");
	
		$sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?,?)";
	
		$resultado=mysqli_prepare($conexion, $sql);	
	
		$ok=mysqli_stmt_bind_param($resultado, "sssssss", $c_art, $secc, $n_art, $pre, $fec, $imp, $p_ori);
	
		$ok=mysqli_stmt_execute($resultado);
	
		if($ok==false){
			echo "Error al ejecutar la consulta";
		}else{
			
			echo "Agregado nuevo registro";
			
			mysqli_stmt_close($resultado);
		}
	
	?>
	
</body>
</html>