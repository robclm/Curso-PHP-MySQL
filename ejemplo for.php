<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	for($i=0;$i<=10;$i++){
		echo "9 x $i = " . 9*$i . "<br>";
		/*
		echo "<p> Hemos entrado en el bucle </p>";
		if($i==6){
			echo "<p>Bucle interrumpido</p>";
			
			break;
		}
		*/
	}
	
	echo "Hemos salido del bucle <br>";
		
	for($x=10;$x>=-10;$x--){
		if($x==0){
			echo "División por 0 no es posible <br>";
			
			continue;
		}
		echo "9 / $x = " . 9/$x . "<br>";
	}
?>
	
</body>
</html>