<?php
	
	require_once("Conectar.php");

	$base=Conectar::conexion();

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
		
		$sql_total="SELECT * FROM DATOS_USUARIOS";
		
		$resultado=$base->prepare($sql_total);
		
		$resultado->execute(array());
		
		$num_filas=$resultado->rowCount();
		
		$total_paginas=$num_filas/$tamagno_paginas;

?>