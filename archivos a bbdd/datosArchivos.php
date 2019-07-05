<?php
	// Recibimos los datos del archivo

	$nombre_archivo=$_FILES['archivo']['name'];
	$tipo_archivo=$_FILES['archivo']['type'];
	$tamagno_archivo=$_FILES['archivo']['size'];

	if($tamagno_archivo<=1000000){
		
		
			//Ruta de la carpeta destino en servidor

			$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

			//Movemos el archivo del directorio temporal al directorio escogido

			move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino.$nombre_archivo);

	
	}else{
		echo "El tamaño es demasiado grande";
	}

	require("datos_conexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($conexion, "utf8");

	$archivo_objetivo=fopen($carpeta_destino . $nombre_archivo, "r");
	
	$contenido=fread($archivo_objetivo, $tamagno_archivo);

	$contenido=addslashes($contenido);

	fclose($archivo_objetivo);

	$sql="INSERT INTO ARCHIVOS (Id, Nombre, Tipo, Contenido) VALUES (0, '$nombre_archivo', '$tipo_archivo', '$contenido')";

	$resultado=mysqli_query($conexion, $sql);

	if(mysqli_affected_rows($conexion)>0){
		echo "Se ha insertado el registro con éxito";
	}else{
		echo "No se ha podido insertar el registro";
	}
?>