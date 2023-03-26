<?php
      // requerimos nuestro archivo donde tenemos nuestras clases padres 
      require_once ("interface_clase_subclase.php");

      // creamos nuestra subclase Propietario  heredada de nuestra clase Persona
      class Propietario extends Persona{

        protected $direccion;
  
        function __construct($dni, $nombre, $edad){
           parent::__construct($dni, $nombre, $edad); 
        }
  
        public function tipo(){
           echo "<h2>PROPIETARIO</h2>";
        }
  
        public function setDireccion($direccion){
           $this -> direccion = $direccion;
        }
  
        public function getDireccion(){
           return $this -> direccion;
        }
  
      }

      // creamos nuestra subclase  Cliente   heredada de nuestra clase Persona
      class Cliente extends Persona{

        private $telefono;
        private $vehiculo;


        function __construct($dni, $nombre, $edad){
            parent::__construct($dni, $nombre, $edad);
        }

        public function tipo(){
            echo "<h2>CLIENTE</h2>";
         }

        public function setTelefono($telefono){
            $this -> telefono = $telefono;
        }

        public function getTelefono(){
            return $this -> telefono;
        }

        public function setVehiculo($vehiculo){
            $this -> vehiculo = $vehiculo;
        }

        public function getVehiculo(){
            return $this -> vehiculo;
        }
      }
  
?>