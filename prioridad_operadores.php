<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	$var1=true;
	
	$var2=false;
	
	$resultado=$var1 && $var2; //resultado=false
	
	if($resultado==true){
		echo "Correcto";
	}else{
		echo "Incorrecto";
	}
?>	
</body>
</html>