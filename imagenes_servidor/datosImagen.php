<?php
	// Recibimos los datos de la imagen

	$nombre_imagen=$_FILES['imagen']['name'];
	$tipo_imagen=$_FILES['imagen']['type'];
	$tamagno_imagen=$_FILES['imagen']['size'];

	echo $_FILES['imagen']['type'];

	if($tamagno_imagen<=1000000){
		
		if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){
		
			//Ruta de la carpeta destino en servidor

			$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

			//Movemos la imagen del directorio temporal al directorio escogido

			move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
		}else{
			echo "Solo se pueden subir imágenes jpg/jpeg/png/gif";
		}
	
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
		
	//$sql="INSERT INTO PRODUCTOS (FOTO) VALUES ('$nombre_imagen')";

	$sql="UPDATE PRODUCTOS SET FOTO='$nombre_imagen' WHERE CÓDIGOARTÍCULO='AR01'";

	$resultados=mysqli_query($conexion, $sql);

?>