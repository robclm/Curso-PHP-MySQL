<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	$busqueda_sec= $_POST["seccion"];
	$busqueda_porig= $_POST["p_orig"];

	
	try{
	
		$base=new PDO('mysql:host=localhost; dbname=pruebas','root','');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");
		
		$sql="SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = :SECC AND PAÍSDEORIGEN= :PORIG";
		
		$resultado=$base->prepare($sql);//objeto pdo statement
		
		$resultado->execute(array(":SECC"=>$busqueda_sec,":PORIG"=>$busqueda_porig));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			echo "Nombre Artículo: " . $registro['NOMBREARTÍCULO'] . " Sección: " . $registro['SECCIÓN'] . " Precio: " . $registro['PRECIO'] . " País de Origen: " . $registro['PAÍSDEORIGEN'] . "<br>";
		}
		
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