<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php

		$usuario=$_GET["usu"];
		$contra=$_GET["con"];

		require("datos_conexion.php");
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BBDD";
			exit();
		}

		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

		mysqli_set_charset($conexion, "utf8");

		$consulta="SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA='$contra'";

		echo "$consulta <br><br>";

		$resultados=mysqli_query($conexion, $consulta);

		while(($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC))==true){
			echo "Bienvenido $usuario <br> Estos son tus datos: <br>";
			
			echo "<table><tr><td>";
			
			echo $fila['usuario'] . "</td><td> ";
			echo $fila['contra'] . "</td><td> ";
			echo $fila['tfno'] . "</td><td> ";
			echo $fila['direccion'] . "</td><td></tr></table>";

			echo "<br>";				
			echo "<br>";
		}	

		mysqli_close($conexion);
	?>	

</body>
</html>