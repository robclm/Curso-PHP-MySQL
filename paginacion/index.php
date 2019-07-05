<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	try{
		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");
		
		$tamagno_paginas=3;
		if(isset($_GET["pagina"])){
		
			if($_GET["pagina"]==1){
				
				header("Location:index.php");
			}else{
				$pagina=$_GET["pagina"];
			}
		}else{
			$pagina=1;
		}
		
		
		$empezar_desde=($pagina-1)*$tamagno_paginas;
		
		$sql_total="SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES'";
		
		$resultado=$base->prepare($sql_total);
		
		$resultado->execute(array());
		
		$num_filas=$resultado->rowCount();
		
		$total_paginas=$num_filas/$tamagno_paginas;
		
		echo "Número de registros de la consulta: " . $num_filas . "<br>";
		echo "Mostramos " . $tamagno_paginas . " registros por página <br>";
		echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<br>";
	
		$resultado->closeCursor();
		
		$sql_limite= "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES' LIMIT $empezar_desde, $tamagno_paginas";
		
		$resultado=$base->prepare($sql_limite);
		
		$resultado->execute(array());
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			
			echo "Nombre Artículo: " . $registro["NOMBREARTÍCULO"] . " Sección: " . $registro["SECCIÓN"] . " Precio: " . $registro["PRECIO"] . " País: " . $registro["PAÍSDEORIGEN"] . "<br>";
			
		}
		
	}catch(Exception $e){
		echo "Linea de error: " . $e->getLine();
	}
	
	//-------------------PAGINACIÓN-------------------------//
	
	for($i=1; $i<=$total_paginas; $i++){
		echo "<a href='?pagina=" .$i . "'>" . $i . "</a>  ";
	}
	
	
	
?>
	
</body>
</html>