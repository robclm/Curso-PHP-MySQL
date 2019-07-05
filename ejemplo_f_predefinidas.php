<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	function frase_mayus($frase,$conversion=true){
		$frase=strtolower($frase);
		
		if($conversion==true){
			$resultado=ucwords($frase);//mayuscula primera letra de cada palabra
		}else{
			$resultado=strtoupper($frase);//toda la frase a mayúsculas
		}
		return $resultado;
	}
	
	echo(frase_mayus("esto es una prueba"));
	
	/*$palabra="JUAN";
	$palabra2="roberto";
	echo (strtolower($palabra));
	echo (strtoupper($palabra2));
	*/
	/*function suma($num1, $num2){
		$resultado=$num1+$num2;
		
		return $resultado;
	}
	
	echo (suma(5,7));
	*/
?>
	
</body>
</html>