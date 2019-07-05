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
	
		$usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);
		$contra = mysqli_real_escape_string($conexion, $_GET["con"]);
	
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BBDD";
			exit();
		}

		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

		mysqli_set_charset($conexion, "utf8");

		$consulta="DELETE FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA='$contra'";

		echo "$consulta<br><br>";

		mysqli_query($conexion,$consulta);
		if(mysqli_affected_rows($conexion)>0){
			echo "Baja procesada";
		}else{
			echo "No se ha encontrado usuario";
		}
		
		/*if(mysqli_query($conexion, $consulta)){
			echo "Baja procesada";
		}*/


		mysqli_close($conexion);
	?>	

</body>
</html>