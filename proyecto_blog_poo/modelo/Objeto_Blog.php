<?php

	class Objeto_Blog{
		
		//Propiedades del objeto blog
		private $id;
		private $Titulo;
		private $Fecha;
		private $Comentario;
		private $Imagen;
		
		
		//Métodos de acceso getters y setters
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		
		public function getTitulo(){
			return $this->Titulo;
		}
		
		public function setTitulo($Titulo){
			$this->Titulo=$Titulo;
		}
		
		public function getComentario(){
			return $this->Comentario;
		}
		
		public function setComentario($Comentario){
			$this->Comentario=$Comentario;
		}
		
		public function getFecha(){
			return $this->Fecha;
		}
		
		public function setFecha($Fecha){
			$this->Fecha=$Fecha;
		}
		
		public function getImagen(){
			return $this->Imagen;
		}
		
		public function setImagen($Imagen){
			$this->Imagen=$Imagen;
		}
		
	}

?>