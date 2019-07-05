<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	try{
	
		$base=new PDO('mysql:host=localhost; dbname=pruebas','root','');
		
		echo 'Conexión OK';
		
	}catch(Exception $e){
		
		die('Error: ' . $e->getMessage());	
		
	}/*finally{
		
		$base=null;
	
	}*/
?>	
	
</body>
</html>