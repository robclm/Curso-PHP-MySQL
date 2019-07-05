<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	include_once("../modelo/Objeto_Blog.php");
	include_once("../modelo/Manejo_Objetos.php");
	
	try{
	
		$miconexion=new PDO('mysql:host=localhost; dbname=bbddBlog', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		if($_FILES['imagen']['error']){

			switch($_FILES['imagen']['error']){
				case 1: //Error exceso de tamaño de archivo en php.ini
					echo "El tamaño del archivo excede lo permitido por el servidor";
					break;

				case 2:	//Error tamaño archivo marcado desde formulario
					echo "El tamaño del archivo excede 2 MB";
					break;

				case 3:	//Corrupción de archivo se interrumpió;
					echo "El envío de archivo se interrumpió";
					break;

				case 4:	//No hay fichero
					echo "No se ha enviado ningún archivo";
					break;

			}
		}else{

			echo "No hay error en la transferencia del archivo. <br/>";

			if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))){
				$destino_de_ruta='../imagenes/';

				move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);

				echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imágenes";

			}else{
				echo "El archivo no se ha podido copiar al directorio de imágenes";
			}
		}
		
		$Manejo_Objetos=new Manejo_Objetos($miconexion);
		
		$blog=new Objeto_Blog();
		$blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
		$blog->setFecha(Date("Y-m-d H:i:s"));
		$blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
		$blog->setImagen($_FILES["imagen"]["name"]);
		
		$Manejo_Objetos->insertaContenido($blog);
		
		echo "<br/> Entrada de blog agregada con éxito <br/>";
		
	}catch(Exception $e){
		die("Error:" . $e->getMessage());
	}
	
?>		
	
</body>
</html>