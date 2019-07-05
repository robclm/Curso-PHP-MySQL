<?php

	class Personas_modelo{
		private $db;
		private $personas;
		
		public function __construct(){
			
			require_once("/modelo/Conectar.php");
			
			$this->db=Conectar::conexion();
			$this->personas=array();
		}
		
		public function get_personas(){
			
			require("paginacion.php");
			
			$consulta=$this->db->query("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde, $tamagno_paginas");
			
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$filas;
			}
			return $this->personas;
		}
	}

?>