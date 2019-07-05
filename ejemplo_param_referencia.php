<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

//function incrementa(&$valor1){
function incrementa($valor1){
	$valor1++;
	
	return $valor1;
}	
$numero=5;
	
echo incrementa($numero) . "<br>";
	
echo $numero;
	
?>
	
<?php
	
function cambia_mayus(&$param){
	$param=strtolower($param);
	$param=ucwords($param);
	return $param;
}
	
$cadena="hOlA mUnDo";
echo cambia_mayus($cadena) . "<br>";
echo $cadena;
?>	
</body>
</html>