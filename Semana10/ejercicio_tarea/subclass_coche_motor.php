<?php
    require_once ("interface_clase_subclase.php");

    class Coche extends Vehiculo{
        private $anchura;
        private $altura;

        function __construct($matricula, $marca, $modelo){
            parent::__construct($matricula, $marca, $modelo);
        }

        public function tipo(){
            echo "<h2>COCHE</h2>";
        }

        public function setAnchura($anchura){
            $this -> anchura = $anchura;
        }

        public function getAnchura(){
            return $this -> anchura;
        }

        public function setAltura($altura){
            $this -> altura = $altura;
        }

        public function getAltura(){
           return $this -> altura;
        }
    }

    class Motor extends Vehiculo{
        private $limitador;


        function __construct($matricula, $marca, $modelo){
            parent::__construct($matricula, $marca, $modelo);
        }

        public function tipo(){
            echo "<h2>MOTOR</h2>";
        }

        public function setLimitador($limitador){
            $this -> limitador = $limitador;
        }

        public function getLimitador(){
            return $this -> limitador;
        }
    }
?>