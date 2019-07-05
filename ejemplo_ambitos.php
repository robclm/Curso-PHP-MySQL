<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	$nombre="Roberto";
	
	function dameNombre(){
		
		global $nombre;
		
		$nombre="El nombre es " . $nombre;
	
	}
	
	dameNombre();
	
	echo $nombre;
?>
</body>
</html>