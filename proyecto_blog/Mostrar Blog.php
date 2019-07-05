<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<h2>Blog</h2>	
<hr/>
	
<?php
	$miconexion=mysqli_connect("localhost","root","","bbddBlog");
	
	/*Comprobar conexión*/
	
	if(!$miconexion){
		echo "La conexión ha fallado: " . mysqli_error();
		exit();
	}
	
	$miconsulta="SELECT * FROM CONTENIDO ORDER BY FECHA DESC";
	
	if($resultado=mysqli_query($miconexion, $miconsulta)){
		while($registro=mysqli_fetch_assoc($resultado)){
			echo "<h3>" . $registro['Titulo'] . "</h3>";
			echo "<h4>" . $registro['Fecha'] . "</h4>";
			echo "<div style='width:400px'>" . $registro['Comentario'] . "</div><br/><br/>";
			
			if($registro['Imagen']!=""){
				echo "<img src='imagenes/" . $registro['Imagen'] . "' width='300px' />"; 
			}
			echo "<hr/>";
		}
	}
	
?>	
</body>
</html>