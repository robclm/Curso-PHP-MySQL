<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	$busqueda_cart= $_POST["c_art"];
	
	try{
	
		$base=new PDO('mysql:host=localhost; dbname=pruebas','root','');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");
		
		$sql="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO=:c_art";
		
		$resultado=$base->prepare($sql);//objeto pdo statement
		
		$resultado->execute(array(":c_art"=>$busqueda_cart));
		
		echo "Registro eliminado";
		
		$resultado->closeCursor();
		
	}catch(Exception $e){
		
		//die('Error: ' . $e->GetMessage());	
		echo "Línea del error: " . $e->getLine();
		
	}/*finally{
		
		$base=null;
	
	}*/
?>
	
</body>
</html>