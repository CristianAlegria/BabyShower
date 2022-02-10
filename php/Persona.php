<?php
    include('conexion.php');
	class Persona{
					
			//Atributos de la clase
			var $cedula;
			var $nombre_completo;
			var $telefono;

		    function Persona(){}	

			public function getCedula(){
			        return $this->cedula;
			}
			 
			public function getNombre_completo(){
			        return $this->nombre_completo;
			 }

			public function getTelefono(){
			        return $this->telefono;
			 }

			public function setCedula($_cedula){
               $this->cedula = $_cedula;
             }

            public function setNombre_completo($_nombre_completo){
               $this->nombre_completo = $_nombre_completo;
             }

            public function setTelefono($_telefono){
               $this->telefono = $_telefono;
            }            


				
	}

?>				

