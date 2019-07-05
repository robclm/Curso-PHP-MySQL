<?php
	require "DevuelveProductos.php";

	$pais=$_GET["buscar"];

	$productos=new DevuelveProductos();
	$array_productos=$productos->get_productos($pais);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	
		foreach($array_productos as $elemento){
			
			echo "<table><tr><td>";
			echo $elemento['CÓDIGOARTÍCULO'] . "</td><td>";
			echo $elemento['NOMBREARTÍCULO'] . "</td><td>";
			echo $elemento['SECCIÓN'] . "</td><td>";
			echo $elemento['PRECIO'] . "</td><td>";
			echo $elemento['FECHA'] . "</td><td>";
			echo $elemento['IMPORTADO'] . "</td><td>";
			echo $elemento['PAÍSDEORIGEN'] . "</td><td></tr></table>";
			
			echo "<br>";
			echo "<br>";
		}
	?>
	
</body>
</html>