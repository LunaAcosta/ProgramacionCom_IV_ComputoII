<?php
      // creamos nuestra clase Mascota 
      class Mascota{
        // definimos sus propiedades 
        private $nombre;
        private $edad;
        private $raza;
        private $codigo;
        protected $fechaDeRegistro;
        static $estado = "Activo";

        // declarmos nuestro constructor

        function __construct($nombre, $edad, $raza){
          $this -> nombre = $nombre;
          $this -> edad = $edad;
          $this -> raza = $raza;
          $this -> codigo = rand();
          $this -> fechaDeRegistro = date('Y-m-d H:m:s');
        }

        // creamos la funcion para accerder a las propiedades 

        public function getNombre(){
          return $this -> nombre;
        }

        public function getEdad(){
          return $this -> edad;
        }

        public function getRaza(){
          return $this -> raza;
        }

        // funcione para mostra nuestro datos registrados 

        public function getRegistro(){
          echo "<h3> DATOS GENERALES </h3>";
          echo "<b>Nombre:  </b>".$this -> nombre. "<br/>";
          echo "<b>Edad:  </b>".$this -> edad ."<br/>";
          echo "<b>Raza:  </b>" .$this -> raza ."<br/>";
          echo "<b>Codigo:  </b>" .$this -> codigo ."<br/>";
          echo "<b>Fecha Registro:  </b>".$this -> fechaDeRegistro ."<br/>";
          echo "<b>Estado:  </b>" .self::$estado ."<br/>"; 
          
        }
      }

      $mascota = new Mascota("Rocky Troya", 4, "Bloodhound");
      echo $mascota -> getRegistro();


?>