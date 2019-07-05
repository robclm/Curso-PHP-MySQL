<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	/*$datos=array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);
	
	$datos["País"]="España";
	
	//$datos="Martín";
	
	foreach($datos as $clave=>$valor){
		echo "A $clave le corresponde $valor <br>";
	}
	*/
	/*
	$semana[]="Lunes";
	$semana[]="Martes";
	$semana[]="Miércoles";
	$semana[]="Jueves";

	for($i=0;$i<count($semana);$i++){
		echo $semana[$i] . "<br>";
	}
	
	$semana[]="Viernes";
	
	for($i=0;$i<count($semana);$i++){
		echo $semana[$i] . "<br>";
	}*/
	
	/*
	if(is_array($datos)){
		
		echo "Es un Array";
		
	}else{
		echo "No es un Array";
	}*/
	
	$semana=array("Lunes", "Martes", "Miércoles", "Jueves");
	
	sort($semana);
	
	for($i=0;$i<count($semana);$i++){
		echo $semana[$i] . "<br>";
	}

?>	
	
</body>
</html>