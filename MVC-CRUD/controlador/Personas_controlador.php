<?php

	//Llamada al modelo
	require_once("/modelo/Personas_modelo.php");
	
	$persona=new Personas_modelo();

	$matrizPersonas=$persona->get_personas();

	//Llamada a la vista
	require_once("/vista/Personas_view.php");
?>