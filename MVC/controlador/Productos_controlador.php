<?php

	//require_once("../modelo/Productos_modelo.php");
	require_once("modelo/Productos_modelo.php");
	
	$producto=new Productos_modelo();

	$matrizProductos=$producto->get_productos();


	require_once("vista/Productos_view.php");
	//require_once("../vista/Productos_view.php");


?>